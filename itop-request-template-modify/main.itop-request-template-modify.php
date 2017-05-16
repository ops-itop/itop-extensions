<?php
// Copyright (C) 2016 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

/**
 * Modify itop-request-template.
 * Add OnCheckToWrite on name or friendlyname.
 */

class RequestTemplatePlugInModify extends RequestTemplatePlugIn
{
	public function OnCheckToWrite($oObject)
	{
		if(!array_key_exists("service_details", MetaModel::ListAttributeDefs(get_class($oObject))))
		{
			return(parent::OnCheckToWrite($oObject));
		}
		$service_details = $oObject->Get('service_details')->GetValues();
		$template_id = $service_details['template_id'];
		$user_data = $service_details['user_data'];
		
		$template = MetaModel::GetObject("RequestTemplate", $template_id);
		$errmsg = array();
		$check = $this->CheckUniqFields($template, $user_data);
		if($check['check_errno'] != 0)
		{
			$errmsg[] = $check['msg'];
		}
		return($errmsg);
	}
	
	/**
	 * CI唯一性验证
	 * @param $template The template this UserRequest linked
	 * @param $value service_details['user_data'] of this UserRequest
	 * @return array("check_errno"=>(0|100), "msg"=>errmsg)
	 */
	public function CheckUniqFields($template, $value)
	{
		$classname = $template->Get('relatedclass');
		
		$ret = array("check_errno"=>0, "msg"=>"");
		//服务器申请不做校验
		if($classname == "Server")
		{
			return($ret);
		}
		// 部分类使用friendlyname作为唯一性校验
		// 模块设置 "checkuniq_with_friendlyname" => array(Classname1,Classname2);
		$namespec = MetaModel::GetNameSpec($classname)[1];
		$condition = array();
		$search_arr = array();
		$friendlyname = array();
		foreach($namespec as $k => $v)
		{
			if(isset($value[$v])){
				array_push($condition, "$v=:$v");
				array_push($friendlyname, $value[$v]);
				$search_arr[$v] = $value[$v];
			}
		}
		$condition_str = implode(" AND ", $condition);
		$friendlyname = implode(".", $friendlyname);
		$oql_pre = "SELECT " . $classname;
		$check_friendly = MetaModel::GetModuleSetting("itop-request-template-modify", "checkuniq_with_friendlyname", array());
		if(in_array($classname, $check_friendly)) 
		{
			$oql = $oql_pre . " WHERE $condition_str";
		}else
		{
			$oql = $oql_pre . " WHERE name=:name";
			$search_arr = array('name' => $value['name']);
		}
		$oSearch = DBObjectSearch::FromOQL_AllData($oql);
		$oSet = new DBObjectSet($oSearch, array(), $search_arr);
		
		if ($oSet->Count() > 0)
		{   
			$ret = array("check_errno"=>100, "msg"=>"$classname: $friendlyname " . Dict::S("UI:CheckUniqFields:Failed"));
		}
		return($ret);
	}	
}

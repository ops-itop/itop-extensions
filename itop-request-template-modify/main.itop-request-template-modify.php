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
		// 只有新建工单才检查，否则其他人无法编辑公共日志
		if(!$oObject->IsNew())
		{
			return(parent::OnCheckToWrite($oObject));
		}
		if(!array_key_exists("service_details", MetaModel::ListAttributeDefs(get_class($oObject))))
		{
			return(parent::OnCheckToWrite($oObject));
		}
		$service_details = $oObject->Get('service_details')->GetValues();
		$template_id = $service_details['template_id'];
		$user_data = $service_details['user_data'];
		
		// 没有模板的服务不检查
		if(!$template_id)
		{
			return(parent::OnCheckToWrite($oObject));
		}
		$template = MetaModel::GetObject("RequestTemplate", $template_id);
		$errmsg = array();
		
		if($template->Get('type') == "new")
		{
			$check = $this->CheckUniqFields($template, $user_data);
		}elseif($template->Get('type') == "change")
		{
			$check = $this->CheckOwner($template, $user_data);
		}else
		{
			return($errmsg);
		}
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
		//服务器申请不做校验 只有新增类的工单校验唯一性
		if($classname == "Server" || $template->Get('type')!="new")
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

	/**
	 * 变更工单CI归属验证
	 */
	public function CheckOwner($template, $value)
	{
		$classname = $template->Get('relatedclass');
		$ret = array("check_errno" => 0, "msg" => "");
		// 只有变更工单验证归属
		if($template->Get('type')!= "change")
		{
			return($ret);
		}
		$iTopAPI = new iTopClient();
		$query = $value['name'];   // $value值是key(id)，不是name
		$name = MetaModel::GetObject($classname, $query)->Get('friendlyname');
		$default_depth = array("Domain" => "2", "ApplicationSolution" => "1", "Server" => "3", "PhysicalIP" => "4");
		$depth = MetaModel::GetModuleSetting('itop-request-template-modify', 'depth', $default_depth);
		if(!isset($depth[$classname]))
		{
			$depth[$classname] = "2";
		}
		$optional = array(
			'output_fields' => array("Person" => "friendlyname,email,phone"),
			'depth' => $depth[$classname],
		);
		$data = $iTopAPI->extRelated($classname, $query, "impacts", $optional);
		$data = json_decode($data, true);
		if($data['code'] != 0)
		{
			$ret = array("check_errno"=>100, "msg"=>Dict::S("UI:CheckOwner:APIError") . ": " . $data['message']);
			return($ret);
		}
		$persons = $data['objects'];
		if($persons == null)
		{
			$persons = array();
		}
		$p_id = array();
		foreach($persons as $person)
		{
			array_push($p_id, $person['key']);
		}
		$myContactId = UserRights::GetContactId();
		if(!in_array($myContactId, $p_id))
		{
			$ret = array("check_errno"=>100, "msg"=>"$classname: $name " . Dict::S("UI:CheckOwner:Failed"));
		}
		return($ret);
	}	
}

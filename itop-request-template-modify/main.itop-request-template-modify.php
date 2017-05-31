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
		$check = array();
		if(array_key_exists("request_template_ip_textarea", $user_data))
		{
			// 约定涉及IP的工单模板中IP列表code为 request_template_ip_textarea, 当存在此code时，检查IP是否在CMDB中管理
			$user_ips = $user_data['request_template_ip_textarea'];
			$check[] = $this->CheckIP($oObject, $user_ips);
			$service_details['user_data']['request_template_ip_textarea'] = $user_ips;
			$oObject->Set("service_details", $service_details);
		}
		if($template->Get('type') == "new")
		{
			$check[] = $this->CheckUniqFields($template, $user_data);
		}elseif($template->Get('type') == "change")
		{
			$check[] = $this->CheckOwner($template, $user_data);
		}elseif($template->Get('type') == "incident")
		{
			if(!array_key_exists("functionalcis_list", $user_data))
			{
				$check[] = array("check_errno"=>100, "msg"=>Dict::S("UI:IncidentTemplate:CodeError"));
			}else{
				$appId = $user_data['functionalcis_list'];
				$this->IncidentFunctionalCIs($oObject, $appId);
			}
		}else
		{
			return($errmsg);
		}
		foreach($check as $k => $v)
		{
			if($v['check_errno'] != 0)
			{
				$errmsg[] = $v['msg'];
			}
		}
		return($errmsg);
	}
	
	/**
	 * 事件管理工单，写入functionalcis_list
	 * @param $oObject 工单
	 */
	public function IncidentFunctionalCIs($oObject, $appId) 
	{
		$functionalcis_list = $oObject->Get('functionalcis_list');
		$oSet = array();
		$lnk = MetaModel::NewObject('lnkFunctionalCIToTicket');
		$lnk->Set("functionalci_id", $appId);
		$lnk->Set("ticket_id", $oObject->GetKey());
		$oSet[] = $lnk;
		
		$functionalcis_list->AddObjectArray($oSet);
		
		$oObject->Set("functionalcis_list", $functionalcis_list);
	}
	 
	/**
	 * IP存在性验证, 并添加至server_list(action中统一从server_list取服务器)
	 * 另外，为了使用影响分析，还应将server_list复制一份到functionalcis_list
	 * server_list中勾选的机器最后应该写入service_details，这样对处理工单的人更方便
	 * @param $ips 用户提交的IP
	 * @return array("check_errno"=>(0|100), "msg"=>errmsg)
	 */
	public function CheckIP($oObject, &$user_ips)
	{
		$ips = preg_replace('/\s+|,/', '\n', $user_ips);
		$ips = explode("\\n", $ips);
		$ip_arr = array();
		foreach($ips as $k => $v)
		{
			$ip = trim($v);
			if($ip)
			{
				$ip_arr[] = $ip;
			}
		}
		$ret = array("check_errno"=>0, "msg"=>"");
		
		$iTopAPI = new iTopClient();
		$ips = implode("','", $ip_arr);
		$query_server = "SELECT Server AS s JOIN PhysicalIP AS ip ON ip.connectableci_id=s.id WHERE ip.ipaddress IN ('" . $ips . "')";
		$servers = $iTopAPI->coreGet("Server", $query_server, "ip_list,contacts_list,friendlyname");
		
		$servers = json_decode($servers, true);
		$not_exists_ips = $ips;

		$server_list = $oObject->Get('server_list');
		$oSet = array();
		$new_user_ips = array();
		if(array_key_exists("objects", $servers) && $servers['objects'])
		{
			$iplists = array();
			foreach($servers['objects'] as $k => $v)
			{
				$lnk = MetaModel::NewObject('lnkServerToTicket');
				$lnk->Set("server_id", $v['key']);
				$lnk->Set("ticket_id", $oObject->GetKey());
				$oSet[] = $lnk;
				foreach($v['fields']['ip_list'] as $key => $value)
				{
					array_push($iplists, $value['ipaddress']);
				}
			}
			$server_list->AddObjectArray($oSet);
			$oObject->Set("server_list", $server_list);

			$oSetFunc = array();
			foreach($server_list->ToArrayOfValues() as $k => $v)
			{
				$lnk = MetaModel::NewObject('lnkFunctionalCIToTicket');
				$lnk->Set("functionalci_id", $v['lnkServerToTicket.server_id']);
				$lnk->Set("ticket_id", $oObject->GetKey());
				$oSetFunc[] = $lnk;
				$new_user_ips[] = $v['lnkServerToTicket.server_hostname'];
			}
			$functionalcis_list = $oObject->Get("functionalcis_list");
			$functionalcis_list->AddObjectArray($oSetFunc);
			$oObject->Set("functionalcis_list", $functionalcis_list);

			$failed_ips = array();
			
			foreach($ip_arr as $k => $v)
			{
				if(!in_array($v, $iplists))
				{
					array_push($failed_ips, $v);
				}
			}
			if($failed_ips)
			{
				$not_exists_ips = implode(",", $failed_ips);
				$ret = array("check_errno"=>100, "msg"=>Dict::Format("UI:CheckIP:Failed", $not_exists_ips));
			}
		}
		$user_ips = implode("\n", $new_user_ips);
		return($ret);
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

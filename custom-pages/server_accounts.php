<?php
// Copyright (C) 2010-2016 Combodo SARL
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
 * 服务器账号管理
 * @annhe.net
 */

require_once('../../approot.inc.php');
require_once(APPROOT.'/application/application.inc.php');
require_once(APPROOT.'/application/itopwebpage.class.inc.php');

require_once(APPROOT.'/application/startup.inc.php');
require_once(APPROOT.'/application/loginwebpage.class.inc.php');
LoginWebPage::DoLogin(false); // false，不需要管理员权限

$oAppContext = new ApplicationContext();
$oP = new iTopWebPage(Dict::S('UI:ServerAccount:Title'));
$appRoot = utils::GetAbsoluteUrlAppRoot();
$oP->set_base($appRoot.'pages/');
$oP->SetBreadCrumbEntry('ui-tool-account', Dict::S('Menu:ServerAccountMenu'), Dict::S('Menu:ServerAccountMenu+'), '', utils::GetAbsoluteUrlAppRoot().'images/wrench.png');
$oP->add_dict_entry('UI:ValueMustBeSet');
$oP->add_dict_entry('UI:ValueInvalidFormat');

$current_user = UserRights::GetUserId();
$current_person = UserRights::GetContactId();

$helpLink = MetaModel::GetModuleSetting('custom-pages', 'helplink', "itop-help");

$oP->add("<h1>" . Dict::Format('UI:ServerAccount:Title') . "</h1><hr/>");
$oP->add("<p><a href=\"$helpLink\" _target=\"_blank\">" . Dict::Format('UI:ServerAccount:Help') . "</a></p>");
$ip_list = utils::ReadParam('ip_list', '', false, 'raw_data');
$reason = utils::ReadParam('request_reason','',false, 'raw_data');

$rootUrl = $appRoot.'env-production/custom-pages/server_accounts.php';
$succeedUrl = $appRoot . 'env-production/custom-pages/succeed.php';

accountsRequest($oP, $ip_list, $reason);

function accountsRequest(&$oP, $ip_list, $reason)
{
	global $rootUrl;
	$ip_regexp = MetaModel::GetModuleSetting('custom-pages', 'ip_regexp', '^\\\s*(([0-9]{1,3}\\.){3}[0-9]{1,3}[\\\n,\\\s]*)*\\\s*([0-9]{1,3}\\.){3}[0-9]{1,3}[\\\n,\\\s]*$');	

	$oP->add_ready_script("$('#1_request_reason').bind('validate keyup change', function(evt,sFormId){return ValidateField('1_request_reason','',true,sFormId,'',undefined)});");
	$oP->add_ready_script("$('#1_ip_list').bind('validate keyup change', function(evt,sFormId){return ValidateField('1_ip_list','$ip_regexp',true,sFormId,'',undefined)});");	
	$oP->add_ready_script('$("#LnkCollapse_1").click(function() {$("#Collapse_1").slideToggle(\'normal\'); $("#LnkCollapse_1").toggleClass(\'open\');});');
	
	$oP->add('<h2><a id="LnkCollapse_1" class="CollapsibleLabel" style="font-size: 14px;">申请登录权限</a></h2><br><div id="Collapse_1" style="display:none"><form method="post" id="form_1" onsubmit="return OnSubmit(\'form_1\');">');
	$oP->add('<label>申请原因：</label><span id="field_1_request_reason"><div><input type="text" name="request_reason" id="1_request_reason" value="' . $reason . '"><span class="form_validation" id="v_1_request_reason"></span><span class="field_status" id="fstatus_1_request_reason"></span></div></span><br>' );
	$oP->add('<label>申请IP列表(每行一个或逗号分隔)：</label><br><span id="field_1_ip_list"><div><textarea cols="100" rows="8" id="1_ip_list" name="ip_list">'.htmlentities($ip_list, ENT_QUOTES, "UTF-8").'</textarea><span class="form_validation" id="v_1_ip_list"></span><span class="field_status" id="fstatus_1_ip_list"></span></div></span><br><label>申请账号类型：</label>');
	$oP->add_select(array("tmp"=>"临时", "permanent"=>"永久"), "select_account_type", "tmp", "120");
	$oP->add_select(array("nosudo"=>"不需要Sudo", "sudo"=>"需要Sudo"), "select_sudo_type", "nosudo", "120");
	$oP->add("<br><br><input type=\"submit\" name=\"submit\" value=\"Submit\">\n");
	$oP->add("</form></div>");
}

function createTicket(&$oP)
{
	global $succeedUrl;
	
	if(!$_POST)
	{
		return(false);
	}
	
	$ips = $_POST['ip_list'];
	//$request_reason = $_POST['request_reason'];
	//$account_type = $_POST['select_account_type'];
	//$sudo_type = $_POST['select_sudo_type'];
	
	$ips = preg_replace('/\s+|,/', '\n' , $ips);
	$ips = explode("\\n", $ips);
	$ip_arr = array();
	foreach ($ips as $k => $v)
	{
		$ip = trim($v);
		if($ip)
		{
			$ip_arr[] = $ip;
		}
	}
	
	$iTopAPI = new iTopClient();
	$ips = implode("','", $ip_arr);
	$query_server = "SELECT Server AS s JOIN PhysicalIP AS ip ON ip.connectableci_id=s.id WHERE ip.ipaddress IN ('" . $ips . "')";
	$servers = $iTopAPI->coreGet("Server", $query_server, "ip_list,contacts_list,friendlyname");

	// 判断用户提交的ip是否有不在cmdb管理的ip
	$servers = json_decode($servers, true);
	$not_exists_ips = $ips;
	if(array_key_exists("objects", $servers) && $servers['objects'])
	{
		$iplists = array();
		foreach($servers['objects'] as $k => $v)
		{
			foreach($v['fields']['ip_list'] as $key => $value)
			{
				array_push($iplists, $value['ipaddress']);
			}
		}
		
		$failed_ips = array();
		
		foreach($ip_arr as $k => $v)
		{
			if(!in_array($v, $iplists))
			{
				array_push($failed_ips, $v);
			}
		}
		
		if(!$failed_ips)
		{
			$ticket = DocreateTicket($servers);
			$sTicket = json_encode($ticket);
			header('location:' . $succeedUrl . "?msg=" . $sTicket);
			//$oP->add_ready_script("alert(\"$sTicket\");");
			return(true);
		} else {
			$not_exists_ips = implode(",", $failed_ips);
		}
	}
	
	$oP->add_ready_script("alert(\"以下IP：$not_exists_ips 未找到，请确认IP是否正确或联系运维\");");
	return(false);
	//$iTopAPI->coreCreate('UserRequest', $request);
}

function DocreateTicket($servers)
{
	// 按照服务器联系人分组，分别建立工单
	$group_pre = array();
	$group = array();
	$all_server = array();  // 用户申请的所有服务器
	foreach($servers['objects'] as $k => $v)
	{
		$gKey = array();
		foreach($v['fields']['contacts_list'] as $key => $value)
		{
			array_push($gKey, $value['contact_id']);
		}
		sort($gKey);
		$gKey_str = implode("_", $gKey);
		if(!$gKey_str)
		{
			$gKey_str = "0";  // 为0说明没有明确的管理员，那么默认归属运维
		}
		
		$group_pre[]=array("key"=>$gKey_str, "server_id" => $v['key'],"server"=>$v['fields']['friendlyname']);
		$group[$gKey_str] = array();
		$all_server[] = $v['fields']['friendlyname'];
	}
	
	foreach($group_pre as $k => $v)
	{
		$group[$v['key']][] = array("server_id" => $v['server_id'], "server" => $v['server'], "owner" => explode("_", $v['key']));
	}
	
	$iTopAPI = new iTopClient();
	global $current_user;
	
	$oContact = UserRights::GetContactObject();
	$ret = array();
	
	// 是否拆分为多个工单
	$split = false;
	if(count($group) > 1)
	{
		$split = true;
	}
	foreach($group as $k => $v)
	{
		$sId = array();
		$sHost = array();
		foreach($v as $sK => $sV)
		{
			$sId[] = $sV['server_id'];
			$sHost[] = $sV['server'];
		}
		sort($sId);
		$sId = implode(",", $sId);
		$sHost = implode("<br>", $sHost);
		
		$public_log = "";
		if($split)
		{
			$public_log = "<h2>申请登录的机器分属不同管理员，已拆分为多个工单，本工单包含：</h2><br>" . $sHost . "<br><br>";
		}
		$data = array('caller_id'=>$oContact->GetKey(),
					  'org_id' => $oContact->Get('org_id'),
					  'title'=>"服务器登录权限申请-Server IDs：" . substr($sId,0,20),
					  'description' => $_POST['request_reason'],
					  'public_log' => $public_log . "<h2>用户申请的所有服务器：</h2><br>" . implode("<br>", $all_server),
					  
		);
		
		$stat = json_decode($iTopAPI->coreCreate("UserRequest", $data), true);
		$tId = "";
		if(array_key_exists('objects', $stat))
		{
			foreach($stat['objects'] as $key => $value)
			{
				$tId = $value['key'];
				$ret[$tId] = "工单ID：" . $tId . " " . $value['message'];
				$lnk = array("ticket_id"=>$tId, "functionalci_id"=>$sId);

			}
		}
		$stat_lnk = json_decode($iTopAPI->coreCreate("lnkFunctionalCIToTicket",$lnk), true);
		if(!array_key_exists("objects", $stat_lnk))
		{
			$msg = "链接配置项失败，请联系运维处理";
			$iTopAPI->coreUpdate("UserRequest", $tId, array("public_log"=>$msg));
			$ret[$tId] = $ret[$tId] . "  " . $msg;
		}
	}
	return($ret);
	//die(json_encode($ret));
	//die(json_encode(($group)));
	
}

function CreateAccount()
{
	
}

function runOql($sExpression, $title, &$oP)
{
	$oFilter = null;
	$aArgs = array();
	$sSyntaxError = null;
	
	$oP->add("<br/><h1>$title</h1><hr/>\n");

	if (!empty($sExpression))
	{
		try
		{
			$oFilter = DBObjectSearch::FromOQL($sExpression);
		}
		catch(Exception $e)
		{
			if ($e instanceof OqlException)
			{
				$sSyntaxError = $e->getHtmlDesc();
			}
			else
			{
				$sSyntaxError = $e->getMessage();
			}
		}

		if ($oFilter)
		{
			$aArgs = array();
			foreach($oFilter->GetQueryParams() as $sParam => $foo)
			{
				$value = utils::ReadParam('arg_'.$sParam, null, true, 'raw_data');
				if (!is_null($value))
				{
					$aArgs[$sParam] = $value;
				}
				else
				{
					$aArgs[$sParam] = '';
				}
			}
			$oFilter->SetInternalParams($aArgs);
		}
		elseif ($sSyntaxError)
		{
			// Query arguments taken from the page args
		}
	}
	
	if ($oFilter)
	{
		
		$oResultBlock = new DisplayBlock($oFilter, 'list', false);
		$oResultBlock->Display($oP, $title);

		// Breadcrumb
		//$iCount = $oResultBlock->GetDisplayedCount();
		$sPageId = "ui-search-serveraccount";
		$sLabel = Dict::Format('UI:ServerAccount:Title');
		$aArgs = array();
		foreach (array_merge($_POST, $_GET) as $sKey => $value)
		{
			if (is_array($value))
			{
				$aItems = array();
				foreach($value as $sItemKey => $sItemValue)
				{
					$aArgs[] = $sKey.'['.$sItemKey.']='.urlencode($sItemValue);
				}
			}
			else
			{
				$aArgs[] = $sKey.'='.urlencode($value);
			}
		}
		$sUrl = utils::GetAbsoluteUrlAppRoot().'env-production/custom-pages/server_accounts.php?'.implode('&', $aArgs);
		$oP->SetBreadCrumbEntry($sPageId, $sLabel, '', $sUrl, '../images/breadcrumb-search.png');

		//$oP->p('');
		//$oP->EndCollapsibleSection();
	}
	elseif ($sSyntaxError)
	{
		if ($e instanceof OqlException)
		{
			$sWrongWord = $e->GetWrongWord();
			$aSuggestedWords = $e->GetSuggestions();
			if (count($aSuggestedWords) > 0)
			{
				$sSuggestedWord = OqlException::FindClosestString($sWrongWord, $aSuggestedWords);
		
				if (strlen($sSuggestedWord) > 0)
				{
					$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->GetIssue().' <em>'.$sWrongWord).'</em></b>');
					$sBefore = substr($sExpression, 0, $e->GetColumn());
					$sAfter = substr($sExpression, $e->GetColumn() + strlen($sWrongWord));
					$sFixedExpression = $sBefore.$sSuggestedWord.$sAfter;
					$sFixedExpressionHtml = $sBefore.'<span style="background-color:yellow">'.$sSuggestedWord.'</span>'.$sAfter;
					$oP->p("Suggesting: $sFixedExpressionHtml");
					$oP->add('<button onClick="$(\'textarea[name=expression]\').val(\''.htmlentities(addslashes($sFixedExpression)).'\');">Use this query</button>');
				}
				else
				{
					$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->getHtmlDesc()).'</b>');
				}
			}
			else
			{
				$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->getHtmlDesc()).'</b>');
			}
		}
		else
		{
			$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->getMessage()).'</b>');
		}
	}
}

try
{
	$lnkExpression = "SELECT lnkUserToServer WHERE user_id=$current_user AND expiration > NOW()";
	$ServerExpression = "SELECT Server AS s JOIN lnkContactToFunctionalCI AS l ON l.functionalci_id=s.id WHERE l.contact_id=$current_person";
	$myTicket = "SELECT UserRequest AS t WHERE t.caller_id=$current_person AND status != 'closed' AND title LIKE '服务器登录权限申请-Server%'";
	
	runOql($myTicket, Dict::Format('UI:ServerAccount:MyTicket'), $oP);
	runOql($lnkExpression, Dict::Format('UI:ServerAccount:ServerYouCanLogin'), $oP);
	runOql($ServerExpression, Dict::Format('UI:ServerAccount:ServerYouManaged'), $oP);
	createTicket($oP);
	
}
catch(Exception $e)
{
	$oP->p('<b>'.Dict::Format('UI:RunQuery:Error', $e->getMessage()).'</b>');
}

$oP->output();
?>

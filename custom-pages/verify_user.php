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
 * 用户资料验证
 * @annhe.net
 */

if(isset($_SESSION['verify_user']) && $_SESSION['verify_user'] == 1) {
	location_referer();
} else {
	$_SESSION['verify_user'] = 10;
}

function location_referer($url = "/") {
	header("Location:" . $url);
}

function is_verify_on() {
	$default = true;
	$status = MetaModel::GetModuleSetting('custom-pages', 'verify_on', $default);
	if(!$status) {
		$_SESSION['verify_user'] = 1;
		location_referer();
	}
}

function verify_person() {
	// key != value
	$default_regular = array("org_name"=>"SSO登录用户", "phone"=>"", "qq"=>"");
	$verify_regular = MetaModel::GetModuleSetting('custom-pages', 'verify_regular', $default_regular);
	$person = UserRights::GetContactObject();
	foreach($verify_regular as $key => $val) {
		if(trim($person->Get($key)) == $val) {
			return false;
		}
	}
	$_SESSION['verify_user'] = 1;
	global $rootUrl;
	location_referer($rootUrl);
	return true;
}


require_once('./../../approot.inc.php');
require_once(APPROOT.'/application/application.inc.php');
require_once(APPROOT.'/application/itopwebpage.class.inc.php');

require_once(APPROOT.'/application/startup.inc.php');
require_once(APPROOT.'/application/loginwebpage.class.inc.php');
LoginWebPage::DoLogin(false); // false，不需要管理员权限

$rootUrl = utils::GetAbsoluteUrlAppRoot();

is_verify_on();
verify_person();
$oAppContext = new ApplicationContext();
$oP = new iTopWebPage(Dict::S('UI:PersonVerification:Title'));
$oP->set_base(utils::GetAbsoluteUrlAppRoot().'pages/');
$oP->SetBreadCrumbEntry('ui-tool-org', Dict::S('Menu:PersonVerificationMenu'), Dict::S('Menu:PersonVerificationMenu+'), '', utils::GetAbsoluteUrlAppRoot().'images/wrench.png');

$params = utils::ReadParam('msg', '{}', false, 'raw_data');
$params = json_decode($params, true);

$sPersonId = UserRights::GetContactId();
$sUrl = $rootUrl . 'pages/UI.php?operation=modify&class=Person&id=' . $sPersonId;

$pages = <<<EOF
<div class="ticket_submit">
<div id="messagetext" class="alert_right">
<p style="font-size:20px; font-weight:bold;">
EOF;
	
	foreach($params as $sId => $msg)
	{
		$pages .= $msg . "<br>";
	}
	$pages .= <<<EOF
</p>
<p class="alert_btnleft">请正确设置您的组织，手机号及QQ号，未设置将影响您正常使用运维相关服务<br><a href="$sUrl">点击此链接</a>&nbsp;进行设置</p>
</div>
</div>
EOF;

$css = <<<EOF
.alert_right, .alert_error, .alert_info {
    padding: 6px 0 6px 58px;
    min-height: 40px;
    height: auto !important;
    height: 40px;
    line-height: 160%;
    background: url(../env-production/custom-pages/images/error.png) no-repeat 8px 8px;
    font-size: 14px;
}

.ticket_submit {
    margin: 60px auto;
    padding: 20px;
    width: 580px;
    border: 3px solid #F2F2F2;
    background: #FFF;
}
.alert_btnleft {
    margin-top: 8px;
}
EOF;

$oP->add_style($css);
$oP->add("<h1>" . Dict::Format('UI:PersonVerification:Title') . "</h1><hr/>");
$oP->add($pages);
$oP->output();
?>

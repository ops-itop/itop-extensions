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
$oP->set_base(utils::GetAbsoluteUrlAppRoot().'pages/');
$oP->SetBreadCrumbEntry('ui-tool-account', Dict::S('Menu:ServerAccountMenu'), Dict::S('Menu:ServerAccountMenu+'), '', utils::GetAbsoluteUrlAppRoot().'images/wrench.png');
$rootUrl = utils::GetAbsoluteUrlAppRoot().'env-production/custom-pages/server_accounts.php';

$params = utils::ReadParam('msg', '{}', false, 'raw_data');
$params = json_decode($params, true);

$pages = "";
if($params)
{
	$pages .= <<<EOF
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
<p class="alert_btnleft"><a href="$rootUrl">如果您的浏览器没有自动跳转，请点击此链接</a></p>
</div>
</div>
EOF;
}

$css = <<<EOF
.alert_right, .alert_error, .alert_info {
    padding: 6px 0 6px 58px;
    min-height: 40px;
    height: auto !important;
    height: 40px;
    line-height: 160%;
    background: url(http://www.tecbbs.com/static/image/common/right.gif) no-repeat 8px 8px;
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
$oP->add("<h1>" . Dict::Format('UI:ServerAccount:Title') . "</h1><hr/>");
$oP->add($pages);
header("refresh:4;url=$rootUrl");
$oP->output();
?>

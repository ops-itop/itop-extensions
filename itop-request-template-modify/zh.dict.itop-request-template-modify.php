<?php

/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


// Menu
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'UI:CheckUniqFields:Failed' => ' 在CMDB已存在，无需再次申请',
	'UI:CheckOwner:Failed' => ' 对象不在您名下，无权操作',
	'UI:CheckOwner:APIError' => 'API-Client返回信息错误',
	'UI:CheckIP:Failed' => '以下IP: %1$s 未在CMDB管理，请删除',
	
	'Class:lnkServerToTicket/Attribute:server_id' => '服务器',
	'Class:lnkServerToTicket/Attribute:ticket_id' => '用户请求',
	'Class:lnkServerToTicket' => '链接 服务器/工单',
	
	'Class:Ticket/Attribute:server_list' => '服务器',
	'Class:Ticket/Attribute:server_list+' => '此工单链接的所有服务器',
));
?>

<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


// Cluster
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Cluster' => '集群',
	'Class:ApplicationSolution' => '应用',
	'Class:OSVersion' => '操作系统',
	'Class:Brand' => '厂商',
	'Class:Model' => '型号',

	'Class:FunctionalCI/Attribute:solution_list' => '应用',
	'Class:FunctionalCI/Attribute:solution_list+' => '使用该 CI 的应用',
	'Class:BusinessProcess/Attribute:used_solution_list' => '应用',
	'Class:BusinessProcess/Attribute:used_solution_list+' => '业务流程所依赖的应用',
	'Class:lnkSolutionToCI/Attribute:solution_id' => '应用',
	'Class:lnkSolutionToCI/Attribute:solution_name' => '应用',
	'Class:lnkProcessToSolution/Attribute:solution_id' => '应用',
	'Class:lnkProcessToSolution/Attribute:solution_name' => '应用',
	'Menu:ApplicationSolution' => '应用',
	'Menu:ApplicationSolution+' => '所有应用',
	'Menu:Cluster' => '集群',
	'Menu:Cluster+' => '所有集群',
));

// Server
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Server/Attribute:name' => '主机名',
	'Class:Server/Attribute:serialnumber' => 'SN',
));

// IPAddress
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:IPAddress' => 'IP地址',
	'Class:IPAddress/Attribute:ipaddress' => 'IP地址',
	'Class:IPAddress/Attribute:connect_id' => '设备',
	'Class:IPAddress/Attribute:connect_name' => '设备',
	'Menu:IPAddress' => 'IP地址',
	'Menu:IPAddress+' => '所有IP地址'
));

// PhysicalIP
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PhysicalIP' => 'IP地址',
	'Class:PhysicalIP/Attribute:ipaddress' => 'IP地址',
	'Class:PhysicalIP/Attribute:connect_id' => '设备',
	'Class:PhysicalIP/Attribute:connect_name' => '设备',
	'Menu:PhysicalIP' => 'IP地址',
	'Menu:PhysicalIP+' => '所有IP地址'
));

// VIP
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:VirtualIP' => 'VIP地址',
	'Menu:VirtualIP' => 'VIP地址',
	'Menu:VirtualIP+' => '所有VIP地址'
));

// Domain
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Domain' => '域名',
	'Menu:Domain' => '域名',
	'Menu:Domain+' => '所有域名',
	'Class:Domain/Attribute:domain' => '域名',

));

// DoCheckToWrite
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Server/Error:ServerMustBeUnique' => '此SN已存在，不能重复添加',
	'Class:IPAdress/Error:IPAdressMustBeUnique' => '此IP地址已存在，不能重复添加',
	'Class:Domain/Error:DomainMustBeUnique' => '此域名已存在，不能重复添加',
	'Class:Cluster/Error:ClusterMustBeNotNull' => '集群名称不能为空',
	'Class:Cluster/Error:ClusterMustBeUnique' => '此集群已存在，不能重复添加',
));

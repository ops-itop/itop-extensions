<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
));

// Cluster
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Cluster' => '集群',
	'Class:Domain' => '域名',
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
	'Menu:Domain' => '域名',
	'Menu:Domain+' => '所有域名',
	'Menu:Cluster' => '集群',
	'Menu:Cluster+' => '所有集群',
));

// Server
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Server/Attribute:name' => '主机名',
	'Class:Server/Attribute:serialnumber' => 'SN',
));


// IP
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PhysicalIP' => 'IP地址',
	'Menu:PhysicalIP' => 'IP地址',
	'Menu:PhysicalIP+' => '所有IP地址'
));

// VIP
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:VirtualIP' => 'VIP地址',
	'Menu:VirtualIP' => 'VIP地址',
	'Menu:VirtualIP+' => '所有VIP地址'
));

// DoCheckToWrite
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Server/Error:ServerMustBeUnique' => '服务器SN必须唯一',
	'Class:PhysicalIP/Error:PhysicalIPMustBeUnique' => 'IP地址必须唯一',
	'Class:VirtualIP/Error:VirtualIPMustBeUnique' => 'VIP地址必须唯一',
	'Class:Domain/Error:DomainMustBeUnique' => '域名必须唯一',
	'Class:Cluster/Error:ClusterMustBeNotNull' => '集群名称不能为空',
	'Class:Cluster/Error:ClusterMustBeUnique' => '集群必须唯一',
));

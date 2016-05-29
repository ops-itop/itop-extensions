<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Model
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Brand' => '厂商',
	'Class:Model' => '型号',
	'Class:Model/Name' => '%1$s/%2$s',
	
));

// Cluster
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Cluster' => '集群',
	'Menu:Cluster' => '集群',
	'Menu:Cluster+' => '所有集群',
	'Class:Cluster/Attribute:status' => '状态',
	'Class:Cluster/Attribute:vip_list' => '集群VIP',
	'Class:Cluster/Attribute:vip_list+' => '该集群使用的所有VIP',
	'Class:Cluster/Attribute:server_list' => '服务器',
	'Class:Cluster/Attribute:server_list+' => '隶属于该集群的所有服务器',
	
));

// Server
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Server/Attribute:name' => '盘点号',
	'Class:Server/Attribute:hostname' => '主机名',
	'Class:Server/Attribute:all_ip' => 'IP地址',
	'Class:Server/Attribute:ip_list' => 'IP地址',
	'Class:Server/Attribute:ip_list+' => '该服务器的所有 IP地址',
	'Class:Server/Attribute:cluster_list' => '集群',
	'Class:Server/Attribute:cluster_list+' => '该服务器所属集群',
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
	'Class:PhysicalIP/Attribute:connectableci_id' => '链接的设备',
	'Class:PhysicalIP/Attribute:type' => '类型',
	'Class:PhysicalIP/Attribute:type/Value:int' => '内网',
	'Class:PhysicalIP/Attribute:type/Value:ext' => '外网',
	'Class:PhysicalIP/Attribute:type/Value:oob' => '管理卡',
	'Class:PhysicalIP/Attribute:comment' => '注释',
	'Menu:PhysicalIP' => 'IP地址',
	'Menu:PhysicalIP+' => '所有IP地址'
));

// VIP
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:VirtualIP' => 'VIP地址',
	'Class:VirtualIP/Attribute:ipaddress' => 'VIP地址',

	'Menu:VirtualIP' => 'VIP地址',
	'Menu:VirtualIP+' => '所有VIP地址',
	'Class:VirtualIP/Attribute:connectableci_id' => '链接的集群',
	'Class:VirtualIP/Attribute:type' => '类型',
	'Class:VirtualIP/Attribute:type/Value:int' => '内网',
	'Class:VirtualIP/Attribute:type/Value:ext' => '外网',
	'Class:VirtualIP/Attribute:type/Value:oob' => '管理卡',

	'Class:VirtualIP/Attribute:comment' => '注释',
	'Class:VirtualIP/Attribute:isp_id' => '运营商',

));

// Domain
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Domain' => '域名',
	'Menu:Domain' => '域名',
	'Menu:Domain+' => '所有域名',
	'Class:Domain/Attribute:name' => '域名',
	'Class:Domain/Attribute:status' => '状态',
	'Class:Domain/Attribute:contacts' => '联系人',
	'Class:Domain/Attribute:applicationsolution_id' => '产品线',

));

// DoCheckToWrite
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Server/Error:ServerMustBeUnique' => '此SN已存在，不能重复添加',
	'Class:IPAdress/Error:IPAdressMustBeUnique' => '此IP地址已存在，不能重复添加',
	'Class:Domain/Error:DomainMustBeUnique' => '此域名已存在，不能重复添加',
	'Class:Cluster/Error:ClusterMustBeNotNull' => '集群名称不能为空',
	'Class:Cluster/Error:ClusterMustBeUnique' => '此集群已存在，不能重复添加',
));

// Location
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Location/Attribute:isp_id' => '运营商',
));

// ApplicationSolution
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ApplicationSolution/Name' => '%1$s.%2$s',
	'Class:ApplicationSolution/Attribute:businessprocess_id' => '业务线',
));

// Database
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Database' => '数据库',
	'Class:Database/Attribute:name' => '名称',
	'Class:Database/Attribute:status' => '状态',
	'Class:Database/Attribute:type' => '类型',
	'Class:Database/Attribute:info' => '详细信息',
	'Class:Database/Attribute:contacts' => '联系人',
	'Menu:Database' => '数据库',
	'Menu:Database+' => '所有数据库',

));


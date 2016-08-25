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
	'Class:Cluster/Attribute:vip_list' => '集群VIP',
	'Class:Cluster/Attribute:vip_list+' => '该集群使用的所有VIP',
	'Class:Cluster/Attribute:server_list' => '服务器',
	'Class:Cluster/Attribute:server_list+' => '隶属于该集群的所有服务器',
	
	'Class:Cluster/Attribute:status' => '状态',
	'Class:Cluster/Attribute:status+' => '',
	'Class:Cluster/Attribute:status/Value:implementation' => '上线中',
	'Class:Cluster/Attribute:status/Value:implementation+' => '上线中',
	'Class:Cluster/Attribute:status/Value:obsolete' => '报废',
	'Class:Cluster/Attribute:status/Value:obsolete+' => '报废',
	'Class:Cluster/Attribute:status/Value:production' => '使用中',
	'Class:Cluster/Attribute:status/Value:production+' => '使用中',
	'Class:Cluster/Attribute:status/Value:stock' => '库存',
	'Class:Cluster/Attribute:status/Value:stock+' => '库存',
	
	
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
	'Class:Server/Attribute:vip_list' => 'VIP列表',
	'Class:Server/Attribute:vip_list+' => '该服务器的所有VIP',
));

// IPAddress
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:IPAddress' => 'IP地址',
	'Class:IPAddress/Attribute:ipaddress' => 'IP地址',
	'Class:IPAddress/Attribute:type' => '类型',
	'Class:IPAddress/Attribute:type/Value:int' => '内网',
	'Class:IPAddress/Attribute:type/Value:ext' => '外网',
	'Class:IPAddress/Attribute:type/Value:oob' => '管理卡',	
	'Class:IPAddress/Attribute:connect_id' => '设备',
	'Class:IPAddress/Attribute:connect_name' => '设备',
	'Menu:IPAddress' => 'IP地址',
	'Menu:IPAddress+' => '所有IP地址',
	
	'Class:IPAddress/Error:IPAddressMustBeUnique' => '%$1s 已被占用，IP地址必须唯一',
));

// PhysicalIP
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PhysicalIP' => 'IP地址',
	'Class:PhysicalIP/Attribute:ipaddress' => 'IP地址',
	'Class:PhysicalIP/Attribute:connectableci_id' => '链接的设备',
	'Class:PhysicalIP/Attribute:connectableci_name' => '链接的设备',
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
	'Class:VirtualIP/Attribute:connectableci_name' => '链接的集群',
	'Class:VirtualIP/Attribute:type' => '类型',
	'Class:VirtualIP/Attribute:type/Value:int' => '内网',
	'Class:VirtualIP/Attribute:type/Value:ext' => '外网',
	'Class:VirtualIP/Attribute:type/Value:oob' => '管理卡',

	'Class:VirtualIP/Attribute:comment' => '注释',
	'Class:VirtualIP/Attribute:isp_id' => '运营商',
	'Class:VirtualIP/Attribute:server_list' => 'Member列表',
	'Class:VirtualIP/Attribute:server_list+' => '该VIP的所有服务器列表',

));

// Domain
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Domain' => '域名',
	'Menu:Domain' => '域名',
	'Menu:Domain+' => '所有域名',
	'Class:Domain/Attribute:name' => '域名',
	'Class:Domain/Attribute:contacts' => '联系人',
	'Class:Domain/Attribute:applicationsolution_id' => '产品线',
	'Class:Domain/Attribute:status' => '状态',
	'Class:Domain/Attribute:status+' => '',
	'Class:Domain/Attribute:status/Value:implementation' => '上线中',
	'Class:Domain/Attribute:status/Value:implementation+' => '上线中',
	'Class:Domain/Attribute:status/Value:obsolete' => '报废',
	'Class:Domain/Attribute:status/Value:obsolete+' => '报废',
	'Class:Domain/Attribute:status/Value:production' => '使用中',
	'Class:Domain/Attribute:status/Value:production+' => '使用中',
	'Class:Domain/Attribute:status/Value:stock' => '库存',
	'Class:Domain/Attribute:status/Value:stock+' => '库存',
));

// DoCheckToWrite
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Server/Error:ServerMustBeUnique' => '%1s 已被占用，服务器必须唯一',
	'Class:Domain/Error:DomainMustBeUnique' => '%1s 已被占用，域名必须唯一',
	'Class:Cluster/Error:ClusterMustBeNotNull' => '集群名称不能为空',
	'Class:Cluster/Error:ClusterMustBeUnique' => '%1s 已被占用，集群必须唯一',
));

// Location
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Location/Attribute:isp_id' => '运营商',
	'Class:Location/Attribute:server_list' => '服务器列表',
	'Class:Location/Attribute:server_list+' => '该机房的素有服务器',
	'Class:Location/Attribute:rack_list' => '机柜列表',
	'Class:Location/Attribute:rack_list+' => '该机房的所有机柜',
));

// ApplicationSolution
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ApplicationSolution/Name' => '%1$s.%2$s',
	'Class:ApplicationSolution/Attribute:url_list' => 'URL列表',
	'Class:ApplicationSolution/Attribute:url_list+' => '该APP的所有URL',
	'Class:ApplicationSolution/Attribute:businessprocess_id' => '业务线',
	'Class:ApplicationSolution/Attribute:name_cn' => '中文名称',
	'Class:ApplicationSolution/Attribute:contact_list_custom' => '联系人',
	'Class:ApplicationSolution/Attribute:contact_list_custom+' => '该APP的所有联系人',
));

// Database
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Database' => '数据库',
	'Class:Database/Attribute:name' => '名称',
	'Class:Database/Attribute:type' => '类型',
	'Class:Database/Attribute:info' => '详细信息',
	'Class:Database/Attribute:contacts' => '联系人',
	'Menu:Database' => '数据库',
	'Menu:Database+' => '所有数据库',
	'Class:Database/Attribute:status' => '状态',
	'Class:Database/Attribute:status+' => '',
	'Class:Database/Attribute:status/Value:implementation' => '上线中',
	'Class:Database/Attribute:status/Value:implementation+' => '上线中',
	'Class:Database/Attribute:status/Value:obsolete' => '报废',
	'Class:Database/Attribute:status/Value:obsolete+' => '报废',
	'Class:Database/Attribute:status/Value:production' => '使用中',
	'Class:Database/Attribute:status/Value:production+' => '使用中',
	'Class:Database/Attribute:status/Value:stock' => '库存',
	'Class:Database/Attribute:status/Value:stock+' => '库存',
));

// Url
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Url' => 'URL',
	'Url:baseinfo' => '基本信息',
	'Url:moreinfo' => '扩展信息',
	'Url:monitorinfo' => '监控信息',
	'Url:autocomplete' => '自动填充信息(无需填写)',
	'Class:Url/Attribute:name' => '名称',
	'Class:Url/Attribute:url' => 'URL',
	'Class:Url/Attribute:applicationsolution_id' => 'APP',
	'Class:Url/Attribute:method' => '请求方法',
	'Class:Url/Attribute:headers' => 'Headers',
	'Class:Url/Attribute:body' => '参数拼接',
	'Class:Url/Attribute:monitor_node' => '监控节点',
	'Class:Url/Attribute:interval' => '监控频率(s)',
	'Class:Url/Attribute:timeout' => '超时阈值(s)',
	'Class:Url/Attribute:require_code' => '状态码匹配',
	'Class:Url/Attribute:require_str' => '返回数据匹配',
	'Class:Url/Attribute:third_email' => '第三方邮箱',
	'Class:Url/Attribute:third_phone' => '第三方手机',
	'Class:Url/Attribute:curl' => 'cURL命令',
	'Menu:Url' => 'URL',
	'Menu:Url+' => '所有URL',
	'Class:Url/Attribute:status' => '状态',
	'Class:Url/Attribute:status+' => '',
	'Class:Url/Attribute:status/Value:production' => '在线',
	'Class:Url/Attribute:status/Value:production+' => '在线',
	'Class:Url/Attribute:status/Value:stock' => '已下线',
	'Class:Url/Attribute:status/Value:stock+' => '已下线',
	'Class:Url/Stimulus:ev_new' => '新建',
	'Class:Url/Stimulus:ev_online' => '上线监控',
	'Class:Url/Stimulus:ev_offline' => '暂停监控',
	
	'Class:Url/Error:CanOnlyUpdateUrlOfYours' => '只能编辑自己名下APP的URL',
	'Class:Url/Error:UrlMustBeUnique' => '%1s 已被占用，monitor_node.method.app.url组合必须唯一',
	'Class:Url/Name' => '%1$s.%2$s.%3$s.%4$s',

));

// Rack
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Rack/Name' => '%1$s.%2$s',
	'Class:Rack/Attribute:server_list' => '服务器列表',
	'Class:Rack/Attribute:server_list+' => '使用该机架的所有服务器列表',
));

// Contact
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Contact/Attribute:phone' => '手机号',
	'Class:Contact/Attribute:applicationsolution_list' => '负责的APP',
	'Class:Contact/Attribute:applicationsolution_list+' => '该联系人负责的所有APP',
	
	'Class:Contact/Error:ContactEmailMustBeUnique' => '%$1s 此邮箱已被占用',
));

// lnkContactToApplicationSolution
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:lnkContactToApplicationSolution' => '联系人/APP',
	'Menu:lnkContactToApplicationSolution+' => '所有 联系人/APP 关联',
	'Class:lnkContactToApplicationSolution' => '联系人/APP',
	'Class:lnkContactToApplicationSolution/Attribute:applicationsolution_id' => 'APP',
	'Class:lnkContactToApplicationSolution/Attribute:applicationsolution_name' => 'APP名称',
	'Class:lnkContactToApplicationSolution/Attribute:applicationsolution_org' => 'APP所属组织',
	'Class:lnkContactToApplicationSolution/Attribute:applicationsolution_name_cn' => 'APP中文名称',
	'Class:lnkContactToApplicationSolution/Attribute:contact_id' => '联系人',
	'Class:lnkContactToApplicationSolution/Attribute:contact_name' => '联系人名称',
	'Class:lnkContactToApplicationSolution/Attribute:contact_email' => '联系人邮箱',
	'Class:lnkContactToApplicationSolution/Error:CanOnlyAddLinkForYourself' => '仅能创建自己的关联 - 无法操作 %1$s',
));

// ISP
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ISP' => '运营商',
	'Class:ISP/Attribute:name' => '运营商名称',
	'Class:ISP/Attribute:code' => '运营商代码',
	'Class:ISP/Attribute:vip_list' => 'VIP列表',
	'Class:ISP/Attribute:vip_list+' => '所有VIP列表',
	'Class:ISP/Attribute:location_list' => '机房列表',
	'Class:ISP/Attribute:location_list+' => '所有机房列表',
));

// lnkServerToVirtualIP
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkServerToVirtualIP' => '链接 服务器/VIP',
	'Class:lnkServerToVirtualIP/Attribute:server_id' => '服务器',
	'Class:lnkServerToVirtualIP/Attribute:server_hostname' => '服务器主机名',
	'Class:lnkServerToVirtualIP/Attribute:vip_id' => 'VIP',
	'Class:lnkServerToVirtualIP/Attribute:vip_name' => 'VIP',
));

// lnkServerToCluster
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkServerToCluster' => '链接 服务器/集群',
	'Class:lnkServerToCluster/Attribute:server_id' => '服务器',
	'Class:lnkServerToCluster/Attribute:server_hostname' => '服务器主机名',
	'Class:lnkServerToCluster/Attribute:cluster_id' => '集群',
	'Class:lnkServerToCluster/Attribute:cluster_name' => '集群',
));


// FunctionalCI
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:FunctionalCI/Attribute:ci_id' => 'ID',
));

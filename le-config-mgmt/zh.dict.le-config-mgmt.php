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
	'Class:Cluster/Attribute:domain_list' => '域名列表',
	'Class:Cluster/Attribute:domain_list+' => '解析到该集群的所有域名列表',
	'Class:Cluster/Attribute:cname' => 'CNAME域名',
	'Class:Cluster/Attribute:type' => '类型',
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
	'Class:Server/Attribute:middleware_list' => '中间件列表',
	'Class:Server/Attribute:middleware_list+' => '部署在该服务器上的所有中间件',
	'Class:Server/Attribute:use_pam' => 'PAM验证',
	
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
	'Class:Domain/Attribute:record_id' => '解析地址',
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
	'Class:ApplicationSolution/Attribute:type' => '类型',
	'Class:ApplicationSolution/Attribute:contact_list_custom' => '联系人',
	'Class:ApplicationSolution/Attribute:contact_list_custom+' => '该APP的所有联系人',
	'Class:ApplicationSolution/Attribute:status/Value:implementation' => '上线中',
	'Class:ApplicationSolution/Attribute:status/Value:implementation+' => '上线中',
	'Class:ApplicationSolution/Attribute:status/Value:obsolete' => '废弃',
	'Class:ApplicationSolution/Attribute:status/Value:obsolete+' => '废弃',
	'Class:ApplicationSolution/Attribute:status/Value:production' => '在线',
	'Class:ApplicationSolution/Attribute:status/Value:production+' => '在线',
	'Class:ApplicationSolution/Attribute:status/Value:stock' => '库存',
	'Class:ApplicationSolution/Attribute:status/Value:stock+' => '库存',
	'Class:ApplicationSolution/Error:NotAllowNew' => '您没有新建 %1$s 对象的权限，请使用工单系统上线APP',
	'Class:ApplicationSolution/Error:CanOnlyUpdateAppYourself' => '%1$s 不在您的名下，您没有编辑权限',
	'Class:ApplicationSolution/Msg:ReturnList' => '返回APP列表',
	'Class:ApplicationSolution/Attribute:business_criticity/Value:low' => '三级',
	'Class:ApplicationSolution/Attribute:business_criticity/Value:medium' => '二级',
	'Class:ApplicationSolution/Attribute:business_criticity/Value:high' => '一级',
	'Class:ApplicationSolution/Attribute:business_criticity/Value:null' => '未定义',
	'Class:ApplicationSolution/Attribute:business_type' => '业务类型',
	'Class:ApplicationSolution/Attribute:business_type/Value:tv' => '电视',
	'Class:ApplicationSolution/Attribute:business_type/Value:mobile' => '手机',
	'Class:ApplicationSolution/Attribute:business_type/Value:common' => '公共',
	'Class:Url/ApplicationSolution:Monitor' => '监控',
));

// Middleware
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Middleware' => '数据库',
	'Menu:Middleware' => '中间件',
	'Menu:Middleware+' => '所有中间件',
	'Class:Middleware/Attribute:name' => '名称',
	'Class:Middleware/Attribute:location' => '地区',
	'Class:Middleware/Attribute:info' => '详细信息',
	'Class:Middleware/Attribute:contacts' => '联系人',
	'Class:Middleware/Attribute:status' => '状态',
	'Class:Middleware/Attribute:status+' => '',
	'Class:Middleware/Attribute:status/Value:implementation' => '上线中',
	'Class:Middleware/Attribute:status/Value:implementation+' => '上线中',
	'Class:Middleware/Attribute:status/Value:obsolete' => '报废',
	'Class:Middleware/Attribute:status/Value:obsolete+' => '报废',
	'Class:Middleware/Attribute:status/Value:production' => '使用中',
	'Class:Middleware/Attribute:status/Value:production+' => '使用中',
	'Class:Middleware/Attribute:status/Value:stock' => '库存',
	'Class:Middleware/Attribute:status/Value:stock+' => '库存',
));

// ThirdSrv
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ThirdSrv' => '第三方服务',
	'Menu:ThirdSrv' => '第三方服务',
	'Menu:ThirdSrv+' => '所有第三方服务',	
	'Menu:ThirdSrv:Count' => '%1$d 个第三方服务',
	//S3
	'Class:S3' => 'S3',
	'Class:S3/Name' => '%1$s.%2$s',
	//Yunpan
	'Class:Yunpan' => 'Yunpan',
	'Class:Yunpan/Name' => '%1$s.%2$s',
));

// MessageQueue
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:MessageQueue' => '消息队列',
	'Menu:MessageQueue' => '消息队列',
	'Menu:MessageQueue+' => '所有消息队列',	
	'Menu:MessageQueue:Count' => '%1$d 个消息队列',
	//SwiftMQ
	'Class:SwiftMQ' => 'SwiftMQ',
	'Class:SwiftMQ/Name' => '%1$s.%2$s',
));
// Database
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Database' => '数据库',
	'Class:Database/Attribute:name' => '名称',
	'Class:Database/Attribute:location' => '地区',
	'Class:Database/Attribute:info' => '详细信息',
	'Class:Database/Attribute:contacts' => '联系人',
	'Menu:Database' => '数据库',
	'Menu:Database+' => '所有数据库',
	'Menu:Database:Count' => '%1$d 个数据库',
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
	
	//RDS
	'Class:RDS' => 'RDS',
	'Class:RDS/Name' => '%1$s.%2$s',
	'Class:RDS/Attribute:mcluster' => '集群',
	'Class:RDS/Attribute:hcluster' => '可用区',
	
	//Monngo
	'Class:MongoDB' => 'MongoDB',
	'Class:MongoDB/Name' => '%1$s.%2$s',
	
	//MySQL
	'Class:MySQL' => 'MySQL',
	'Class:MySQL/Name' => '%1$s.%2$s',
	
	//Redis
	'Class:Redis' => 'Redis',
	'Class:Redis/Name' => '%1$s.%2$s',
	'Class:Redis/Attribute:capacity' => '容量预估',
	'Class:Redis/Attribute:datatype' => '数据类型',
	'Class:Redis/Attribute:language' => '客户端语言',
	'Class:Redis/Attribute:type' => '类型',
	'Class:Redis/Attribute:name' => '前缀',
	'Class:Redis/Attribute:persistence' => '是否持久化',
	'Class:Redis/Attribute:business' => '业务归属',
	'Class:Redis/Attribute:business/Value:mobile' => '手机业务',
	'Class:Redis/Attribute:business/Value:tv' => '电视业务',
	'Class:Redis/Attribute:business/Value:common' => '公共业务',
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
	'Class:Url/Attribute:params' => 'GET参数',
	'Class:Url/Attribute:body' => 'POST参数',
	'Class:Url/Attribute:monitor_node' => '监控节点',
	'Class:Url/Attribute:interval' => '监控频率(s)',
	'Class:Url/Attribute:timeout' => '超时阈值(s)',
	'Class:Url/Attribute:require_code' => '状态码匹配',
	'Class:Url/Attribute:require_str' => '返回数据匹配',
	'Class:Url/Attribute:third_email' => '第三方邮箱',
	'Class:Url/Attribute:third_phone' => '第三方手机',
	'Class:Url/Attribute:curl' => 'cURL调试命令',
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
	'Class:Url/Tab:Monitor' => '监控',

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

// Person
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Person/Name' => '%1$s%2$s(%3$s)',
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
	'Class:lnkContactToApplicationSolution/Error:NotAllowDirectCreation' => '不允许直接编辑, 请在APP或者个人资料中维护 APP/联系人 关系',
	'Class:lnkContactToApplicationSolution/Msg:EditMySelf' => '编辑我的个人资料',
));

// lnkApplicationSolutionToFunctionalCI
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkApplicationSolutionToFunctionalCI/Error:NotAllowDirectCreation' => '不允许直接编辑, 请在APP中维护 APP/功能配置项 关系',
	'Class:lnkApplicationSolutionToFunctionalCI/Msg:EditApp' => '去APP列表页',
));

// lnkMiddlewareToServer
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkMiddlewareToServer' => '中间件/服务器',
	'Class:lnkMiddlewareToServer+' => '所有 中间件/服务器 关联',
	'Class:lnkMiddlewareToServer/Attribute:middleware_id' => '中间件',	
	'Class:lnkMiddlewareToServer/Attribute:server_id' => '服务器',
	
	'Class:Server/Attribute:middleware_list' => '中间件列表',
	'Class:Server/Attribute:middleware_list+' => '部署在该服务器上的所有中间件',
	'Class:Middleware/Attribute:server_list' => '依赖的服务器',
	'Class:Middleware/Attribute:server_list+' => '此对象依赖的所有服务器',
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
	'Class:FunctionalCI/Attribute:contacts' => '联系人',
));

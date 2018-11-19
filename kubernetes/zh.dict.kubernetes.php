<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
//Kubernetes
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Kubernetes/Attribute:applicationsolution_id' => 'APP',
	'Class:Kubernetes/Attribute:k8snamespace_id' => 'LB集群',
	'Class:Kubernetes/Attribute:description' => '描述',
	'Class:Kubernetes/Attribute:org_id' => '组织',
	'Class:Kubernetes/Attribute:move2production' => '上线日期',
	'Class:Kubernetes/Attribute:status' => '状态',
	'Class:Kubernetes/Attribute:kubestatus' => 'S',
	'Class:Kubernetes/Attribute:change_log' => '变更日志',
	'Class:Kubernetes/Attribute:status/Value:stock' => '已下线',
	'Class:Kubernetes/Attribute:status/Value:production' => '在线',
	'Class:Kubernetes/Attribute:status/Value:redeploy' => '在线',
	'Class:Kubernetes/Attribute:status/Value:redeploy2' => '在线',
	'Class:Kubernetes/Error:CanOnlyUpdateK8SObjYourself' => '%1$s 不在您的名下，您没有编辑权限',
	'Menu:KubernetesTypology' => 'Kubernetes类型配置',
));

// Controller
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Controller' => '服务',
	'Class:Controller/Name' => '%1$s.%2$s',
	'Class:Controller+' => '所有服务',
	
	'Class:Controller/Attribute:k8snamespace_id' => 'LB集群',
	'Class:Controller/Attribute:applicationsolution_id' => 'APP',
	'Class:Controller/Attribute:repo' => '代码地址',
	'Class:Controller/Attribute:image' => '镜像',
	'Class:Controller/Attribute:image_tag' => '镜像Tag',
	'Class:Controller/Attribute:containerport' => '容器端口',
	'Class:Controller/Attribute:hostnetwork' => 'hostNetwork',
	'Class:Controller/Attribute:replicas' => '副本数',
	'Class:Controller/Attribute:cpu_request' => 'CPU请求',
	'Class:Controller/Attribute:cpu_limit' => 'CPU限制',
	'Class:Controller/Attribute:mem_request' => '内存[MB]',
	'Class:Controller/Attribute:secret' => '配置项',
	'Class:Controller/Attribute:rolling_strategy' => '更新策略',
	'Class:Controller/Attribute:hostaliases' => '自定义hosts',
	'Class:Controller/Attribute:person_list' => '联系人',
	'Class:Controller/Attribute:person_list+' => '链接到此控制器的所有联系人',
	'Class:Controller/Attribute:affinity_list' => '约束条件',
	'Class:Controller/Attribute:affinity_list+' => '链接到此控制器的所有约束条件',
	'Class:Controller/Attribute:volume_list' => 'Volumes',
	'Class:Controller/Attribute:volume_list+' => '链接到此控制器的所有Volumes',

	'Menu:Controller' => '控制器',
	'Menu:Controller+' => '所有控制器',
	
	'Class:Controller/Stimulus:ev_new' => '新建',
	'Class:Controller/Stimulus:ev_online' => '上线',
	'Class:Controller/Stimulus:ev_offline' => '下线',
	'Class:Controller/Stimulus:ev_redeploy' => '更新',
	'Class:Controller/Stimulus:ev_redeploy2' => '更新',
	
	'Controller:baseinfo' => '基本信息',
	'Controller:secret' => '配置（YAML格式）',
	'Controller:other' => '其他信息',
	
	'Class:Controller/Error:SecretShouldBeYamlFormat' => '配置项须为YAML格式',
	'Class:Controller/Error:ReservedAppNameNotAllowed' => '%1$s 为保留名称，不允许部署',
	'Class:Controller/Error:CpuLimitCanNotLessThanCpuRequest' => 'CPU限制值必须大于或等于CPU请求值',
	'Class:Controller/Error:maxSurgeAndmaxUnavailableCannotBeZeroBoth' => 'maxUnavailable:maxSurge不能同时为0',
	'Class:Controller/Error:hostaliasesShouldBeYamlFormat' => '自定义hosts须为YAML格式',
	'Class:Controller/Error:IpIsInvalid' => '自定义hosts包含非法IP: %1$s',
	'Class:Controller/Error:DomainIsInvalid' => '自定义hosts包含非法域名: %1$s',

	'Class:Controller/Tab:Debug' => '调试',
));

// Deployment
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Deployment' => '无状态服务',
	'Class:Deployment/Name' => '%1$s.%2$s',
	'Class:Deployment+' => '所有无状态服务',
	
	'Class:Deployment/Attribute:type' => '类型',
	'Class:Deployment/Attribute:type/Value:web' => 'HTTP服务',
	'Class:Deployment/Attribute:type/Value:worker' => '后台服务',
	'Class:Deployment/Attribute:url' => 'URL',
	'Class:Deployment/Attribute:https' => 'HTTPS',
	'Class:Deployment/Attribute:https/Value:on' => '开启',
	'Class:Deployment/Attribute:https/Value:off' => '关闭',
	'Class:Deployment/Attribute:ingress_list' => 'Ingress',
	'Class:Deployment/Attribute:ingress_list+' => '链接到此无状态服务的所有Ingress',
	'Class:Deployment/Attribute:ingressannotations_list' => 'Nginx',
	'Class:Deployment/Attribute:ingressannotations_list+' => '自定义Nginx配置',

	'Menu:Deployment' => '无状态服务',
	'Menu:Deployment+' => '所有无状态服务',
	
	'Class:Deployment/Stimulus:ev_new' => '新建',
	'Class:Deployment/Stimulus:ev_online' => '上线',
	'Class:Deployment/Stimulus:ev_offline' => '下线',
	'Class:Deployment/Stimulus:ev_redeploy' => '更新',
	'Class:Deployment/Stimulus:ev_redeploy2' => '更新',
	
	'Deployment:baseinfo' => '基本信息',
	'Deployment:secret' => 'APP配置项数据（YAML格式）',
	'Deployment:other' => '其他信息',
));

// ApplicationSolution
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ApplicationSolution/Attribute:deployment_list' => 'Kubernetes服务',
	'Class:ApplicationSolution/Attribute:deployment_list+' => '此APP的所有Kubernetes服务',
));

// K8sAffinity
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:K8sAffinity/Attribute:affinitytype' => '约束类型',
	'Class:K8sAffinity/Attribute:labeltype' => '标签类型',
	'Class:K8sAffinity/Attribute:requiretype' => '约束强度',
	'Class:K8sAffinity/Attribute:topologykey' => 'topologyKey',
	'Class:K8sAffinity/Attribute:operator' => '操作符',
	'Class:K8sAffinity/Attribute:expressions' => '表达式',
	'Class:K8sAffinity/Attribute:note' => '注释',
	'Class:K8sAffinity/Attribute:deployment_list' => '部署',
	'Class:K8sAffinity/Error:ExpressionsShouldBeYamlFormat' => '表达式必须是YAML格式',
));

// lnkK8sAffinityToController
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkK8sAffinityToController/Attribute:k8saffinity_id' => 'K8sAffinity',
	'Class:lnkK8sAffinityToController/Attribute:k8saffinity_name' => 'K8sAffinity名称',
	'Class:lnkK8sAffinityToController/Attribute:controller_id' => 'K8S控制器',
	'Class:lnkK8sAffinityToController/Attribute:controller_name' => 'K8S控制器名称',
	'Class:lnkK8sAffinityToController/Attribute:group' => '分组',
	'Class:lnkK8sAffinityToController/Attribute:values' => '表达式VALUES',
));

// K8sVolume
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:K8sVolume/Attribute:volumetype' => 'Volume类型',
	'Class:K8sVolume/Attribute:note' => '注释',
	'Class:K8sVolume/Attribute:deployment_list' => '无状态服务',
	'Class:K8sVolume/Attribute:deployment_list+' => '链接到此Volume的所有无状态服务',
));

// lnkK8sVolumeToController
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkK8sVolumeToController/Attribute:k8svolume_type' => 'Volume类型',
	'Class:lnkK8sVolumeToController/Attribute:controller_id' => 'K8S控制器',
	'Class:lnkK8sVolumeToController/Attribute:k8svolume_note' => '注释',
	'Class:lnkK8sVolumeToController/Attribute:mountpath' => '挂载路径',
	'Class:lnkK8sVolumeToController/Attribute:k8svolume_id' => 'Volume',
));

// K8sIngressAnnotations
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:K8sIngressAnnotations' => '自定义Nginx配置',
	'Class:K8sIngressAnnotations/Attribute:name' => '自定义Nginx配置',
	'Class:K8sIngressAnnotations/Attribute:note' => '用途',
	'Class:K8sIngressAnnotations/Attribute:enable' => '是否启用',
	'Class:K8sIngressAnnotations/Attribute:default_value' => '默认值',
	'Class:K8sIngressAnnotations/Attribute:description' => '详情',
	'Class:K8sIngressAnnotations/Attribute:validate' => '正则校验',
	'Class:K8sIngressAnnotations/Attribute:deployment_list' => '无状态服务',
	'Class:K8sIngressAnnotations/Attribute:deployment_list+' => '所有无状态服务',
	'Class:K8sIngressAnnotations/Attribute:ingress_list' => '负载均衡',
	'Class:K8sIngressAnnotations/Attribute:ingress_list+' => '所有负载均衡',
));

// lnkK8sIngressAnnotationsToDeployment
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:value' => '配置值',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:deployment_id' => '部署',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_id' => '配置项',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_id' => '配置项',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_name' => '配置项',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_note' => '用途',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_description' => '详情',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_validate' => '配置值校验',
));

// lnkK8sIngressAnnotationsToIngress
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:value' => '配置值',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:ingress_id' => '负载均衡',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_id' => '配置项',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_id' => '配置项',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_name' => '配置项',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_note' => '用途',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_description' => '详情',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_validate' => '配置值校验',
));

// Configuration
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Configuration' => '配置项',
	'Class:Configuration+' => '所有配置项',
	'Menu:Configuration' =>'配置项',
	'Menu:Configuration+' =>'所有配置项',
));

// Ingress
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Ingress' => '负载均衡',
	'Class:Ingress/Name' => '%1$s%2$s',
	'Class:Ingress+' => '所有Ingress',
	
	'Class:Ingress/Attribute:k8snamespace_id' => 'LB集群',
	'Class:Ingress/Attribute:applicationsolution_id' => 'APP',
	'Class:Ingress/Attribute:domain_id' => '域名',
	'Class:Ingress/Attribute:location' => 'Location',
	'Class:Ingress/Attribute:serviceport' => '服务端口',
	'Class:Ingress/Attribute:deployment_id' => '无状态服务',
	'Class:Ingress/Attribute:person_list' => '联系人',
	'Class:Ingress/Attribute:person_list+' => '链接到此负载均衡的所有联系人',
	'Class:Ingress/Attribute:ingressannotations_list' => '自定义Nginx配置',
	'Class:Ingress/Attribute:ingressannotations_list+' => '此负载均衡的所有自定义Nginx配置',
	'Class:Ingress/Attribute:https' => 'HTTPS',
	'Class:Ingress/Attribute:https/Value:on' => '开启',
	'Class:Ingress/Attribute:https/Value:off' => '关闭',
	
	'Menu:Ingress' => '负载均衡',
	'Menu:Ingress+' => '所有负载均衡',
	
	'Class:Ingress/Stimulus:ev_new' => '新建',
	'Class:Ingress/Stimulus:ev_online' => '上线',
	'Class:Ingress/Stimulus:ev_offline' => '下线',
	
	'Ingress:other' => '其他信息',
));

// Secret
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Secret' => 'APP配置项',
	'Class:Secret/Name' => '%1$s.%2$s',
	'Class:Secret+' => '所有APP配置项',
	'Class:Secret/Attribute:name' => '名称',
	'Class:Secret/Attribute:data' => '配置数据',
	'Class:Secret/Attribute:person_list' => '联系人',
	'Class:Secret/Attribute:person_list+' => '链接到此APP配置项的所有联系人',
	'Class:Secret/Attribute:deployment_list' => '无状态服务',
	'Class:Secret/Attribute:deployment_list+' => '链接到此APP配置项的所有无状态服务',
	'Menu:Secret' => 'APP配置项',		
	'Menu:Secret+' => '所有APP配置项',	
	
	'Class:Secret/Stimulus:ev_new' => '新建',
	'Class:Secret/Stimulus:ev_online' => '上线',
	'Class:Secret/Stimulus:ev_offline' => '下线',	
	'Class:Secret/Stimulus:ev_redeploy' => '更新',
	'Class:Secret/Stimulus:ev_redeploy2' => '更新',	
	
	'Secret:other' => '其他信息',
));

//K8sNamespace
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:K8sNamespace' => 'LB集群',
	'Class:K8sNamespace+' => '所有LB集群',
	
	'Class:K8sNamespace/Attribute:name' => '名称',
	'Class:K8sNamespace/Attribute:domain' => '域名',
	'Class:K8sNamespace/Attribute:note' => '注释',
	'Class:K8sNamespace/Attribute:deployment_list' => '无状态服务',
	'Class:K8sNamespace/Attribute:deployment_list+' => '此集群上的所有无状态服务',
	'Class:K8sNamespace/Attribute:ingress_list' => 'Ingress',
	'Class:K8sNamespace/Attribute:ingress_list+' => '此集群上的所有Ingress',
	
	'Menu:K8sNamespace' => 'LB集群',
	'Menu:K8sNamespace+' => '所有LB集群',
));

<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
//Kubernetes
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
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
));

// Deployment
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Deployment' => 'K8S部署',
	'Class:Deployment/Name' => '%1$s.%2$s',
	'Class:Deployment+' => '所有K8S部署',
	
	'Class:Deployment/Attribute:k8snamespace_id' => 'K8S集群',
	'Class:Deployment/Attribute:applicationsolution_id' => 'APP',
	'Class:Deployment/Attribute:type' => '类型',
	'Class:Deployment/Attribute:repo' => '代码地址',
	'Class:Deployment/Attribute:image' => '镜像',
	'Class:Deployment/Attribute:image_tag' => '镜像Tag',
	'Class:Deployment/Attribute:url' => 'URL',
	'Class:Deployment/Attribute:containerport' => '容器端口',
	'Class:Deployment/Attribute:hostnetwork' => 'hostNetwork',
	'Class:Deployment/Attribute:replicas' => '副本数',
	'Class:Deployment/Attribute:cpu_request' => 'CPU请求（核）',
	'Class:Deployment/Attribute:cpu_limit' => 'CPU限制（核）',
	'Class:Deployment/Attribute:mem_request' => '内存限制（MB）',
	'Class:Deployment/Attribute:secret' => '配置项',
	'Class:Deployment/Attribute:person_list' => '联系人',
	'Class:Deployment/Attribute:person_list+' => '链接到此K8S部署的所有联系人',
	'Class:Deployment/Attribute:ingress_list' => 'Ingress',
	'Class:Deployment/Attribute:ingress_list+' => '链接到此K8S部署的所有Ingress',
	'Class:Deployment/Attribute:affinity_list' => '约束条件',
	'Class:Deployment/Attribute:affinity_list+' => '链接到此K8S部署的所有约束条件',
	'Class:Deployment/Attribute:volume_list' => 'Volumes',
	'Class:Deployment/Attribute:volume_list+' => '链接到此K8S部署的所有Volumes',
	'Class:Deployment/Attribute:ingressannotations_list' => 'Nginx',
	'Class:Deployment/Attribute:ingressannotations_list+' => '自定义Nginx配置',

	'Menu:Deployment' => 'K8S部署',
	'Menu:Deployment+' => '所有K8S部署',
	
	'Class:Deployment/Stimulus:ev_new' => '新建',
	'Class:Deployment/Stimulus:ev_online' => '上线',
	'Class:Deployment/Stimulus:ev_offline' => '下线',
	'Class:Deployment/Stimulus:ev_redeploy' => '重部',
	'Class:Deployment/Stimulus:ev_redeploy2' => '重部',
	
	'Deployment:baseinfo' => '基本信息',
	'Deployment:secret' => 'APP配置项数据（YAML格式）',
	'Deployment:other' => '其他信息',
	
	'Class:Deployment/Error:SecretShouldBeYamlFormat' => '配置项须为YAML格式',
	'Class:Deployment/Error:ReservedAppNameNotAllowed' => '%1$s 为保留名称，不允许部署',
	'Class:Deployment/Error:CpuLimitCanNotLessThanCpuRequest' => 'CPU限制值必须大于或等于CPU请求值',

	'Class:Deployment/Tab:Debug' => '调试',
));

// ApplicationSolution
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ApplicationSolution/Attribute:deployment_list' => 'K8S部署',
	'Class:ApplicationSolution/Attribute:deployment_list+' => '此APP的所有K8S部署',
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

// lnkK8sAffinityToDeployment
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkK8sAffinityToDeployment/Attribute:k8saffinity_id' => 'K8sAffinity',
	'Class:lnkK8sAffinityToDeployment/Attribute:k8saffinity_name' => 'K8sAffinity名称',
	'Class:lnkK8sAffinityToDeployment/Attribute:deployment_id' => '部署',
	'Class:lnkK8sAffinityToDeployment/Attribute:deployment_name' => '部署名称',
	'Class:lnkK8sAffinityToDeployment/Attribute:group' => '分组',
	'Class:lnkK8sAffinityToDeployment/Attribute:values' => '表达式VALUES',
));

// K8sVolume
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:K8sVolume/Attribute:volumetype' => 'Volume类型',
	'Class:K8sVolume/Attribute:note' => '注释',
	'Class:K8sVolume/Attribute:deployment_list' => 'K8S部署',
	'Class:K8sVolume/Attribute:deployment_list+' => '链接到此Volume的所有K8S部署',
));

// lnkK8sVolumeToDeployment
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkK8sVolumeToDeployment/Attribute:k8svolume_type' => 'Volume类型',
	'Class:lnkK8sVolumeToDeployment/Attribute:deployment_id' => '部署',
	'Class:lnkK8sVolumeToDeployment/Attribute:k8svolume_note' => '注释',
	'Class:lnkK8sVolumeToDeployment/Attribute:mountpath' => '挂载路径',
	'Class:lnkK8sVolumeToDeployment/Attribute:k8svolume_id' => 'Volume',
));

// K8sIngressAnnotations
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:K8sIngressAnnotations' => '自定义Nginx配置',
	'Class:K8sIngressAnnotations/Attribute:name' => '自定义Nginx配置',
	'Class:K8sIngressAnnotations/Attribute:note' => '用途',
	'Class:K8sIngressAnnotations/Attribute:description' => '详情',
	'Class:K8sIngressAnnotations/Attribute:validate' => '正则校验',
	'Class:K8sIngressAnnotations/Attribute:deployment_list' => 'K8S部署',
	'Class:K8sIngressAnnotations/Attribute:deployment_list+' => '所有K8S部署',	
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

// Ingress
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Ingress' => 'Ingress',
	'Class:Ingress/Name' => '%1$s%2$s',
	'Class:Ingress+' => '所有Ingress',
	
	'Class:Ingress/Attribute:k8snamespace_id' => 'K8S集群',
	'Class:Ingress/Attribute:applicationsolution_id' => 'APP',
	'Class:Ingress/Attribute:domain_id' => '域名',
	'Class:Ingress/Attribute:location' => 'Location',
	'Class:Ingress/Attribute:serviceport' => '服务端口',
	'Class:Ingress/Attribute:deployment_id' => 'K8S部署',
	'Class:Ingress/Attribute:person_list' => '联系人',
	'Class:Ingress/Attribute:person_list+' => '链接到此Ingress的所有联系人',
	
	'Menu:Ingress' => 'Ingress',
	'Menu:Ingress+' => '所有Ingress',
	
	'Class:Ingress/Stimulus:ev_new' => '新建',
	'Class:Ingress/Stimulus:ev_online' => '上线',
	'Class:Ingress/Stimulus:ev_offline' => '下线',
	'Class:Ingress/Stimulus:ev_redeploy' => '重部',
	'Class:Ingress/Stimulus:ev_redeploy2' => '重部',
	
	'Ingress:other' => '其他信息',
));

// Secret
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Secret' => 'APP配置项',
	'Class:Secret+' => '所有APP配置项',
	'Class:Secret/Attribute:name' => '名称',
	'Class:Secret/Attribute:data' => '配置数据',
	'Class:Secret/Attribute:person_list' => '联系人',
	'Class:Secret/Attribute:person_list+' => '链接到此APP配置项的所有联系人',
	'Class:Secret/Attribute:deployment_list' => 'K8S部署',
	'Class:Secret/Attribute:deployment_list+' => '链接到此APP配置项的所有K8S部署',
	'Menu:Secret' => 'APP配置项',		
	'Menu:Secret+' => '所有APP配置项',	
	
	'Class:Secret/Stimulus:ev_new' => '新建',
	'Class:Secret/Stimulus:ev_online' => '上线',
	'Class:Secret/Stimulus:ev_offline' => '下线',	
	'Class:Secret/Stimulus:ev_redeploy' => '重部',
	'Class:Secret/Stimulus:ev_redeploy2' => '重部',	
	
	'Secret:other' => '其他信息',
));

//K8sNamespace
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:K8sNamespace' => 'K8S集群',
	'Class:K8sNamespace+' => '所有K8S集群',
	
	'Class:K8sNamespace/Attribute:name' => '名称',
	'Class:K8sNamespace/Attribute:domain' => '域名',
	'Class:K8sNamespace/Attribute:note' => '注释',
	'Class:K8sNamespace/Attribute:deployment_list' => 'K8S部署',
	'Class:K8sNamespace/Attribute:deployment_list+' => '此集群上的所有K8S部署',
	'Class:K8sNamespace/Attribute:ingress_list' => 'Ingress',
	'Class:K8sNamespace/Attribute:ingress_list+' => '此集群上的所有Ingress',
	
	'Menu:K8sNamespace' => 'K8S集群',	
	'Menu:K8sNamespace+' => '所有K8S集群',
));
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
	'Class:Kubernetes/Attribute:status/Value:stock' => '已下线',
	'Class:Kubernetes/Attribute:status/Value:production' => '在线',
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
	'Class:Deployment/Attribute:image' => '镜像',
	'Class:Deployment/Attribute:url' => 'URL',
	'Class:Deployment/Attribute:containerport' => '容器端口',
	'Class:Deployment/Attribute:replicas' => '副本数',
	'Class:Deployment/Attribute:secret_id' => 'APP配置项',
	'Class:Deployment/Attribute:person_list' => '联系人',
	'Class:Deployment/Attribute:person_list+' => '链接到此K8S部署的所有联系人',
	'Class:Deployment/Attribute:ingress_list' => 'Ingress',
	'Class:Deployment/Attribute:ingress_list+' => '链接到此K8S部署的所有Ingress',
	
	
	'Menu:Deployment' => 'K8S部署',
	'Menu:Deployment+' => '所有K8S部署',
	
	'Class:Deployment/Stimulus:ev_new' => '新建',
	'Class:Deployment/Stimulus:ev_online' => '上线',
	'Class:Deployment/Stimulus:ev_offline' => '下线',		
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
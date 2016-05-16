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
));

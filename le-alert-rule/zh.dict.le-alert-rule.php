<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// AlertType
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:AlertType' => '报警类型',
	'Menu:AlertType' => '报警类型',
	'Menu:AlertType+' => '所有报警类型',
	'Class:AlertType/Attribute:description' => '描述',
	'Class:AlertType/Attribute:alertrule_list' => '报警规则',
	'Class:AlertType/Attribute:alertrule_list+' => '此类型链接的所有报警规则',
));

// AlertRule
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:AlertRule' => '报警规则',
	'Menu:AlertRule' => '报警规则',
	'Menu:AlertRule+' => '所有报警规则',
	'Class:AlertRule/Attribute:alerttype_id' => '报警类型',
	'Class:AlertRule/Attribute:method' => '报警方法',
	'Class:AlertRule/Attribute:method/Value:qoq_fall' => '环比下降',
	'Class:AlertRule/Attribute:method/Value:qoq_rise' => '环比上涨',
	'Class:AlertRule/Attribute:method/Value:qps' => '每秒请求量',
	'Class:AlertRule/Attribute:method/Value:ratio' => '占总请求量的比重',
	'Class:AlertRule/Attribute:qoq_cycle' => '周期',
	'Class:AlertRule/Attribute:threshold' => '阈值',
	'Class:AlertRule/Attribute:functionalcis_list' => '功能配置项',
	'Class:AlertRule/Attribute:functionalcis_list+' => '此规则链接的所有功能配置项',
));

// lnkFunctionalCIToAlertRule
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkFunctionalCIToAlertRule' => '功能配置项/报警规则',
	'Class:lnkFunctionalCIToAlertRule/Attribute:functionalci_id' => '功能配置项',
	'Class:lnkFunctionalCIToAlertRule/Attribute:alertrule_id' => '报警规则',
	'Menu:lnkFunctionalCIToAlertRule' => '功能配置项/报警规则',
	'Menu:lnkFunctionalCIToAlertRule+' => '所有 功能配置项/报警规则',
));

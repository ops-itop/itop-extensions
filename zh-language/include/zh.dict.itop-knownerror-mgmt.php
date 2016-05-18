<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>


/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @author      Robert Deng <denglx@gmail.com>
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: KnownError
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:KnownError' => '已知错误',
	'Class:KnownError+' => '被归档为已知议题的错误',
	'Class:KnownError/Attribute:name' => '名称',
	'Class:KnownError/Attribute:name+' => '',
	'Class:KnownError/Attribute:org_id' => '客户',
	'Class:KnownError/Attribute:org_id+' => '',
	'Class:KnownError/Attribute:cust_name' => '客户',
	'Class:KnownError/Attribute:cust_name+' => '',
	'Class:KnownError/Attribute:problem_id' => '相关的问题',
	'Class:KnownError/Attribute:problem_id+' => '',
	'Class:KnownError/Attribute:problem_ref' => '参考',
	'Class:KnownError/Attribute:problem_ref+' => '',
	'Class:KnownError/Attribute:symptom' => '症状',
	'Class:KnownError/Attribute:symptom+' => '',
	'Class:KnownError/Attribute:root_cause' => '根源原因',
	'Class:KnownError/Attribute:root_cause+' => '',
	'Class:KnownError/Attribute:workaround' => '工作区',
	'Class:KnownError/Attribute:workaround+' => '',
	'Class:KnownError/Attribute:solution' => '方案',
	'Class:KnownError/Attribute:solution+' => '',
	'Class:KnownError/Attribute:error_code' => '错误编码',
	'Class:KnownError/Attribute:error_code+' => '',
	'Class:KnownError/Attribute:domain' => '域',
	'Class:KnownError/Attribute:domain+' => '',
	'Class:KnownError/Attribute:domain/Value:Application' => '应用程序',
	'Class:KnownError/Attribute:domain/Value:Application+' => '应用程序',
	'Class:KnownError/Attribute:domain/Value:Desktop' => '桌面',
	'Class:KnownError/Attribute:domain/Value:Desktop+' => '桌面',
	'Class:KnownError/Attribute:domain/Value:Network' => '网络',
	'Class:KnownError/Attribute:domain/Value:Network+' => '网络',
	'Class:KnownError/Attribute:domain/Value:Server' => '服务器',
	'Class:KnownError/Attribute:domain/Value:Server+' => '服务器',
	'Class:KnownError/Attribute:vendor' => '卖主',
	'Class:KnownError/Attribute:vendor+' => '',
	'Class:KnownError/Attribute:model' => '型号',
	'Class:KnownError/Attribute:model+' => '',
	'Class:KnownError/Attribute:version' => '版本',
	'Class:KnownError/Attribute:version+' => '',
	'Class:KnownError/Attribute:ci_list' => '配置项',
	'Class:KnownError/Attribute:ci_list+' => '',
	'Class:KnownError/Attribute:document_list' => '文档',
	'Class:KnownError/Attribute:document_list+' => '',
));


//
// Class: lnkInfraError
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkInfraError' => 'InfraErrorLinks',
	'Class:lnkInfraError+' => '红外线相关的一个已知错误',
	'Class:lnkInfraError/Attribute:infra_id' => '配置项',
	'Class:lnkInfraError/Attribute:infra_id+' => '',
	'Class:lnkInfraError/Attribute:infra_name' => '配置项名称',
	'Class:lnkInfraError/Attribute:infra_name+' => '',
	'Class:lnkInfraError/Attribute:infra_status' => '配置项状态',
	'Class:lnkInfraError/Attribute:infra_status+' => '',
	'Class:lnkInfraError/Attribute:error_id' => '错误',
	'Class:lnkInfraError/Attribute:error_id+' => '',
	'Class:lnkInfraError/Attribute:error_name' => '错误名称',
	'Class:lnkInfraError/Attribute:error_name+' => '',
	'Class:lnkInfraError/Attribute:reason' => '原因',
	'Class:lnkInfraError/Attribute:reason+' => '',
));

//
// Class: lnkErrorToFunctionalCI
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkErrorToFunctionalCI' => '链接错误 / 功能配置项',
	'Class:lnkErrorToFunctionalCI+' => '与该错误相关联系功能配置项',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_id' => '配置项',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:error_id' => '错误',
	'Class:lnkErrorToFunctionalCI/Attribute:error_id+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:error_name' => '错误名称',
	'Class:lnkErrorToFunctionalCI/Attribute:error_name+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:reason' => '原因',
	'Class:lnkErrorToFunctionalCI/Attribute:reason+' => '',
));


//
// Class: lnkDocumentError
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDocumentToError' => '链接文档 / 已知错误',
	'Class:lnkDocumentToError+' => '在文档和已知错误间的链接',
	'Class:lnkDocumentToError/Attribute:document_id' => '文档',
	'Class:lnkDocumentToError/Attribute:document_id+' => '',
	'Class:lnkDocumentToError/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToError/Attribute:document_name+' => '',
	'Class:lnkDocumentToError/Attribute:error_id' => '错误',
	'Class:lnkDocumentToError/Attribute:error_id+' => '',
	'Class:lnkDocumentToError/Attribute:error_name' => '错误名称',
	'Class:lnkDocumentToError/Attribute:error_name+' => '',
	'Class:lnkDocumentToError/Attribute:link_type' => '信息',
	'Class:lnkDocumentToError/Attribute:link_type+' => '',
));

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:ProblemManagement' => '问题管理',
	'Menu:ProblemManagement+' => '问题管理',
	'Menu:Problem:Shortcuts' => '快捷方式',
	'Menu:NewError' => '新的已知错误',
	'Menu:NewError+' => '新已知错误的创建',
	'Menu:SearchError' => '搜索已知错误',
	'Menu:SearchError+' => '搜索已知错误',
        'Menu:Problem:KnownErrors' => '所有已知错误',
        'Menu:Problem:KnownErrors+' => '所有已知错误',
));

//
// Class: FAQ
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:FAQ' => '常见问题库',
	'Class:FAQ+' => '常见问题',
	'Class:FAQ/Attribute:title' => '标题',
	'Class:FAQ/Attribute:title+' => '',
	'Class:FAQ/Attribute:summary' => '概要',
	'Class:FAQ/Attribute:summary+' => '',
	'Class:FAQ/Attribute:description' => '描述',
	'Class:FAQ/Attribute:description+' => '',
	'Class:FAQ/Attribute:category_id' => '目录',
	'Class:FAQ/Attribute:category_id+' => '',
	'Class:FAQ/Attribute:category_name' => '目录名称',
	'Class:FAQ/Attribute:category_name+' => '',
	'Class:FAQ/Attribute:error_code' => '错误代码',
	'Class:FAQ/Attribute:error_code+' => '',
	'Class:FAQ/Attribute:key_words' => '关键字',
	'Class:FAQ/Attribute:key_words+' => '',
));

//
// Class: FAQCategory
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:FAQCategory' => '常见问题目录',
	'Class:FAQCategory+' => '所有常见问题目录',
	'Class:FAQCategory/Attribute:name' => '名称',
	'Class:FAQCategory/Attribute:name+' => '',
	'Class:FAQCategory/Attribute:faq_list' => '常见问题',
	'Class:FAQCategory/Attribute:faq_list+' => '所有常见问题',
));

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:ProblemManagement' => '问题管理',
	'Menu:ProblemManagement+' => '问题管理',
	'Menu:Problem:Shortcuts' => '快捷方式',
	'Menu:NewError' => '新的已知错误',
	'Menu:NewError+' => '新已知错误的创建',
	'Menu:SearchError' => '搜索已知错误',
	'Menu:SearchError+' => '搜索已知错误',
        'Menu:Problem:KnownErrors' => '所有已知错误',
        'Menu:Problem:KnownErrors+' => '所有已知错误',
	'Menu:FAQCategory' => '常见问题目录',
	'Menu:FAQCategory+' => '所有常见问题目录',
	'Menu:FAQ' => '常见问题库',
	'Menu:FAQ+' => '所有常见问题',

));

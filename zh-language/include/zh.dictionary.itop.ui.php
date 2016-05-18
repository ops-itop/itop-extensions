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
 *
 * @author      Maxima <maximaqiu@hotmail.com>
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

  
//////////////////////////////////////////////////////////////////////
// Classes in 'gui'
//////////////////////////////////////////////////////////////////////
//

//////////////////////////////////////////////////////////////////////
// Classes in 'application'
//////////////////////////////////////////////////////////////////////
//

//
// Class: AuditCategory
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:AuditCategory' => '审计类目',
	'Class:AuditCategory+' => '全部审计中的一个区段',
	'Class:AuditCategory/Attribute:name' => '类目名称',
	'Class:AuditCategory/Attribute:name+' => '类目简称',
	'Class:AuditCategory/Attribute:description' => '审计类目描述',
	'Class:AuditCategory/Attribute:description+' => '该审计类目的详细描述',
	'Class:AuditCategory/Attribute:definition_set' => '定义',
	'Class:AuditCategory/Attribute:definition_set+' => '定义用于审计的对象的OQL语句',
	'Class:AuditCategory/Attribute:rules_list' => '审计规则',
	'Class:AuditCategory/Attribute:rules_list+' => '该类目的审计规则',
));

//
// Class: AuditRule
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:AuditRule' => '审计规则',
	'Class:AuditRule+' => '用于检查给定审计类目的规则',
	'Class:AuditRule/Attribute:name' => '规则名称',
	'Class:AuditRule/Attribute:name+' => '规则简称',
	'Class:AuditRule/Attribute:description' => '审计规则描述',
	'Class:AuditRule/Attribute:description+' => '审计规则详细描述',
	'Class:AuditRule/Attribute:query' => '要运行的查询',
	'Class:AuditRule/Attribute:query+' => '要运行的OQL语句',
	'Class:AuditRule/Attribute:valid_flag' => '有效对象?',
	'Class:AuditRule/Attribute:valid_flag+' => '若规则返回有效对象则True,否则False',
	'Class:AuditRule/Attribute:valid_flag/Value:true' => 'True',
	'Class:AuditRule/Attribute:valid_flag/Value:true+' => 'True',
	'Class:AuditRule/Attribute:valid_flag/Value:false' => 'False',
	'Class:AuditRule/Attribute:valid_flag/Value:false+' => 'False',
	'Class:AuditRule/Attribute:category_id' => '类目',
	'Class:AuditRule/Attribute:category_id+' => '该规则对应的类目',
	'Class:AuditRule/Attribute:category_name' => '类目',
	'Class:AuditRule/Attribute:category_name+' => '该规则对应类目的名称',
));
//
// Class: QueryOQL
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Query' => '查询',
	'Class:Query+' => '查询是一个动态的方式定义一个数据集',
	'Class:Query/Attribute:name' => '名称',
	'Class:Query/Attribute:name+' => '标识查询',
	'Class:Query/Attribute:description' => '描述',
	'Class:Query/Attribute:description+' => '查询语句的详细描述（如用途，用法等）',
	'Class:Query/Attribute:fields' => '字段',
	'Class:Query/Attribute:fields+' => '导出由逗号分隔的属性列表(或者alias.attribute)',

	'Class:QueryOQL' => 'OQL 查询',
	'Class:QueryOQL+' => '基于对象查询语言查询',
	'Class:QueryOQL/Attribute:oql' => '语句',
	'Class:QueryOQL/Attribute:oql+' => 'OQL 语句',
));

//////////////////////////////////////////////////////////////////////
// Classes in 'addon/userrights'
//////////////////////////////////////////////////////////////////////
//

//
// Class: User
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:User' => '用户',
	'Class:User+' => '用户登录名',
	'Class:User/Attribute:finalclass' => '帐户类别',
	'Class:User/Attribute:finalclass+' => '',
	'Class:User/Attribute:contactid' => '联系人 (个人)',
	'Class:User/Attribute:contactid+' => '来自业务数据的个人明细信息',
	'Class:User/Attribute:last_name' => '名',
	'Class:User/Attribute:last_name+' => '对应联系人的名字',
	'Class:User/Attribute:first_name' => '姓',
	'Class:User/Attribute:first_name+' => '对应联系人的姓氏',
	'Class:User/Attribute:email' => 'Email',
	'Class:User/Attribute:email+' => '对应联系人的Email',
	'Class:User/Attribute:login' => '登录名',
	'Class:User/Attribute:login+' => '用户标识字符串',
	'Class:User/Attribute:language' => '语言',
	'Class:User/Attribute:language+' => '用户语言',
	'Class:User/Attribute:language/Value:EN US' => '英语',
	'Class:User/Attribute:language/Value:EN US+' => '英语(U.S.)',
	'Class:User/Attribute:language/Value:FR FR' => '法语',
	'Class:User/Attribute:language/Value:FR FR+' => '法语(France)',
	'Class:User/Attribute:profile_list' => '角色',
	'Class:User/Attribute:profile_list+' => '角色, 为该人员授权',
	'Class:User/Attribute:allowed_org_list' => '允许访问的组织',
	'Class:User/Attribute:allowed_org_list+' => '终端用户被许可看到下述组织的数据. 如果没有指定的组织,则无限制.',
	'Class:User/Error:LoginMustBeUnique' => '"%1s" 已经被使用，登录名必须唯一.',
	'Class:User/Error:AtLeastOneProfileIsNeeded' => '必须至少指定一个角给该用户.',
	'Class:UserInternal' => '内部用户',
	'Class:UserInternal+' => 'iTop自定义用户',
));

//
// Class: URP_Profiles
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_Profiles' => '角色',
	'Class:URP_Profiles+' => '用户角色',
	'Class:URP_Profiles/Attribute:name' => '名称',
	'Class:URP_Profiles/Attribute:name+' => '标签',
	'Class:URP_Profiles/Attribute:description' => '描述',
	'Class:URP_Profiles/Attribute:description+' => '单行描述',
	'Class:URP_Profiles/Attribute:user_list' => '用户',
	'Class:URP_Profiles/Attribute:user_list+' => '拥有该角色的人员',
));

//
// Class: URP_Dimensions
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_Dimensions' => '范围',
	'Class:URP_Dimensions+' => '应用维度 (定义纵深)',
	'Class:URP_Dimensions/Attribute:name' => '名称',
	'Class:URP_Dimensions/Attribute:name+' => '标签',
	'Class:URP_Dimensions/Attribute:description' => '描述',
	'Class:URP_Dimensions/Attribute:description+' => '单行描述',
	'Class:URP_Dimensions/Attribute:type' => '类别',
	'Class:URP_Dimensions/Attribute:type+' => '类名称或数据类别 (投影单位)',
));

//
// Class: URP_UserProfile
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_UserProfile' => '目标用户角色',
	'Class:URP_UserProfile+' => '用户的角色',
	'Class:URP_UserProfile/Attribute:userid' => '用户',
	'Class:URP_UserProfile/Attribute:userid+' => '用户帐户',
	'Class:URP_UserProfile/Attribute:userlogin' => '登录名',
	'Class:URP_UserProfile/Attribute:userlogin+' => '用户的登录名',
	'Class:URP_UserProfile/Attribute:profileid' => '角色',
	'Class:URP_UserProfile/Attribute:profileid+' => '使用角色',
	'Class:URP_UserProfile/Attribute:profile' => '角色',
	'Class:URP_UserProfile/Attribute:profile+' => '角色名称',
	'Class:URP_UserProfile/Attribute:reason' => '原因',
	'Class:URP_UserProfile/Attribute:reason+' => '解释为什么该人员需要拥有该角色',
));

//
// Class: URP_UserOrg
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_UserOrg' => '用户组织',
	'Class:URP_UserOrg+' => '被许可的组织',
	'Class:URP_UserOrg/Attribute:userid' => '用户',
	'Class:URP_UserOrg/Attribute:userid+' => '用户帐户',
	'Class:URP_UserOrg/Attribute:userlogin' => '登录名',
	'Class:URP_UserOrg/Attribute:userlogin+' => '用户的登录名',
	'Class:URP_UserOrg/Attribute:allowed_org_id' => '组织',
	'Class:URP_UserOrg/Attribute:allowed_org_id+' => '被许可的组织',
	'Class:URP_UserOrg/Attribute:allowed_org_name' => '组织',
	'Class:URP_UserOrg/Attribute:allowed_org_name+' => '被许可的组织',
	'Class:URP_UserOrg/Attribute:reason' => '原因',
	'Class:URP_UserOrg/Attribute:reason+' => '解释为什么该人员被许可查阅该组织的数据',
));

//
// Class: URP_ProfileProjection
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_ProfileProjection' => '角色映射',
	'Class:URP_ProfileProjection+' => '角色映射',
	'Class:URP_ProfileProjection/Attribute:dimensionid' => '范围',
	'Class:URP_ProfileProjection/Attribute:dimensionid+' => '应用范围',
	'Class:URP_ProfileProjection/Attribute:dimension' => '范围',
	'Class:URP_ProfileProjection/Attribute:dimension+' => '应用范围',
	'Class:URP_ProfileProjection/Attribute:profileid' => '角色',
	'Class:URP_ProfileProjection/Attribute:profileid+' => '使用角色',
	'Class:URP_ProfileProjection/Attribute:profile' => '角色',
	'Class:URP_ProfileProjection/Attribute:profile+' => '角色名称',
	'Class:URP_ProfileProjection/Attribute:value' => '值语句',
	'Class:URP_ProfileProjection/Attribute:value+' => 'OQL 语句 (using $user) | constant |  | +attribute code',
	'Class:URP_ProfileProjection/Attribute:attribute' => '属性',
	'Class:URP_ProfileProjection/Attribute:attribute+' => '目标属性编码 (可选)',
));

//
// Class: URP_ClassProjection
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_ClassProjection' => '类映射',
	'Class:URP_ClassProjection+' => '类映射',
	'Class:URP_ClassProjection/Attribute:dimensionid' => '范围',
	'Class:URP_ClassProjection/Attribute:dimensionid+' => '应用范围',
	'Class:URP_ClassProjection/Attribute:dimension' => '范围',
	'Class:URP_ClassProjection/Attribute:dimension+' => '应用范围',
	'Class:URP_ClassProjection/Attribute:class' => '类',
	'Class:URP_ClassProjection/Attribute:class+' => '目标类',
	'Class:URP_ClassProjection/Attribute:value' => '值语句',
	'Class:URP_ClassProjection/Attribute:value+' => 'OQL 语句 (using $this) | constant |  | +attribute code',
	'Class:URP_ClassProjection/Attribute:attribute' => '属性',
	'Class:URP_ClassProjection/Attribute:attribute+' => '目标属性编码 (可选)',
));

//
// Class: URP_ActionGrant
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_ActionGrant' => '动作许可',
	'Class:URP_ActionGrant+' => '类上的许可',
	'Class:URP_ActionGrant/Attribute:profileid' => '角色',
	'Class:URP_ActionGrant/Attribute:profileid+' => '使用角色',
	'Class:URP_ActionGrant/Attribute:profile' => '角色',
	'Class:URP_ActionGrant/Attribute:profile+' => '使用角色',
	'Class:URP_ActionGrant/Attribute:class' => '类',
	'Class:URP_ActionGrant/Attribute:class+' => '目标类',
	'Class:URP_ActionGrant/Attribute:permission' => '许可',
	'Class:URP_ActionGrant/Attribute:permission+' => '允许或不允许?',
	'Class:URP_ActionGrant/Attribute:permission/Value:yes' => '是',
	'Class:URP_ActionGrant/Attribute:permission/Value:yes+' => '是',
	'Class:URP_ActionGrant/Attribute:permission/Value:no' => '否',
	'Class:URP_ActionGrant/Attribute:permission/Value:no+' => '否',
	'Class:URP_ActionGrant/Attribute:action' => '动作',
	'Class:URP_ActionGrant/Attribute:action+' => '可用于给定类上的操作',
));

//
// Class: URP_StimulusGrant
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_StimulusGrant' => '刺激许可',
	'Class:URP_StimulusGrant+' => '对象生命周期中刺激的许可',
	'Class:URP_StimulusGrant/Attribute:profileid' => '角色',
	'Class:URP_StimulusGrant/Attribute:profileid+' => '使用角色',
	'Class:URP_StimulusGrant/Attribute:profile' => '角色',
	'Class:URP_StimulusGrant/Attribute:profile+' => '使用角色',
	'Class:URP_StimulusGrant/Attribute:class' => '类',
	'Class:URP_StimulusGrant/Attribute:class+' => '目标类',
	'Class:URP_StimulusGrant/Attribute:permission' => '许可',
	'Class:URP_StimulusGrant/Attribute:permission+' => '允许或不允许?',
	'Class:URP_StimulusGrant/Attribute:permission/Value:yes' => '是',
	'Class:URP_StimulusGrant/Attribute:permission/Value:yes+' => '是',
	'Class:URP_StimulusGrant/Attribute:permission/Value:no' => '否',
	'Class:URP_StimulusGrant/Attribute:permission/Value:no+' => '否',
	'Class:URP_StimulusGrant/Attribute:stimulus' => '刺激',
	'Class:URP_StimulusGrant/Attribute:stimulus+' => '刺激编码',
));

//
// Class: URP_AttributeGrant
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_AttributeGrant' => '属性许可',
	'Class:URP_AttributeGrant+' => '属性层次上的许可',
	'Class:URP_AttributeGrant/Attribute:actiongrantid' => '动作准许',
	'Class:URP_AttributeGrant/Attribute:actiongrantid+' => '动作准许',
	'Class:URP_AttributeGrant/Attribute:attcode' => '属性',
	'Class:URP_AttributeGrant/Attribute:attcode+' => '属性编码',
));

//
// String from the User Interface: menu, messages, buttons, etc...
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'BooleanLabel:yes' => '是',
	'BooleanLabel:no' => '否',
	'Menu:WelcomeMenu' => '欢迎', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:WelcomeMenu+' => '欢迎来到iT管理系统', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:WelcomeMenuPage' => '欢迎', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:WelcomeMenuPage+' => '欢迎来到iT管理系统', // Duplicated into itop-welcome-itil (will be removed from here...)
	'UI:WelcomeMenu:Title' => '欢迎来到iT管理系统',

	'UI:WelcomeMenu:LeftBlock' => '<p>iTop 是完全的, 开发源码的 IT 操作门户.</p>
<ul>系统包括:
<li>完全的 CMDB (Configuration management database) 记录和管理 IT 资产清册.</li>
<li>事件管理模块跟踪和传递所有发生在 IT 系统中的事件.</li>
<li>变更管理模块规划和跟踪 IT 环境中发生的变化.</li>
<li>已知的错误数据库加速事件的处理.</li>
<li>停损模块记录所有计划的停机并通知对应的联系人.</li>
<li>通过仪表板迅速获得 IT 的概览.</li>
</ul>
<p>所有模块可以各自独立地、一步一步地搭建.</p>',

	'UI:WelcomeMenu:RightBlock' => '<p>iTop 是面向服务提供商的, 它使得 IT 工程师方便地管理多客户和多组织.
<ul>iTop, 提供功能丰富的业务处理流程:
<li>提高 IT 管理效率</li> 
<li>驱动 IT 操作能力</li> 
<li>提高用户满意度,从业务能力方面提供执行力.</li>
</ul>
</p>
<p>iTop 是完全开放的,可被集成到您当前的IT管理架构中.</p>
<p>
<ul>利用这个新一代的 IT 操作门户, 可以帮助您:
<li>更好地管理越来越复杂的 IT 环境.</li>
<li>按照您的步骤实现 ITIL 流程.</li>
<li>管理您的 IT 中最重要的设施: 文档化.</li>
</ul>
</p>',
	'UI:WelcomeMenu:AllOpenRequests' => '待处理的请求: %1$d',
	'UI:WelcomeMenu:MyCalls' => '我的请求',
	'UI:WelcomeMenu:OpenIncidents' => '待处理的事件: %1$d',
	'UI:WelcomeMenu:AllConfigItems' => '配置项: %1$d',
	'UI:WelcomeMenu:MyIncidents' => '指派给我的事件',
	'UI:AllOrganizations' => ' 所有组织 ',
	'UI:YourSearch' => '您的搜索',
	'UI:LoggedAsMessage' => '以 %1$s 登录',
	'UI:LoggedAsMessage+Admin' => '以 %1$s 登录(管理员)',
	'UI:Button:Logoff' => '注销',
	'UI:Button:GlobalSearch' => '搜索',
	'UI:Button:Search' => '搜索',
	'UI:Button:Query' => ' 查询 ',
	'UI:Button:Ok' => '确认',
	'UI:Button:Save' => '保存',
	'UI:Button:Cancel' => '取消',
	'UI:Button:Apply' => '应用',
	'UI:Button:Back' => ' << 后退 ',
	'UI:Button:Restart' => ' |<< 重新开始 ',
	'UI:Button:Next' => ' 下一步 >> ',
	'UI:Button:Finish' => ' 结束 ',
	'UI:Button:DoImport' => ' 运行导入 ! ',
	'UI:Button:Done' => ' 完成 ',
	'UI:Button:SimulateImport' => ' 激活导入 ',
	'UI:Button:Test' => '测试!',
	'UI:Button:Evaluate' => ' 评估 ',
	'UI:Button:AddObject' => ' 添加... ',
	'UI:Button:BrowseObjects' => ' 浏览... ',
	'UI:Button:Add' => ' 添加 ',
	'UI:Button:AddToList' => ' << 添加 ',
	'UI:Button:RemoveFromList' => ' 移除 >> ',
	'UI:Button:FilterList' => ' 过滤... ',
	'UI:Button:Create' => ' 创建 ',
	'UI:Button:Delete' => ' 删除 ! ',
	'UI:Button:Rename' => ' 重命名... ',
	'UI:Button:ChangePassword' => ' 改变密码 ',
	'UI:Button:ResetPassword' => ' 重置密码 ',
	
	'UI:SearchToggle' => '搜索',
	'UI:ClickToCreateNew' => '创建一个新的 %1$s',
	'UI:SearchFor_Class' => '搜索 %1$s 对象',
	'UI:NoObjectToDisplay' => '没有对象可显示.',
	'UI:Error:MandatoryTemplateParameter_object_id' => '当link_attr被指定时,参数 object_id 是必须的. 检查显示模板的定义.',
	'UI:Error:MandatoryTemplateParameter_target_attr' => '当 link_attr被指定时, 参数 target_attr 是必须的. 检查显示模板的定义.',
	'UI:Error:MandatoryTemplateParameter_group_by' => '参数 group_by 是必须的. 检查显示模板的定义.',
	'UI:Error:InvalidGroupByFields' => 'group by 的栏目列表是无效的: "%1$s".',
	'UI:Error:UnsupportedStyleOfBlock' => '错误: 不被支持的 block 格式: "%1$s".',
	'UI:Error:IncorrectLinkDefinition_LinkedClass_Class' => '错误的链接定义: 该类别对象的管理: %1$s 找不到该类别的外部键值 %2$s',
	'UI:Error:Object_Class_Id_NotFound' => '对象: %1$s:%2$d 找不到.',
	'UI:Error:WizardCircularReferenceInDependencies' => '错误: 栏目之间的依赖性出现循环引用, 检查数据模型.',
	'UI:Error:UploadedFileTooBig' => '上传文件太大. (允许的最大限制是 %1$s). 检查您的 PHP configuration 中 upload_max_filesize 和 post_max_size.',
	'UI:Error:UploadedFileTruncated.' => '上传的文件被终断 !',
	'UI:Error:NoTmpDir' => '临时目录未定义.',
	'UI:Error:CannotWriteToTmp_Dir' => '无法向硬盘写入临时文件. upload_tmp_dir = "%1$s".',
	'UI:Error:UploadStoppedByExtension_FileName' => '上传因为扩展名被停止. (原始文件名 = "%1$s").',
	'UI:Error:UploadFailedUnknownCause_Code' => '文件上传失败, 未知原因. (错误代码 = "%1$s").',
	
	'UI:Error:1ParametersMissing' => '错误: 必须为该操作指定下述参数: %1$s.',
	'UI:Error:2ParametersMissing' => '错误: 必须为该操作指定下述参数: %1$s 和 %2$s.',
	'UI:Error:3ParametersMissing' => '错误: 必须为该操作指定下述参数: %1$s, %2$s 和 %3$s.',
	'UI:Error:4ParametersMissing' => '错误: 必须为该操作指定下述参数: %1$s, %2$s, %3$s 和 %4$s.',
	'UI:Error:IncorrectOQLQuery_Message' => '错误: 错误的 OQL 查询: %1$s',
	'UI:Error:AnErrorOccuredWhileRunningTheQuery_Message' => '运行该查询时产生了一个错误: %1$s',
	'UI:Error:ObjectAlreadyUpdated' => '错误: 该对象已被更新.',
	'UI:Error:ObjectCannotBeUpdated' => '错误: 对象不能被更新.',
	'UI:Error:ObjectsAlreadyDeleted' => '错误: 对象已被删除!',
	'UI:Error:BulkDeleteNotAllowedOn_Class' => '您未被允许进行 %1$s 类对象的批量删除',
	'UI:Error:DeleteNotAllowedOn_Class' => '您未被允许删除 %1$s 类的对象',
	'UI:Error:BulkModifyNotAllowedOn_Class' => '您未被允许进行 %1$s 类对象的批量更新',
	'UI:Error:ObjectAlreadyCloned' => '错误: 该对象已被克隆!',
	'UI:Error:ObjectAlreadyCreated' => '错误: 该对象已被创建!',
	'UI:Error:Invalid_Stimulus_On_Object_In_State' => '错误: 在对象 %2$s 的 "%3$s" 状态上的无效刺激 "%1$s" .',
	
	
	'UI:GroupBy:Count' => '计数',
	'UI:GroupBy:Count+' => '元素数量',
	'UI:CountOfObjects' => '%1$d 个对象匹配给定的条件.',
	'UI_CountOfObjectsShort' => '%1$d 个对象.',
	'UI:NoObject_Class_ToDisplay' => '没有 %1$s 可以显示',
	'UI:History:LastModified_On_By' => '最后修改 %1$s 被 %2$s.',
	'UI:HistoryTab' => '历史',
	'UI:NotificationsTab' => '通知',
	'UI:History:BulkImports' => '历史性',
	'UI:History:BulkImports+' => 'CSV导入列表 (最近的一个导入)',
	'UI:History:BulkImportDetails' => '从 %1$s (by %2$s) 导入的CSV已进行更改',
	'UI:History:Date' => '日期',
	'UI:History:Date+' => '变更日期',
	'UI:History:User' => '用户',
	'UI:History:User+' => '造成变更的用户',
	'UI:History:Changes' => '变更',
	'UI:History:Changes+' => '对该对象所做的变更',
	'UI:History:StatsCreations' => '已创建',
	'UI:History:StatsCreations+' => '计算对象的创建',
	'UI:History:StatsModifs' => '已修改',
	'UI:History:StatsModifs+' => '计算对象已更改',
	'UI:History:StatsDeletes' => '删除',
	'UI:History:StatsDeletes+' => '计算对象已删除',
	'UI:Loading' => '载入...',
	'UI:Menu:Actions' => '动作',
	'UI:Menu:OtherActions' => '其他操作',
	'UI:Menu:New' => '新建...',
	'UI:Menu:Add' => '添加...',
	'UI:Menu:Manage' => '管理...',
	'UI:Menu:EMail' => '邮件',
	'UI:Menu:CSVExport' => 'CSV 导出...',
	'UI:Menu:Modify' => '修改...',
	'UI:Menu:Delete' => '删除...',
	'UI:Menu:Manage' => '管理...',
	'UI:Menu:BulkDelete' => '删除...',
	'UI:UndefinedObject' => '未定义',
	'UI:Document:OpenInNewWindow:Download' => '在新窗口打开: %1$s, 下载: %2$s',
	'UI:SelectAllToggle+' => '选择 / 清除选择 全部',
	'UI:SplitDateTime-Date' => '日期',
	'UI:SplitDateTime-Time' => '时间',
	'UI:TruncatedResults' => '%1$d 对象显示出来的 %2$d',
	'UI:DisplayAll' => '显示全部',
	'UI:CollapseList' => '收缩',
	'UI:CountOfResults' => '%1$d 个对象',
	'UI:ChangesLogTitle' => '变更记录 (%1$d):',
	'UI:EmptyChangesLogTitle' => '变更记录为空',
	'UI:SearchFor_Class_Objects' => '搜索 %1$s 对象',
	'UI:OQLQueryBuilderTitle' => 'OQL 查询生成器',
	'UI:OQLQueryTab' => 'OQL 查询',
	'UI:SimpleSearchTab' => '简单搜索',
	'UI:Details+' => '明细',
	'UI:SearchValue:Any' => '* 任何 *',
	'UI:SearchValue:Mixed' => '* 混合 *',
	'UI:SearchValue:NbSelected' => '# 已选择',
	'UI:SearchValue:CheckAll' => '全选',
	'UI:SearchValue:UncheckAll' => '全部取消',
	'UI:SelectOne' => '-- 选择一个 --',
	'UI:Login:Welcome' => '欢迎来到 iT 管理系统!',
	'UI:Login:IncorrectLoginPassword' => '登录名或密码有误, 请重试.',
	'UI:Login:IdentifyYourself' => '在继续之前, 确定您自己的身份',
	'UI:Login:UserNamePrompt' => '用户名称',
	'UI:Login:PasswordPrompt' => '密码',
	'UI:Login:ForgotPwd' => '忘记密码?',
	'UI:Login:ForgotPwdForm' => '忘记密码',
	'UI:Login:ForgotPwdForm+' => '系统将发送一封邮件到你的邮箱里，请按照提示重置您的密码.',
	'UI:Login:ResetPassword' => '立即发送!',
	'UI:Login:ResetPwdFailed' => '发送: %1$s 邮件失败',
'UI:ResetPwd-Error-NotPossible' => '外部账户不允许重置密码.',
	'UI:ResetPwd-Error-FixedPwd' => '帐户不允许密码重置.',
	'UI:ResetPwd-Error-NoContact' => '该帐户没有关联人.',
	'UI:ResetPwd-Error-NoEmailAtt' => '该帐户没有关联到具有邮件属性的联系人。请与管理员联系.',
	'UI:ResetPwd-Error-NoEmail' => '缺少一个电子邮件地址。请与管理员联系.',
	'UI:ResetPwd-Error-Send' => '电子邮件发送失败。请与管理员联系.',
	'UI:ResetPwd-EmailSent' => '请查看您的邮箱，并按照指示操作...',
	'UI:ResetPwd-EmailSubject' => '重置您的iTop密码',
	'UI:ResetPwd-EmailBody' => '<body><p>您已要求重置您的ITop密码.</p><p>请点击此链接来<a href="%1$s">输入您的新密码</a></p>.',

	'UI:ResetPwd-Title' => '重置密码',
	'UI:ResetPwd-Error-InvalidToken' => '对不起，不论是密码已经被重置，或者是您已经收到几封电子邮件。请确保您是使用收到的最后一封电子邮件中提供的链接.',
	'UI:ResetPwd-Error-EnterPassword' => '请输入\'%1$s\'的新密码.',
	'UI:ResetPwd-Ready' => '密码已经重置成功.',
	'UI:ResetPwd-Login' => '点击此处进行登录...',

	'UI:Login:About' => '',
	'UI:Login:ChangeYourPassword' => '更改您的密码',
	'UI:Login:OldPasswordPrompt' => '旧密码',
	'UI:Login:NewPasswordPrompt' => '新密码',
	'UI:Login:RetypeNewPasswordPrompt' => '重复新密码',
	'UI:Login:IncorrectOldPassword' => '错误: 旧密码错误',
	'UI:LogOffMenu' => '注销',
	'UI:LogOff:ThankYou' => '谢谢使用iT管理系统',
	'UI:LogOff:ClickHereToLoginAgain' => '点击这里再次登录...',
	'UI:ChangePwdMenu' => '更改密码...',
	'UI:Login:ChangeYourPassword' => '更改您的密码',
	'UI:AccessRO-All' => 'iTop是只读的',
	'UI:AccessRO-Users' => 'iTop最终用户是只读的',
	'UI:ApplicationEnvironment' => '%1$s：的应用环境',
	'UI:Login:RetypePwdDoesNotMatch' => '新密码和重复输入的新密码不符!',
	'UI:Button:Login' => '进入 iT 管理系统',
	'UI:Login:Error:AccessRestricted' => 'iTop 访问被限制. 请联系iTop系统管理员.',
	'UI:Login:Error:AccessAdmin' => '有系统管理员权限才能访问. 请联系iTop系统管理员.',
	'UI:CSVImport:MappingSelectOne' => '-- 选择一个 --',
	'UI:CSVImport:MappingNotApplicable' => '-- 忽略该栏 --',
	'UI:CSVImport:NoData' => '空的数据..., 请提供数据!',
	'UI:Title:DataPreview' => '数据预览',
	'UI:CSVImport:ErrorOnlyOneColumn' => '错误: 数据仅包含一列. 您选择了合适的分隔字符了吗?',
	'UI:CSVImport:FieldName' => '栏 %1$d',
	'UI:CSVImport:DataLine1' => '数据行 1',
	'UI:CSVImport:DataLine2' => '数据行 2',
	'UI:CSVImport:idField' => 'id (主键)',
	'UI:Title:BulkImport' => 'iTop - 大批量导入',
	'UI:Title:BulkImport+' => 'CSV 导入向导',
	'UI:Title:BulkSynchro_nbItem_ofClass_class' => '同步 %1$d 对象类别 %2$s',
	'UI:CSVImport:ClassesSelectOne' => '-- 选择一个 --',
	'UI:CSVImport:ErrorExtendedAttCode' => '内部错误: "%1$s" 是错误的编码, 因为 "%2$s" 不是类 "%3$s" 的外部健',
	'UI:CSVImport:ObjectsWillStayUnchanged' => '%1$d 对象将保持不变.',
	'UI:CSVImport:ObjectsWillBeModified' => '%1$d 对象将被修改.',
	'UI:CSVImport:ObjectsWillBeAdded' => '%1$d 对象将被添加.',
	'UI:CSVImport:ObjectsWillHaveErrors' => '%1$d 对象将有错误.',
	'UI:CSVImport:ObjectsRemainedUnchanged' => '%1$d 对象保持不变.',
	'UI:CSVImport:ObjectsWereModified' => '%1$d 对象已被修改.',
	'UI:CSVImport:ObjectsWereAdded' => '%1$d 对象已被添加.',
	'UI:CSVImport:ObjectsHadErrors' => '%1$d 对象已有错误.',
	'UI:Title:CSVImportStep2' => '步骤 2 of 5: CSV 数据选项',
	'UI:Title:CSVImportStep3' => '步骤 3 of 5: 数据映射',
	'UI:Title:CSVImportStep4' => '步骤 4 of 5: 导入模拟',
	'UI:Title:CSVImportStep5' => '步骤 5 of 5: 导入完成',
	'UI:CSVImport:LinesNotImported' => '无法装载的行:',
	'UI:CSVImport:LinesNotImported+' => '以下行无法导入因为其中包含错误',
	'UI:CSVImport:SeparatorComma+' => ', (逗号)',
	'UI:CSVImport:SeparatorSemicolon+' => '; (分号)',
	'UI:CSVImport:SeparatorTab+' => 'tab',
	'UI:CSVImport:SeparatorOther' => '其他:',
	'UI:CSVImport:QualifierDoubleQuote+' => '" (双引号)',
	'UI:CSVImport:QualifierSimpleQuote+' => '\' (单引号)',
	'UI:CSVImport:QualifierOther' => '其他:',
	'UI:CSVImport:TreatFirstLineAsHeader' => '将第一行视做标题头(列名称)',
	'UI:CSVImport:Skip_N_LinesAtTheBeginning' => '跳过文件开始的 %1$s 行',
	'UI:CSVImport:CSVDataPreview' => 'CSV 数据预览',
	'UI:CSVImport:SelectFile' => '选择导入的文件:',
	'UI:CSVImport:Tab:LoadFromFile' => '从文件装载',
	'UI:CSVImport:Tab:CopyPaste' => '复制和粘贴数据',
	'UI:CSVImport:Tab:Templates' => '模板',
	'UI:CSVImport:PasteData' => '粘贴数据以导入:',
	'UI:CSVImport:PickClassForTemplate' => '选择下载的模板: ',
	'UI:CSVImport:SeparatorCharacter' => '分隔字符:',
	'UI:CSVImport:TextQualifierCharacter' => '文本限定字符',
	'UI:CSVImport:CommentsAndHeader' => '注释和头',
	'UI:CSVImport:SelectClass' => '选择类以导入:',
	'UI:CSVImport:AdvancedMode' => '高级模式',
	'UI:CSVImport:AdvancedMode+' => '在高级模式中,对象的"id" (主键) 可以被用来修改和重命名对象.' .
									'不管怎样,列 "id" (如果存在) 只能被用做一个搜索条件,不能与其它搜索条件混用.',
	'UI:CSVImport:SelectAClassFirst' => '首先选择一个类以配置映射.',
	'UI:CSVImport:HeaderFields' => '栏目',
	'UI:CSVImport:HeaderMappings' => '映射',
	'UI:CSVImport:HeaderSearch' => '搜索?',
	'UI:CSVImport:AlertIncompleteMapping' => '请为每个栏选择一个映射.',
	'UI:CSVImport:AlertNoSearchCriteria' => '请选择至少一个搜索条件',
	'UI:CSVImport:Encoding' => '字符编码',	
	'UI:UniversalSearchTitle' => 'iTop - 通用搜索',
	'UI:UniversalSearch:Error' => '错误: %1$s',
	'UI:UniversalSearch:LabelSelectTheClass' => '选择类以搜索: ',
	
	'UI:CSVReport-Value-Modified' => '修改',
	'UI:CSVReport-Value-SetIssue' => '不能更改 原因: %1$s',
	'UI:CSVReport-Value-ChangeIssue' => '不能更改 %1$s - 原因: %2$s',
	'UI:CSVReport-Value-NoMatch' => '不匹配',
	'UI:CSVReport-Value-Missing' => '缺少必要的值',
	'UI:CSVReport-Value-Ambiguous' => '不明确的: 找到%1$s个对象',
	'UI:CSVReport-Row-Unchanged' => '未更改',
	'UI:CSVReport-Row-Created' => '创建',
	'UI:CSVReport-Row-Updated' => '已更新 %1$d 列',
	'UI:CSVReport-Row-Disappeared' => '消失, 已更改 %1$d 列',
	'UI:CSVReport-Row-Issue' => '问题: %1$s',
	'UI:CSVReport-Value-Issue-Null' => '不能为空',
	'UI:CSVReport-Value-Issue-NotFound' => '没有找到对象',
	'UI:CSVReport-Value-Issue-FoundMany' => '找到 %1$d 匹配',
	'UI:CSVReport-Value-Issue-Readonly' => '此属性是只读属性不能被修改 (当前值: %2$s, 建议值: %3$s)',
	'UI:CSVReport-Value-Issue-Format' => '输入: %1$s 处理失败',
	'UI:CSVReport-Value-Issue-NoMatch' => '异常的属性值 \'%1$s\': 没有找到匹配的,请检查拼写',
	'UI:CSVReport-Value-Issue-Unknown' => '异常的属性值 \'%1$s\': %2$s',
	'UI:CSVReport-Row-Issue-Inconsistent' => '%1$s ：属性值不一至',
	'UI:CSVReport-Row-Issue-Attribute' => '异常的属性值',
	'UI:CSVReport-Row-Issue-MissingExtKey' => '不能创建: %1$s,由于缺少外键',
	'UI:CSVReport-Row-Issue-DateFormat' => '错误的日期格式',
	'UI:CSVReport-Row-Issue-Reconciliation' => '无法关联',
	'UI:CSVReport-Row-Issue-Ambiguous' => '不明确的关联',
	'UI:CSVReport-Row-Issue-Internal' => '内部错误: %1$s, %2$s',
	'UI:CSVReport-Icon-Unchanged' => '未更改',
	'UI:CSVReport-Icon-Modified' => '修改',
	'UI:CSVReport-Icon-Missing' => '缺少',
	'UI:CSVReport-Object-MissingToUpdate' => '缺少对象: 将被更新',
	'UI:CSVReport-Object-MissingUpdated' => '缺少对象: 更新',
	'UI:CSVReport-Icon-Created' => '创建',
	'UI:CSVReport-Object-ToCreate' => '对象将被创建',
	'UI:CSVReport-Object-Created' => '创建对象',
	'UI:CSVReport-Icon-Error' => '错误',
	'UI:CSVReport-Object-Error' => '错误: %1$s',
	'UI:CSVReport-Object-Ambiguous' => '不明确的: %1$s',
	'UI:CSVReport-Stats-Errors' => '加载的 %1$.0f %% 有错误，将被忽略.',
	'UI:CSVReport-Stats-Created' => '加载的 %1$.0f %% 将要创建.',
	'UI:CSVReport-Stats-Modified' => '加载的 %1$.0f %% 将要被修改.',
	'UI:CSVExport:AdvancedMode' => '高级模式',
	'UI:CSVExport:AdvancedMode+' => '在高级模式里, 导出添加几列:对象ID,外键ID和他们的关联属性.',
	'UI:CSVExport:LostChars' => '编码问题',
	'UI:CSVExport:LostChars+' => '下载的文件编码为%1$s. iTop已发经一些字符与此编码格式不兼容，这些字符将被替代（例如：突出的字符），否则他们将被丢弃，你可以从你的web浏览器复制/粘贴这些字符。或者你可以联系管理员更改编码（参考配置设置\'csv_file_default_charset\'）',
	'UI:Audit:Title' => 'iTop - CMDB 审计',
	'UI:Audit:InteractiveAudit' => '交互审计',
	'UI:Audit:HeaderAuditRule' => '设计规则',
	'UI:Audit:HeaderNbObjects' => '# 对象',
	'UI:Audit:HeaderNbErrors' => '# 错误',
	'UI:Audit:PercentageOk' => '% Ok',
	'UI:Audit:ErrorIn_Rule_Reason' => 'OQL 错误在规则 %1$s: %2$s.',
	'UI:Audit:ErrorIn_Category_Reason' => 'OQL 错误在目录 %1$s: %2$s.',
	
	'UI:RunQuery:Title' => 'iTop - OQL 查询评估',
	'UI:RunQuery:QueryExamples' => '查询例子',
	'UI:RunQuery:HeaderPurpose' => '目的',
	'UI:RunQuery:HeaderPurpose+' => '该查询的解释',
	'UI:RunQuery:HeaderOQLExpression' => 'OQL 语句',
	'UI:RunQuery:HeaderOQLExpression+' => 'OQL 语法表示的查询',
	'UI:RunQuery:ExpressionToEvaluate' => '待评估的语句: ',
	'UI:RunQuery:MoreInfo' => '该查询的更多信息: ',
	'UI:RunQuery:DevelopedQuery' => '重新开发的查询语句: ',
	'UI:RunQuery:SerializedFilter' => '序列化的过滤器: ',
	'UI:RunQuery:Error' => '运行该查询时产生了一个错误: %1$s',
	'UI:Query:UrlForExcel' => '用于MS-Excel的Web查询网址',
	'UI:Query:UrlV1' => '字段列表一直未指定. <em>export-V2.php</em> 页面调用不能没有这些内容. 因此,URL建议指向旧的页面: <em>export.php</em>. 这个旧版本导出有以下限制: 导出的列表字段可能取决于ITOP的输出格式和数据模型. <br/>如果你想保证导出的列表字段保持正常，则必须指定“字段”属性的值，并使用页面<em>export-V2.php</em>进行导出.',
	'UI:Schema:Title' => 'iTop 对象方案',
	'UI:Schema:CategoryMenuItem' => '类目 <b>%1$s</b>',
	'UI:Schema:Relationships' => '关联',
	'UI:Schema:AbstractClass' => '抽象类: 该类不能实例化对象.',
	'UI:Schema:NonAbstractClass' => '非抽象类: 该类可以实例化对象.',
	'UI:Schema:ClassHierarchyTitle' => '类层级',
	'UI:Schema:AllClasses' => '所有类',
	'UI:Schema:ExternalKey_To' => '%1$s的外部键',
	'UI:Schema:Columns_Description' => '列: <em>%1$s</em>',
	'UI:Schema:Default_Description' => '缺省: "%1$s"',
	'UI:Schema:NullAllowed' => '允许空',
	'UI:Schema:NullNotAllowed' => '不允许空',
	'UI:Schema:Attributes' => '属性',
	'UI:Schema:AttributeCode' => '属性编码',
	'UI:Schema:AttributeCode+' => '属性的内部编码',
	'UI:Schema:Label' => '标签',
	'UI:Schema:Label+' => '属性标签',
	'UI:Schema:Type' => '类别',
	
	'UI:Schema:Type+' => '属性的数据类型',
	'UI:Schema:Origin' => '起源',
	'UI:Schema:Origin+' => '该属性被定义的基类',
	'UI:Schema:Description' => '描述',
	'UI:Schema:Description+' => '属性的描述',
	'UI:Schema:AllowedValues' => '允许值',
	'UI:Schema:AllowedValues+' => '该属性取值的限制',
	'UI:Schema:MoreInfo' => '更多信息',
	'UI:Schema:MoreInfo+' => '该栏目在数据库中被定义的更多信息',
	'UI:Schema:SearchCriteria' => '搜索条件',
	'UI:Schema:FilterCode' => '过滤器编码',
	'UI:Schema:FilterCode+' => '该搜索条件的编码',
	'UI:Schema:FilterDescription' => '描述',
	'UI:Schema:FilterDescription+' => '该搜索条件的描述',
	'UI:Schema:AvailOperators' => '可用的算子',
	'UI:Schema:AvailOperators+' => '该搜索条件可能的算子',
	'UI:Schema:ChildClasses' => '子类',
	'UI:Schema:ReferencingClasses' => '参考类',
	'UI:Schema:RelatedClasses' => '关联类',
	'UI:Schema:LifeCycle' => '生命周期',
	'UI:Schema:Triggers' => '触发器',
	'UI:Schema:Relation_Code_Description' => '关联 <em>%1$s</em> (%2$s)',
	'UI:Schema:RelationDown_Description' => '下: %1$s',
	'UI:Schema:RelationUp_Description' => '上: %1$s',
	'UI:Schema:RelationPropagates' => '%1$s: 扩展到 %2$d 个层级, 查询: %3$s',
	'UI:Schema:RelationDoesNotPropagate' => '%1$s: 没有扩展 (%2$d 层级), 查询: %3$s',
	'UI:Schema:Class_ReferencingClasses_From_By' => '%1$s 被类 %2$s 关联, 通过栏目 %3$s',
	'UI:Schema:Class_IsLinkedTo_Class_Via_ClassAndAttribute' => '%1$s 被链接到 %2$s 通过 %3$s::<em>%4$s</em>',
	'UI:Schema:Links:1-n' => '类指向 %1$s (1:n 链接):',
	'UI:Schema:Links:n-n' => '类链接到 %1$s (n:n 链接):',
	'UI:Schema:Links:All' => '全部相关类的图',
	'UI:Schema:NoLifeCyle' => '该类没有生命周期的定义.',
	'UI:Schema:LifeCycleTransitions' => '转换',
	'UI:Schema:LifeCyleAttributeOptions' => '属性选项',
	'UI:Schema:LifeCycleHiddenAttribute' => '隐藏',
	'UI:Schema:LifeCycleReadOnlyAttribute' => '只读',
	'UI:Schema:LifeCycleMandatoryAttribute' => '必须',
	'UI:Schema:LifeCycleAttributeMustChange' => '必须变更',
	'UI:Schema:LifeCycleAttributeMustPrompt' => '用户将被提示改变值',
	'UI:Schema:LifeCycleEmptyList' => '空列表',
	
	'UI:LinksWidget:Autocomplete+' => '输入前3个字符...',
	'UI:Edit:TestQuery' => '测试查询',
	'UI:Combo:SelectValue' => '--- 选择一个值 ---',
	'UI:Label:SelectedObjects' => '被选对象: ',
	'UI:Label:AvailableObjects' => '可用对象: ',
	'UI:Link_Class_Attributes' => '%1$s 属性',
	'UI:SelectAllToggle+' => '选择全部 / 清除全部选择',
	'UI:AddObjectsOf_Class_LinkedWith_Class_Instance' => '添加 %1$s 个对象, 链接 %2$s: %3$s',
	'UI:AddObjectsOf_Class_LinkedWith_Class' => '添加 %1$s 个对象与 %2$s 链接',
	'UI:ManageObjectsOf_Class_LinkedWith_Class_Instance' => '管理 %1$s 个对象, 链接 %2$s: %3$s',
	'UI:AddLinkedObjectsOf_Class' => '添加 %1$s...',
	'UI:RemoveLinkedObjectsOf_Class' => '移除选择的对象',
	'UI:Message:EmptyList:UseAdd' => '列表是空的, 使用 "添加..." 按扭以添加元素.',
	'UI:Message:EmptyList:UseSearchForm' => '使用上面的搜索表单, 以搜索要添加的对象.',
	
	'UI:Wizard:FinalStepTitle' => '最后步骤: 确认',
	'UI:Title:DeletionOf_Object' => '删除 %1$s',
	'UI:Title:BulkDeletionOf_Count_ObjectsOf_Class' => '批量删除 %1$d 个 %2$s 类的对象',
	'UI:Delete:NotAllowedToDelete' => '您未被允许删除该对象',
	'UI:Delete:NotAllowedToUpdate_Fields' => '您未被允许更新下述栏目: %1$s',
	'UI:Error:NotEnoughRightsToDelete' => '该对象不能被删除, 因为当前用户没有足够权限',
	'UI:Error:CannotDeleteBecause' => '该对像不能被删除，因为: %1$s',
	'UI:Error:CannotDeleteBecauseOfDepencies' => '该对象不能被删除, 因为一些手工操作必须事先完成',
	'UI:Error:CannotDeleteBecauseManualOpNeeded' => '该对象不能被删除，因为某些项目需要手动删除后才能操作',
	'UI:Archive_User_OnBehalfOf_User' => '%1$s 代替 %2$s',
	'UI:Delete:Deleted' => '删除',
	'UI:Delete:AutomaticallyDeleted' => '自动删除了',
	'UI:Delete:AutomaticResetOf_Fields' => '自动重置栏目: %1$s',
	'UI:Delete:CleaningUpRefencesTo_Object' => '清除所有对 %1$s 的关联...',
	'UI:Delete:CleaningUpRefencesTo_Several_ObjectsOf_Class' => '清除所有对 %2$s 类的 %1$d 个对象的关联...',
	'UI:Delete:Done+' => '做了什么...',
	'UI:Delete:_Name_Class_Deleted' => '%1$s - %2$s 删除了.',
	'UI:Delete:ConfirmDeletionOf_Name' => '删除 %1$s',
	'UI:Delete:ConfirmDeletionOf_Count_ObjectsOf_Class' => '删除 %2$s 类的 %1$d 个对象',
	'UI:Delete:CannotDeleteBecause' => '不能删除: %1$s',
	'UI:Delete:ShouldBeDeletedAtomaticallyButNotPossible' => '应该自动删除, 但您未被允许这样做',
	'UI:Delete:MustBeDeletedManuallyButNotPossible' => '必须手工删除 - 但您未被允许删除该对象, 请联系您的应用程序系统管理员',
	'UI:Delete:WillBeDeletedAutomatically' => '将被自动删除',
	'UI:Delete:MustBeDeletedManually' => '必须手工删除',
	'UI:Delete:CannotUpdateBecause_Issue' => '应该被自动更新, 但是: %1$s',
	'UI:Delete:WillAutomaticallyUpdate_Fields' => '将被自动更新 (重置: %1$s)',	
	'UI:Delete:Count_Objects/LinksReferencing_Object' => '%1$d 个对象/链接关联了 %2$s',
	'UI:Delete:Count_Objects/LinksReferencingTheObjects' => '%1$d 个对象/链接关联了一些将删除的对象',	
	'UI:Delete:ReferencesMustBeDeletedToEnsureIntegrity' => '为确保数据库的完整性, 任何关联应该更进一步清除',
	'UI:Delete:Consequence' => '将做什么',
	'UI:Delete:Consequence+' => '将做什么',
	'UI:Delete:SorryDeletionNotAllowed' => '抱歉, 您未被允许删除该对象, 请看上述详细解释',
	'UI:Delete:PleaseDoTheManualOperations' => '在要求删除该对象之前, 请先手工完成上述列出的操作',
	'UI:Delect:Confirm_Object' => '请确认您要删除 %1$s.',
	'UI:Delect:Confirm_Count_ObjectsOf_Class' => '请确认您要删除下列 %2$s 类的 %1$d 个对象.',
	'UI:WelcomeToITop' => '欢迎来到 iT 管理系统',
	'UI:DetailsPageTitle' => 'iTop - %1$s - %2$s 详细内容',
	'UI:ErrorPageTitle' => 'iTop - 错误',
	'UI:ObjectDoesNotExist' => '抱歉, 该对象不存在 (或您未被允许浏览该对象).',
	'UI:SearchResultsPageTitle' => 'iTop - 搜索结果',
	'UI:Search:NoSearch' => '没有可搜索的内容',
	'UI:Search:NeedleTooShort' => '"%1$s" 字符过短. 请输入至少 %2$d 个字符.',
	'UI:Search:Ongoing' => '正在搜索 "%1$s"',
	'UI:Search:Enlarge' => '扩大搜索',
	'UI:FullTextSearchTitle_Text' => '"%1$s" 的结果:',
	'UI:Search:Count_ObjectsOf_Class_Found' => '发现 %2$s 类的 %1$d 个对象.',
	'UI:Search:NoObjectFound' => '未发现对象.',
	'UI:ModificationPageTitle_Object_Class' => 'iTop - %1$s - %2$s 修改',
	'UI:ModificationTitle_Class_Object' => '修改 %1$s: <span class=\"hilite\">%2$s</span>',
	'UI:ClonePageTitle_Object_Class' => 'iTop - 克隆 %1$s - %2$s 修改',
	'UI:CloneTitle_Class_Object' => '克隆 %1$s: <span class=\"hilite\">%2$s</span>',
	'UI:CreationPageTitle_Class' => 'iTop - 创建一个新的 %1$s ',
	'UI:CreationTitle_Class' => '创建一个新的 %1$s',
	'UI:SelectTheTypeOf_Class_ToCreate' => '选择要创建的 %1$s 的类别:',
	'UI:Class_Object_NotUpdated' => '未发现变化, %1$s (%2$s) <strong>没有</strong> 被更新.',
	'UI:Class_Object_Updated' => '%1$s (%2$s) 更新了.',
	'UI:BulkDeletePageTitle' => 'iTop - 批量删除',
	'UI:BulkDeleteTitle' => '选择您要删除的对象:',
	'UI:PageTitle:ObjectCreated' => 'iTop 对象创建了.',
	'UI:Title:Object_Of_Class_Created' => '%1$s - %2$s 创建了.',
	'UI:Apply_Stimulus_On_Object_In_State_ToTarget_State' => '应用 %1$s 在对象: %2$s 上, 从 %3$s 状态到目标状态: %4$s.',
	'UI:ObjectCouldNotBeWritten' => '对象不能写入: %1$s',
	'UI:PageTitle:FatalError' => 'iTop - 致命错误',
	'UI:SystemIntrusion' => '访问被禁止. 您正尝试未被许可的操作.',
	'UI:FatalErrorMessage' => '致命错误, iTop 无法继续.',
	'UI:Error_Details' => '错误: %1$s.',

	'UI:PageTitle:ClassProjections'	=> 'iTop 用户管理 - 类映射',
	'UI:PageTitle:ProfileProjections' => 'iTop 用户管理 - 角色映射',
	'UI:UserManagement:Class' => '类',
	'UI:UserManagement:Class+' => '对象的类',
	'UI:UserManagement:ProjectedObject' => '对象',
	'UI:UserManagement:ProjectedObject+' => '被映射的对象',
	'UI:UserManagement:AnyObject' => '* 任何 *',
	'UI:UserManagement:User' => '用户',
	'UI:UserManagement:User+' => '与该映射相关的用户',
	'UI:UserManagement:Profile' => '角色',
	'UI:UserManagement:Profile+' => '映射被指定的角色',
	'UI:UserManagement:Action:Read' => '读',
	'UI:UserManagement:Action:Read+' => '读/显示对象',
	'UI:UserManagement:Action:Modify' => '修改',
	'UI:UserManagement:Action:Modify+' => '创建和编辑(修改)对象',
	'UI:UserManagement:Action:Delete' => '删除',
	'UI:UserManagement:Action:Delete+' => '删除对象',
	'UI:UserManagement:Action:BulkRead' => '大批量读 (导出)',
	'UI:UserManagement:Action:BulkRead+' => '列出对象或批量导出',
	'UI:UserManagement:Action:BulkModify' => '批量修改',
	'UI:UserManagement:Action:BulkModify+' => '批量创建/编辑 (CSV 导入)',
	'UI:UserManagement:Action:BulkDelete' => '批量删除',
	'UI:UserManagement:Action:BulkDelete+' => '批量删除对象',
	'UI:UserManagement:Action:Stimuli' => '作用',
	'UI:UserManagement:Action:Stimuli+' => '许可的 (复合的) 动作',
	'UI:UserManagement:Action' => '动作',
	'UI:UserManagement:Action+' => '该用户进行的动作',
	'UI:UserManagement:TitleActions' => '动作',
	'UI:UserManagement:Permission' => '许可',
	'UI:UserManagement:Permission+' => '用户的许可',
	'UI:UserManagement:Attributes' => '属性',
	'UI:UserManagement:ActionAllowed:Yes' => '是',
	'UI:UserManagement:ActionAllowed:No' => '否',
	'UI:UserManagement:AdminProfile+' => '系统管理员拥有数据库中所有对象的完全读/写访问权限.',
	'UI:UserManagement:NoLifeCycleApplicable' => 'N/A',
	'UI:UserManagement:NoLifeCycleApplicable+' => '该类未定义生命周期',
	'UI:UserManagement:GrantMatrix' => '授权矩阵',
	'UI:UserManagement:LinkBetween_User_And_Profile' => '链接 %1$s 和 %2$s',
	'UI:UserManagement:LinkBetween_User_And_Org' => '链接 %1$s 和 %2$s',
	
	'Menu:AdminTools' => '管理工具', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:AdminTools+' => '管理工具', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:AdminTools?' => '具有系统管理员角色的用户才能获得的工具', // Duplicated into itop-welcome-itil (will be removed from here...)

	'UI:ChangeManagementMenu' => '变更管理',
	'UI:ChangeManagementMenu+' => '变更管理',
	'UI:ChangeManagementMenu:Title' => '变更概览',
	'UI-ChangeManagementMenu-ChangesByType' => '按类别划分的变更',
	'UI-ChangeManagementMenu-ChangesByStatus' => '按状态划分的变更',
	'UI-ChangeManagementMenu-ChangesByWorkgroup' => '按工作组划分的变更',
	'UI-ChangeManagementMenu-ChangesNotYetAssigned' => '尚未指派的变更',

	'UI:ConfigurationManagementMenu' => '配置管理',
	'UI:ConfigurationManagementMenu+' => '配置管理',
	'UI:ConfigurationManagementMenu:Title' => '基础架构概览',
	'UI-ConfigurationManagementMenu-InfraByType' => '按类别划分基础架构对象',
	'UI-ConfigurationManagementMenu-InfraByStatus' => '按状态划分基础架构对象',
	
'UI:ConfigMgmtMenuOverview:Title' => '配置管理仪表板',
'UI-ConfigMgmtMenuOverview-FunctionalCIbyStatus' => '按状态配置项目',
'UI-ConfigMgmtMenuOverview-FunctionalCIByType' => '按类别配置项目',

'UI:RequestMgmtMenuOverview:Title' => '请求管理仪表板',
'UI-RequestManagementOverview-RequestByService' => '按服务划分用户请求',
'UI-RequestManagementOverview-RequestByPriority' => '按优先级划分用户请求',
'UI-RequestManagementOverview-RequestUnassigned' => '尚未指派办理人的用户请求',
'UI:IncidentMgmtMenuOverview:Title' => '事件管理仪表板',
'UI-IncidentManagementOverview-IncidentByService' => '按服务级划分事件',
'UI-IncidentManagementOverview-IncidentByPriority' => '按优先级划分事件',
'UI-IncidentManagementOverview-IncidentUnassigned' => '尚未指派办理人的事件',
'UI:ChangeMgmtMenuOverview:Title' => '变更管理仪表板',
'UI-ChangeManagementOverview-ChangeByType' => '按类别划分变更',
'UI-ChangeManagementOverview-ChangeUnassigned' => '尚未指派办理人的变更',
'UI-ChangeManagementOverview-ChangeWithOutage' => '变更引起的停机',
'UI:ServiceMgmtMenuOverview:Title' => '服务管理仪表板',

'UI-ServiceManagementOverview-CustomerContractToRenew' => '客户联系人需在30日内更新',
'UI-ServiceManagementOverview-ProviderContractToRenew' => '供应商联系人需在30日内更新',

	'UI:ContactsMenu' => '联系人',
	'UI:ContactsMenu+' => '联系人',
	'UI:ContactsMenu:Title' => '联系人概览',
	'UI-ContactsMenu-ContactsByLocation' => '按地域划分联系人',
	'UI-ContactsMenu-ContactsByType' => '按类别划分联系人',
	'UI-ContactsMenu-ContactsByStatus' => '按状态划分联系人',

	'Menu:CSVImportMenu' => 'CSV 导入', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:CSVImportMenu+' => '大批量创建或修改', // Duplicated into itop-welcome-itil (will be removed from here...)
	
	'Menu:DataModelMenu' => '数据模型', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:DataModelMenu+' => '数据模型概览', // Duplicated into itop-welcome-itil (will be removed from here...)
	
	'Menu:ExportMenu' => '导出', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:ExportMenu+' => '以HTML, CSV or XML格式导出任何查询的结果', // Duplicated into itop-welcome-itil (will be removed from here...)
	
	'Menu:NotificationsMenu' => '通知', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:NotificationsMenu+' => '通知的配置', // Duplicated into itop-welcome-itil (will be removed from here...)
	'UI:NotificationsMenu:Title' => '配置 <span class="hilite">通知</span>',
	'UI:NotificationsMenu:Help' => '帮助',
	'UI:NotificationsMenu:HelpContent' => '<p>在 iTop 中, 通知可以被完全客户化定制. 它们是基于两个对象集: <i>触发器和动作</i>.</p>
<p><i><b>触发器</b></i> 定义了什么时候一个通知将被执行. 有3种触发器, 覆盖了一个对象生命周期的3个阶段:
<ol>
	<li>"OnCreate" 触发器, 当某个特定类的对象创建时将触发</li>
	<li>"OnStateEnter" 触发器, 在某个给定类的对象进入某个特定状态前将触发(从另外一个状态而来)</li>
	<li>"OnStateLeave" 触发器, 在某个给定类的对象离开某个特定状态时将触发</li>
	<li>"on threshold"触发器, 在某个给定的服务解决时间或者服务响影时间到达时将触发</li>
	<li>"on portal update" 触发器, 在某个给定的门户工单更新时将触发</li>
</ol>
</p>
<p>
<i><b>动作</b></i> 定义了触发器触发时要执行的动作. 目前, 仅有一种动作存在于发送邮件过程中.
这些动作还定义了用于发送邮件及收件人,重要性等的模板.
</p>
<p>一个专门页面: <a href="../setup/email.test.php" target="_blank">email.test.php</a> 可用于测试和调试您的 PHP mail 配置.</p>
<p>若要执行, 动作必须和触发器相关联.
当与一个触发器关联时, 每个动作都被赋予一个顺序号, 规定了按什么样的顺序执行这些动作.</p>',
	'UI:NotificationsMenu:Triggers' => '触发器',
	'UI:NotificationsMenu:AvailableTriggers' => '可用的触发器',
	'UI:NotificationsMenu:OnCreate' => '当一个对象被创建',
	'UI:NotificationsMenu:OnStateEnter' => '当一个对象进入给定状态',
	'UI:NotificationsMenu:OnStateLeave' => '当一个对象离开给定状态',
	'UI:NotificationsMenu:Actions' => '动作',
	'UI:NotificationsMenu:AvailableActions' => '有效的动作',
	
	'Menu:AuditCategories' => '审计类目', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:AuditCategories+' => '审计类目', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:Notifications:Title' => '审计类目', // Duplicated into itop-welcome-itil (will be removed from here...)
	
	'Menu:RunQueriesMenu' => '运行查询', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:RunQueriesMenu+' => '运行任何查询', // Duplicated into itop-welcome-itil (will be removed from here...)
	
	'Menu:QueryMenu' => '查询手册', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:QueryMenu+' => '查询手册', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:DataAdministration' => '数据管理', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:DataAdministration+' => '数据管理', // Duplicated into itop-welcome-itil (will be removed from here...)
	
	'Menu:UniversalSearchMenu' => '通用搜索', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:UniversalSearchMenu+' => '搜索所有...', // Duplicated into itop-welcome-itil (will be removed from here...)
	
	'Menu:UserManagementMenu' => '用户管理', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:UserManagementMenu+' => '用户管理', // Duplicated into itop-welcome-itil (will be removed from here...)

	'Menu:ProfilesMenu' => '角色', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:ProfilesMenu+' => '角色', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:ProfilesMenu:Title' => '角色', // Duplicated into itop-welcome-itil (will be removed from here...)

	'Menu:UserAccountsMenu' => '用户帐户', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:UserAccountsMenu+' => '用户帐户', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:UserAccountsMenu:Title' => '用户帐户',	 // Duplicated into itop-welcome-itil (will be removed from here...)

	'UI:iTopVersion:Short' => 'iTop version %1$s',
	'UI:iTopVersion:Long' => 'iTop version %1$s-%2$s built on %3$s by Maxima汉化 1.1.1',
	'UI:PropertiesTab' => '属性',

	'UI:OpenDocumentInNewWindow_' => '在新窗口打开文档: %1$s',
	'UI:DownloadDocument_' => '下载该文档: %1$s',
	'UI:Document:NoPreview' => '该类文档无法预览',
	'UI:Download-CSV' => '下载 %1$s',

	'UI:DeadlineMissedBy_duration' => '已超过%1$s',
	'UI:Deadline_LessThan1Min' => '< 1 分钟',		
	'UI:Deadline_Minutes' => '%1$d 分钟',			
	'UI:Deadline_Hours_Minutes' => '%1$d小时 %2$d分钟',			
	'UI:Deadline_Days_Hours_Minutes' => '%1$d天 %2$d小时 %3$d分钟',
	'UI:Help' => '帮助',
	'UI:PasswordConfirm' => '(确认)',
	'UI:BeforeAdding_Class_ObjectsSaveThisObject' => '在添加更多 %1$s 对象前, 保存该对象.',
	'UI:DisplayThisMessageAtStartup' => '在启动时显示该消息',
	'UI:RelationshipGraph' => '图览',
	'UI:RelationshipList' => '列表',
	'UI:RelationGroups' => '组',
	'UI:OperationCancelled' => '操作已取消',
	'UI:ElementsDisplayed' => '过滤',
	'UI:RelationGroupNumber_N' => '组 #%1$d',
	'UI:Relation:ExportAsPDF' => '导出为PDF...',
	'UI:RelationOption:GroupingThreshold' => '分组阈值',
	'UI:Relation:AdditionalContextInfo' => '其他方面信息',
	'UI:Relation:NoneSelected' => '无',
	'UI:Relation:Zoom' => '放大',
	'UI:Relation:ExportAsAttachment' => '导出为附件...',
	'UI:Relation:DrillDown' => '详细信息...',
	'UI:Relation:PDFExportOptions' => 'PDF导出选项',
	'UI:Relation:AttachmentExportOptions_Name' => '%1$s 附件选项',
	'UI:RelationOption:Untitled' => '无标题',
	'UI:Relation:Key' => 'Key',
	'UI:Relation:Comments' => '注释',
	'UI:RelationOption:Title' => '标题',
	'UI:RelationOption:IncludeList' => '事件列表',
	'UI:RelationOption:Comments' => '注释',
	'UI:Button:Export' => '导出',
	'UI:Relation:PDFExportPageFormat' => '页面格式',
	'UI:PageFormat_A3' => 'A3',
	'UI:PageFormat_A4' => 'A4',
	'UI:PageFormat_Letter' => '信纸',
	'UI:Relation:PDFExportPageOrientation' => '页面方向',
	'UI:PageOrientation_Portrait' => '纵向',
	'UI:PageOrientation_Landscape' => '横向',
	'UI:RelationTooltip:Redundancy' => '冗余',
	'UI:RelationTooltip:ImpactedItems_N_of_M' => '# 影响项目: %1$d / %2$d',
	'UI:RelationTooltip:CriticalThreshold_N_of_M' => '临界阈值: %1$d / %2$d',
	'Portal:Title' => 'iT管理系统用户门户',
	'Portal:NoRequestMgmt' => '亲爱的 %1$s, 你已经被重定向到这个页面，因为您的帐户权限被配置为 \'Portal user\'. 不幸的是，ITOP尚未安装\'Request Management\'功能模块. 请联系管理员.',
	'Portal:Refresh' => '刷新',
	'Portal:Back' => '返回',
	'Portal:WelcomeUserOrg' => 'Welcome %1$s, from %2$s',
	'Portal:TitleDetailsFor_Request' => '对于请求的详细信息',
	'Portal:ShowOngoing' => '显示打开的请求',
	'Portal:ShowClosed' => '显示关闭的请求',
	'Portal:CreateNewRequest' => '创建一个新的请求',
	'Portal:ChangeMyPassword' => '改变我的密码',
	'Portal:Disconnect' => '断开',
	'Portal:OpenRequests' => '我的待解决请求',
	'Portal:ClosedRequests'  => '我已关闭的请求',
	'Portal:ResolvedRequests'  => '我的已解决请求',
	'Portal:SelectService' => '从目录中选择一个服务:',
	'Portal:PleaseSelectOneService' => '请选择一个服务',
	'Portal:SelectSubcategoryFrom_Service' => '从服务中选择一个子类 %1$s:',
	'Portal:PleaseSelectAServiceSubCategory' => '请选择一个子类',
	'Portal:DescriptionOfTheRequest' => '输入您的请求描述:',
	'Portal:TitleRequestDetailsFor_Request' => '请求详细内容 %1$s:',
	'Portal:NoOpenRequest' => '该项目里没有请求.',
	'Portal:NoClosedRequest' => '该项目里没有请求',
	'Portal:Button:ReopenTicket' => '重新打开这个工单',
	'Portal:Button:CloseTicket' => '关闭这个工单',
	'Portal:Button:UpdateRequest' => '更新请求',
	'Portal:EnterYourCommentsOnTicket' => '输入您对于该工单解决情况的评价:',
	'Portal:ErrorNoContactForThisUser' => '错误: 当前用户没有和一个联系人或人员关联. 请联系您的系统管理员.',
	'Portal:Attachments' => '附件',
	'Portal:AddAttachment' => ' 添加附件 ',
	'Portal:RemoveAttachment' => ' 移除附件 ',
	'Portal:Attachment_No_To_Ticket_Name' => '附件 #%1$d 发送到 %2$s (%3$s)',
	'Portal:SelectRequestTemplate' => '选择 %1$s 模板',
	'Enum:Undefined' => '未定义',
	'UI:DurationForm_Days_Hours_Minutes_Seconds' => '%1$s 天 %2$s 时 %3$s 分 %4$s 秒',
	'UI:ModifyAllPageTitle' => '全部修改',
	'UI:Modify_N_ObjectsOf_Class' => '修改 %2$s 类别的 %1$d 对象',
	'UI:Modify_M_ObjectsOf_Class_OutOf_N' => '修改 %1$d 个 %2$s 对像类别到 %3$d',
	'UI:Menu:ModifyAll' => '修改...',
	'UI:Button:ModifyAll' => '全部修改',
	'UI:Button:PreviewModifications' => '修改预览 >>',
	'UI:ModifiedObject' => '修改对象',
	'UI:BulkModifyStatus' => '操作',
	'UI:BulkModifyStatus+' => '操作的状态',
	'UI:BulkModifyErrors' => '错误 (如果有的话)',
	'UI:BulkModifyErrors+' => '防止错误的修改',	
	'UI:BulkModifyStatusOk' => 'Ok',
	'UI:BulkModifyStatusError' => '错误',
	'UI:BulkModifyStatusModified' => '修改',
	'UI:BulkModifyStatusSkipped' => '跳过',
	'UI:BulkModify_Count_DistinctValues' => '%1$d 个不同的值:',
	'UI:BulkModify:Value_Exists_N_Times' => '%1$s, %2$d 项',
	'UI:BulkModify:N_MoreValues' => '%1$d 更多的值...',
	'UI:AttemptingToSetAReadOnlyAttribute_Name' => '尝试设置了只读字段: %1$s',
	'UI:FailedToApplyStimuli' => '操作失败.',
	'UI:StimulusModify_N_ObjectsOf_Class' => '%1$s: 修改 %2$d 类别的 %3$s 对象',
	'UI:CaseLogTypeYourTextHere' => '在此输入您的文本:',
	'UI:CaseLog:DateFormat' => 'Y-m-d H:i:s',
	'UI:CaseLog:Header_Date_UserName' => '%1$s - %2$s:',
	'UI:CaseLog:InitialValue' => '初始值:',
	'UI:AttemptingToSetASlaveAttribute_Name' => ' %1$s 该字段是不可写的，因为它是由数据同步控制，该值不能设置.',
	'UI:ActionNotAllowed' => '你不允许对这些对象执行此操作.',
	'UI:BulkAction:NoObjectSelected' => '请至少选择一个对象来执行此操作',
	'UI:AttemptingToChangeASlaveAttribute_Name' => '%1$s 该字段是不可写的，因为它是由数据同步控制，该值保持不变.',
	'UI:Pagination:HeaderSelection' => '总共: %1$s 对象 (已选择 %2$s 对象).',
	'UI:Pagination:HeaderNoSelection' => '总计: %1$s 对象.',
	'UI:Pagination:PageSize' => '每页 %1$s 对象',
	'UI:Pagination:PagesLabel' => '页数:',
	'UI:Pagination:All' => '全部',
	'UI:HierarchyOf_Class' => '%1$s 的层次',
	'UI:Preferences' => '首选项...',
	'UI:FavoriteOrganizations' => '收藏的组织',
	'UI:FavoriteOrganizations+' => '检查要看到下拉菜单中快速访问的组织下面的列表. '.
								   '请注意，这不是一个安全设置，从任何组织对象仍然可见，可以通过在下拉列表中选择“所有组织”进行访问.',
	'UI:FavoriteLanguage' => '用户界面语言',
	'UI:Favorites:SelectYourLanguage' => '选择您的首选语言',
	'UI:FavoriteOtherSettings' => '其它设置',
	'UI:Favorites:Default_X_ItemsPerPage' => '默认长列表: 每页 %1$s 项目',
	'UI:NavigateAwayConfirmationMessage' => '任何修改都将被丢弃.',
	'UI:CancelConfirmationMessage' => '您将取消你的更改。是否继续?',
	'UI:AutoApplyConfirmationMessage' => '一些更改尚未应用. 你想将他们纳入到ITOP帐户?',
	'UI:Create_Class_InState' => '在创建 %1$s 的状态: ',
	'UI:OrderByHint_Values' => '排序顺序: %1$s',
	'UI:Menu:AddToDashboard' => '添加到仪表盘...',
	'UI:Button:Refresh' => '刷新',
	'UI:Button:GoPrint' => '打印...',
	'UI:ExplainPrintable' => '点击图标%1$s可以隐藏打印项.<br/>使用浏览器的“打印预览”功能，预览当前打印.<br/>注:此标题和其它调优控制不会被打印出来.',
	'UI:ConfigureThisList' => '配置该列表...',
	'UI:ListConfigurationTitle' => '配置列表',
	'UI:ColumnsAndSortOrder' => '列和排序顺序:',
	'UI:UseDefaultSettings' => '使用默认设置',
	'UI:UseSpecificSettings' => '使用以下设置:',
	'UI:Display_X_ItemsPerPage' => '显示 %1$s 每页项目',
	'UI:UseSavetheSettings' => '保存设置',
	'UI:OnlyForThisList' => '只显示这个列表',
	'UI:ForAllLists' => '默认所有列表',
	'UI:ExtKey_AsLink' => '%1$s (链接)',
	'UI:ExtKey_AsFriendlyName' => '%1$s (好记的名称)',
	'UI:ExtField_AsRemoteField' => '%1$s (%2$s)',
	'UI:Button:MoveUp' => '向上移',
	'UI:Button:MoveDown' => '向下移',

	'UI:OQL:UnknownClassAndFix' => '未知类别 "%1$s". 您可以尝试用 "%2$s" 代替.',
	'UI:OQL:UnknownClassNoFix' => '未知类别 "%1$s"',

	'UI:Dashboard:Edit' => '编辑该页面...',
	'UI:Dashboard:Revert' => '还原到原始版本...',
	'UI:Dashboard:RevertConfirm' => '原来的版本作出的每项更改将丢失。请确认您想这样做',
	'UI:ExportDashBoard' => '导出到文件',
	'UI:ImportDashBoard' => '从文件导入...',
	'UI:ImportDashboardTitle' => '从文件导入',
	'UI:ImportDashboardText' => '选择要导入的仪表盘文件:',


	'UI:DashletCreation:Title' => '创建一个新仪表盘',
	'UI:DashletCreation:Dashboard' => '仪表盘',
	'UI:DashletCreation:DashletType' => '仪表盘类型',
	'UI:DashletCreation:EditNow' => '编辑仪表盘',

	'UI:DashboardEdit:Title' => '仪表板编辑器',
	'UI:DashboardEdit:DashboardTitle' => '标题',
	'UI:DashboardEdit:AutoReload' => '自动刷新',
	'UI:DashboardEdit:AutoReloadSec' => '自动刷新间隔（秒）',
	'UI:DashboardEdit:AutoReloadSec+' => '允许的最小值是 %1$d 秒',

	'UI:DashboardEdit:Layout' => '布局',
	'UI:DashboardEdit:Properties' => '仪表板属性',
	'UI:DashboardEdit:Dashlets' => '可用的仪表盘',	
	'UI:DashboardEdit:DashletProperties' => '仪表盘属性',	

	'UI:Form:Property' => '属性',
	'UI:Form:Value' => '值',

	'UI:DashletPlainText:Label' => '文本',
	'UI:DashletPlainText:Description' => '纯文本（无格式）',
	'UI:DashletPlainText:Prop-Text' => '文本',
	'UI:DashletPlainText:Prop-Text:Default' => '请在这里输入一些文字...',

	'UI:DashletObjectList:Label' => '对象列表',
	'UI:DashletObjectList:Description' => '仪表盘对象列表',
	'UI:DashletObjectList:Prop-Title' => '标题',
	'UI:DashletObjectList:Prop-Query' => '查询语句',
	'UI:DashletObjectList:Prop-Menu' => '菜单',

	'UI:DashletGroupBy:Prop-Title' => '标题',
	'UI:DashletGroupBy:Prop-Query' => '查询语句',
	'UI:DashletGroupBy:Prop-Style' => '样式',
	'UI:DashletGroupBy:Prop-GroupBy' => '组别...',
	'UI:DashletGroupBy:Prop-GroupBy:Hour' => '%1$s 小时(0-23)',
	'UI:DashletGroupBy:Prop-GroupBy:Month' => '%1$s 月(1-12)',
	'UI:DashletGroupBy:Prop-GroupBy:DayOfWeek' => '%1$s个星期的一天',
	'UI:DashletGroupBy:Prop-GroupBy:DayOfMonth' => '%1$s个月的一天',
	'UI:DashletGroupBy:Prop-GroupBy:Select-Hour' => '%1$s (小时)',
	'UI:DashletGroupBy:Prop-GroupBy:Select-Month' => '%1$s (月)',
	'UI:DashletGroupBy:Prop-GroupBy:Select-DayOfWeek' => '%1$s (一个星期)',
	'UI:DashletGroupBy:Prop-GroupBy:Select-DayOfMonth' => '%1$s (一个月)',
	'UI:DashletGroupBy:MissingGroupBy' => '请选择在其上的对象将被组合在一起字段',

	'UI:DashletGroupByPie:Label' => '饼图',
	'UI:DashletGroupByPie:Description' => '饼图',
	'UI:DashletGroupByBars:Label' => '柱状图',
	'UI:DashletGroupByBars:Description' => '柱状图',
	'UI:DashletGroupByTable:Label' => '组别 (标签)',
	'UI:DashletGroupByTable:Description' => '列表 (由现场分组)',

	'UI:DashletHeaderStatic:Label' => '页眉',
	'UI:DashletHeaderStatic:Description' => '显示一个横向分隔线',
	'UI:DashletHeaderStatic:Prop-Title' => '标题',
	'UI:DashletHeaderStatic:Prop-Title:Default' => '联系',
	'UI:DashletHeaderStatic:Prop-Icon' => '图标',

	'UI:DashletHeaderDynamic:Label' => '页眉与统计',
	'UI:DashletHeaderDynamic:Description' => '页眉与统计(组...)',
	'UI:DashletHeaderDynamic:Prop-Title' => '标题',
	'UI:DashletHeaderDynamic:Prop-Title:Default' => '联系',
	'UI:DashletHeaderDynamic:Prop-Icon' => '图标',
	'UI:DashletHeaderDynamic:Prop-Subtitle' => '副标题',
	'UI:DashletHeaderDynamic:Prop-Subtitle:Default' => '联系',
	'UI:DashletHeaderDynamic:Prop-Query' => '查询',
	'UI:DashletHeaderDynamic:Prop-GroupBy' => '通过组',
	'UI:DashletHeaderDynamic:Prop-Values' => '值',

	'UI:DashletBadge:Label' => '挂件',
	'UI:DashletBadge:Description' => '新/搜索对象的图标',
	'UI:DashletBadge:Prop-Class' => '类别',

	'DayOfWeek-Sunday' => '星期日',
	'DayOfWeek-Monday' => '星期一',
	'DayOfWeek-Tuesday' => '星期二',
	'DayOfWeek-Wednesday' => '星期三',
	'DayOfWeek-Thursday' => '星期四',
	'DayOfWeek-Friday' => '星期五',
	'DayOfWeek-Saturday' => '星期六',
	'Month-01' => '一月',
	'Month-02' => '二月',
	'Month-03' => '三月',
	'Month-04' => '四月',
	'Month-05' => '五月',
	'Month-06' => '六月',
	'Month-07' => '七月',
	'Month-08' => '八月',
	'Month-09' => '九月',
	'Month-10' => '十月',
	'Month-11' => '十一月',
	'Month-12' => '十二月',

	// Short version for the DatePicker
	'DayOfWeek-Sunday-Min' => '日',
	'DayOfWeek-Monday-Min' => '一',
	'DayOfWeek-Tuesday-Min' => '二',
	'DayOfWeek-Wednesday-Min' => '三',
	'DayOfWeek-Thursday-Min' => '四',
	'DayOfWeek-Friday-Min' => '五',
	'DayOfWeek-Saturday-Min' => '六',
	'Month-01-Short' => '1月',
	'Month-02-Short' => '2月',
	'Month-03-Short' => '3月',
	'Month-04-Short' => '4月',
	'Month-05-Short' => '5月',
	'Month-06-Short' => '6月',
	'Month-07-Short' => '7月',
	'Month-08-Short' => '8月',
	'Month-09-Short' => '9月',
	'Month-10-Short' => '10月',
	'Month-11-Short' => '11月',
	'Month-12-Short' => '12月',
	'Calendar-FirstDayOfWeek' => 0, // 0 = Sunday, 1 = Monday, etc...

	'UI:Menu:ShortcutList' => '创建一个快捷方式...',
	'UI:ShortcutRenameDlg:Title' => '重命名快捷方式',
	'UI:ShortcutListDlg:Title' => '创建列表中的快捷方式',
	'UI:ShortcutDelete:Confirm' => '请确认要删除的快捷方式.',
	'Menu:MyShortcuts' => '我的快捷方式', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Class:Shortcut' => '快捷方式',
	'Class:Shortcut+' => '',
	'Class:Shortcut/Attribute:name' => '名称',
	'Class:Shortcut/Attribute:name+' => '在菜单和页面标题中使用标签',
	'Class:ShortcutOQL' => '搜索结果的快捷方式',
	'Class:ShortcutOQL+' => '',
	'Class:ShortcutOQL/Attribute:oql' => '查询',
	'Class:ShortcutOQL/Attribute:oql+' => 'OQL 限定要搜索的对象的列表中',
	'Class:ShortcutOQL/Attribute:auto_reload' => '自动刷新',
	'Class:ShortcutOQL/Attribute:auto_reload/Value:none' => '禁用',
	'Class:ShortcutOQL/Attribute:auto_reload/Value:custom' => '自定义速率',
	'Class:ShortcutOQL/Attribute:auto_reload_sec' => '自动刷新间隔（秒）',
	'Class:ShortcutOQL/Attribute:auto_reload_sec/tip' => '允许的最小值为 %1$d 秒',

	'UI:FillAllMandatoryFields' => '请填写所有必填字段.',
	'UI:ValueMustBeSet' => '请指定值',
	'UI:ValueMustBeChanged' => '请更改值',
	'UI:ValueInvalidFormat' => '无效的格式',

	'UI:CSVImportConfirmTitle' => '请确认操作',
	'UI:CSVImportConfirmMessage' => '你确定要这么做吗?',
	'UI:CSVImportError_items' => '错误:: %1$d',
	'UI:CSVImportCreated_items' => '创建: %1$d',
	'UI:CSVImportModified_items' => '修改: %1$d',
	'UI:CSVImportUnchanged_items' => '未更改: %1$d',

	'UI:Button:Remove' => '移除',
	'UI:AddAnExisting_Class' => '添加 %1$s 类型的对象...',
	'UI:SelectionOf_Class' => '选择 %1$s 类型的对象',

	'UI:AboutBox' => '关于 iTop...',
	'UI:About:Title' => '关于 iTop',
	'UI:About:DataModel' => '数据模型',
	'UI:About:Support' => '支持信息',
	'UI:About:Licenses' => '许可',
	'UI:About:Modules' => '已安装模块',
	
	'UI:DisconnectedDlgMessage' => '你已断开连接。你必须确定自己继续使用该应用程序.',
	'UI:DisconnectedDlgTitle' => '警告!',
	'UI:LoginAgain' => '重新登录',
	'UI:StayOnThePage' => '保持这个页面',
	
	'ExcelExporter:ExportMenu' => 'Excel 导出...',
	'ExcelExporter:ExportDialogTitle' => 'Excel 导出',
	'ExcelExporter:ExportButton' => '导出',
	'ExcelExporter:DownloadButton' => '下载 %1$s',
	'ExcelExporter:RetrievingData' => '检索数据...',
	'ExcelExporter:BuildingExcelFile' => '正在构建Excel文件...',
	'ExcelExporter:Done' => '完成.',
	'ExcelExport:AutoDownload' => '当导出文件就绪会自动开始下载',
	'ExcelExport:PreparingExport' => '准备导出...',
	'ExcelExport:Statistics' => '统计',
	'portal:legacy_portal' => '终端用户门户',
	'portal:backoffice' => 'iTop 后台用户界面',

	'UI:CurrentObjectIsLockedBy_User' => '对象已锁定，因为它目前正在被%1$s修改.',
	'UI:CurrentObjectIsLockedBy_User_Explanation' => '该对象目前正被%1$s修改.您的修改不能提交，因为它们会被覆盖.',
	'UI:CurrentObjectLockExpired' => '锁定是为了防止对象被同时修改.',
	'UI:CurrentObjectLockExpired_Explanation' => '锁定是为了防止对象被同时修改.你不能再提交你的修改其他用户现在可以修改这个对象.',
	'UI:ConcurrentLockKilled' => '锁定是为了防止目前删除的对象被同时修改.',
	'UI:Menu:KillConcurrentLock' => '终止同时修改锁定!',
	
	'UI:Menu:ExportPDF' => '导出为PDF...',
	'UI:Menu:PrintableVersion' => '打印当前配置项',
));




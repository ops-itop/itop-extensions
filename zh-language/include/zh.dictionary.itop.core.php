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
 * @author      Maxima Yau <maximaqiu@hotmail.com>
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Core:DeletedObjectLabel' => '%1s (删除)',
	'Core:DeletedObjectTip' => '该对象 %1$s (%2$s)已被删除',

	'Core:UnknownObjectLabel' => '对象没有找到 (class: %1$s, id: %2$d)',
	'Core:UnknownObjectTip' => '无法找到对象.它可能已被删除一段时间并清除了日志.',

	'Core:AttributeLinkedSet' => '对象数组',
	'Core:AttributeLinkedSet+' => '任何形式的同一类或子类的对象',

	'Core:AttributeLinkedSetIndirect' => '对象数组 (N-N)',
	'Core:AttributeLinkedSetIndirect+' => '任何类型的对象(子类)相同的类',

	'Core:AttributeInteger' => '整数',
	'Core:AttributeInteger+' => '数值(可以是负数)',

	'Core:AttributeDecimal' => '十进制',
	'Core:AttributeDecimal+' => '十进制值(可以是负数)',

	'Core:AttributeBoolean' => '布尔值',
	'Core:AttributeBoolean+' => '布尔值',

	'Core:AttributeString' => '字符串',
	'Core:AttributeString+' => '字母数字字符串',

	'Core:AttributeClass' => '类别',
	'Core:AttributeClass+' => '类别',

	'Core:AttributeApplicationLanguage' => '用户语言',
	'Core:AttributeApplicationLanguage+' => '语言和国家 (ZH CN)',

	'Core:AttributeFinalClass' => '类别 (自动)',
	'Core:AttributeFinalClass+' => '真正的类的对象(由核心自动创建)',

	'Core:AttributePassword' => '密码',
	'Core:AttributePassword+' => '外部设备的密码',

 	'Core:AttributeEncryptedString' => '加密字符串',
	'Core:AttributeEncryptedString+' => '本地密钥加密字符串',

	'Core:AttributeText' => '文本',
	'Core:AttributeText+' => '多行字符串',

	'Core:AttributeHTML' => 'HTML',
	'Core:AttributeHTML+' => 'HTML 字符串',

	'Core:AttributeEmailAddress' => 'Email地址',
	'Core:AttributeEmailAddress+' => '邮件地址',

	'Core:AttributeIPAddress' => 'IP 地址',
	'Core:AttributeIPAddress+' => 'IP 地址',

	'Core:AttributeOQL' => 'OQL',
	'Core:AttributeOQL+' => '对象查询语言表达式',

	'Core:AttributeEnum' => '枚举',
	'Core:AttributeEnum+' => '预定义的字母数字字符串列表',

	'Core:AttributeTemplateString' => '文本模板',
	'Core:AttributeTemplateString+' => '包含字符串的占位符',

	'Core:AttributeTemplateText' => '文本模板',
	'Core:AttributeTemplateText+' => '包含文本的占位符',

	'Core:AttributeTemplateHTML' => 'HTML模板',
	'Core:AttributeTemplateHTML+' => '包含HTML的占位符',

	'Core:AttributeDateTime' => '日期/时间',
	'Core:AttributeDateTime+' => '日期和时间 (年-月-日 hh:mm:ss)',
	'Core:AttributeDateTime?SmartSearch' => '
<p>
	日期格式:<br/>
	<b>yyyy-mm-dd hh:mm:ss</b><br/>
	例如: 2011-07-19 18:40:00
</p>
<p>
操作提示:<br/>
	<b>&gt;</b><em>日期</em><br/>
	<b>&lt;</b><em>日期</em><br/>
	<b>[</b><em>日期</em>,<em>日期</em><b>]</b>
</p>
<p>
如果省略了时间, 默认为 00:00:00
</p>',

	'Core:AttributeDate' => '日期',
	'Core:AttributeDate+' => '日期 (年-月-日)',
	'Core:AttributeDate?SmartSearch' => '
<p>
	日期格式:<br/>
	<b>yyyy-mm-dd</b><br/>
	例如: 2011-07-19
</p>
<p>
操作提示:<br/>
	<b>&gt;</b><em>日期</em><br/>
	<b>&lt;</b><em>日期</em><br/>
	<b>[</b><em>日期</em>,<em>日期</em><b>]</b>
</p>',

	'Core:AttributeDeadline' => '最后期限',
	'Core:AttributeDeadline+' => '日期,显示当前的时间表',

	'Core:AttributeExternalKey' => '外部键',
	'Core:AttributeExternalKey+' => '外部键值(或者外来的)',

	'Core:AttributeHierarchicalKey' => '分层键',
	'Core:AttributeHierarchicalKey+' => '外部父键(或者外来的)',

	'Core:AttributeExternalField' => '外部字段',
	'Core:AttributeExternalField+' => '字段映射到一个外部键',

	'Core:AttributeURL' => 'URL',
	'Core:AttributeURL+' => '绝对或相对URL作为文本字符串',

	'Core:AttributeBlob' => 'Blob',
	'Core:AttributeBlob+' => '任意的二进制内容(文档)',

	'Core:AttributeOneWayPassword' => '一种密码',
	'Core:AttributeOneWayPassword+' => '一种加密(哈希)密码',

	'Core:AttributeTable' => '表格',
	'Core:AttributeTable+' => '具有两个维度的索引数组',

	'Core:AttributePropertySet' => '属性',
	'Core:AttributePropertySet+' => '无类型的属性列表（名称和值）',

	'Core:AttributeFriendlyName' => '好记的名称',
	'Core:AttributeFriendlyName+' => '属性自动创建;经过几个属性计算出的好记的名称',

	'Core:FriendlyName-Label' => '全名',
	'Core:FriendlyName-Description' => '全名',
));
//////////////////////////////////////////////////////////////////////
// Classes in 'core/cmdb'
//////////////////////////////////////////////////////////////////////
//

//
// Class: CMDBChange
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChange' => '变更',
	'Class:CMDBChange+' => '变更跟踪',
	'Class:CMDBChange/Attribute:date' => '日期',
	'Class:CMDBChange/Attribute:date+' => '变更被记录的日期和时间',
	'Class:CMDBChange/Attribute:userinfo' => '杂项. 信息',
	'Class:CMDBChange/Attribute:userinfo+' => '呼叫者已定义的信息',
));

//
// Class: CMDBChangeOp
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOp' => '变更操作',
	'Class:CMDBChangeOp+' => '变更操作跟踪',
	'Class:CMDBChangeOp/Attribute:change' => '变更',
	'Class:CMDBChangeOp/Attribute:change+' => '变更',
	'Class:CMDBChangeOp/Attribute:date' => '日期',
	'Class:CMDBChangeOp/Attribute:date+' => '变更的日期和时间',
	'Class:CMDBChangeOp/Attribute:userinfo' => '用户',
	'Class:CMDBChangeOp/Attribute:userinfo+' => '变更造成者',
	'Class:CMDBChangeOp/Attribute:objclass' => '对象类',
	'Class:CMDBChangeOp/Attribute:objclass+' => '对象类',
	'Class:CMDBChangeOp/Attribute:objkey' => '对象 id',
	'Class:CMDBChangeOp/Attribute:objkey+' => '对象 id',
	'Class:CMDBChangeOp/Attribute:finalclass' => '类别',
	'Class:CMDBChangeOp/Attribute:finalclass+' => '',
));

//
// Class: CMDBChangeOpCreate
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpCreate' => '对象创建',
	'Class:CMDBChangeOpCreate+' => '对象创建跟踪',
));

//
// Class: CMDBChangeOpDelete
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpDelete' => '对象删除',
	'Class:CMDBChangeOpDelete+' => '对象删除跟踪',
));

//
// Class: CMDBChangeOpSetAttribute
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpSetAttribute' => '对象变更',
	'Class:CMDBChangeOpSetAttribute+' => '对象属性变更跟踪',
	'Class:CMDBChangeOpSetAttribute/Attribute:attcode' => '属性',
	'Class:CMDBChangeOpSetAttribute/Attribute:attcode+' => '被修改属性的编码',
));

//
// Class: CMDBChangeOpSetAttributeScalar
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpSetAttributeScalar' => '属性变更',
	'Class:CMDBChangeOpSetAttributeScalar+' => '对象标量属性变更跟踪',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:oldvalue' => '原值',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:oldvalue+' => '属性原值',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:newvalue' => '新值',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:newvalue+' => '属性新值',
));
// Used by CMDBChangeOp... & derived classes
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Change:ObjectCreated' => '创建对象',
	'Change:ObjectDeleted' => '删除对象',
	'Change:ObjectModified' => '修改对象',
	'Change:AttName_SetTo_NewValue_PreviousValue_OldValue' => '将 %1$s 设置为 %2$s (当前值: %3$s)',
	'Change:AttName_SetTo' => '将 %1$s 设置为 %2$s',
	'Change:Text_AppendedTo_AttName' => '将 %1$s 追加到 %2$s',
	'Change:AttName_Changed_PreviousValue_OldValue' => '修改 %1$s , 当前值: %2$s',
	'Change:AttName_Changed' => '修改 %1$s',
	'Change:AttName_EntryAdded' => '修改 %1$s, 添加新条目: %2$s',
	'Change:LinkSet:Added' => '添加 %1$s',
	'Change:LinkSet:Removed' => '移除 %1$s',
	'Change:LinkSet:Modified' => '修改 %1$s',
));

//
// Class: CMDBChangeOpSetAttributeBlob
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpSetAttributeBlob' => '数据变更',
	'Class:CMDBChangeOpSetAttributeBlob+' => '数据变更跟踪',
	'Class:CMDBChangeOpSetAttributeBlob/Attribute:prevdata' => '原数据',
	'Class:CMDBChangeOpSetAttributeBlob/Attribute:prevdata+' => '属性原来的内容',
));

//
// Class: CMDBChangeOpSetAttributeText
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpSetAttributeText' => '文本变更',
	'Class:CMDBChangeOpSetAttributeText+' => '文本变更跟踪',
	'Class:CMDBChangeOpSetAttributeText/Attribute:prevdata' => '原数据',
	'Class:CMDBChangeOpSetAttributeText/Attribute:prevdata+' => '属性原来的内容',
));

//
// Class: Event
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Event' => '记录事项',
	'Class:Event+' => '应用程序的内部事项',
	'Class:Event/Attribute:message' => '消息',
	'Class:Event/Attribute:message+' => '事项简述',
	'Class:Event/Attribute:date' => '日期',
	'Class:Event/Attribute:date+' => '变更被记录的日期和时间',
	'Class:Event/Attribute:userinfo' => '用户信息',
	'Class:Event/Attribute:userinfo+' => '用户标识, 该用户的活动触发了该事项',
	'Class:Event/Attribute:finalclass' => '类别',
	'Class:Event/Attribute:finalclass+' => '',
));

//
// Class: EventNotification
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:EventNotification' => '通知事项',
	'Class:EventNotification+' => '被发送通知的踪迹',
	'Class:EventNotification/Attribute:trigger_id' => '触发器',
	'Class:EventNotification/Attribute:trigger_id+' => '用户帐户',
	'Class:EventNotification/Attribute:action_id' => '用户',
	'Class:EventNotification/Attribute:action_id+' => '用户帐户',
	'Class:EventNotification/Attribute:object_id' => '对象 id',
	'Class:EventNotification/Attribute:object_id+' => '对象 id (由触发器定义的类 ?)',
));

//
// Class: EventNotificationEmail
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:EventNotificationEmail' => '电子邮件发送事件',
	'Class:EventNotificationEmail+' => '记录被发送的邮件的踪迹',
	'Class:EventNotificationEmail/Attribute:to' => '到',
	'Class:EventNotificationEmail/Attribute:to+' => '到',
	'Class:EventNotificationEmail/Attribute:cc' => '抄送',
	'Class:EventNotificationEmail/Attribute:cc+' => '抄送',
	'Class:EventNotificationEmail/Attribute:bcc' => '密送',
	'Class:EventNotificationEmail/Attribute:bcc+' => '密送',
	'Class:EventNotificationEmail/Attribute:from' => '来自',
	'Class:EventNotificationEmail/Attribute:from+' => '消息发送者',
	'Class:EventNotificationEmail/Attribute:subject' => '主题',
	'Class:EventNotificationEmail/Attribute:subject+' => '主题',
	'Class:EventNotificationEmail/Attribute:body' => '邮件体',
	'Class:EventNotificationEmail/Attribute:body+' => '邮件体',
	'Class:EventNotificationEmail/Attribute:attachments' => '附件',
	'Class:EventNotificationEmail/Attribute:attachments+' => '',
));

//
// Class: EventIssue
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:EventIssue' => '问题事件',
	'Class:EventIssue+' => '一个问题跟踪 (警告, 错误, 等等.)',
	'Class:EventIssue/Attribute:issue' => '问题',
	'Class:EventIssue/Attribute:issue+' => '发生了什么',
	'Class:EventIssue/Attribute:impact' => '影响',
	'Class:EventIssue/Attribute:impact+' => '结果是什么',
	'Class:EventIssue/Attribute:page' => '页面',
	'Class:EventIssue/Attribute:page+' => 'HTTP 入口',
	'Class:EventIssue/Attribute:arguments_post' => '发送参数',
	'Class:EventIssue/Attribute:arguments_post+' => 'HTTP POST 参数',
	'Class:EventIssue/Attribute:arguments_get' => '网址参数',
	'Class:EventIssue/Attribute:arguments_get+' => 'HTTP GET 参数',
	'Class:EventIssue/Attribute:callstack' => 'Callstack',
	'Class:EventIssue/Attribute:callstack+' => 'Call stack',
	'Class:EventIssue/Attribute:data' => '数据',
	'Class:EventIssue/Attribute:data+' => '更多信息',
));

//
// Class: EventWebService
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:EventWebService' => 'Web service 事件',
	'Class:EventWebService+' => '一个Web service 事件的踪迹',
	'Class:EventWebService/Attribute:verb' => 'Verb',
	'Class:EventWebService/Attribute:verb+' => '操作的名称',
	'Class:EventWebService/Attribute:result' => '结果',
	'Class:EventWebService/Attribute:result+' => '概览 成功/失败',
	'Class:EventWebService/Attribute:log_info' => '信息日志',
	'Class:EventWebService/Attribute:log_info+' => '结果信息日志',
	'Class:EventWebService/Attribute:log_warning' => '警告日志',
	'Class:EventWebService/Attribute:log_warning+' => '结果警告日志',
	'Class:EventWebService/Attribute:log_error' => '错误日志',
	'Class:EventWebService/Attribute:log_error+' => '结果错误日志',
	'Class:EventWebService/Attribute:data' => '数据',
	'Class:EventWebService/Attribute:data+' => '结果数据',
));

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:EventRestService' => '调用REST/JSON',
	'Class:EventRestService+' => '跟踪一个REST/JSON服务的调用',
	'Class:EventRestService/Attribute:operation' => '操作',
	'Class:EventRestService/Attribute:operation+' => '参数 \'operation\'',
	'Class:EventRestService/Attribute:version' => '版本',
	'Class:EventRestService/Attribute:version+' => '参数 \'version\'',
	'Class:EventRestService/Attribute:json_input' => '输入',
	'Class:EventRestService/Attribute:json_input+' => '参数 \'json_data\'',
	'Class:EventRestService/Attribute:code' => '代码',
	'Class:EventRestService/Attribute:code+' => '结果代码',
	'Class:EventRestService/Attribute:json_output' => '响应',
	'Class:EventRestService/Attribute:json_output+' => 'HTTP响应(json)',
	'Class:EventRestService/Attribute:provider' => 'Provider',
	'Class:EventRestService/Attribute:provider+' => 'PHP类实现预期的操作',
));

//
// Class: EventLoginUsage
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:EventLoginUsage' => '登录使用',
	'Class:EventLoginUsage+' => '连接到应用程序',
	'Class:EventLoginUsage/Attribute:user_id' => '登录',
	'Class:EventLoginUsage/Attribute:user_id+' => '登录',
	'Class:EventLoginUsage/Attribute:contact_name' => '用户名',
	'Class:EventLoginUsage/Attribute:contact_name+' => '用户名',
	'Class:EventLoginUsage/Attribute:contact_email' => '用户邮件',
	'Class:EventLoginUsage/Attribute:contact_email+' => '用户邮件地址',
));

//
// Class: Action
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Action' => '自定义操作',
	'Class:Action+' => '用户定义的动作',
	'Class:Action/Attribute:name' => '名称',
	'Class:Action/Attribute:name+' => '',
	'Class:Action/Attribute:description' => '描述',
	'Class:Action/Attribute:description+' => '',
	'Class:Action/Attribute:status' => '状态',
	'Class:Action/Attribute:status+' => '生产中或 ?',
	'Class:Action/Attribute:status/Value:test' => '测试中',
	'Class:Action/Attribute:status/Value:test+' => '测试中',
	'Class:Action/Attribute:status/Value:enabled' => '生产中',
	'Class:Action/Attribute:status/Value:enabled+' => '生产中',
	'Class:Action/Attribute:status/Value:disabled' => '非活动',
	'Class:Action/Attribute:status/Value:disabled+' => '非活动',
	'Class:Action/Attribute:trigger_list' => '相关触发器',
	'Class:Action/Attribute:trigger_list+' => '关联到该动作的触发器',
	'Class:Action/Attribute:finalclass' => '类别',
	'Class:Action/Attribute:finalclass+' => '',
));

//
// Class: ActionNotification
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ActionNotification' => '通知',
	'Class:ActionNotification+' => '通知 (摘要)',
));

//
// Class: ActionEmail
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ActionEmail' => 'Email 通知',
	'Class:ActionEmail+' => '',
	'Class:ActionEmail/Attribute:test_recipient' => '测试收件人',
	'Class:ActionEmail/Attribute:test_recipient+' => '状态被设置为"测试"时的目的地',
	'Class:ActionEmail/Attribute:from' => '来自',
	'Class:ActionEmail/Attribute:from+' => '将发送到邮件头',
	'Class:ActionEmail/Attribute:reply_to' => '回复到',
	'Class:ActionEmail/Attribute:reply_to+' => '将发送到邮件头',
	'Class:ActionEmail/Attribute:to' => '发送',
	'Class:ActionEmail/Attribute:to+' => '邮件的目的地',
	'Class:ActionEmail/Attribute:cc' => '抄送',
	'Class:ActionEmail/Attribute:cc+' => '抄送',
	'Class:ActionEmail/Attribute:bcc' => '密送',
	'Class:ActionEmail/Attribute:bcc+' => '密送',
	'Class:ActionEmail/Attribute:subject' => '主题',
	'Class:ActionEmail/Attribute:subject+' => '邮件标题',
	'Class:ActionEmail/Attribute:body' => '邮件体',
	'Class:ActionEmail/Attribute:body+' => '邮件内容',
	'Class:ActionEmail/Attribute:importance' => '重要',
	'Class:ActionEmail/Attribute:importance+' => '重要标志',
	'Class:ActionEmail/Attribute:importance/Value:low' => '低',
	'Class:ActionEmail/Attribute:importance/Value:low+' => '低',
	'Class:ActionEmail/Attribute:importance/Value:normal' => '一般',
	'Class:ActionEmail/Attribute:importance/Value:normal+' => '一般',
	'Class:ActionEmail/Attribute:importance/Value:high' => '高',
	'Class:ActionEmail/Attribute:importance/Value:high+' => '高',
));

//
// Class: Trigger
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Trigger' => '触发器',
	'Class:Trigger+' => '自定义事件处理程序',
	'Class:Trigger/Attribute:description' => '描述',
	'Class:Trigger/Attribute:description+' => '单行描述',
	'Class:Trigger/Attribute:action_list' => '被触发的动作',
	'Class:Trigger/Attribute:action_list+' => '触发器击发时执行的动作',
	'Class:Trigger/Attribute:finalclass' => '类别',
	'Class:Trigger/Attribute:finalclass+' => '',
));

//
// Class: TriggerOnObject
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnObject' => '触发器 (类依赖的)',
	'Class:TriggerOnObject+' => '在一个给定类对象上的触发器',
	'Class:TriggerOnObject/Attribute:target_class' => '目标类',
	'Class:TriggerOnObject/Attribute:target_class+' => '',
	'Class:TriggerOnObject/Attribute:filter' => '过滤器',
	'Class:TriggerOnObject/Attribute:filter+' => '',
	'TriggerOnObject:WrongFilterQuery' => '错误的过滤器查询: %1$s',
	'TriggerOnObject:WrongFilterClass' => '该过滤器的查询必须返回类的对象 "%1$s"',
));

//
// Class: TriggerOnPortalUpdate
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnPortalUpdate' => '触发器 (从门户更新时)',
	'Class:TriggerOnPortalUpdate+' => '最终用户触发器\'s 从门户更新时',
));

//
// Class: TriggerOnStateChange
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnStateChange' => '触发器 (状态变化时)',
	'Class:TriggerOnStateChange+' => '对象状态变化时的触发器',
	'Class:TriggerOnStateChange/Attribute:state' => '状态',
	'Class:TriggerOnStateChange/Attribute:state+' => '',
));

//
// Class: TriggerOnStateEnter
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnStateEnter' => '触发器 (进入一个状态时)',
	'Class:TriggerOnStateEnter+' => '对象状态变化时触发器 - 进入时',
));

//
// Class: TriggerOnStateLeave
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnStateLeave' => '触发器 (离开一个状态时)',
	'Class:TriggerOnStateLeave+' => '对象状态变化时触发器 - 离开时',
));

//
// Class: TriggerOnObjectCreate
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnObjectCreate' => '触发器 (对象创建时)',
	'Class:TriggerOnObjectCreate+' => '一个给定类[子类]对象创建时触发器',
));

//
// Class: TriggerOnThresholdReached
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnThresholdReached' => '触发器 (阈值)',
	'Class:TriggerOnThresholdReached+' => '当设置秒表的阈值时间到达时触发',
	'Class:TriggerOnThresholdReached/Attribute:stop_watch_code' => '秒表',
	'Class:TriggerOnThresholdReached/Attribute:stop_watch_code+' => '',
	'Class:TriggerOnThresholdReached/Attribute:threshold_index' => '阈值',
	'Class:TriggerOnThresholdReached/Attribute:threshold_index+' => '',
));

//
// Class: lnkTriggerAction
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkTriggerAction' => '动作/触发器',
	'Class:lnkTriggerAction+' => '触发器和动作间的链接',
	'Class:lnkTriggerAction/Attribute:action_id' => '动作',
	'Class:lnkTriggerAction/Attribute:action_id+' => '要执行的动作',
	'Class:lnkTriggerAction/Attribute:action_name' => '动作',
	'Class:lnkTriggerAction/Attribute:action_name+' => '',
	'Class:lnkTriggerAction/Attribute:trigger_id' => '触发器',
	'Class:lnkTriggerAction/Attribute:trigger_id+' => '',
	'Class:lnkTriggerAction/Attribute:trigger_name' => '触发器',
	'Class:lnkTriggerAction/Attribute:trigger_name+' => '',
	'Class:lnkTriggerAction/Attribute:order' => '顺序',
	'Class:lnkTriggerAction/Attribute:order+' => '动作执行顺序',
));

//
// Synchro Data Source
//
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SynchroDataSource/Attribute:name' => '名称',
	'Class:SynchroDataSource/Attribute:name+' => '名称',
	'Class:SynchroDataSource/Attribute:description' => '说明',
	'Class:SynchroDataSource/Attribute:status' => '状态', //TODO: enum values
	'Class:SynchroDataSource/Attribute:scope_class' => '目标组',
	'Class:SynchroDataSource/Attribute:user_id' => '用户',
	'Class:SynchroDataSource/Attribute:notify_contact_id' => '通知联系人',
	'Class:SynchroDataSource/Attribute:notify_contact_id+' => '将错误通知联系人',
	'Class:SynchroDataSource/Attribute:url_icon' => '图标/ 链接',
	'Class:SynchroDataSource/Attribute:url_icon+' => '描述iTop应用的超链接图标',
	'Class:SynchroDataSource/Attribute:url_application' => '应用/链接',
	'Class:SynchroDataSource/Attribute:url_application+' => '超链接到外部应用程序的ITOP对象与ITOP同步(如果适用). 可能的占位符: $this->attribute$ and $replica->primary_key$',
	'Class:SynchroDataSource/Attribute:reconciliation_policy' => '同步策略', //TODO enum values
	'Class:SynchroDataSource/Attribute:full_load_periodicity' => '加载间隔',
	'Class:SynchroDataSource/Attribute:full_load_periodicity+' => '完全重新加载所有数据必须至少是经常在这里指定',
	'Class:SynchroDataSource/Attribute:action_on_zero' => '操作 0',
	'Class:SynchroDataSource/Attribute:action_on_zero+' => '当搜索没有返回对象的动作',
	'Class:SynchroDataSource/Attribute:action_on_one' => '操作 1',
	'Class:SynchroDataSource/Attribute:action_on_one+' => '当搜索返回一个对象的动作',
	'Class:SynchroDataSource/Attribute:action_on_multiple' => '更多操作',
	'Class:SynchroDataSource/Attribute:action_on_multiple+' => '当搜索返回多个对象的动作',
	'Class:SynchroDataSource/Attribute:user_delete_policy' => '允许用户',
	'Class:SynchroDataSource/Attribute:user_delete_policy+' => '谁可以删除同步对象',
	'Class:SynchroDataSource/Attribute:user_delete_policy' => '允许用户',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:never' => '所有',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:depends' => '仅超级管理员',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:always' => '允许所有用户',
	'Class:SynchroDataSource/Attribute:delete_policy_update' => '更新规则',
	'Class:SynchroDataSource/Attribute:delete_policy_update+' => '语法: field_name:value; ...',
	'Class:SynchroDataSource/Attribute:delete_policy_retention' => '持续时间',
	'Class:SynchroDataSource/Attribute:delete_policy_retention+' => '保持多长时间',
	'Class:SynchroDataSource/Attribute:database_table_name' => '数据表',
	'Class:SynchroDataSource/Attribute:database_table_name+' => '用来存储同步数据的表名，置空则由系统自动生成.',
	'SynchroDataSource:Description' => '说明',
	'SynchroDataSource:Reconciliation' => '搜索&协调',
	'SynchroDataSource:Deletion' => '删除规则',
	'SynchroDataSource:Status' => '状态',
	'SynchroDataSource:Information' => '信息',
	'SynchroDataSource:Definition' => '定义',
	'Core:SynchroAttributes' => '属性',
	'Core:SynchroStatus' => '状态',
	'Core:Synchro:ErrorsLabel' => '错误',	
	'Core:Synchro:CreatedLabel' => '创建',
	'Core:Synchro:ModifiedLabel' => '修改',
	'Core:Synchro:UnchangedLabel' => '未更改',
	'Core:Synchro:ReconciledErrorsLabel' => '错误',
	'Core:Synchro:ReconciledLabel' => '匹配',
	'Core:Synchro:ReconciledNewLabel' => '创建',
	'Core:SynchroReconcile:Yes' => '是',
	'Core:SynchroReconcile:No' => '否',
	'Core:SynchroUpdate:Yes' => '是',
	'Core:SynchroUpdate:No' => '否',
	'Core:Synchro:LastestStatus' => '最近状态',
	'Core:Synchro:History' => '同步记录',
	'Core:Synchro:NeverRun' => '该同步从未运行，没有记录.',
	'Core:Synchro:SynchroEndedOn_Date' => '最近一次的同步时间 %1$s.',
	'Core:Synchro:SynchroRunningStartedOn_Date' => '同步开始时间 %1$s 正在同步...',
	'Menu:DataSources' => '同步数据源', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Menu:DataSources+' => '同步所有数据源', // Duplicated into itop-welcome-itil (will be removed from here...)
	'Core:Synchro:label_repl_ignored' => '忽略 (%1$s)',
	'Core:Synchro:label_repl_disappeared' => '消失 (%1$s)',
	'Core:Synchro:label_repl_existing' => '现有 (%1$s)',
	'Core:Synchro:label_repl_new' => '新建 (%1$s)',
	'Core:Synchro:label_obj_deleted' => '删除 (%1$s)',
	'Core:Synchro:label_obj_obsoleted' => '废弃 (%1$s)',
	'Core:Synchro:label_obj_disappeared_errors' => '错误 (%1$s)',
	'Core:Synchro:label_obj_disappeared_no_action' => '没有操作 (%1$s)',
	'Core:Synchro:label_obj_unchanged' => '未更改 (%1$s)',
	'Core:Synchro:label_obj_updated' => '更新 (%1$s)', 
	'Core:Synchro:label_obj_updated_errors' => '错误 (%1$s)',
	'Core:Synchro:label_obj_new_unchanged' => '未更改 (%1$s)',
	'Core:Synchro:label_obj_new_updated' => '更新 (%1$s)',
	'Core:Synchro:label_obj_created' => '创建 (%1$s)',
	'Core:Synchro:label_obj_new_errors' => '错误 (%1$s)',
	'Core:Synchro:History' => '同步历史记录',
	'Core:SynchroLogTitle' => '%1$s - %2$s',
	'Core:Synchro:Nb_Replica' => '副本处理: %1$s',
	'Core:Synchro:Nb_Class:Objects' => '%1$s: %2$s',
	'Class:SynchroDataSource/Error:AtLeastOneReconciliationKeyMustBeSpecified' => '至少指定一个关键字，或同步规则使用主键.',			
	'Class:SynchroDataSource/Error:DeleteRetentionDurationMustBeSpecified' => '需指定保存期',			
	'Class:SynchroDataSource/Error:DeletePolicyUpdateMustBeSpecified' => '旧对象要更新，但却没有指定.',
	'Class:SynchroDataSource/Error:DataTableAlreadyExists' => '表 %1$s 已在数据库中存在。请使用另外一个名称.',
	'Core:SynchroReplica:PublicData' => '公共数据',
	'Core:SynchroReplica:PrivateDetails' => '隐私详情',
	'Core:SynchroReplica:BackToDataSource' => '返回数据源: %1$s',
	'Core:SynchroReplica:ListOfReplicas' => '复制清单',
	'Core:SynchroAttExtKey:ReconciliationById' => 'id (主键)',
	'Core:SynchroAtt:attcode' => '属性',
	'Core:SynchroAtt:attcode+' => '字段',
	'Core:SynchroAtt:reconciliation' => '匹配 ?',
	'Core:SynchroAtt:reconciliation+' => '搜索用',
	'Core:SynchroAtt:update' => '更新 ?',
	'Core:SynchroAtt:update+' => '用于更新对象',
	'Core:SynchroAtt:update_policy' => '更新规则',
	'Core:SynchroAtt:update_policy+' => '更新字段的行为',
	'Core:SynchroAtt:reconciliation_attcode' => '匹配键',
	'Core:SynchroAtt:reconciliation_attcode+' => '对于外部密钥协商属性代码',
	'Core:SyncDataExchangeComment' => '(数据同步)',
	'Core:Synchro:ListOfDataSources' => '同步源清单:',
	'Core:Synchro:LastSynchro' => '最后同步:',
	'Core:Synchro:ThisObjectIsSynchronized' => '该对象已从外部数据源同步更新',
	'Core:Synchro:TheObjectWasCreatedBy_Source' => '该对象已从外部数据源创建 %1$s',
	'Core:Synchro:TheObjectCanBeDeletedBy_Source' => '该对象可从外部数据源删除 %1$s',
	'Core:Synchro:TheObjectCannotBeDeletedByUser_Source' => '该对象属外部数据源，不可删除 %1$s',
	'TitleSynchroExecution' => '执行同步',
	'Class:SynchroDataSource:DataTable' => '数据表: %1$s',
	'Core:SyncDataSourceObsolete' => '数据标记为废旧，操作取消.',
	'Core:SyncDataSourceAccessRestriction' => '仅超级管理员或指定用户可以执行操作.',
	'Core:SyncTooManyMissingReplicas' => '所有记录在一段时间内，未有触及，请检查同步进程是否仍在执行.',
	'Core:SyncSplitModeCLIOnly' => '如果在命令行窗口，同步只能按块执行',
	'Core:Synchro:ListReplicas_AllReplicas_Errors_Warnings' => '%1$s 复制, %2$s 错误, %3$s 告警.',
	'Core:SynchroReplica:TargetObject' => '同步对象: %1$s',
	'Class:AsyncSendEmail' => '邮件(异步)',
	'Class:AsyncSendEmail/Attribute:to' => '发送',
	'Class:AsyncSendEmail/Attribute:subject' => '主题',
	'Class:AsyncSendEmail/Attribute:body' => '内容',
	'Class:AsyncSendEmail/Attribute:header' => '邮件头',
	'Class:CMDBChangeOpSetAttributeOneWayPassword' => '加密密码',
	'Class:CMDBChangeOpSetAttributeOneWayPassword/Attribute:prev_pwd' => '源值',
	'Class:CMDBChangeOpSetAttributeEncrypted' => '加密区',
	'Class:CMDBChangeOpSetAttributeEncrypted/Attribute:prevstring' => '源值',
	'Class:CMDBChangeOpSetAttributeCaseLog' => '日志',
	'Class:CMDBChangeOpSetAttributeCaseLog/Attribute:lastentry' => '最后条目',
	'Class:SynchroDataSource' => '同步数据源',
	'Class:SynchroDataSource/Attribute:status/Value:implementation' => '执行',
	'Class:SynchroDataSource/Attribute:status/Value:obsolete' => '废弃',
	'Class:SynchroDataSource/Attribute:status/Value:production' => '生产',
	'Class:SynchroDataSource/Attribute:scope_restriction' => '范围约束',
	'Class:SynchroDataSource/Attribute:reconciliation_policy/Value:use_attributes' => '应用属性',
	'Class:SynchroDataSource/Attribute:reconciliation_policy/Value:use_primary_key' => '使用关键字',
	'Class:SynchroDataSource/Attribute:action_on_zero/Value:create' => '创建',
	'Class:SynchroDataSource/Attribute:action_on_zero/Value:error' => '错误',
	'Class:SynchroDataSource/Attribute:action_on_one/Value:error' => '错误',
	'Class:SynchroDataSource/Attribute:action_on_one/Value:update' => '更新',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:create' => '创建',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:error' => '错误',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:take_first' => '第一个(随机?)',
	'Class:SynchroDataSource/Attribute:delete_policy' => '删除规则',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:delete' => '删除',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:ignore' => '忽略',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:update' => '更新',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:update_then_delete' => '更新后删除',
	'Class:SynchroDataSource/Attribute:attribute_list' => '属性列表',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:administrators' => '仅超级管理员',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:everybody' => '允许任何人删除这类对象',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:nobody' => '空',
	'Class:SynchroAttribute' => '同步属性',
	'Class:SynchroAttribute/Attribute:sync_source_id' => '同步数据源',
	'Class:SynchroAttribute/Attribute:attcode' => '属性码',
	'Class:SynchroAttribute/Attribute:update' => '更新',
	'Class:SynchroAttribute/Attribute:reconcile' => '匹配',
	'Class:SynchroAttribute/Attribute:update_policy' => '更新规则',
	'Class:SynchroAttribute/Attribute:update_policy/Value:master_locked' => '锁定',
	'Class:SynchroAttribute/Attribute:update_policy/Value:master_unlocked' => '解锁',
	'Class:SynchroAttribute/Attribute:update_policy/Value:write_if_empty' => '空则初始化',
	'Class:SynchroAttribute/Attribute:finalclass' => '类',
	'Class:SynchroAttExtKey' => '同步属性 (外键)',
	'Class:SynchroAttExtKey/Attribute:reconciliation_attcode' => '匹配属性',
	'Class:SynchroAttLinkSet' => '同步属性 (链接集)',
	'Class:SynchroAttLinkSet/Attribute:row_separator' => '行分隔符',
	'Class:SynchroAttLinkSet/Attribute:attribute_separator' => '属性分隔符',
	'Class:SynchroLog' => '同步记录',
	'Class:SynchroLog/Attribute:sync_source_id' => '同步数据源',
	'Class:SynchroLog/Attribute:start_date' => '开始日期',
	'Class:SynchroLog/Attribute:end_date' => '结束日期',
	'Class:SynchroLog/Attribute:status' => '状态',
	'Class:SynchroLog/Attribute:status/Value:completed' => '完成',
	'Class:SynchroLog/Attribute:status/Value:error' => '错误',
	'Class:SynchroLog/Attribute:status/Value:running' => '仍在运行',
	'Class:SynchroLog/Attribute:stats_nb_replica_seen' => '复制',
	'Class:SynchroLog/Attribute:stats_nb_replica_total' => '复制总数',
	'Class:SynchroLog/Attribute:stats_nb_obj_deleted' => '删除对象',
	'Class:SynchroLog/Attribute:stats_nb_obj_deleted_errors' => '删除过程中发生的错误',
	'Class:SynchroLog/Attribute:stats_nb_obj_obsoleted' => '废弃对象',
	'Class:SynchroLog/Attribute:stats_nb_obj_obsoleted_errors' => '错误对象',
	'Class:SynchroLog/Attribute:stats_nb_obj_created' => '创建对象',
	'Class:SynchroLog/Attribute:stats_nb_obj_created_errors' => '创建错误',
	'Class:SynchroLog/Attribute:stats_nb_obj_updated' => '更新',
	'Class:SynchroLog/Attribute:stats_nb_obj_updated_errors' => '更新错误',
	'Class:SynchroLog/Attribute:stats_nb_replica_reconciled_errors' => '复制错误',
	'Class:SynchroLog/Attribute:stats_nb_replica_disappeared_no_action' => '复制丢失',
	'Class:SynchroLog/Attribute:stats_nb_obj_new_updated' => '更新对象',
	'Class:SynchroLog/Attribute:stats_nb_obj_new_unchanged' => '无变化对象',
	'Class:SynchroLog/Attribute:last_error' => '最近错误',
	'Class:SynchroLog/Attribute:traces' => '跟踪',
	'Class:SynchroReplica' => '同步复制',
	'Class:SynchroReplica/Attribute:sync_source_id' => '同步数据源',
	'Class:SynchroReplica/Attribute:dest_id' => '目标对象(ID)',
	'Class:SynchroReplica/Attribute:dest_class' => '目标类型',
	'Class:SynchroReplica/Attribute:status_last_seen' => '最近',
	'Class:SynchroReplica/Attribute:status' => '状态',
	'Class:SynchroReplica/Attribute:status/Value:modified' => '修改',
	'Class:SynchroReplica/Attribute:status/Value:new' => '新',
	'Class:SynchroReplica/Attribute:status/Value:obsolete' => '废弃',
	'Class:SynchroReplica/Attribute:status/Value:orphan' => '单一',
	'Class:SynchroReplica/Attribute:status/Value:synchronized' => '同步',
	'Class:SynchroReplica/Attribute:status_dest_creator' => '创建 ?',
	'Class:SynchroReplica/Attribute:status_last_error' => '最近错误',
	'Class:SynchroReplica/Attribute:status_last_warning' => '告警',
	'Class:SynchroReplica/Attribute:info_creation_date' => '创建日期',
	'Class:SynchroReplica/Attribute:info_last_modified' => '最后更新日期',
	'Class:appUserPreferences' => '用户参数',
	'Class:appUserPreferences/Attribute:userid' => '用户',
	'Class:appUserPreferences/Attribute:preferences' => '参数',
	'Core:ExecProcess:Code1' => '命令错误或执行错误',
	'Core:ExecProcess:Code255' => 'PHP 错误',

	// Attribute Duration
	'Core:Duration_Seconds'	=> '%1$ds',	
	'Core:Duration_Minutes_Seconds'	=>'%1$dmin %2$ds',	
	'Core:Duration_Hours_Minutes_Seconds' => '%1$dh %2$dmin %3$ds',		
	'Core:Duration_Days_Hours_Minutes_Seconds' => '%1$sd %2$dh %3$dmin %4$ds',		

	// Explain working time computing
	'Core:ExplainWTC:ElapsedTime' => '经过时间 (作为存储 "%1$s")',
	'Core:ExplainWTC:StopWatch-TimeSpent' => '所花费的时间 "%1$s"',
	'Core:ExplainWTC:StopWatch-Deadline' => '截止至 "%1$s" 的 %2$d%%',
	// Bulk export
	'Core:BulkExport:MissingParameter_Param' => '缺少参数 "%1$s"',
	'Core:BulkExport:InvalidParameter_Query' => '无效的参数值"查询". 查询表达式没有找到对应的ID: "%1$s".',
	'Core:BulkExport:ExportFormatPrompt' => '导出格式:',
	'Core:BulkExportOf_Class' => '%1$s导出',
	'Core:BulkExport:ClickHereToDownload_FileName' => '点击这里下载%1$s',
	'Core:BulkExport:ExportResult' => '导出的结果:',
	'Core:BulkExport:RetrievingData' => '检索数据...',
	'Core:BulkExport:HTMLFormat' => '网页(*.html)',
	'Core:BulkExport:CSVFormat' => '逗号分隔值(*.csv)',
	'Core:BulkExport:XLSXFormat' => 'Excel 2007或者更高版本的(*.xlsx)',
	'Core:BulkExport:PDFFormat' => 'PDF文档(*.pdf)',
	'Core:BulkExport:DragAndDropHelp' => '拖放列标题来排列列位置. 预览 %1$s 行.总导出 %2$s 行.',
	'Core:BulkExport:EmptyPreview' => '从列表中选择要导出的列',
	'Core:BulkExport:ColumnsOrder' => '列排序',
	'Core:BulkExport:AvailableColumnsFrom_Class' => '%1$s 可显示的列',
	'Core:BulkExport:NoFieldSelected' => '至少选择一个列导出',
	'Core:BulkExport:CheckAll' => '选择所有',
	'Core:BulkExport:UncheckAll' => '全部取消',
	'Core:BulkExport:ExportCancelledByUser' => '导出被用户取消',
	'Core:BulkExport:CSVOptions' => 'CSV选项',
	'Core:BulkExport:CSVLocalization' => '定位',
	'Core:BulkExport:PDFOptions' => 'PDF选项',
	'Core:BulkExport:PDFPageSize' => '页面尺寸:',
	'Core:BulkExport:PageSize-A4' => 'A4',
	'Core:BulkExport:PageSize-A3' => 'A3',
	'Core:BulkExport:PageSize-Letter' => '信纸',
	'Core:BulkExport:PDFPageOrientation' => '页面方向:',
	'Core:BulkExport:PageOrientation-L' => '横向',
	'Core:BulkExport:PageOrientation-P' => '纵向',
	'Core:BulkExport:XMLFormat' => 'XML 文档 (*.xml)',
	'Core:BulkExport:XMLOptions' => 'XML 选项',
	'Core:BulkExport:SpreadsheetFormat' => 'HTML格式的电子表格(*.html)',
	'Core:BulkExport:SpreadsheetOptions' => '电子表格选项',
	'Core:BulkExport:OptionNoLocalize' => '没有本地化枚举字段的值(枚举字段)',
	'Core:BulkExport:OptionLinkSets' => '包含链接的对象',
	'Core:BulkExport:ScopeDefinition' => '导出定义的对象',
	'Core:BulkExportLabelOQLExpression' => 'OQL 查询:',
	'Core:BulkExportLabelPhrasebookEntry' => '查询手册条目:',
	'Core:BulkExportMessageEmptyOQL' => '请输入一个有效的OQL查询.',
	'Core:BulkExportMessageEmptyPhrasebookEntry' => '请选择一个有效的手册.',
	'Core:BulkExportQueryPlaceholder' => '在这里输入一个OQL查询...',
	'Core:BulkExportCanRunNonInteractive' => '点击这里运行一个非交互模式的导出.',
	'Core:BulkExportLegacyExport' => '点击这里访问传统导出.',
));

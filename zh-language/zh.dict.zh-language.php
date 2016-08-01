<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http:opensource.org/licenses/AGPL-3.0
 */

$basedir="../extensions/zh-language/";
$dict="../core/dict.class.inc.php";
//require_once($dict);
//include $basedir."include/zh.dict.itop-request-mgmt.php";
//include $basedir."include/zh.dict.itop-backup.php";
//include $basedir."include/zh.dict.authent-local.php";
//include $basedir."include/zh.dict.itop-service-mgmt.php";
//include $basedir."include/zh.dict.itop-problem-mgmt.php";
//include $basedir."include/zh.dict.itop-attachments.php";
//include $basedir."include/zh.dict.authent-ldap.php";
//include $basedir."include/zh.dict.itop-service-mgmt-provider.php";
//include $basedir."include/zh.dictionary.itop.core.php";


/**
 * Localized data
 *
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:UserExternal' => '外部用户',
	'Class:UserExternal+' => '用户在 iTop 外部验证身份',
));





/**
 * Localized data
 *
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:UserLDAP' => 'LDAP 用户',
	'Class:UserLDAP+' => '用户由 LDAP 鉴别身份',
	'Class:UserLDAP/Attribute:password' => '密码',
	'Class:UserLDAP/Attribute:password+' => '用户身份验证串',
));





/**
 * Localized data
 *
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:UserLocal' => 'iTop 用户',
	'Class:UserLocal+' => '用户由 iTop 验证身份',
	'Class:UserLocal/Attribute:password' => '密码',
	'Class:UserLocal/Attribute:password+' => '用户身份验证串',
));





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


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChange' => '变更',
	'Class:CMDBChange+' => '变更跟踪',
	'Class:CMDBChange/Attribute:date' => '日期',
	'Class:CMDBChange/Attribute:date+' => '变更被记录的日期和时间',
	'Class:CMDBChange/Attribute:userinfo' => '杂项. 信息',
	'Class:CMDBChange/Attribute:userinfo+' => '呼叫者已定义的信息',
));


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


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpCreate' => '对象创建',
	'Class:CMDBChangeOpCreate+' => '对象创建跟踪',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpDelete' => '对象删除',
	'Class:CMDBChangeOpDelete+' => '对象删除跟踪',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpSetAttribute' => '对象变更',
	'Class:CMDBChangeOpSetAttribute+' => '对象属性变更跟踪',
	'Class:CMDBChangeOpSetAttribute/Attribute:attcode' => '属性',
	'Class:CMDBChangeOpSetAttribute/Attribute:attcode+' => '被修改属性的编码',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpSetAttributeScalar' => '属性变更',
	'Class:CMDBChangeOpSetAttributeScalar+' => '对象标量属性变更跟踪',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:oldvalue' => '原值',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:oldvalue+' => '属性原值',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:newvalue' => '新值',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:newvalue+' => '属性新值',
));
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


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpSetAttributeBlob' => '数据变更',
	'Class:CMDBChangeOpSetAttributeBlob+' => '数据变更跟踪',
	'Class:CMDBChangeOpSetAttributeBlob/Attribute:prevdata' => '原数据',
	'Class:CMDBChangeOpSetAttributeBlob/Attribute:prevdata+' => '属性原来的内容',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CMDBChangeOpSetAttributeText' => '文本变更',
	'Class:CMDBChangeOpSetAttributeText+' => '文本变更跟踪',
	'Class:CMDBChangeOpSetAttributeText/Attribute:prevdata' => '原数据',
	'Class:CMDBChangeOpSetAttributeText/Attribute:prevdata+' => '属性原来的内容',
));


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


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ActionNotification' => '通知',
	'Class:ActionNotification+' => '通知 (摘要)',
));


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


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnPortalUpdate' => '触发器 (从门户更新时)',
	'Class:TriggerOnPortalUpdate+' => '最终用户触发器\'s 从门户更新时',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnStateChange' => '触发器 (状态变化时)',
	'Class:TriggerOnStateChange+' => '对象状态变化时的触发器',
	'Class:TriggerOnStateChange/Attribute:state' => '状态',
	'Class:TriggerOnStateChange/Attribute:state+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnStateEnter' => '触发器 (进入一个状态时)',
	'Class:TriggerOnStateEnter+' => '对象状态变化时触发器 - 进入时',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnStateLeave' => '触发器 (离开一个状态时)',
	'Class:TriggerOnStateLeave+' => '对象状态变化时触发器 - 离开时',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnObjectCreate' => '触发器 (对象创建时)',
	'Class:TriggerOnObjectCreate+' => '一个给定类[子类]对象创建时触发器',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnThresholdReached' => '触发器 (阈值)',
	'Class:TriggerOnThresholdReached+' => '当设置秒表的阈值时间到达时触发',
	'Class:TriggerOnThresholdReached/Attribute:stop_watch_code' => '秒表',
	'Class:TriggerOnThresholdReached/Attribute:stop_watch_code+' => '',
	'Class:TriggerOnThresholdReached/Attribute:threshold_index' => '阈值',
	'Class:TriggerOnThresholdReached/Attribute:threshold_index+' => '',
));


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


/**
 * Localized data
 *
 * @author      Maxima <maximaqiu@hotmail.com>
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

  



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


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:URP_AttributeGrant' => '属性许可',
	'Class:URP_AttributeGrant+' => '属性层次上的许可',
	'Class:URP_AttributeGrant/Attribute:actiongrantid' => '动作准许',
	'Class:URP_AttributeGrant/Attribute:actiongrantid+' => '动作准许',
	'Class:URP_AttributeGrant/Attribute:attcode' => '属性',
	'Class:URP_AttributeGrant/Attribute:attcode+' => '属性编码',
));


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
	'UI:Login:Welcome' => '欢迎来到 CMDB 系统!',
	'UI:Login:IncorrectLoginPassword' => '登录名或密码有误, 请重试.',
	'UI:Login:IdentifyYourself' => '<a href="https://sso.xxx.com"><span style="color:red;font-size:22px">SSO用户点此登录</font></a>',

	'UI:Login:UserNamePrompt' => '用户名',
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
	'UI:Button:Login' => '登录',
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
	'UI:AddObjectsOf_Class_LinkedWith_Class' => '添加 %1$s 对象与 %2$s 链接',
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





/**
 * Localized data
 * @by Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Attachments:TabTitle_Count' => '附件 (%1$d)',
	'Attachments:EmptyTabTitle' => '附件',
	'Attachments:FieldsetTitle' => '附件',
	'Attachments:DeleteBtn' => '删除',
	'Attachments:History_File_Added' => '添加历史 %1$s.',
	'Attachments:History_File_Removed' => '移除历史 %1$s.',
	'Attachments:AddAttachment' => '添加附件: ',
	'Attachments:UploadNotAllowedOnThisSystem' => '文件被上传到未被容许的系统.',
	'Attachment:Max_Go' => '(最大文件尺寸: %1$s GB)',
	'Attachment:Max_Mo' => '(最大文件尺寸: %1$s MB)',
	'Attachment:Max_Ko' => '(最大文件尺寸: %1$s KB)',
	'Attachments:NoAttachment' => '没有附件. ',
	'Attachments:PreviewNotAvailable' => '不支持对此类附档的预览.',
	'Class:Attachment' => '附件',
	'Class:Attachment+' => '',
	'Class:Attachment/Attribute:expire' => '到期',
	'Class:Attachment/Attribute:expire+' => '',
	'Class:Attachment/Attribute:temp_id' => '临时id',
	'Class:Attachment/Attribute:temp_id+' => '',
	'Class:Attachment/Attribute:item_class' => '附件类型',
	'Class:Attachment/Attribute:item_class+' => '',
	'Class:Attachment/Attribute:item_id' => '附件id',
	'Class:Attachment/Attribute:item_id+' => '',
	'Class:Attachment/Attribute:item_org_id' => '附件组织id',
	'Class:Attachment/Attribute:item_org_id+' => '',
	'Class:Attachment/Attribute:contents' => '内容',
	'Class:Attachment/Attribute:contents+' => '',
));
/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2013 Combodo
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(

	'bkp-backup-running' => '一个备任务正在运行. Please wait...',
	'bkp-restore-running' => '一个恢复任务正在运行. Please wait...',

	'Menu:BackupStatus' => '定期备份',
	'bkp-status-title' => '定期备份',
	'bkp-status-checks' => '检查与设置',
	'bkp-mysqldump-ok' => '已确认mysqldump存在: %1$s',
	'bkp-mysqldump-notfound' => 'mysqldump没有找到: %1$s - 请确认它已经安装在正确的路径上,或者编辑"mysql_bindir"选项来调整mysqldump的位置.',
	'bkp-mysqldump-issue' => 'mysqldump无法执行(retcode=%1$d): 请确认它已经安装在正确的路径上,或者编辑"mysql_bindir"选项来调整mysqldump的位置',
	'bkp-missing-dir' => '目标目录%1$s没有找到',
	'bkp-free-disk-space' => '备份目标路径%2$s <b>空闲空间为 %1$s</b>',
	'bkp-dir-not-writeable' => '%1$s不可写',
	'bkp-wrong-format-spec' => '当前文件名(%1$s)格式的规格是错误的.默认的规范格式应该是: %2$s',
	'bkp-name-sample' => '备份文件将以数据库名,日期和时间进行命名.例如: %1$s',
	'bkp-week-days' => '在 <b>每个 %1$s 的 %2$s</b> 时段将进行备份操作',
	'bkp-retention' => '最多保留 <b>%1$d份</b> 备份文件在备份目录里.',
	'bkp-next-to-delete' => '当下一次备份时将被删除 (设置文件档为 "retention_count")',
	'bkp-table-file' => '文件', 
	'bkp-table-file+' => '只有扩展名是.zip的文件才被认为是备份文件',
	'bkp-table-size' => '大小',
	'bkp-table-size+' => '',
	'bkp-table-actions' => '操作',
	'bkp-table-actions+' => '',
	'bkp-status-backups-auto' => '计划备份',
	'bkp-status-backups-manual' => '手动备份',
	'bkp-status-backups-none' => '没有任何备份',
	'bkp-next-backup' => '下次备份将发生在<b>%1$s</b> (%2$s) 的 %3$s',
	'bkp-button-backup-now' => '立即备份!',
	'bkp-button-restore-now' => '恢复!',
	'bkp-confirm-backup' => '请确认您现在是要进行备份.',
	'bkp-confirm-restore' => '请确认您要还原的备份文件 %1$s.',
	'bkp-wait-backup' => '请等待备份完成...',
	'bkp-wait-restore' => '请等待恢复完成...',
	'bkp-success-restore' => '恢复成功完成.',
));


/**
 * Localized data
 *
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:ChangeManagement' => '变更管理',
	'Menu:Change:Overview' => '概览',
	'Menu:Change:Overview+' => '',
	'Menu:NewChange' => '新变更',
	'Menu:NewChange+' => '创建新变更的单据',
	'Menu:SearchChanges' => '搜索变更',
	'Menu:SearchChanges+' => '搜索变更单据',
	'Menu:Change:Shortcuts' => '快捷方式',
	'Menu:Change:Shortcuts+' => '',
	'Menu:WaitingAcceptance' => '等待接受的变更',
	'Menu:WaitingAcceptance+' => '',
	'Menu:WaitingApproval' => '等待批准的变更',
	'Menu:WaitingApproval+' => '',
	'Menu:Changes' => '待处理的变更',
	'Menu:Changes+' => '',
	'Menu:MyChanges' => '指派给我的变更',
	'Menu:MyChanges+' => '指派给我的变更 (作为办理人)',
	'UI-ChangeManagementOverview-ChangeByCategory-last-7-days' => '最近7天的变更（按种类）',
	'UI-ChangeManagementOverview-Last-7-days' => '最近7天的变更总数',
	'UI-ChangeManagementOverview-ChangeByDomain-last-7-days' => '最近7天的变更（按域）',
	'UI-ChangeManagementOverview-ChangeByStatus-last-7-days' => '最近7天的变更（按状态）',
	'Tickets:Related:OpenChanges' => '打开变更',
	'Tickets:Related:RecentChanges' => '最近变更 (72小时内)',
));




Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Change' => '变更',
	'Class:Change+' => '',
	'Class:Change/Attribute:start_date' => '计划启动',
	'Class:Change/Attribute:start_date+' => '',
	'Class:Change/Attribute:status' => '状态',
	'Class:Change/Attribute:status+' => '',
	'Class:Change/Attribute:status/Value:new' => '新',
	'Class:Change/Attribute:status/Value:new+' => '',
	'Class:Change/Attribute:status/Value:validated' => '已生效',
	'Class:Change/Attribute:status/Value:validated+' => '',
	'Class:Change/Attribute:status/Value:rejected' => '已拒绝',
	'Class:Change/Attribute:status/Value:rejected+' => '',
	'Class:Change/Attribute:status/Value:assigned' => '已指派',
	'Class:Change/Attribute:status/Value:assigned+' => '',
	'Class:Change/Attribute:status/Value:plannedscheduled' => '已计划和安排',
	'Class:Change/Attribute:status/Value:plannedscheduled+' => '',
	'Class:Change/Attribute:status/Value:approved' => '已批准',
	'Class:Change/Attribute:status/Value:approved+' => '',
	'Class:Change/Attribute:status/Value:notapproved' => '未批准',
	'Class:Change/Attribute:status/Value:notapproved+' => '',
	'Class:Change/Attribute:status/Value:implemented' => '已实施',
	'Class:Change/Attribute:status/Value:implemented+' => '',
	'Class:Change/Attribute:status/Value:monitored' => '已监控',
	'Class:Change/Attribute:status/Value:monitored+' => '',
	'Class:Change/Attribute:status/Value:closed' => '已关闭',
	'Class:Change/Attribute:status/Value:closed+' => '',
	'Class:Change/Attribute:reason' => '原因',
	'Class:Change/Attribute:reason+' => '',
	'Class:Change/Attribute:requestor_id' => '申请者',
	'Class:Change/Attribute:requestor_id+' => '',
	'Class:Change/Attribute:requestor_email' => '申请者',
	'Class:Change/Attribute:requestor_email+' => '',
	'Class:Change/Attribute:org_id' => '客户',
	'Class:Change/Attribute:org_id+' => '',
	'Class:Change/Attribute:org_name' => '客户',
	'Class:Change/Attribute:org_name+' => '',
	'Class:Change/Attribute:workgroup_id' => '工作组',
	'Class:Change/Attribute:workgroup_id+' => '',
	'Class:Change/Attribute:workgroup_name' => '工作组',
	'Class:Change/Attribute:workgroup_name+' => '',
	'Class:Change/Attribute:creation_date' => '创建',
	'Class:Change/Attribute:creation_date+' => '',
	'Class:Change/Attribute:last_update' => '最后更新',
	'Class:Change/Attribute:last_update+' => '',
	'Class:Change/Attribute:end_date' => '结束',
	'Class:Change/Attribute:end_date+' => '',
	'Class:Change/Attribute:close_date' => '关闭',
	'Class:Change/Attribute:close_date+' => '',
	'Class:Change/Attribute:impact' => '影响',
	'Class:Change/Attribute:impact+' => '',
	'Class:Change/Attribute:agent_id' => '办理人',
	'Class:Change/Attribute:agent_id+' => '',
	'Class:Change/Attribute:agent_name' => '办理人',
	'Class:Change/Attribute:agent_name+' => '',
	'Class:Change/Attribute:agent_email' => '办理人',
	'Class:Change/Attribute:agent_email+' => '',
	'Class:Change/Attribute:supervisor_group_id' => '监督团队',
	'Class:Change/Attribute:supervisor_group_id+' => '',
	'Class:Change/Attribute:supervisor_group_name' => '监督团队',
	'Class:Change/Attribute:supervisor_group_name+' => '',
	'Class:Change/Attribute:supervisor_id' => '监督者',
	'Class:Change/Attribute:supervisor_id+' => '',
	'Class:Change/Attribute:supervisor_email' => '监督者',
	'Class:Change/Attribute:supervisor_email+' => '',
	'Class:Change/Attribute:manager_group_id' => '管理团队',
	'Class:Change/Attribute:manager_group_id+' => '',
	'Class:Change/Attribute:manager_group_name' => '管理团队',
	'Class:Change/Attribute:manager_group_name+' => '',
	'Class:Change/Attribute:manager_id' => '管理人',
	'Class:Change/Attribute:manager_id+' => '',
	'Class:Change/Attribute:manager_email' => '管理人',
	'Class:Change/Attribute:manager_email+' => '',
	'Class:Change/Attribute:outage' => '停歇',
	'Class:Change/Attribute:outage+' => '',
	'Class:Change/Attribute:outage/Value:yes' => '是',
	'Class:Change/Attribute:outage/Value:yes+' => '',
	'Class:Change/Attribute:outage/Value:no' => '否',
	'Class:Change/Attribute:outage/Value:no+' => '',
	'Class:Change/Attribute:change_request' => '申请',
	'Class:Change/Attribute:change_request+' => '',
	'Class:Change/Attribute:fallback' => '回退计划',
	'Class:Change/Attribute:fallback+' => '',
	'Class:Change/Attribute:parent_id' => '父级变更',
	'Class:Change/Attribute:parent_id+' => '',
	'Class:Change/Attribute:parent_name' => '父级变更 Ref',
	'Class:Change/Attribute:parent_name+' => '',
	'Class:Change/Attribute:related_request_list' => '关联请求',
	'Class:Change/Attribute:related_request_list+' => '该变更的所有用户请求',
	'Class:Change/Attribute:related_problems_list' => '关联问题',
	'Class:Change/Attribute:related_problems_list+' => '该变更的所有问题',
	'Class:Change/Attribute:related_incident_list' => '关联事件',
	'Class:Change/Attribute:related_incident_list+' => '该变更的所有事件',
	'Class:Change/Attribute:child_changes_list' => '子变更',
	'Class:Change/Attribute:child_changes_list+' => '该变更的所有子变更',
	'Class:Change/Attribute:parent_id_friendlyname' => '父级好记的名称',
	'Class:Change/Attribute:parent_id_friendlyname+' => '',
	'Class:Change/Attribute:parent_id_finalclass_recall' => '变更类型',
	'Class:Change/Attribute:parent_id_finalclass_recall+' => '',
	'Class:Change/Stimulus:ev_validate' => '生效',
	'Class:Change/Stimulus:ev_validate+' => '',
	'Class:Change/Stimulus:ev_reject' => '拒绝',
	'Class:Change/Stimulus:ev_reject+' => '',
	'Class:Change/Stimulus:ev_assign' => '指派',
	'Class:Change/Stimulus:ev_assign+' => '',
	'Class:Change/Stimulus:ev_reopen' => '重开',
	'Class:Change/Stimulus:ev_reopen+' => '',
	'Class:Change/Stimulus:ev_plan' => '计划',
	'Class:Change/Stimulus:ev_plan+' => '',
	'Class:Change/Stimulus:ev_approve' => '批准',
	'Class:Change/Stimulus:ev_approve+' => '',
	'Class:Change/Stimulus:ev_replan' => '重新计划',
	'Class:Change/Stimulus:ev_replan+' => '',
	'Class:Change/Stimulus:ev_notapprove' => '不批准',
	'Class:Change/Stimulus:ev_notapprove+' => '',
	'Class:Change/Stimulus:ev_implement' => '实施',
	'Class:Change/Stimulus:ev_implement+' => '',
	'Class:Change/Stimulus:ev_monitor' => '监控',
	'Class:Change/Stimulus:ev_monitor+' => '',
	'Class:Change/Stimulus:ev_finish' => '完成',
	'Class:Change/Stimulus:ev_finish+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:RoutineChange' => '例行变更',
	'Class:RoutineChange+' => '',
	'Class:RoutineChange/Attribute:status/Value:new' => '新',
	'Class:RoutineChange/Attribute:status/Value:new+' => '',
	'Class:RoutineChange/Attribute:status/Value:assigned' => '已指派',
	'Class:RoutineChange/Attribute:status/Value:assigned+' => '',
	'Class:RoutineChange/Attribute:status/Value:plannedscheduled' => '已计划和安排',
	'Class:RoutineChange/Attribute:status/Value:plannedscheduled+' => '',
	'Class:RoutineChange/Attribute:status/Value:approved' => '已批准',
	'Class:RoutineChange/Attribute:status/Value:approved+' => '',
	'Class:RoutineChange/Attribute:status/Value:implemented' => '已实施',
	'Class:RoutineChange/Attribute:status/Value:implemented+' => '',
	'Class:RoutineChange/Attribute:status/Value:monitored' => '已监控',
	'Class:RoutineChange/Attribute:status/Value:monitored+' => '',
	'Class:RoutineChange/Attribute:status/Value:closed' => '已关闭',
	'Class:RoutineChange/Attribute:status/Value:closed+' => '',
	'Class:RoutineChange/Stimulus:ev_validate' => '生效',
	'Class:RoutineChange/Stimulus:ev_validate+' => '',
	'Class:RoutineChange/Stimulus:ev_reject' => '拒绝',
	'Class:RoutineChange/Stimulus:ev_reject+' => '',
	'Class:RoutineChange/Stimulus:ev_assign' => '指派',
	'Class:RoutineChange/Stimulus:ev_assign+' => '',
	'Class:RoutineChange/Stimulus:ev_reopen' => '重开',
	'Class:RoutineChange/Stimulus:ev_reopen+' => '',
	'Class:RoutineChange/Stimulus:ev_plan' => '计划',
	'Class:RoutineChange/Stimulus:ev_plan+' => '',
	'Class:RoutineChange/Stimulus:ev_approve' => '批准',
	'Class:RoutineChange/Stimulus:ev_approve+' => '',
	'Class:RoutineChange/Stimulus:ev_replan' => '重新计划',
	'Class:RoutineChange/Stimulus:ev_replan+' => '',
	'Class:RoutineChange/Stimulus:ev_notapprove' => '不批准',
	'Class:RoutineChange/Stimulus:ev_notapprove+' => '',
	'Class:RoutineChange/Stimulus:ev_implement' => '实施',
	'Class:RoutineChange/Stimulus:ev_implement+' => '',
	'Class:RoutineChange/Stimulus:ev_monitor' => '监控',
	'Class:RoutineChange/Stimulus:ev_monitor+' => '',
	'Class:RoutineChange/Stimulus:ev_finish' => '完成',
	'Class:RoutineChange/Stimulus:ev_finish+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ApprovedChange' => '批准的变更',
	'Class:ApprovedChange+' => '',
	'Class:ApprovedChange/Attribute:approval_date' => '批准日期',
	'Class:ApprovedChange/Attribute:approval_date+' => '',
	'Class:ApprovedChange/Attribute:approval_comment' => '批准说明',
	'Class:ApprovedChange/Attribute:approval_comment+' => '',
	'Class:ApprovedChange/Stimulus:ev_validate' => '生效',
	'Class:ApprovedChange/Stimulus:ev_validate+' => '',
	'Class:ApprovedChange/Stimulus:ev_reject' => '拒绝',
	'Class:ApprovedChange/Stimulus:ev_reject+' => '',
	'Class:ApprovedChange/Stimulus:ev_assign' => '指派',
	'Class:ApprovedChange/Stimulus:ev_assign+' => '',
	'Class:ApprovedChange/Stimulus:ev_reopen' => '重开',
	'Class:ApprovedChange/Stimulus:ev_reopen+' => '',
	'Class:ApprovedChange/Stimulus:ev_plan' => '计划',
	'Class:ApprovedChange/Stimulus:ev_plan+' => '',
	'Class:ApprovedChange/Stimulus:ev_approve' => '批准',
	'Class:ApprovedChange/Stimulus:ev_approve+' => '',
	'Class:ApprovedChange/Stimulus:ev_replan' => '重新计划',
	'Class:ApprovedChange/Stimulus:ev_replan+' => '',
	'Class:ApprovedChange/Stimulus:ev_notapprove' => '拒绝批准',
	'Class:ApprovedChange/Stimulus:ev_notapprove+' => '',
	'Class:ApprovedChange/Stimulus:ev_implement' => '实施',
	'Class:ApprovedChange/Stimulus:ev_implement+' => '',
	'Class:ApprovedChange/Stimulus:ev_monitor' => '监控',
	'Class:ApprovedChange/Stimulus:ev_monitor+' => '',
	'Class:ApprovedChange/Stimulus:ev_finish' => '完成',
	'Class:ApprovedChange/Stimulus:ev_finish+' => '',
));

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:NormalChange' => '正常变更',
	'Class:NormalChange+' => '',
	'Class:NormalChange/Attribute:status/Value:new' => '新',
	'Class:NormalChange/Attribute:status/Value:new+' => '',
	'Class:NormalChange/Attribute:status/Value:validated' => '已生效',
	'Class:NormalChange/Attribute:status/Value:validated+' => '',
	'Class:NormalChange/Attribute:status/Value:rejected' => '已拒绝',
	'Class:NormalChange/Attribute:status/Value:rejected+' => '',
	'Class:NormalChange/Attribute:status/Value:assigned' => '已指派',
	'Class:NormalChange/Attribute:status/Value:assigned+' => '',
	'Class:NormalChange/Attribute:status/Value:plannedscheduled' => '已计划和安排',
	'Class:NormalChange/Attribute:status/Value:plannedscheduled+' => '',
	'Class:NormalChange/Attribute:status/Value:approved' => '已批准',
	'Class:NormalChange/Attribute:status/Value:approved+' => '',
	'Class:NormalChange/Attribute:status/Value:notapproved' => '不批准',
	'Class:NormalChange/Attribute:status/Value:notapproved+' => '',
	'Class:NormalChange/Attribute:status/Value:implemented' => '已实施',
	'Class:NormalChange/Attribute:status/Value:implemented+' => '',
	'Class:NormalChange/Attribute:status/Value:monitored' => '已监控',
	'Class:NormalChange/Attribute:status/Value:monitored+' => '',
	'Class:NormalChange/Attribute:status/Value:closed' => '已关闭',
	'Class:NormalChange/Attribute:status/Value:closed+' => '',
	'Class:NormalChange/Attribute:acceptance_date' => '接受日期',
	'Class:NormalChange/Attribute:acceptance_date+' => '',
	'Class:NormalChange/Attribute:acceptance_comment' => '接受说明',
	'Class:NormalChange/Attribute:acceptance_comment+' => '',
	'Class:NormalChange/Stimulus:ev_validate' => '生效',
	'Class:NormalChange/Stimulus:ev_validate+' => '',
	'Class:NormalChange/Stimulus:ev_reject' => '拒绝',
	'Class:NormalChange/Stimulus:ev_reject+' => '',
	'Class:NormalChange/Stimulus:ev_assign' => '指派',
	'Class:NormalChange/Stimulus:ev_assign+' => '',
	'Class:NormalChange/Stimulus:ev_reopen' => '重开',
	'Class:NormalChange/Stimulus:ev_reopen+' => '',
	'Class:NormalChange/Stimulus:ev_plan' => '计划',
	'Class:NormalChange/Stimulus:ev_plan+' => '',
	'Class:NormalChange/Stimulus:ev_approve' => '批准',
	'Class:NormalChange/Stimulus:ev_approve+' => '',
	'Class:NormalChange/Stimulus:ev_replan' => '重新计划',
	'Class:NormalChange/Stimulus:ev_replan+' => '',
	'Class:NormalChange/Stimulus:ev_notapprove' => '拒绝批准',
	'Class:NormalChange/Stimulus:ev_notapprove+' => '',
	'Class:NormalChange/Stimulus:ev_implement' => '实施',
	'Class:NormalChange/Stimulus:ev_implement+' => '',
	'Class:NormalChange/Stimulus:ev_monitor' => '监控',
	'Class:NormalChange/Stimulus:ev_monitor+' => '',
	'Class:NormalChange/Stimulus:ev_finish' => '完成',
	'Class:NormalChange/Stimulus:ev_finish+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:EmergencyChange' => '紧急变更',
	'Class:EmergencyChange+' => '',
	'Class:EmergencyChange/Attribute:status/Value:new' => '新',
	'Class:EmergencyChange/Attribute:status/Value:new+' => '',
	'Class:EmergencyChange/Attribute:status/Value:validated' => '已生效',
	'Class:EmergencyChange/Attribute:status/Value:validated+' => '',
	'Class:EmergencyChange/Attribute:status/Value:rejected' => '已拒绝',
	'Class:EmergencyChange/Attribute:status/Value:rejected+' => '',
	'Class:EmergencyChange/Attribute:status/Value:assigned' => '已指派',
	'Class:EmergencyChange/Attribute:status/Value:assigned+' => '',
	'Class:EmergencyChange/Attribute:status/Value:plannedscheduled' => '已计划和安排',
	'Class:EmergencyChange/Attribute:status/Value:plannedscheduled+' => '',
	'Class:EmergencyChange/Attribute:status/Value:approved' => '已批准',
	'Class:EmergencyChange/Attribute:status/Value:approved+' => '',
	'Class:EmergencyChange/Attribute:status/Value:notapproved' => '不批准',
	'Class:EmergencyChange/Attribute:status/Value:notapproved+' => '',
	'Class:EmergencyChange/Attribute:status/Value:implemented' => '已实施',
	'Class:EmergencyChange/Attribute:status/Value:implemented+' => '',
	'Class:EmergencyChange/Attribute:status/Value:monitored' => '已监控',
	'Class:EmergencyChange/Attribute:status/Value:monitored+' => '',
	'Class:EmergencyChange/Attribute:status/Value:closed' => '已关闭',
	'Class:EmergencyChange/Attribute:status/Value:closed+' => '',
	'Class:EmergencyChange/Stimulus:ev_validate' => '生效',
	'Class:EmergencyChange/Stimulus:ev_validate+' => '',
	'Class:EmergencyChange/Stimulus:ev_reject' => '拒绝',
	'Class:EmergencyChange/Stimulus:ev_reject+' => '',
	'Class:EmergencyChange/Stimulus:ev_assign' => '指派',
	'Class:EmergencyChange/Stimulus:ev_assign+' => '',
	'Class:EmergencyChange/Stimulus:ev_reopen' => '重开',
	'Class:EmergencyChange/Stimulus:ev_reopen+' => '',
	'Class:EmergencyChange/Stimulus:ev_plan' => '计划',
	'Class:EmergencyChange/Stimulus:ev_plan+' => '',
	'Class:EmergencyChange/Stimulus:ev_approve' => '批准',
	'Class:EmergencyChange/Stimulus:ev_approve+' => '',
	'Class:EmergencyChange/Stimulus:ev_replan' => '重新计划',
	'Class:EmergencyChange/Stimulus:ev_replan+' => '',
	'Class:EmergencyChange/Stimulus:ev_notapprove' => '拒绝批准',
	'Class:EmergencyChange/Stimulus:ev_notapprove+' => '',
	'Class:EmergencyChange/Stimulus:ev_implement' => '实施',
	'Class:EmergencyChange/Stimulus:ev_implement+' => '',
	'Class:EmergencyChange/Stimulus:ev_monitor' => '监控',
	'Class:EmergencyChange/Stimulus:ev_monitor+' => '',
	'Class:EmergencyChange/Stimulus:ev_finish' => '完成',
	'Class:EmergencyChange/Stimulus:ev_finish+' => '',

));



/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Menu:ChangeManagement' => '变更管理',
	'Menu:Change:Overview' => '概览',
	'Menu:Change:Overview+' => '',
	'Menu:NewChange' => '新变更',
	'Menu:NewChange+' => '创建新变更的工单',
	'Menu:SearchChanges' => '搜索变更',
	'Menu:SearchChanges+' => '搜索变更工单',
	'Menu:Change:Shortcuts' => '快捷方式',
	'Menu:Change:Shortcuts+' => '',
	'Menu:WaitingAcceptance' => '等待接受的变更',
	'Menu:WaitingAcceptance+' => '',
	'Menu:WaitingApproval' => '等待批准的变更',
	'Menu:WaitingApproval+' => '',
	'Menu:Changes' => '待处理的变更',
	'Menu:Changes+' => '显示所有待处理的变更',
	'Menu:MyChanges' => '指派给我的变更',
	'Menu:MyChanges+' => '指派给我的变更 (作为办理人)',
	'UI-ChangeManagementOverview-ChangeByCategory-last-7-days' => '最近7天的变更（按种类）',
	'UI-ChangeManagementOverview-Last-7-days' => '最近7天的变更总数',
	'UI-ChangeManagementOverview-ChangeByDomain-last-7-days' => '最近7天的变更（按域）',
	'UI-ChangeManagementOverview-ChangeByStatus-last-7-days' => '最近7天的变更（按状态）',
	'Tickets:Related:OpenChanges' => '打开变更',
	'Tickets:Related:RecentChanges' => '最近变更 (72小时内)',	
));




Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Change' => '变更',
	'Class:Change+' => '',
	'Class:Change/Attribute:status' => '状态',
	'Class:Change/Attribute:status+' => '',
	'Class:Change/Attribute:status/Value:new' => '新',
	'Class:Change/Attribute:status/Value:new+' => '',
	'Class:Change/Attribute:status/Value:assigned' => '已指派',
	'Class:Change/Attribute:status/Value:assigned+' => '',
	'Class:Change/Attribute:status/Value:planned' => '已计划',
	'Class:Change/Attribute:status/Value:planned+' => '',
	'Class:Change/Attribute:status/Value:rejected' => '已拒绝',
	'Class:Change/Attribute:status/Value:rejected+' => '',
	'Class:Change/Attribute:status/Value:approved' => '已批准',
	'Class:Change/Attribute:status/Value:approved+' => '',
	'Class:Change/Attribute:status/Value:closed' => '已关闭',
	'Class:Change/Attribute:status/Value:closed+' => '',
	'Class:Change/Attribute:category' => '类别',
	'Class:Change/Attribute:category+' => '',
	'Class:Change/Attribute:category/Value:application' => '应用程序',
	'Class:Change/Attribute:category/Value:application+' => '应用程序',
	'Class:Change/Attribute:category/Value:hardware' => '硬件',
	'Class:Change/Attribute:category/Value:hardware+' => '硬件',
	'Class:Change/Attribute:category/Value:network' => '网络',
	'Class:Change/Attribute:category/Value:network+' => '网络',
	'Class:Change/Attribute:category/Value:other' => '其它',
	'Class:Change/Attribute:category/Value:other+' => '其它',
	'Class:Change/Attribute:category/Value:software' => '软件',
	'Class:Change/Attribute:category/Value:software+' => '软件',
	'Class:Change/Attribute:category/Value:system' => '系统',
	'Class:Change/Attribute:category/Value:system+' => '系统',
	'Class:Change/Attribute:reject_reason' => '拒绝的原因',
	'Class:Change/Attribute:reject_reason+' => '',
	'Class:Change/Attribute:changemanager_id' => '变更经理',
	'Class:Change/Attribute:changemanager_id+' => '',
	'Class:Change/Attribute:changemanager_email' => '变更经理的邮件',
	'Class:Change/Attribute:changemanager_email+' => '',
	'Class:Change/Attribute:parent_id' => '父级变更',
	'Class:Change/Attribute:parent_id+' => '',
	'Class:Change/Attribute:parent_name' => '父级变更 ref',
	'Class:Change/Attribute:parent_name+' => '',
	'Class:Change/Attribute:creation_date' => '创建',
	'Class:Change/Attribute:creation_date+' => '',
	'Class:Change/Attribute:approval_date' => '批准',
	'Class:Change/Attribute:approval_date+' => '',
	'Class:Change/Attribute:fallback_plan' => '回退计划',
	'Class:Change/Attribute:fallback_plan+' => '',
	'Class:Change/Attribute:related_request_list' => '关联请求',
	'Class:Change/Attribute:related_request_list+' => '该变更的所有用户请求',
	'Class:Change/Attribute:related_incident_list' => '关联事件',
	'Class:Change/Attribute:related_incident_list+' => '该变更的所有事件',
	'Class:Change/Attribute:related_problems_list' => '关联问题',
	'Class:Change/Attribute:related_problems_list+' => '该变更的所有问题',
	'Class:Change/Attribute:child_changes_list' => '子变更',
	'Class:Change/Attribute:child_changes_list+' => '该变更的所有子变更',
	'Class:Change/Attribute:parent_id_friendlyname' => '父级变更易记的名称',
	'Class:Change/Attribute:parent_id_friendlyname+' => '',
	'Class:Change/Stimulus:ev_assign' => '指派',
	'Class:Change/Stimulus:ev_assign+' => '',
	'Class:Change/Stimulus:ev_plan' => '计划',
	'Class:Change/Stimulus:ev_plan+' => '',
	'Class:Change/Stimulus:ev_reject' => '拒绝',
	'Class:Change/Stimulus:ev_reject+' => '',
	'Class:Change/Stimulus:ev_reopen' => '重开',
	'Class:Change/Stimulus:ev_reopen+' => '',
	'Class:Change/Stimulus:ev_approve' => '批准',
	'Class:Change/Stimulus:ev_approve+' => '',
	'Class:Change/Stimulus:ev_finish' => '关闭',
	'Class:Change/Stimulus:ev_finish+' => '',
	'Class:Change/Attribute:outage' => '停歇',
	'Class:Change/Attribute:outage+' => '',
	'Class:Change/Attribute:outage/Value:no' => '否',
	'Class:Change/Attribute:outage/Value:no+' => '',
	'Class:Change/Attribute:outage/Value:yes' => '是',
	'Class:Change/Attribute:outage/Value:yes+' => '',
));



/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Relation:impacts/Description' => '被影响的元素',
	'Relation:impacts/DownStream' => '影响...',
	'Relation:impacts/UpStream' => '依赖于...',
	'Relation:depends on/Description' => '该元素依赖的元素',
	'Relation:depends on/DownStream' => '依赖于...',
	'Relation:depends on/UpStream' => '影响...',
));








Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Organization' => '组织',
	'Class:Organization+' => '',
	'Class:Organization/Attribute:name' => '名称',
	'Class:Organization/Attribute:name+' => '常用名称',
	'Class:Organization/Attribute:code' => '编码',
	'Class:Organization/Attribute:code+' => '组织编码(Siret, DUNS,...)',
	'Class:Organization/Attribute:status' => '状态',
	'Class:Organization/Attribute:status+' => '',
	'Class:Organization/Attribute:status/Value:active' => '活动',
	'Class:Organization/Attribute:status/Value:active+' => '活动',
	'Class:Organization/Attribute:status/Value:inactive' => '非活动',
	'Class:Organization/Attribute:status/Value:inactive+' => '非活动',
	'Class:Organization/Attribute:parent_id' => '父级',
	'Class:Organization/Attribute:parent_id+' => '父级组织',
	'Class:Organization/Attribute:parent_name' => '父级名称',
	'Class:Organization/Attribute:parent_name+' => '父级组织名称',
	'Class:Organization/Attribute:deliverymodel_id' => '交付模式',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => '交付模式名称',
	'Class:Organization/Attribute:deliverymodel_name+' => '',
	'Class:Organization/Attribute:parent_id_friendlyname' => '父级',
	'Class:Organization/Attribute:parent_id_friendlyname+' => '父级组织',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Location' => '机房',
	'Class:Location+' => '所有机房',
	'Class:Location/Attribute:name' => '名称',
	'Class:Location/Attribute:name+' => '',
	'Class:Location/Attribute:status' => '状态',
	'Class:Location/Attribute:status+' => '',
	'Class:Location/Attribute:status/Value:active' => '活动',
	'Class:Location/Attribute:status/Value:active+' => '活动',
	'Class:Location/Attribute:status/Value:inactive' => '非活动',
	'Class:Location/Attribute:status/Value:inactive+' => '非活动',
	'Class:Location/Attribute:org_id' => '拥有者组织',
	'Class:Location/Attribute:org_id+' => '',
	'Class:Location/Attribute:org_name' => '拥有者组织名称',
	'Class:Location/Attribute:org_name+' => '',
	'Class:Location/Attribute:address' => '地址',
	'Class:Location/Attribute:address+' => '门户地址',
	'Class:Location/Attribute:postal_code' => '邮编',
	'Class:Location/Attribute:postal_code+' => 'ZIP/邮政编码',
	'Class:Location/Attribute:city' => '城市',
	'Class:Location/Attribute:city+' => '',
	'Class:Location/Attribute:country' => '国家',
	'Class:Location/Attribute:country+' => '',
	'Class:Location/Attribute:physicaldevice_list' => '物理设备清单',
	'Class:Location/Attribute:physicaldevice_list+' => '在该机房里的所有物理设备清单',
	'Class:Location/Attribute:person_list' => '人员清单',
	'Class:Location/Attribute:person_list+' => '在该机房的所有人员清单',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Contact' => '联系人',
	'Class:Contact+' => '',
	'Class:Contact/Attribute:name' => '名称',
	'Class:Contact/Attribute:name+' => '',
	'Class:Contact/Attribute:status' => '状态',
	'Class:Contact/Attribute:status+' => '',
	'Class:Contact/Attribute:status/Value:active' => '活动',
	'Class:Contact/Attribute:status/Value:active+' => '活动',
	'Class:Contact/Attribute:status/Value:inactive' => '非活动',
	'Class:Contact/Attribute:status/Value:inactive+' => '非活动',
	'Class:Contact/Attribute:org_id' => '组织',
	'Class:Contact/Attribute:org_id+' => '',
	'Class:Contact/Attribute:org_name' => '组织名称',
	'Class:Contact/Attribute:org_name+' => '',
	'Class:Contact/Attribute:email' => 'Email',
	'Class:Contact/Attribute:email+' => '',
	'Class:Contact/Attribute:phone' => '手机号',
	'Class:Contact/Attribute:phone+' => '',
	'Class:Contact/Attribute:notify' => '通知',
	'Class:Contact/Attribute:notify+' => '',
	'Class:Contact/Attribute:notify/Value:no' => '否',
	'Class:Contact/Attribute:notify/Value:no+' => '否',
	'Class:Contact/Attribute:notify/Value:yes' => '是',
	'Class:Contact/Attribute:notify/Value:yes+' => '是',
	'Class:Contact/Attribute:function' => '职责',
	'Class:Contact/Attribute:function+' => '',
	'Class:Contact/Attribute:cis_list' => '链接的配置项',
	'Class:Contact/Attribute:cis_list+' => '该联系人相关配置项',
	'Class:Contact/Attribute:finalclass' => '类别',
	'Class:Contact/Attribute:finalclass+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Person' => '人员',
	'Class:Person+' => '',
	'Class:Person/Attribute:name' => '名',
	'Class:Person/Attribute:name+' => '',
	'Class:Person/Attribute:first_name' => '姓',
	'Class:Person/Attribute:first_name+' => '',
	'Class:Person/Attribute:employee_number' => '员工编号',
	'Class:Person/Attribute:employee_number+' => '',
	'Class:Person/Attribute:mobile_phone' => '手机号',
	'Class:Person/Attribute:mobile_phone+' => '',
	'Class:Person/Attribute:location_id' => '地点',
	'Class:Person/Attribute:location_id+' => '',
	'Class:Person/Attribute:location_name' => '机房名字',
	'Class:Person/Attribute:location_name+' => '',
	'Class:Person/Attribute:manager_id' => '经理',
	'Class:Person/Attribute:manager_id+' => '',
	'Class:Person/Attribute:manager_name' => '经理是谁',
	'Class:Person/Attribute:manager_name+' => '',
	'Class:Person/Attribute:team_list' => '所属团队',
	'Class:Person/Attribute:team_list+' => '该员工所属于的所有团队',
	'Class:Person/Attribute:tickets_list' => '相关工单',
	'Class:Person/Attribute:tickets_list+' => '该员工发起的所有工单',
	'Class:Person/Attribute:manager_id_friendlyname' => '经理昵称',
	'Class:Person/Attribute:manager_id_friendlyname+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Team' => '团队',
	'Class:Team+' => '',
	'Class:Team/Attribute:persons_list' => '成员',
	'Class:Team/Attribute:persons_list+' => '团队所辖成员',
	'Class:Team/Attribute:tickets_list' => '工单',
	'Class:Team/Attribute:tickets_list+' => '该团队的所有工单',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Document' => '文档',
	'Class:Document+' => '',
	'Class:Document/Attribute:name' => '名称',
	'Class:Document/Attribute:name+' => '',
	'Class:Document/Attribute:org_id' => '组织',
	'Class:Document/Attribute:org_id+' => '',
	'Class:Document/Attribute:org_name' => '组织名称',
	'Class:Document/Attribute:org_name+' => '',
	'Class:Document/Attribute:documenttype_id' => '文档类型',
	'Class:Document/Attribute:documenttype_id+' => '',
	'Class:Document/Attribute:documenttype_name' => '文档类型名称',
	'Class:Document/Attribute:documenttype_name+' => '',
	'Class:Document/Attribute:version' => '版本',
	'Class:Document/Attribute:version+' => '',
	'Class:Document/Attribute:description' => '描述',
	'Class:Document/Attribute:description+' => '',
	'Class:Document/Attribute:status' => '状态',
	'Class:Document/Attribute:status+' => '',
	'Class:Document/Attribute:status/Value:draft' => '草案',
	'Class:Document/Attribute:status/Value:draft+' => '',
	'Class:Document/Attribute:status/Value:obsolete' => '废弃',
	'Class:Document/Attribute:status/Value:obsolete+' => '',
	'Class:Document/Attribute:status/Value:published' => '已发布',
	'Class:Document/Attribute:status/Value:published+' => '',
	'Class:Document/Attribute:cis_list' => '配置项',
	'Class:Document/Attribute:cis_list+' => '关联该文档的配置项',
	'Class:Document/Attribute:contracts_list' => '合同',
	'Class:Document/Attribute:contracts_list+' => '关联该文档的合同',
	'Class:Document/Attribute:services_list' => '服务',
	'Class:Document/Attribute:services_list+' => '关联该文档的服务',
	'Class:Document/Attribute:finalclass' => '文档类型',
	'Class:Document/Attribute:finalclass+' => '文档的类型描述',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DocumentFile' => '文档文件',
	'Class:DocumentFile+' => '',
	'Class:DocumentFile/Attribute:file' => '文件',
	'Class:DocumentFile/Attribute:file+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DocumentNote' => '备注',
	'Class:DocumentNote+' => '',
	'Class:DocumentNote/Attribute:text' => '文本',
	'Class:DocumentNote/Attribute:text+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DocumentWeb' => '网页文档',
	'Class:DocumentWeb+' => '',
	'Class:DocumentWeb/Attribute:url' => '网页地址',
	'Class:DocumentWeb/Attribute:url+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:FunctionalCI' => '功能配置项',
	'Class:FunctionalCI+' => '',
	'Class:FunctionalCI/Attribute:name' => '名称',
	'Class:FunctionalCI/Attribute:name+' => '',
	'Class:FunctionalCI/Attribute:description' => '描述',
	'Class:FunctionalCI/Attribute:description+' => '',
	'Class:FunctionalCI/Attribute:org_id' => '拥有者组织',
	'Class:FunctionalCI/Attribute:org_id+' => '',
	'Class:FunctionalCI/Attribute:organization_name' => '拥有者组织',
	'Class:FunctionalCI/Attribute:organization_name+' => '通用名称',
	'Class:FunctionalCI/Attribute:business_criticity' => '业务级别',
	'Class:FunctionalCI/Attribute:business_criticity+' => '',
	'Class:FunctionalCI/Attribute:business_criticity/Value:high' => '高',
	'Class:FunctionalCI/Attribute:business_criticity/Value:high+' => '高',
	'Class:FunctionalCI/Attribute:business_criticity/Value:low' => '低',
	'Class:FunctionalCI/Attribute:business_criticity/Value:low+' => '低',
	'Class:FunctionalCI/Attribute:business_criticity/Value:medium' => '中',
	'Class:FunctionalCI/Attribute:business_criticity/Value:medium+' => '中',
	'Class:FunctionalCI/Attribute:move2production' => '投入使用日期',
	'Class:FunctionalCI/Attribute:move2production+' => '',
	'Class:FunctionalCI/Attribute:contacts_list' => '联系人',
	'Class:FunctionalCI/Attribute:contacts_list+' => '所有与该配置项目关联的联系人',
	'Class:FunctionalCI/Attribute:documents_list' => '文档',
	'Class:FunctionalCI/Attribute:documents_list+' => '所有与该配置项目相关联的文档',
	'Class:FunctionalCI/Attribute:applicationsolution_list' => 'APP',
	'Class:FunctionalCI/Attribute:applicationsolution_list+' => '在该配置项支持的所有APP',
	'Class:FunctionalCI/Attribute:providercontracts_list' => '合同清单',
	'Class:FunctionalCI/Attribute:providercontracts_list+' => '所有所有合同清单',
	'Class:FunctionalCI/Attribute:services_list' => '服务清单',
	'Class:FunctionalCI/Attribute:services_list+' => '该配置项影响的配置项清单',
	'Class:FunctionalCI/Attribute:softwares_list' => '软件清单',
	'Class:FunctionalCI/Attribute:softwares_list+' => '在该配置项上安装的所有软件',
	'Class:FunctionalCI/Attribute:tickets_list' => '工单',
	'Class:FunctionalCI/Attribute:tickets_list+' => '该配置项的相关的所有工单',
	'Class:FunctionalCI/Attribute:finalclass' => '配置项类型',
	'Class:FunctionalCI/Attribute:finalclass+' => '',
	'Class:FunctionalCI/Tab:OpenedTickets' => '活动工单',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PhysicalDevice' => '物理设备',
	'Class:PhysicalDevice+' => '',
	'Class:PhysicalDevice/Attribute:serialnumber' => '设备串号',
	'Class:PhysicalDevice/Attribute:serialnumber+' => '',
	'Class:PhysicalDevice/Attribute:location_id' => '机房',
	'Class:PhysicalDevice/Attribute:location_id+' => '',
	'Class:PhysicalDevice/Attribute:location_name' => '机房名称',
	'Class:PhysicalDevice/Attribute:location_name+' => '',
	'Class:PhysicalDevice/Attribute:status' => '状态',
	'Class:PhysicalDevice/Attribute:status+' => '',
	'Class:PhysicalDevice/Attribute:status/Value:implementation' => '上线中',
	'Class:PhysicalDevice/Attribute:status/Value:implementation+' => '上线中',
	'Class:PhysicalDevice/Attribute:status/Value:obsolete' => '报废',
	'Class:PhysicalDevice/Attribute:status/Value:obsolete+' => '报废',
	'Class:PhysicalDevice/Attribute:status/Value:production' => '使用中',
	'Class:PhysicalDevice/Attribute:status/Value:production+' => '使用中',
	'Class:PhysicalDevice/Attribute:status/Value:stock' => '库存',
	'Class:PhysicalDevice/Attribute:status/Value:stock+' => '库存',
	'Class:PhysicalDevice/Attribute:brand_id' => '品牌',
	'Class:PhysicalDevice/Attribute:brand_id+' => '',
	'Class:PhysicalDevice/Attribute:brand_name' => '品牌名称',
	'Class:PhysicalDevice/Attribute:brand_name+' => '',
	'Class:PhysicalDevice/Attribute:model_id' => '型号',
	'Class:PhysicalDevice/Attribute:model_id+' => '',
	'Class:PhysicalDevice/Attribute:model_name' => '型号名称',
	'Class:PhysicalDevice/Attribute:model_name+' => '',
	'Class:PhysicalDevice/Attribute:asset_number' => '资产编号',
	'Class:PhysicalDevice/Attribute:asset_number+' => '',
	'Class:PhysicalDevice/Attribute:purchase_date' => '采购日期',
	'Class:PhysicalDevice/Attribute:purchase_date+' => '',
	'Class:PhysicalDevice/Attribute:end_of_warranty' => '过保日期',
	'Class:PhysicalDevice/Attribute:end_of_warranty+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Rack' => '机柜',
	'Class:Rack+' => '',
	'Class:Rack/Attribute:nb_u' => '机柜容量',
	'Class:Rack/Attribute:nb_u+' => '',
	'Class:Rack/Attribute:device_list' => '摆放设备',
	'Class:Rack/Attribute:device_list+' => '所有摆放在内的设备',
	'Class:Rack/Attribute:enclosure_list' => '机笼',
	'Class:Rack/Attribute:enclosure_list+' => '机柜里的所有机笼',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:TelephonyCI' => '电话配置项',
	'Class:TelephonyCI+' => '',
	'Class:TelephonyCI/Attribute:phonenumber' => '电话号码',
	'Class:TelephonyCI/Attribute:phonenumber+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Phone' => '电话',
	'Class:Phone+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:MobilePhone' => '移动电话',
	'Class:MobilePhone+' => '',
	'Class:MobilePhone/Attribute:imei' => 'IMEI',
	'Class:MobilePhone/Attribute:imei+' => '',
	'Class:MobilePhone/Attribute:hw_pin' => '硬件 PIN',
	'Class:MobilePhone/Attribute:hw_pin+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:IPPhone' => 'IP电话',
	'Class:IPPhone+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Tablet' => '平板设备',
	'Class:Tablet+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:ConnectableCI' => '可连接的配置项',
	'Class:ConnectableCI+' => '物理配置项',
	'Class:ConnectableCI/Attribute:networkdevice_list' => '网络设备',
	'Class:ConnectableCI/Attribute:networkdevice_list+' => '所有连接到该设备的网络设备',
	'Class:ConnectableCI/Attribute:physicalinterface_list' => '网络接口',
	'Class:ConnectableCI/Attribute:physicalinterface_list+' => '该设备所有物理网络接口',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DatacenterDevice' => '数据中心设备',
	'Class:DatacenterDevice+' => '',
	'Class:DatacenterDevice/Attribute:rack_id' => '机柜',
	'Class:DatacenterDevice/Attribute:rack_id+' => '',
	'Class:DatacenterDevice/Attribute:rack_name' => '机柜名称',
	'Class:DatacenterDevice/Attribute:rack_name+' => '',
	'Class:DatacenterDevice/Attribute:enclosure_id' => '机笼',
	'Class:DatacenterDevice/Attribute:enclosure_id+' => '',
	'Class:DatacenterDevice/Attribute:enclosure_name' => '机笼名称',
	'Class:DatacenterDevice/Attribute:enclosure_name+' => '',
	'Class:DatacenterDevice/Attribute:nb_u' => '机柜容量',
	'Class:DatacenterDevice/Attribute:nb_u+' => '',
	'Class:DatacenterDevice/Attribute:managementip' => '管理IP地址',
	'Class:DatacenterDevice/Attribute:managementip+' => '',
	'Class:DatacenterDevice/Attribute:powerA_id' => '电源A',
	'Class:DatacenterDevice/Attribute:powerA_id+' => '',
	'Class:DatacenterDevice/Attribute:powerA_name' => '电源A名称',
	'Class:DatacenterDevice/Attribute:powerA_name+' => '',
	'Class:DatacenterDevice/Attribute:powerB_id' => '电源B',
	'Class:DatacenterDevice/Attribute:powerB_id+' => '',
	'Class:DatacenterDevice/Attribute:powerB_name' => '电源B名称',
	'Class:DatacenterDevice/Attribute:powerB_name+' => '',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list' => 'FC光纤接口',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list+' => '所有该设备的FC光纤接口',
	'Class:DatacenterDevice/Attribute:san_list' => '存储网络',
	'Class:DatacenterDevice/Attribute:san_list+' => '所有与此设备连接的存储网络交换机',
	'Class:DatacenterDevice/Attribute:redundancy' => '冗余',
	'Class:DatacenterDevice/Attribute:redundancy/count' => '该设备上至少连接上一个电源（A或者B）',
	// Unused yet
	'Class:DatacenterDevice/Attribute:redundancy/disabled' => '如果设备运行，所连接的所有电源都将运行',
	'Class:DatacenterDevice/Attribute:redundancy/percent' => '如果设备要运行至少连接%1$s %%个电源并运行',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:NetworkDevice' => '网络设备',
	'Class:NetworkDevice+' => '',
	'Class:NetworkDevice/Attribute:networkdevicetype_id' => '网络设备类型',
	'Class:NetworkDevice/Attribute:networkdevicetype_id+' => '',
	'Class:NetworkDevice/Attribute:networkdevicetype_name' => '网络设备类型名称',
	'Class:NetworkDevice/Attribute:networkdevicetype_name+' => '',
	'Class:NetworkDevice/Attribute:connectablecis_list' => '互联设备',
	'Class:NetworkDevice/Attribute:connectablecis_list+' => '所有与此网络设备互联的网络设备',
	'Class:NetworkDevice/Attribute:iosversion_id' => 'IOS 版本',
	'Class:NetworkDevice/Attribute:iosversion_id+' => '',
	'Class:NetworkDevice/Attribute:iosversion_name' => 'IOS 版本名称',
	'Class:NetworkDevice/Attribute:iosversion_name+' => '',
	'Class:NetworkDevice/Attribute:ram' => '内存',
	'Class:NetworkDevice/Attribute:ram+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Server' => '服务器',
	'Class:Server+' => '',
	'Class:Server/Attribute:osfamily_id' => 'OS 家族',
	'Class:Server/Attribute:osfamily_id+' => '',
	'Class:Server/Attribute:osfamily_name' => 'OS 家族名称',
	'Class:Server/Attribute:osfamily_name+' => '',
	'Class:Server/Attribute:osversion_id' => 'OS 版本',
	'Class:Server/Attribute:osversion_id+' => '',
	'Class:Server/Attribute:osversion_name' => 'OS 版本名称',
	'Class:Server/Attribute:osversion_name+' => '',
	'Class:Server/Attribute:oslicence_id' => 'OS licence',
	'Class:Server/Attribute:oslicence_id+' => '',
	'Class:Server/Attribute:oslicence_name' => 'OS licence 名称',
	'Class:Server/Attribute:oslicence_name+' => '',
	'Class:Server/Attribute:cpu' => 'CPU',
	'Class:Server/Attribute:cpu+' => '',
	'Class:Server/Attribute:ram' => '内存',
	'Class:Server/Attribute:ram+' => '',
	'Class:Server/Attribute:logicalvolumes_list' => '逻辑卷',
	'Class:Server/Attribute:logicalvolumes_list+' => '所有连接到该服务器的逻辑卷',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:StorageSystem' => '存储系统',
	'Class:StorageSystem+' => '',
	'Class:StorageSystem/Attribute:logicalvolume_list' => '逻辑卷',
	'Class:StorageSystem/Attribute:logicalvolume_list+' => '所有的逻辑卷',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:SANSwitch' => '存储网络交换',
	'Class:SANSwitch+' => '',
	'Class:SANSwitch/Attribute:datacenterdevice_list' => '设备',
	'Class:SANSwitch/Attribute:datacenterdevice_list+' => '连接到该设备的所有设备',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:TapeLibrary' => '磁带库',
	'Class:TapeLibrary+' => '',
	'Class:TapeLibrary/Attribute:tapes_list' => '磁带',
	'Class:TapeLibrary/Attribute:tapes_list+' => '所有磁带',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:NAS' => '网络附加存储NAS',
	'Class:NAS+' => '',
	'Class:NAS/Attribute:nasfilesystem_list' => '文件系统',
	'Class:NAS/Attribute:nasfilesystem_list+' => '该存储的所有文件系统',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PC' => '个人电脑',
	'Class:PC+' => '',
	'Class:PC/Attribute:osfamily_id' => 'OS 家族',
	'Class:PC/Attribute:osfamily_id+' => '',
	'Class:PC/Attribute:osfamily_name' => 'OS 家族名称',
	'Class:PC/Attribute:osfamily_name+' => '',
	'Class:PC/Attribute:osversion_id' => 'OS 版本',
	'Class:PC/Attribute:osversion_id+' => '',
	'Class:PC/Attribute:osversion_name' => 'OS 版本名称',
	'Class:PC/Attribute:osversion_name+' => '',
	'Class:PC/Attribute:cpu' => 'CPU',
	'Class:PC/Attribute:cpu+' => '',
	'Class:PC/Attribute:ram' => '内存',
	'Class:PC/Attribute:ram+' => '',
	'Class:PC/Attribute:type' => '类型',
	'Class:PC/Attribute:type+' => '',
	'Class:PC/Attribute:type/Value:desktop' => '桌面型',
	'Class:PC/Attribute:type/Value:desktop+' => '桌面型',
	'Class:PC/Attribute:type/Value:laptop' => '便携型',
	'Class:PC/Attribute:type/Value:laptop+' => '便携型',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Printer' => '打印机',
	'Class:Printer+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PowerConnection' => '电源连接',
	'Class:PowerConnection+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PowerSource' => '电源',
	'Class:PowerSource+' => '',
	'Class:PowerSource/Attribute:pdus_list' => '板插',
	'Class:PowerSource/Attribute:pdus_list+' => '使用该电源的所有板插',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PDU' => '板插',
	'Class:PDU+' => '',
	'Class:PDU/Attribute:rack_id' => '所在机柜',
	'Class:PDU/Attribute:rack_id+' => '',
	'Class:PDU/Attribute:rack_name' => '所在机柜名',
	'Class:PDU/Attribute:rack_name+' => '',
	'Class:PDU/Attribute:powerstart_id' => '电源源头',
	'Class:PDU/Attribute:powerstart_id+' => '',
	'Class:PDU/Attribute:powerstart_name' => '电源源头名',
	'Class:PDU/Attribute:powerstart_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Peripheral' => '外围设备',
	'Class:Peripheral+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Enclosure' => '机笼',
	'Class:Enclosure+' => '',
	'Class:Enclosure/Attribute:rack_id' => '所属机柜',
	'Class:Enclosure/Attribute:rack_id+' => '',
	'Class:Enclosure/Attribute:rack_name' => '机柜名',
	'Class:Enclosure/Attribute:rack_name+' => '',
	'Class:Enclosure/Attribute:nb_u' => '机柜容量',
	'Class:Enclosure/Attribute:nb_u+' => '',
	'Class:Enclosure/Attribute:device_list' => '摆放设备',
	'Class:Enclosure/Attribute:device_list+' => '所有的摆放设备',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:ApplicationSolution' => 'APP',
	'Class:ApplicationSolution+' => '',
	'Class:ApplicationSolution/Attribute:functionalcis_list' => '依赖的配置项',
	'Class:ApplicationSolution/Attribute:functionalcis_list+' => '该APP依赖的配置项',
	'Class:ApplicationSolution/Attribute:businessprocess_list' => '业务线',
	'Class:ApplicationSolution/Attribute:businessprocess_list+' => '依赖于该APP的业务线',
	'Class:ApplicationSolution/Attribute:status' => '状态',
	'Class:ApplicationSolution/Attribute:status+' => '',
	'Class:ApplicationSolution/Attribute:status/Value:active' => '激活',
	'Class:ApplicationSolution/Attribute:status/Value:active+' => '激活',
	'Class:ApplicationSolution/Attribute:status/Value:inactive' => '未激活',
	'Class:ApplicationSolution/Attribute:status/Value:inactive+' => '未激活',
	'Class:ApplicationSolution/Attribute:redundancy' => '影响分析: 冗余配置',
	'Class:ApplicationSolution/Attribute:redundancy/disabled' => '如果APP激活，APP里的所有配置项也会激活',
	'Class:ApplicationSolution/Attribute:redundancy/count' => '如果想激活APP至少激活%1$s配置项',
	'Class:ApplicationSolution/Attribute:redundancy/percent' => '如果要激活APP至少激活%1$s %%配置项',

));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:BusinessProcess' => '业务线',
	'Class:BusinessProcess+' => '',
	'Class:BusinessProcess/Attribute:applicationsolutions_list' => 'APP',
	'Class:BusinessProcess/Attribute:applicationsolutions_list+' => '业务线所依赖的APP',
	'Class:BusinessProcess/Attribute:status' => '状态',
	'Class:BusinessProcess/Attribute:status+' => '',
	'Class:BusinessProcess/Attribute:status/Value:active' => '激活',
	'Class:BusinessProcess/Attribute:status/Value:active+' => '激活',
	'Class:BusinessProcess/Attribute:status/Value:inactive' => '未激活',
	'Class:BusinessProcess/Attribute:status/Value:inactive+' => '未激活',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:SoftwareInstance' => '软件实例',
	'Class:SoftwareInstance+' => '',
	'Class:SoftwareInstance/Attribute:system_id' => '系统',
	'Class:SoftwareInstance/Attribute:system_id+' => '',
	'Class:SoftwareInstance/Attribute:system_name' => '系统名称',
	'Class:SoftwareInstance/Attribute:system_name+' => '',
	'Class:SoftwareInstance/Attribute:software_id' => '软件',
	'Class:SoftwareInstance/Attribute:software_id+' => '',
	'Class:SoftwareInstance/Attribute:software_name' => '软件名称',
	'Class:SoftwareInstance/Attribute:software_name+' => '',
	'Class:SoftwareInstance/Attribute:softwarelicence_id' => '软件licence',
	'Class:SoftwareInstance/Attribute:softwarelicence_id+' => '',
	'Class:SoftwareInstance/Attribute:softwarelicence_name' => '软件licence名称',
	'Class:SoftwareInstance/Attribute:softwarelicence_name+' => '',
	'Class:SoftwareInstance/Attribute:path' => '补丁',
	'Class:SoftwareInstance/Attribute:path+' => '',
	'Class:SoftwareInstance/Attribute:status' => '状态',
	'Class:SoftwareInstance/Attribute:status+' => '',
	'Class:SoftwareInstance/Attribute:status/Value:active' => '激活',
	'Class:SoftwareInstance/Attribute:status/Value:active+' => '激活',
	'Class:SoftwareInstance/Attribute:status/Value:inactive' => '未激活',
	'Class:SoftwareInstance/Attribute:status/Value:inactive+' => '未激活',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Middleware' => '中间件',
	'Class:Middleware+' => '',
	'Class:Middleware/Attribute:middlewareinstance_list' => '中间件实例',
	'Class:Middleware/Attribute:middlewareinstance_list+' => '该设备提供的所有中间件实例',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DBServer' => '数据库',
	'Class:DBServer+' => '',
	'Class:DBServer/Attribute:dbschema_list' => '数据库架构',
	'Class:DBServer/Attribute:dbschema_list+' => '所有的数据库架构',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:WebServer' => '网站服务器',
	'Class:WebServer+' => '',
	'Class:WebServer/Attribute:webapp_list' => '网站应用',
	'Class:WebServer/Attribute:webapp_list+' => '该服务器上的所有网站应用',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PCSoftware' => '电脑软件',
	'Class:PCSoftware+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:OtherSoftware' => '其它软件',
	'Class:OtherSoftware+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:MiddlewareInstance' => '中间件实例',
	'Class:MiddlewareInstance+' => '',
	'Class:MiddlewareInstance/Attribute:middleware_id' => '中间件',
	'Class:MiddlewareInstance/Attribute:middleware_id+' => '',
	'Class:MiddlewareInstance/Attribute:middleware_name' => '中间件名称',
	'Class:MiddlewareInstance/Attribute:middleware_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DatabaseSchema' => '数据库架构',
	'Class:DatabaseSchema+' => '',
	'Class:DatabaseSchema/Attribute:dbserver_id' => '数据库服务器',
	'Class:DatabaseSchema/Attribute:dbserver_id+' => '',
	'Class:DatabaseSchema/Attribute:dbserver_name' => '数据库服务器名',
	'Class:DatabaseSchema/Attribute:dbserver_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:WebApplication' => '网站应用',
	'Class:WebApplication+' => '',
	'Class:WebApplication/Attribute:webserver_id' => '网站服务器',
	'Class:WebApplication/Attribute:webserver_id+' => '',
	'Class:WebApplication/Attribute:webserver_name' => '网站服务器名',
	'Class:WebApplication/Attribute:webserver_name+' => '',
	'Class:WebApplication/Attribute:url' => '网址',
	'Class:WebApplication/Attribute:url+' => '',
));



Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:VirtualDevice' => '虚拟化',
	'Class:VirtualDevice+' => '',
	'Class:VirtualDevice/Attribute:status' => '状态',
	'Class:VirtualDevice/Attribute:status+' => '',
	'Class:VirtualDevice/Attribute:status/Value:implementation' => '实施',
	'Class:VirtualDevice/Attribute:status/Value:implementation+' => '实施',
	'Class:VirtualDevice/Attribute:status/Value:obsolete' => '废旧',
	'Class:VirtualDevice/Attribute:status/Value:obsolete+' => '废旧',
	'Class:VirtualDevice/Attribute:status/Value:production' => '生产',
	'Class:VirtualDevice/Attribute:status/Value:production+' => '生产',
	'Class:VirtualDevice/Attribute:status/Value:stock' => '库存',
	'Class:VirtualDevice/Attribute:status/Value:stock+' => '库存',
	'Class:VirtualDevice/Attribute:logicalvolumes_list' => '逻辑卷',
	'Class:VirtualDevice/Attribute:logicalvolumes_list+' => '该设备使用的所有逻辑卷',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:VirtualHost' => '虚拟主机',
	'Class:VirtualHost+' => '',
	'Class:VirtualHost/Attribute:virtualmachine_list' => '虚拟机',
	'Class:VirtualHost/Attribute:virtualmachine_list+' => '该主机上的所有虚拟机',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Hypervisor' => '虚拟主机',
	'Class:Hypervisor+' => '',
	'Class:Hypervisor/Attribute:farm_id' => '群集',
	'Class:Hypervisor/Attribute:farm_id+' => '',
	'Class:Hypervisor/Attribute:farm_name' => '群集名',
	'Class:Hypervisor/Attribute:farm_name+' => '',
	'Class:Hypervisor/Attribute:server_id' => '服务器',
	'Class:Hypervisor/Attribute:server_id+' => '',
	'Class:Hypervisor/Attribute:server_name' => '服务器名',
	'Class:Hypervisor/Attribute:server_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Farm' => '群集',
	'Class:Farm+' => '',
	'Class:Farm/Attribute:hypervisor_list' => '虚拟化程序',
	'Class:Farm/Attribute:hypervisor_list+' => '构成群集的所有虚拟化程序',
	'Class:Farm/Attribute:redundancy' => '高可用性',
	'Class:Farm/Attribute:redundancy/disabled' => '如果集群激活，集群里所有服务器将激活',
	'Class:Farm/Attribute:redundancy/count' => '如果要激活集群至少激活%1$s台虚拟服务器',
	'Class:Farm/Attribute:redundancy/percent' => '如果要激活集群至少激活%1$s %%虚拟服务器',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:VirtualMachine' => '虚拟机',
	'Class:VirtualMachine+' => '',
	'Class:VirtualMachine/Attribute:virtualhost_id' => '虚拟机',
	'Class:VirtualMachine/Attribute:virtualhost_id+' => '',
	'Class:VirtualMachine/Attribute:virtualhost_name' => '虚拟主机名',
	'Class:VirtualMachine/Attribute:virtualhost_name+' => '',
	'Class:VirtualMachine/Attribute:osfamily_id' => 'OS 家族',
	'Class:VirtualMachine/Attribute:osfamily_id+' => '',
	'Class:VirtualMachine/Attribute:osfamily_name' => 'OS 家族名称',
	'Class:VirtualMachine/Attribute:osfamily_name+' => '',
	'Class:VirtualMachine/Attribute:osversion_id' => 'OS 版本',
	'Class:VirtualMachine/Attribute:osversion_id+' => '',
	'Class:VirtualMachine/Attribute:osversion_name' => 'OS 版本名称',
	'Class:VirtualMachine/Attribute:osversion_name+' => '',
	'Class:VirtualMachine/Attribute:oslicence_id' => 'OS licence',
	'Class:VirtualMachine/Attribute:oslicence_id+' => '',
	'Class:VirtualMachine/Attribute:oslicence_name' => 'OS licence名称',
	'Class:VirtualMachine/Attribute:oslicence_name+' => '',
	'Class:VirtualMachine/Attribute:cpu' => 'CPU',
	'Class:VirtualMachine/Attribute:cpu+' => '',
	'Class:VirtualMachine/Attribute:ram' => '内存',
	'Class:VirtualMachine/Attribute:ram+' => '',
	'Class:VirtualMachine/Attribute:managementip' => '管理IP地址',
	'Class:VirtualMachine/Attribute:managementip+' => '',
	'Class:VirtualMachine/Attribute:logicalinterface_list' => '网络接口',
	'Class:VirtualMachine/Attribute:logicalinterface_list+' => '所有的网络接口',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:LogicalVolume' => '逻辑卷',
	'Class:LogicalVolume+' => '',
	'Class:LogicalVolume/Attribute:name' => '名称',
	'Class:LogicalVolume/Attribute:name+' => '',
	'Class:LogicalVolume/Attribute:lun_id' => '逻辑卷 ID',
	'Class:LogicalVolume/Attribute:lun_id+' => '',
	'Class:LogicalVolume/Attribute:description' => '描述',
	'Class:LogicalVolume/Attribute:description+' => '',
	'Class:LogicalVolume/Attribute:raid_level' => '阵列级别',
	'Class:LogicalVolume/Attribute:raid_level+' => '',
	'Class:LogicalVolume/Attribute:size' => '大小',
	'Class:LogicalVolume/Attribute:size+' => '',
	'Class:LogicalVolume/Attribute:storagesystem_id' => '存储系统',
	'Class:LogicalVolume/Attribute:storagesystem_id+' => '',
	'Class:LogicalVolume/Attribute:storagesystem_name' => '存储系统名',
	'Class:LogicalVolume/Attribute:storagesystem_name+' => '',
	'Class:LogicalVolume/Attribute:servers_list' => '服务器',
	'Class:LogicalVolume/Attribute:servers_list+' => '使用该卷的所有服务器',
	'Class:LogicalVolume/Attribute:virtualdevices_list' => '虚拟设备',
	'Class:LogicalVolume/Attribute:virtualdevices_list+' => '使用该逻辑卷的所有虚拟设备',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkServerToVolume' => '链接服务器 / 卷',
	'Class:lnkServerToVolume+' => '',
	'Class:lnkServerToVolume/Attribute:volume_id' => '卷',
	'Class:lnkServerToVolume/Attribute:volume_id+' => '',
	'Class:lnkServerToVolume/Attribute:volume_name' => '卷名称',
	'Class:lnkServerToVolume/Attribute:volume_name+' => '',
	'Class:lnkServerToVolume/Attribute:server_id' => '服务器',
	'Class:lnkServerToVolume/Attribute:server_id+' => '',
	'Class:lnkServerToVolume/Attribute:server_name' => '服务器名称',
	'Class:lnkServerToVolume/Attribute:server_name+' => '',
	'Class:lnkServerToVolume/Attribute:size_used' => '已分配空间',
	'Class:lnkServerToVolume/Attribute:size_used+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkVirtualDeviceToVolume' => '链接虚拟驱动器 / 卷',
	'Class:lnkVirtualDeviceToVolume+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_id' => '卷',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_id+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_name' => '卷名称',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_name+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_id' => '虚拟驱动器',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_id+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_name' => '虚拟驱动器名称',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_name+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:size_used' => '已分配空间',
	'Class:lnkVirtualDeviceToVolume/Attribute:size_used+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkSanToDatacenterDevice' => '链接存储网络 / 数据中心驱动器',
	'Class:lnkSanToDatacenterDevice+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:san_id' => '存储网络交换机',
	'Class:lnkSanToDatacenterDevice/Attribute:san_id+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:san_name' => '存储网络交换机名称',
	'Class:lnkSanToDatacenterDevice/Attribute:san_name+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_id' => '设备',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_id+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_name' => '设备名称',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_name+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:san_port' => 'fc存储网络',
	'Class:lnkSanToDatacenterDevice/Attribute:san_port+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_port' => 'fc驱动器',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_port+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Tape' => '磁带',
	'Class:Tape+' => '',
	'Class:Tape/Attribute:name' => '名称',
	'Class:Tape/Attribute:name+' => '',
	'Class:Tape/Attribute:description' => '描述',
	'Class:Tape/Attribute:description+' => '',
	'Class:Tape/Attribute:size' => '容量',
	'Class:Tape/Attribute:size+' => '',
	'Class:Tape/Attribute:tapelibrary_id' => '磁带库',
	'Class:Tape/Attribute:tapelibrary_id+' => '',
	'Class:Tape/Attribute:tapelibrary_name' => '磁带库名称',
	'Class:Tape/Attribute:tapelibrary_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:NASFileSystem' => '网络附加存储NAS',
	'Class:NASFileSystem+' => '',
	'Class:NASFileSystem/Attribute:name' => '名称',
	'Class:NASFileSystem/Attribute:name+' => '',
	'Class:NASFileSystem/Attribute:description' => '描述',
	'Class:NASFileSystem/Attribute:description+' => '',
	'Class:NASFileSystem/Attribute:raid_level' => '阵列级别',
	'Class:NASFileSystem/Attribute:raid_level+' => '',
	'Class:NASFileSystem/Attribute:size' => '容量',
	'Class:NASFileSystem/Attribute:size+' => '',
	'Class:NASFileSystem/Attribute:nas_id' => '网络附加存储',
	'Class:NASFileSystem/Attribute:nas_id+' => '',
	'Class:NASFileSystem/Attribute:nas_name' => '网络附加存储名',
	'Class:NASFileSystem/Attribute:nas_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Software' => '软件',
	'Class:Software+' => '',
	'Class:Software/Attribute:name' => '名称',
	'Class:Software/Attribute:name+' => '',
	'Class:Software/Attribute:vendor' => '供应商',
	'Class:Software/Attribute:vendor+' => '',
	'Class:Software/Attribute:version' => '版本',
	'Class:Software/Attribute:version+' => '',
	'Class:Software/Attribute:documents_list' => '文档',
	'Class:Software/Attribute:documents_list+' => '该软件相关的所有文档',
	'Class:Software/Attribute:type' => '类别',
	'Class:Software/Attribute:type+' => '',
	'Class:Software/Attribute:type/Value:DBServer' => '数据库',
	'Class:Software/Attribute:type/Value:DBServer+' => '数据库',
	'Class:Software/Attribute:type/Value:Middleware' => '中间件',
	'Class:Software/Attribute:type/Value:Middleware+' => '中间件',
	'Class:Software/Attribute:type/Value:OtherSoftware' => '其它软件',
	'Class:Software/Attribute:type/Value:OtherSoftware+' => '其它软件',
	'Class:Software/Attribute:type/Value:PCSoftware' => '个人电脑软件',
	'Class:Software/Attribute:type/Value:PCSoftware+' => '个人电脑软件',
	'Class:Software/Attribute:type/Value:WebServer' => '网站服务',
	'Class:Software/Attribute:type/Value:WebServer+' => '网站服务',
	'Class:Software/Attribute:softwareinstance_list' => '软件实例',
	'Class:Software/Attribute:softwareinstance_list+' => '该软件的所有实例',
	'Class:Software/Attribute:softwarepatch_list' => '软件补丁',
	'Class:Software/Attribute:softwarepatch_list+' => '该软件的所有补丁',
	'Class:Software/Attribute:softwarelicence_list' => '软件许可',
	'Class:Software/Attribute:softwarelicence_list+' => '该软件的所有许可',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Patch' => '补丁',
	'Class:Patch+' => '',
	'Class:Patch/Attribute:name' => '名称',
	'Class:Patch/Attribute:name+' => '',
	'Class:Patch/Attribute:documents_list' => '文档',
	'Class:Patch/Attribute:documents_list+' => '所有连接到该补丁的文档',
	'Class:Patch/Attribute:description' => '描述',
	'Class:Patch/Attribute:description+' => '',
	'Class:Patch/Attribute:finalclass' => '类型',
	'Class:Patch/Attribute:finalclass+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:OSPatch' => 'OS补丁',
	'Class:OSPatch+' => '',
	'Class:OSPatch/Attribute:functionalcis_list' => '系统设备',
	'Class:OSPatch/Attribute:functionalcis_list+' => '所有安装该补丁的系统',
	'Class:OSPatch/Attribute:osversion_id' => 'OS版本',
	'Class:OSPatch/Attribute:osversion_id+' => '',
	'Class:OSPatch/Attribute:osversion_name' => 'OS版本名称',
	'Class:OSPatch/Attribute:osversion_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:SoftwarePatch' => '软件补丁',
	'Class:SoftwarePatch+' => '',
	'Class:SoftwarePatch/Attribute:software_id' => '软件',
	'Class:SoftwarePatch/Attribute:software_id+' => '',
	'Class:SoftwarePatch/Attribute:software_name' => '软件名称',
	'Class:SoftwarePatch/Attribute:software_name+' => '',
	'Class:SoftwarePatch/Attribute:softwareinstances_list' => '软件实例',
	'Class:SoftwarePatch/Attribute:softwareinstances_list+' => '所有安装该补丁的软件实例',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Licence' => 'License',
	'Class:Licence+' => '',
	'Class:Licence/Attribute:name' => '名称',
	'Class:Licence/Attribute:name+' => '',
	'Class:Licence/Attribute:documents_list' => '文档',
	'Class:Licence/Attribute:documents_list+' => '所有连接到这个Licence的文档',
	'Class:Licence/Attribute:org_id' => '所有者',
	'Class:Licence/Attribute:org_id+' => '',
	'Class:Licence/Attribute:organization_name' => '所有者名称',
	'Class:Licence/Attribute:organization_name+' => '通用名称',
	'Class:Licence/Attribute:usage_limit' => '使用限制',
	'Class:Licence/Attribute:usage_limit+' => '',
	'Class:Licence/Attribute:description' => '描述',
	'Class:Licence/Attribute:description+' => '',
	'Class:Licence/Attribute:start_date' => '启始日期',
	'Class:Licence/Attribute:start_date+' => '',
	'Class:Licence/Attribute:end_date' => '终止日期',
	'Class:Licence/Attribute:end_date+' => '',
	'Class:Licence/Attribute:licence_key' => 'Key',
	'Class:Licence/Attribute:licence_key+' => '',
	'Class:Licence/Attribute:perpetual' => '永久使用',
	'Class:Licence/Attribute:perpetual+' => '',
	'Class:Licence/Attribute:perpetual/Value:no' => '否',
	'Class:Licence/Attribute:perpetual/Value:no+' => '否',
	'Class:Licence/Attribute:perpetual/Value:yes' => '是',
	'Class:Licence/Attribute:perpetual/Value:yes+' => '是',
	'Class:Licence/Attribute:finalclass' => '类型',
	'Class:Licence/Attribute:finalclass+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:OSLicence' => 'OS Licence',
	'Class:OSLicence+' => '',
	'Class:OSLicence/Attribute:osversion_id' => 'OS版本',
	'Class:OSLicence/Attribute:osversion_id+' => '',
	'Class:OSLicence/Attribute:osversion_name' => 'OS版本名称',
	'Class:OSLicence/Attribute:osversion_name+' => '',
	'Class:OSLicence/Attribute:virtualmachines_list' => '虚拟机',
	'Class:OSLicence/Attribute:virtualmachines_list+' => '所有使用此Licence的虚拟机',
	'Class:OSLicence/Attribute:servers_list' => '服务器',
	'Class:OSLicence/Attribute:servers_list+' => '所有使用此Licence的服务器',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:SoftwareLicence' => '软件 Licence',
	'Class:SoftwareLicence+' => '',
	'Class:SoftwareLicence/Attribute:software_id' => '软件',
	'Class:SoftwareLicence/Attribute:software_id+' => '',
	'Class:SoftwareLicence/Attribute:software_name' => '软件名称',
	'Class:SoftwareLicence/Attribute:software_name+' => '',
	'Class:SoftwareLicence/Attribute:softwareinstance_list' => '软件实例',
	'Class:SoftwareLicence/Attribute:softwareinstance_list+' => '所有使用此Licence的系统',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkDocumentToLicence' => '链接文档 / Licence',
	'Class:lnkDocumentToLicence+' => '',
	'Class:lnkDocumentToLicence/Attribute:licence_id' => 'Licence',
	'Class:lnkDocumentToLicence/Attribute:licence_id+' => '',
	'Class:lnkDocumentToLicence/Attribute:licence_name' => 'Licence名称',
	'Class:lnkDocumentToLicence/Attribute:licence_name+' => '',
	'Class:lnkDocumentToLicence/Attribute:document_id' => '文档',
	'Class:lnkDocumentToLicence/Attribute:document_id+' => '',
	'Class:lnkDocumentToLicence/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToLicence/Attribute:document_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Typology' => '类型配置',
	'Class:Typology+' => '',
	'Class:Typology/Attribute:name' => '名称',
	'Class:Typology/Attribute:name+' => '',
	'Class:Typology/Attribute:finalclass' => '类型',
	'Class:Typology/Attribute:finalclass+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:OSVersion' => 'OS 版本',
	'Class:OSVersion+' => '',
	'Class:OSVersion/Attribute:osfamily_id' => 'OS 家族',
	'Class:OSVersion/Attribute:osfamily_id+' => '',
	'Class:OSVersion/Attribute:osfamily_name' => 'OS 家族名称',
	'Class:OSVersion/Attribute:osfamily_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:OSFamily' => 'OS 家族',
	'Class:OSFamily+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DocumentType' => '文档类型',
	'Class:DocumentType+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:ContactType' => '联系类型',
	'Class:ContactType+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Brand' => '品牌',
	'Class:Brand+' => '',
	'Class:Brand/Attribute:physicaldevices_list' => '物理设备',
	'Class:Brand/Attribute:physicaldevices_list+' => '与这个品牌相符的所有物理设备',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Model' => '型号',
	'Class:Model+' => '',
	'Class:Model/Attribute:brand_id' => '品牌',
	'Class:Model/Attribute:brand_id+' => '',
	'Class:Model/Attribute:brand_name' => '品牌名称',
	'Class:Model/Attribute:brand_name+' => '',
	'Class:Model/Attribute:type' => '设备类型',
	'Class:Model/Attribute:type+' => '',
	'Class:Model/Attribute:type/Value:PowerSource' => '电源来源',
	'Class:Model/Attribute:type/Value:PowerSource+' => '电源来源',
	'Class:Model/Attribute:type/Value:DiskArray' => '磁盘阵列',
	'Class:Model/Attribute:type/Value:DiskArray+' => '磁盘阵列',
	'Class:Model/Attribute:type/Value:Enclosure' => '柜位',
	'Class:Model/Attribute:type/Value:Enclosure+' => '柜位',
	'Class:Model/Attribute:type/Value:IPPhone' => 'IP 电话',
	'Class:Model/Attribute:type/Value:IPPhone+' => 'IP 电话',
	'Class:Model/Attribute:type/Value:MobilePhone' => '移动电话',
	'Class:Model/Attribute:type/Value:MobilePhone+' => '移动电话',
	'Class:Model/Attribute:type/Value:NAS' => 'NAS',
	'Class:Model/Attribute:type/Value:NAS+' => 'NAS',
	'Class:Model/Attribute:type/Value:NetworkDevice' => '网络设备',
	'Class:Model/Attribute:type/Value:NetworkDevice+' => '网络设备',
	'Class:Model/Attribute:type/Value:PC' => '个人电脑',
	'Class:Model/Attribute:type/Value:PC+' => '个人电脑',
	'Class:Model/Attribute:type/Value:PDU' => '插板',
	'Class:Model/Attribute:type/Value:PDU+' => '插板',
	'Class:Model/Attribute:type/Value:Peripheral' => '外围设备',
	'Class:Model/Attribute:type/Value:Peripheral+' => '外围设备',
	'Class:Model/Attribute:type/Value:Printer' => '打印机',
	'Class:Model/Attribute:type/Value:Printer+' => '打印机',
	'Class:Model/Attribute:type/Value:Rack' => '机柜',
	'Class:Model/Attribute:type/Value:Rack+' => '机柜',
	'Class:Model/Attribute:type/Value:SANSwitch' => 'SAN 交换机',
	'Class:Model/Attribute:type/Value:SANSwitch+' => 'SAN 交换机',
	'Class:Model/Attribute:type/Value:Server' => '服务器',
	'Class:Model/Attribute:type/Value:Server+' => '服务器',
	'Class:Model/Attribute:type/Value:StorageSystem' => '存储系统',
	'Class:Model/Attribute:type/Value:StorageSystem+' => '存储系统',
	'Class:Model/Attribute:type/Value:Tablet' => '平板电脑',
	'Class:Model/Attribute:type/Value:Tablet+' => '平板电脑',
	'Class:Model/Attribute:type/Value:TapeLibrary' => '磁带库',
	'Class:Model/Attribute:type/Value:TapeLibrary+' => '磁带库',
	'Class:Model/Attribute:type/Value:Phone' => '电话',
	'Class:Model/Attribute:type/Value:Phone+' => '电话',
	'Class:Model/Attribute:physicaldevices_list' => '物理设备',
	'Class:Model/Attribute:physicaldevices_list+' => '与这个型号相关的所有物理设备',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:NetworkDeviceType' => '网络设备类型',
	'Class:NetworkDeviceType+' => '',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list' => '网络设备',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list+' => '符合这个类型的所有物理设备',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:IOSVersion' => 'IOS 版本',
	'Class:IOSVersion+' => '',
	'Class:IOSVersion/Attribute:brand_id' => '品牌',
	'Class:IOSVersion/Attribute:brand_id+' => '',
	'Class:IOSVersion/Attribute:brand_name' => '品牌名称',
	'Class:IOSVersion/Attribute:brand_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkDocumentToPatch' => '链接文档 / 补丁',
	'Class:lnkDocumentToPatch+' => '',
	'Class:lnkDocumentToPatch/Attribute:patch_id' => '补丁',
	'Class:lnkDocumentToPatch/Attribute:patch_id+' => '',
	'Class:lnkDocumentToPatch/Attribute:patch_name' => '补丁名称',
	'Class:lnkDocumentToPatch/Attribute:patch_name+' => '',
	'Class:lnkDocumentToPatch/Attribute:document_id' => '文档',
	'Class:lnkDocumentToPatch/Attribute:document_id+' => '',
	'Class:lnkDocumentToPatch/Attribute:document_name' => '文档名',
	'Class:lnkDocumentToPatch/Attribute:document_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkSoftwareInstanceToSoftwarePatch' => '链接软件实例 / 软件补丁',
	'Class:lnkSoftwareInstanceToSoftwarePatch+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_id' => '软件补丁',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_id+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_name' => '软件补丁名称',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_name+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_id' => '软件实例',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_id+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_name' => '软件实例名称',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkFunctionalCIToOSPatch' => '链接配置项 / 操作系统补丁',
	'Class:lnkFunctionalCIToOSPatch+' => '',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_id' => 'OS 系统补丁',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_id+' => '',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_name' => 'OS 系统补丁名称',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_name+' => '',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_id' => '配置项',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkDocumentToSoftware' => '链接文档 / 软件',
	'Class:lnkDocumentToSoftware+' => '',
	'Class:lnkDocumentToSoftware/Attribute:software_id' => '软件',
	'Class:lnkDocumentToSoftware/Attribute:software_id+' => '',
	'Class:lnkDocumentToSoftware/Attribute:software_name' => '软件名称',
	'Class:lnkDocumentToSoftware/Attribute:software_name+' => '',
	'Class:lnkDocumentToSoftware/Attribute:document_id' => '文档',
	'Class:lnkDocumentToSoftware/Attribute:document_id+' => '',
	'Class:lnkDocumentToSoftware/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToSoftware/Attribute:document_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkContactToFunctionalCI' => '链接联系人 / 配置项',
	'Class:lnkContactToFunctionalCI+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_id' => '功能配置项',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_name' => '功能配置项名称',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:contact_id' => '联系人',
	'Class:lnkContactToFunctionalCI/Attribute:contact_id+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:contact_name' => '联系人名称',
	'Class:lnkContactToFunctionalCI/Attribute:contact_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkDocumentToFunctionalCI' => '链接文档 / 配置项',
	'Class:lnkDocumentToFunctionalCI+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_id' => '配置项',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_name' => '配置项',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_id' => '文档',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_id+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_name' => '文档名',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Subnet' => '子网',
	'Class:Subnet+' => '',
	'Class:Subnet/Attribute:description' => '描述',
	'Class:Subnet/Attribute:description+' => '',
	'Class:Subnet/Attribute:subnet_name' => '子网名称',
	'Class:Subnet/Attribute:subnet_name+' => '',
	'Class:Subnet/Attribute:org_id' => '拥有者组织',
	'Class:Subnet/Attribute:org_id+' => '',
	'Class:Subnet/Attribute:org_name' => '名称',
	'Class:Subnet/Attribute:org_name+' => '通用名称',
	'Class:Subnet/Attribute:ip' => 'IP地址',
	'Class:Subnet/Attribute:ip+' => '',
	'Class:Subnet/Attribute:ip_mask' => '子网掩码',
	'Class:Subnet/Attribute:ip_mask+' => '',
	'Class:Subnet/Attribute:vlans_list' => 'VLANs',
	'Class:Subnet/Attribute:vlans_list+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:VLAN' => 'VLAN',
	'Class:VLAN+' => '',
	'Class:VLAN/Attribute:vlan_tag' => '虚拟网标识',
	'Class:VLAN/Attribute:vlan_tag+' => '',
	'Class:VLAN/Attribute:description' => '描述',
	'Class:VLAN/Attribute:description+' => '',
	'Class:VLAN/Attribute:org_id' => '组织',
	'Class:VLAN/Attribute:org_id+' => '',
	'Class:VLAN/Attribute:org_name' => '组织名称',
	'Class:VLAN/Attribute:org_name+' => '通用名称',
	'Class:VLAN/Attribute:subnets_list' => '子网',
	'Class:VLAN/Attribute:subnets_list+' => '',
	'Class:VLAN/Attribute:physicalinterfaces_list' => '物理接口',
	'Class:VLAN/Attribute:physicalinterfaces_list+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkSubnetToVLAN' => '链接子网 / 虚拟局域网',
	'Class:lnkSubnetToVLAN+' => '',
	'Class:lnkSubnetToVLAN/Attribute:subnet_id' => '子网',
	'Class:lnkSubnetToVLAN/Attribute:subnet_id+' => '',
	'Class:lnkSubnetToVLAN/Attribute:subnet_ip' => '子网地址',
	'Class:lnkSubnetToVLAN/Attribute:subnet_ip+' => '',
	'Class:lnkSubnetToVLAN/Attribute:subnet_name' => '子网名称',
	'Class:lnkSubnetToVLAN/Attribute:subnet_name+' => '',
	'Class:lnkSubnetToVLAN/Attribute:vlan_id' => 'VLAN',
	'Class:lnkSubnetToVLAN/Attribute:vlan_id+' => '',
	'Class:lnkSubnetToVLAN/Attribute:vlan_tag' => 'VLAN 标识',
	'Class:lnkSubnetToVLAN/Attribute:vlan_tag+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:NetworkInterface' => '网络接口',
	'Class:NetworkInterface+' => '',
	'Class:NetworkInterface/Attribute:name' => '名称',
	'Class:NetworkInterface/Attribute:name+' => '',
	'Class:NetworkInterface/Attribute:finalclass' => '类型',
	'Class:NetworkInterface/Attribute:finalclass+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:IPInterface' => '网络地址接口',
	'Class:IPInterface+' => '',
	'Class:IPInterface/Attribute:ipaddress' => 'IP 地址',
	'Class:IPInterface/Attribute:ipaddress+' => '',


	'Class:IPInterface/Attribute:macaddress' => 'MAC 地址',
	'Class:IPInterface/Attribute:macaddress+' => '',
	'Class:IPInterface/Attribute:comment' => '备注',
	'Class:IPInterface/Attribute:coment+' => '',
	'Class:IPInterface/Attribute:ipgateway' => '网关',
	'Class:IPInterface/Attribute:ipgateway+' => '',
	'Class:IPInterface/Attribute:ipmask' => '子网掩码',
	'Class:IPInterface/Attribute:ipmask+' => '',
	'Class:IPInterface/Attribute:speed' => '速率',
	'Class:IPInterface/Attribute:speed+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PhysicalInterface' => '物理接口',
	'Class:PhysicalInterface+' => '',
	'Class:PhysicalInterface/Attribute:connectableci_id' => '设备',
	'Class:PhysicalInterface/Attribute:connectableci_id+' => '',
	'Class:PhysicalInterface/Attribute:connectableci_name' => '设备名',
	'Class:PhysicalInterface/Attribute:connectableci_name+' => '',
	'Class:PhysicalInterface/Attribute:vlans_list' => 'VLANs',
	'Class:PhysicalInterface/Attribute:vlans_list+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkPhysicalInterfaceToVLAN' => '物理接口 / VLAN',
	'Class:lnkPhysicalInterfaceToVLAN+' => '',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_id' => '物理接口',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_id+' => '',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_name' => '物理接口名',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_name+' => '',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_id' => '设备',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_id+' => '',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_name' => '设备名称',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_name+' => '',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_id' => 'VLAN',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_id+' => '',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_tag' => 'VLAN 标识',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_tag+' => '',
));



Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:LogicalInterface' => '逻辑接口',
	'Class:LogicalInterface+' => '',
	'Class:LogicalInterface/Attribute:virtualmachine_id' => '虚拟机',
	'Class:LogicalInterface/Attribute:virtualmachine_id+' => '',
	'Class:LogicalInterface/Attribute:virtualmachine_name' => '虚拟机名称',
	'Class:LogicalInterface/Attribute:virtualmachine_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:FiberChannelInterface' => '光纤通道接口',
	'Class:FiberChannelInterface+' => '',
	'Class:FiberChannelInterface/Attribute:speed' => '速率',
	'Class:FiberChannelInterface/Attribute:speed+' => '',
	'Class:FiberChannelInterface/Attribute:topology' => '拓扑',
	'Class:FiberChannelInterface/Attribute:topology+' => '',
	'Class:FiberChannelInterface/Attribute:wwn' => '全局唯一名',
	'Class:FiberChannelInterface/Attribute:wwn+' => '',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_id' => '设备',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_id+' => '',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_name' => '设备名',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkConnectableCIToNetworkDevice' => '连接线配置项 / 网络设备',
	'Class:lnkConnectableCIToNetworkDevice+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_id' => '网络设备',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_id+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_name' => '网络设备名',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_name+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_id' => '已连接设备',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_id+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_name' => '已连接设备名',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_name+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:network_port' => '网口',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:network_port+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:device_port' => '设备接口',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:device_port+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type' => '连接类型',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink' => '向下级连',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink+' => '向下级连',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink' => '向上级连',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink+' => '向上级连',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkApplicationSolutionToFunctionalCI' => 'APP / 配置项',
	'Class:lnkApplicationSolutionToFunctionalCI+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id' => 'APP',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name' => 'APP名',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id' => '配置项',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name' => '配置项名',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkApplicationSolutionToBusinessProcess' => 'APP/ 业务线',
	'Class:lnkApplicationSolutionToBusinessProcess+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id' => '业务线',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name' => '业务线名称',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id' => 'APP',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name' => 'APP名称',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkPersonToTeam' => '链接人员/ 团队',
	'Class:lnkPersonToTeam+' => '',
	'Class:lnkPersonToTeam/Attribute:team_id' => '团队',
	'Class:lnkPersonToTeam/Attribute:team_id+' => '',
	'Class:lnkPersonToTeam/Attribute:team_name' => '团队名称',
	'Class:lnkPersonToTeam/Attribute:team_name+' => '',
	'Class:lnkPersonToTeam/Attribute:person_id' => '人员',
	'Class:lnkPersonToTeam/Attribute:person_id+' => '',
	'Class:lnkPersonToTeam/Attribute:person_name' => '姓名',
	'Class:lnkPersonToTeam/Attribute:person_name+' => '',
	'Class:lnkPersonToTeam/Attribute:role_id' => '角色',
	'Class:lnkPersonToTeam/Attribute:role_id+' => '',
	'Class:lnkPersonToTeam/Attribute:role_name' => '角色名称',
	'Class:lnkPersonToTeam/Attribute:role_name+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Group' => '组',
	'Class:Group+' => '',
	'Class:Group/Attribute:name' => '名称',
	'Class:Group/Attribute:name+' => '',
	'Class:Group/Attribute:status' => '状态',
	'Class:Group/Attribute:status+' => '',
	'Class:Group/Attribute:status/Value:implementation' => '实施',
	'Class:Group/Attribute:status/Value:implementation+' => '实施',
	'Class:Group/Attribute:status/Value:obsolete' => '废弃',
	'Class:Group/Attribute:status/Value:obsolete+' => '废弃',
	'Class:Group/Attribute:status/Value:production' => '生产',
	'Class:Group/Attribute:status/Value:production+' => '生产',
	'Class:Group/Attribute:org_id' => '组织',
	'Class:Group/Attribute:org_id+' => '',
	'Class:Group/Attribute:owner_name' => '名称',
	'Class:Group/Attribute:owner_name+' => '常用名称',
	'Class:Group/Attribute:description' => '描述',
	'Class:Group/Attribute:description+' => '',
	'Class:Group/Attribute:type' => '种类',
	'Class:Group/Attribute:type+' => '',
	'Class:Group/Attribute:parent_id' => '父级组别',

	'Class:Group/Attribute:parent_id+' => '',
	'Class:Group/Attribute:parent_name' => '名称',
	'Class:Group/Attribute:parent_name+' => '',
	'Class:Group/Attribute:ci_list' => '连接的CI',
	'Class:Group/Attribute:ci_list+' => '所有与该组关联的配置项目',
	'Class:Group/Attribute:parent_id_friendlyname' => '父级组别',
	'Class:Group/Attribute:parent_id_friendlyname+' => '',
));


Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkGroupToCI' => '链接组 / CI',
	'Class:lnkGroupToCI+' => '',
	'Class:lnkGroupToCI/Attribute:group_id' => '组',
	'Class:lnkGroupToCI/Attribute:group_id+' => '',
	'Class:lnkGroupToCI/Attribute:group_name' => '名称',
	'Class:lnkGroupToCI/Attribute:group_name+' => '',
	'Class:lnkGroupToCI/Attribute:ci_id' => 'CI',
	'Class:lnkGroupToCI/Attribute:ci_id+' => '',
	'Class:lnkGroupToCI/Attribute:ci_name' => '名称',
	'Class:lnkGroupToCI/Attribute:ci_name+' => '',
	'Class:lnkGroupToCI/Attribute:reason' => '原因',
	'Class:lnkGroupToCI/Attribute:reason+' => '',
));



Dict::Add('ZH CN', "Chinese", "简体中文", array(
'Menu:DataAdministration' => '数据管理',
'Menu:DataAdministration+' => '数据管理',
'Menu:Catalogs' => '目录',
'Menu:Catalogs+' => '数据类别',
'Menu:Audit' => '审计',
'Menu:Audit+' => '审计',
'Menu:CSVImport' => 'CSV 导入',
'Menu:CSVImport+' => '大批量创建或修改',
'Menu:Organization' => '组织',
'Menu:Organization+' => '所有组织',
'Menu:Application' => '应用程序',
'Menu:Application+' => '所有应用程序',
'Menu:DBServer' => '数据库服务器',
'Menu:DBServer+' => '数据库服务器',
'Menu:Audit' => '审计',
'Menu:ConfigManagement' => '配置管理',
'Menu:ConfigManagement+' => '配置管理',
'Menu:ConfigManagementOverview' => '总览',
'Menu:ConfigManagementOverview+' => '总览',
'Menu:Contact' => '联系人',
'Menu:Contact+' => '联系人',
'Menu:Contact:Count' => '%1$d 联系人',
'Menu:Person' => '人员',
'Menu:Person+' => '所有人员',
'Menu:Team' => '团队',
'Menu:Team+' => '所有团队',
'Menu:Document' => '文档',
'Menu:Document+' => '所有文档',
'Menu:Location' => '机房',

'Menu:Location+' => '所有机房',
'Menu:ConfigManagementCI' => '配置项',
'Menu:ConfigManagementCI+' => '配置项',
'Menu:BusinessProcess' => '业务过程',
'Menu:BusinessProcess+' => '所有业务过程',
'Menu:ApplicationSolution' => 'APP',
'Menu:ApplicationSolution+' => '所有APP',
'Menu:ConfigManagementSoftware' => '应用管理',
'Menu:Licence' => 'Licences',
'Menu:Licence+' => '所有Licences',
'Menu:Patch' => '补丁',
'Menu:Patch+' => '所有补丁',
'Menu:ApplicationInstance' => '已安装的软件',
'Menu:ApplicationInstance+' => '应用程序和数据库服务器',
'Menu:ConfigManagementHardware' => '基础架构管理',
'Menu:Subnet' => '子网',
'Menu:Subnet+' => '所有子网',
'Menu:NetworkDevice' => '网络设备',
'Menu:NetworkDevice+' => '所有网络设备',
'Menu:Server' => '服务器',
'Menu:Server+' => '所有服务器',
'Menu:Printer' => '打印机',
'Menu:Printer+' => '所有打印机',
'Menu:MobilePhone' => '手机',
'Menu:MobilePhone+' => '所有手机',
'Menu:PC' => '个人电脑',
'Menu:PC+' => '所有个人电脑',
'Menu:NewContact' => '新联系人',
'Menu:NewContact+' => '新联系人',
'Menu:SearchContacts' => '查找联系人',
'Menu:SearchContacts+' => '查找联系人',
'Menu:NewCI' => '新配置项',
'Menu:NewCI+' => '新配置项',
'Menu:SearchCIs' => '查找配置项',
'Menu:SearchCIs+' => '查找配置项',
'Menu:ConfigManagement:Devices' => '设备',
'Menu:ConfigManagement:AllDevices' => '基础架构',
'Menu:ConfigManagement:virtualization' => '虚拟化',
'Menu:ConfigManagement:EndUsers' => '终端用户设备',
'Menu:ConfigManagement:SWAndApps' => '软件和应用程序',
'Menu:ConfigManagement:Misc' => '综合项',
'Menu:Group' => '配置项族',
'Menu:Group+' => '配置项族',
'Menu:ConfigManagement:Shortcuts' => '快捷方式',
'Menu:ConfigManagement:AllContacts' => '所有联系人: %1$d',
'Menu:Typology' => '类型配置',
'Menu:Typology+' => '类型配置',
'Menu:OSVersion' => 'OS 版本',
'Menu:OSVersion+' => '',
'Menu:Software' => '软件目录',
'Menu:Software+' => '软件目录',
'UI_WelcomeMenu_AllConfigItems' => '概要',
'Menu:ConfigManagement:Typology' => '类型配置',

));



Dict::Add('ZH CN', "Chinese", "简体中文", array(
'Server:baseinfo' => '总体信息',
'Server:Date' => '日期信息',
'Server:moreinfo' => '详细信息',
'Server:otherinfo' => '其它信息',
'Server:power' => '电源',
'Person:info' => '主要资料',
'Person:notifiy' => '联系资料',
'Class:Subnet/Tab:IPUsage' => 'IP 地址使用情况',
'Class:Subnet/Tab:IPUsage-explain' => '接口拥有一个下述范围内的IP: <em>%1$s</em> 到 <em>%2$s</em>',
'Class:Subnet/Tab:FreeIPs' => '未用的 IP',
'Class:Subnet/Tab:FreeIPs-count' => '未用的 IP: %1$s',
'Class:Subnet/Tab:FreeIPs-explain' => '这里有10个抽取的未用的 IP 地址',
'Class:Document:PreviewTab' => '概览',
));
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 Combodo
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', "Chinese", "简体中文", array(

	'Menu:ConfigEditor' => '配置',
	'config-edit-title' => '配置文件修改',
	'config-edit-intro' => '编辑配置文件时一定要非常谨慎. 特别是在编辑重要选项时(即全局配置和模块设置).',
	'config-apply' => '应用',
	'config-cancel' => '重置',
	'config-confirm-cancel' => '您的更改将取消.',
	'config-no-change' => '无变化,该文件保持不变.',
	'config-parse-error' => '第 2$d: %1$s行.<br/>该文件没有被更新.',
	'config-current-line' => '正在用编辑%1$s行',
));


/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:IncidentManagement' => '事件管理',
	'Menu:IncidentManagement+' => '事件管理',
	'Menu:Incident:Overview' => '概览',
	'Menu:Incident:Overview+' => '概览',
	'Menu:NewIncident' => '新事件',
	'Menu:NewIncident+' => '创建一个新事件工单',
	'Menu:SearchIncidents' => '搜索事件',
	'Menu:SearchIncidents+' => '搜索事件工单',
	'Menu:Incident:Shortcuts' => '快捷方式',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => '指派给我的事件',
	'Menu:Incident:MyIncidents+' => '指派给我的事件',
	'Menu:Incident:EscalatedIncidents' => '升级事件',
	'Menu:Incident:EscalatedIncidents+' => '升级事件',
	'Menu:Incident:OpenIncidents' => '所有打开的事件',
	'Menu:Incident:OpenIncidents+' => '所有打开的事件',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => '最近14天每个优先级的事件',
	'UI-IncidentManagementOverview-Last-14-days' => '最近14天事件的数量',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => '状态为打开的事件',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => '通过代理打开的事件',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => '通过客户打开的事件',
));






Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Incident' => '事件',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => '状态',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => '新建',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => '升级响响应时间',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => '指派',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => '升级解决时间',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => '等待批准',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => '暂挂',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => '已解决',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => '关闭',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => '影响度',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => '部门',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => '服务',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => '个人',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => '优先级',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => '紧急',
	'Class:Incident/Attribute:priority/Value:1+' => '紧急',
	'Class:Incident/Attribute:priority/Value:2' => '高',
	'Class:Incident/Attribute:priority/Value:2+' => '高',
	'Class:Incident/Attribute:priority/Value:3' => '中',
	'Class:Incident/Attribute:priority/Value:3+' => '中',
	'Class:Incident/Attribute:priority/Value:4' => '低',
	'Class:Incident/Attribute:priority/Value:4+' => '低',
	'Class:Incident/Attribute:urgency' => '紧急度',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => '危急',
	'Class:Incident/Attribute:urgency/Value:1+' => '危急',
	'Class:Incident/Attribute:urgency/Value:2' => '高',
	'Class:Incident/Attribute:urgency/Value:2+' => '高',
	'Class:Incident/Attribute:urgency/Value:3' => '中',
	'Class:Incident/Attribute:urgency/Value:3+' => '中',
	'Class:Incident/Attribute:urgency/Value:4' => '低',
	'Class:Incident/Attribute:urgency/Value:4+' => '低',
	'Class:Incident/Attribute:origin' => '接单途径',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => '邮件',
	'Class:Incident/Attribute:origin/Value:mail+' => '邮件',
	'Class:Incident/Attribute:origin/Value:monitoring' => '监控',
	'Class:Incident/Attribute:origin/Value:monitoring+' => '监控',
	'Class:Incident/Attribute:origin/Value:phone' => '电话',
	'Class:Incident/Attribute:origin/Value:phone+' => '电话',
	'Class:Incident/Attribute:origin/Value:portal' => '门户网',
	'Class:Incident/Attribute:origin/Value:portal+' => '门户网',
	'Class:Incident/Attribute:service_id' => '服务目录',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => '服务名称',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => '服务子目录',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => '服务子目录名称',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => '热门标识',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => '不',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => '不',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => '是',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => '是',
	'Class:Incident/Attribute:escalation_reason' => '热门原因',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => '指派日期',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => '解决日期',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => '最近待定日期',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => '累计待定',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => 'tto',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:ttr' => 'ttr',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => '响应时间最后期限',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'SLA响应时间已过',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'SLA响应时间结束',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => '解决时间最后期限',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'SLA解决时间已过',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'SLA解决时间结束',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => '解决延期',
	'Class:Incident/Attribute:time_spent+' => '',
	'Class:Incident/Attribute:resolution_code' => '解决编码',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => '援助',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => '援助',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'bug 修复',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => 'bug 修复',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => '硬件维修',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => '硬件维修',
	'Class:Incident/Attribute:resolution_code/Value:other' => '其它',
	'Class:Incident/Attribute:resolution_code/Value:other+' => '其它',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => '软件补丁',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => '软件补丁',
	'Class:Incident/Attribute:resolution_code/Value:system update' => '系统更新',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => '系统更新',
	'Class:Incident/Attribute:resolution_code/Value:training' => '培训',
	'Class:Incident/Attribute:resolution_code/Value:training+' => '培训',
	'Class:Incident/Attribute:solution' => '解决方案',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => '未知原因',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => '父级事件',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => '关联父级事件',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_problem_id' => '父级问题',
	'Class:Incident/Attribute:parent_problem_id+' => '',
	'Class:Incident/Attribute:parent_problem_ref' => '关联父级变更',
	'Class:Incident/Attribute:parent_problem_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => '父级变更',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => '关联父级变更',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:related_request_list' => '相关请求',
	'Class:Incident/Attribute:related_request_list+' => '',
	'Class:Incident/Attribute:child_incidents_list' => '衍生事件',
	'Class:Incident/Attribute:child_incidents_list+' => '与这个事件相关的所有子事件',
	'Class:Incident/Attribute:public_log' => '公共日志',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => '用户满意度',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => '非常满意',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => '非常满意',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => '满意',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => '满意',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => '不满意',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => '不满意',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => '非常不满意',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => '非常不满意',
	'Class:Incident/Attribute:user_comment' => '用户注释',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => '好记的父级事件ID名称',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => '指派',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => '重指派',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => '暂挂',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => '超时',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => '自动解决',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => '自动关闭',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => '标记为解决',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => '关闭这个请求',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => '重新打开',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => '父级事件不能指派给自己',

	'Class:Incident/Method:ResolveChildTickets' => '解决子工单',
	'Class:Incident/Method:ResolveChildTickets+' => '级联解决子工单(事件自动解决),和调整以下内容保持一至: 服务, 团队, 处理人, 解决方案',
	'Tickets:Related:OpenIncidents' => '打开事件',
));


/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @author      Robert Deng <denglx@gmail.com>
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */





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


/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @author      Robert Deng <denglx@gmail.com>
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */







Dict::Add('ZH CN', 'Chinese', '简体中文', array(
        'Menu:ProblemManagement' => '问题管理',
        'Menu:ProblemManagement+' => '问题管理',
    	'Menu:Problem:Overview' => '概览',
    	'Menu:Problem:Overview+' => '概览',
    	'Menu:NewProblem' => '新问题',
    	'Menu:NewProblem+' => '新问题',
    	'Menu:SearchProblems' => '搜索问题',
    	'Menu:SearchProblems+' => '搜索问题',
    	'Menu:Problem:Shortcuts' => '快捷方式',
        'Menu:Problem:MyProblems' => '我的问题',
        'Menu:Problem:MyProblems+' => '我的问题',
        'Menu:Problem:OpenProblems' => '所有待解决的问题',
        'Menu:Problem:OpenProblems+' => '所有待解决的问题',
	'UI-ProblemManagementOverview-ProblemByService' => '按服务划分的问题',
	'UI-ProblemManagementOverview-ProblemByService+' => '按服务划分的问题',
	'UI-ProblemManagementOverview-ProblemByPriority' => '按优先级划分的问题',
	'UI-ProblemManagementOverview-ProblemByPriority+' => '按优先级划分的问题',
	'UI-ProblemManagementOverview-ProblemUnassigned' => '未指派的问题',
	'UI-ProblemManagementOverview-ProblemUnassigned+' => '未指派的问题',
	'UI:ProblemMgmtMenuOverview:Title' => '问题管理仪表板',
	'UI:ProblemMgmtMenuOverview:Title+' => '问题管理仪表板',

));

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Problem' => '问题',
	'Class:Problem+' => '',
	'Class:Problem/Attribute:status' => '状态',
	'Class:Problem/Attribute:status+' => '',
	'Class:Problem/Attribute:status/Value:new' => '新',
	'Class:Problem/Attribute:status/Value:new+' => '',
	'Class:Problem/Attribute:status/Value:assigned' => '已指派',
	'Class:Problem/Attribute:status/Value:assigned+' => '',
	'Class:Problem/Attribute:status/Value:resolved' => '已解决',
	'Class:Problem/Attribute:status/Value:resolved+' => '',
	'Class:Problem/Attribute:status/Value:closed' => '已关闭',
	'Class:Problem/Attribute:status/Value:closed+' => '',
	'Class:Problem/Attribute:org_id' => '客户',
	'Class:Problem/Attribute:org_id+' => '',
	'Class:Problem/Attribute:org_name' => '名称',
	'Class:Problem/Attribute:org_name+' => '常用名称',
	'Class:Problem/Attribute:service_id' => '服务',
	'Class:Problem/Attribute:service_id+' => '',
	'Class:Problem/Attribute:service_name' => '名称',
	'Class:Problem/Attribute:service_name+' => '',
	'Class:Problem/Attribute:servicesubcategory_id' => '服务类目',
	'Class:Problem/Attribute:servicesubcategory_id+' => '',
	'Class:Problem/Attribute:servicesubcategory_name' => '名称',
	'Class:Problem/Attribute:servicesubcategory_name+' => '',
	'Class:Problem/Attribute:product' => '生产',
	'Class:Problem/Attribute:product+' => '',
	'Class:Problem/Attribute:impact' => '影响',
	'Class:Problem/Attribute:impact+' => '',
	'Class:Problem/Attribute:impact/Value:1' => '个人',
	'Class:Problem/Attribute:impact/Value:1+' => '',
	'Class:Problem/Attribute:impact/Value:2' => '服务',
	'Class:Problem/Attribute:impact/Value:2+' => '',
	'Class:Problem/Attribute:impact/Value:3' => '部门',
	'Class:Problem/Attribute:impact/Value:3+' => '',
	'Class:Problem/Attribute:urgency' => '紧急',
	'Class:Problem/Attribute:urgency+' => '',
	'Class:Problem/Attribute:urgency/Value:1' => '低',
	'Class:Problem/Attribute:urgency/Value:1+' => '低',
	'Class:Problem/Attribute:urgency/Value:2' => '中',
	'Class:Problem/Attribute:urgency/Value:2+' => '中',
	'Class:Problem/Attribute:urgency/Value:3' => '高',
	'Class:Problem/Attribute:urgency/Value:3+' => '高',
	'Class:Problem/Attribute:urgency/Value:4' => '紧急',
	'Class:Problem/Attribute:urgency/Value:4+' => '紧急',
	'Class:Problem/Attribute:priority' => '优先级',
	'Class:Problem/Attribute:priority+' => '',
	'Class:Problem/Attribute:priority/Value:1' => '低',
	'Class:Problem/Attribute:priority/Value:1+' => '',
	'Class:Problem/Attribute:priority/Value:2' => '中',
	'Class:Problem/Attribute:priority/Value:2+' => '',
	'Class:Problem/Attribute:priority/Value:3' => '高',
	'Class:Problem/Attribute:priority/Value:3+' => '',
	'Class:Problem/Attribute:priority/Value:4' => '紧急',
	'Class:Problem/Attribute:priority/Value:4+' => '紧急',
	'Class:Problem/Attribute:workgroup_id' => '工作组',
	'Class:Problem/Attribute:workgroup_id+' => '',
	'Class:Problem/Attribute:workgroup_name' => '名称',
	'Class:Problem/Attribute:workgroup_name+' => '',
	'Class:Problem/Attribute:agent_id' => '办理人',
	'Class:Problem/Attribute:agent_id+' => '',
	'Class:Problem/Attribute:agent_name' => '办理人名称',
	'Class:Problem/Attribute:agent_name+' => '',
	'Class:Problem/Attribute:agent_email' => '办理人 Email',
	'Class:Problem/Attribute:agent_email+' => '',
	'Class:Problem/Attribute:related_change_id' => '关联变更',
	'Class:Problem/Attribute:related_change_id+' => '',
	'Class:Problem/Attribute:related_change_ref' => '参考',
	'Class:Problem/Attribute:related_change_ref+' => '',
	'Class:Problem/Attribute:close_date' => '关闭日期',
	'Class:Problem/Attribute:close_date+' => '',
	'Class:Problem/Attribute:last_update' => '最后的更新',
	'Class:Problem/Attribute:last_update+' => '',
	'Class:Problem/Attribute:assignment_date' => '指派日期',
	'Class:Problem/Attribute:assignment_date+' => '',
	'Class:Problem/Attribute:resolution_date' => '解决日期',
	'Class:Problem/Attribute:resolution_date+' => '',
	'Class:Problem/Attribute:knownerrors_list' => '已知错误',
	'Class:Problem/Attribute:knownerrors_list+' => '',
	'Class:Problem/Stimulus:ev_assign' => '指派',
	'Class:Problem/Stimulus:ev_assign+' => '',
	'Class:Problem/Stimulus:ev_reassign' => '重新指派',
	'Class:Problem/Stimulus:ev_reassign+' => '',
	'Class:Problem/Stimulus:ev_resolve' => '解决',
	'Class:Problem/Stimulus:ev_resolve+' => '',
	'Class:Problem/Stimulus:ev_close' => '关闭',
	'Class:Problem/Stimulus:ev_close+' => '',
	'Class:Problem/Attribute:related_request_list' => '关联请求',
	'Class:Problem/Attribute:related_request_list+' => '该问题关联的请求',
	'Class:Problem/Attribute:related_incident_list' => '关联事件',
	'Class:Problem/Attribute:related_incident_list+' => '该问题关联的事件',
));



/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:RequestManagement' => '服务台',
	'Menu:RequestManagement+' => '服务台',
	'Menu:RequestManagementProvider' => '服务台供应商',
	'Menu:RequestManagementProvider+' => '服务台供应商',
	'Menu:UserRequest:Provider' => '传递到供应商的打开的请求',
	'Menu:UserRequest:Provider+' => '传递到供应商的打开的请求',
	'Menu:UserRequest:Overview' => '概览',
	'Menu:UserRequest:Overview+' => '概览',
	'Menu:NewUserRequest' => '新用户请求',
	'Menu:NewUserRequest+' => '创建一个新用户请求工单',
	'Menu:SearchUserRequests' => '搜索用户请求',
	'Menu:SearchUserRequests+' => '搜索用户请求工单',
	'Menu:UserRequest:Shortcuts' => '快捷方式',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => '指派给我的请求',
	'Menu:UserRequest:MyRequests+' => '指派给我的请求 (我是处理人员)',
	'Menu:UserRequest:MySupportRequests' => "我支持的呼叫",
	'Menu:UserRequest:MySupportRequests+' => "我支持的呼叫",
	'Menu:UserRequest:EscalatedRequests' => '热门请求',
	'Menu:UserRequest:EscalatedRequests+' => '热门请求',
	'Menu:UserRequest:OpenRequests' => '所有打开的请求',
	'Menu:UserRequest:OpenRequests+' => '所有打开的请求',
	'UI:WelcomeMenu:MyAssignedCalls' => '指派给我的请求',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => '最近14天按类型汇总的请求',
	'UI-RequestManagementOverview-Last-14-days' => '最近14天请求的数量',
	'UI-RequestManagementOverview-OpenRequestByStatus' => '状态是打开的请求',
	'UI-RequestManagementOverview-OpenRequestByAgent' => '处理人的打开请求',
	'UI-RequestManagementOverview-OpenRequestByType' => '按类型汇总',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => '按客户汇总的请求',
	'Class:UserRequest:KnownErrorList' => '已知错误',
));



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:UserRequest' => '用户请求',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => '状态',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => '新建',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => '升级响应时间',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => '指派',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => '升级解决时间',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => '待批',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => '批准',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => '拒绝',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => '暂挂',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => '已解决',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => '关闭',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => '请求类型',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => '服务请求',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => '服务请求',
	'Class:UserRequest/Attribute:impact' => '影响度',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => '部门',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => '服务',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => '个人',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => '优先级',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => '紧急',
	'Class:UserRequest/Attribute:priority/Value:1+' => '紧急',
	'Class:UserRequest/Attribute:priority/Value:2' => '高',
	'Class:UserRequest/Attribute:priority/Value:2+' => '高',
	'Class:UserRequest/Attribute:priority/Value:3' => '中',
	'Class:UserRequest/Attribute:priority/Value:3+' => '中',
	'Class:UserRequest/Attribute:priority/Value:4' => '低',
	'Class:UserRequest/Attribute:priority/Value:4+' => '低',
	'Class:UserRequest/Attribute:urgency' => '紧急度',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => '紧急',
	'Class:UserRequest/Attribute:urgency/Value:1+' => '紧急',
	'Class:UserRequest/Attribute:urgency/Value:2' => '高',
	'Class:UserRequest/Attribute:urgency/Value:2+' => '高',
	'Class:UserRequest/Attribute:urgency/Value:3' => '中',
	'Class:UserRequest/Attribute:urgency/Value:3+' => '中',
	'Class:UserRequest/Attribute:urgency/Value:4' => '低',
	'Class:UserRequest/Attribute:urgency/Value:4+' => '低',
	'Class:UserRequest/Attribute:origin' => '请求方式',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => '邮件',
	'Class:UserRequest/Attribute:origin/Value:mail+' => '邮件',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => '监控',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => '监控',
	'Class:UserRequest/Attribute:origin/Value:phone' => '电话',
	'Class:UserRequest/Attribute:origin/Value:phone+' => '电话',
	'Class:UserRequest/Attribute:origin/Value:portal' => '门户',
	'Class:UserRequest/Attribute:origin/Value:portal+' => '门户网站',
	'Class:UserRequest/Attribute:approver_id' => '核准人',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => '核准人邮箱',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => '服务目录',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => '服务名称',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => '服务子目录',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => '服务子目录名称',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => '热门标识',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => '不',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => '不',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => '是',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => '是',
	'Class:UserRequest/Attribute:escalation_reason' => '热门原因',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => '指派日期',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => '启始时间',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => '最近暂挂日期',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => '累计暂挂',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => '影响时间期限',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => '服务影响时间已过',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => '服务影响时间结束',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => '解决时间期限',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => '服务解决时间已过',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => '服务解决时间结束',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => '延期解决',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:resolution_code' => '解决编码',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => '援助',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => '援助',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'bug 修复',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug 修复',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => '硬件维修',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => '硬件维修',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => '其它',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => '其它',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => '软件补丁',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => '软件补丁',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => '系统更新',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => '系统更新',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => '培训',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => '培训',
	'Class:UserRequest/Attribute:solution' => '解决方案',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => '待定的原因',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => '父级请求',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_incident_id' => '父级事件',
	'Class:UserRequest/Attribute:parent_incident_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => '父级请求参考',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => '父级问题',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => '父级问题参考',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => '父级变更',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => '父级变更参考',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => '衍生事件',
	'Class:UserRequest/Attribute:related_request_list+' => '与这个事件相关的所有子事件',
	'Class:UserRequest/Attribute:public_log' => '公共日志',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => '用户满意度',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => '非常满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => '非常满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => '满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => '满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => '不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => '不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => '非常不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => '非常不满意',
	'Class:UserRequest/Attribute:user_comment' => '用户注释',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => '好记的父级请求ID名称',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => '指派',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => '重指派',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => '审批',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => '拒绝',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => '暂挂',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => '超时',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => '自动解决',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => '自动关闭',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => '标记为解决',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => '关闭这个请求',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => '重新打开',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => '等待审批',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => '不能分配父请求分配给自己',

	'Class:UserRequest/Method:ResolveChildTickets' => '解决子工单',
	'Class:UserRequest/Method:ResolveChildTickets+' => '级联解决子请求(请求自动解决),并使用以下请求的内容:服务,团队,处理人,解决方案',
));


/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:RequestManagement' => '服务台',
	'Menu:RequestManagement+' => '服务台',
	'Menu:RequestManagementProvider' => '服务台供应商',
	'Menu:RequestManagementProvider+' => '服务台供应商',
	'Menu:UserRequest:Provider' => '传递到供应商的打开的请求',
	'Menu:UserRequest:Provider+' => '传递到供应商的打开的请求',
	'Menu:UserRequest:Overview' => '概览',
	'Menu:UserRequest:Overview+' => '概览',
	'Menu:NewUserRequest' => '新用户请求',
	'Menu:NewUserRequest+' => '创建一个新用户请求工单',
	'Menu:SearchUserRequests' => '搜索用户请求',
	'Menu:SearchUserRequests+' => '搜索用户请求工单',
	'Menu:UserRequest:Shortcuts' => '快捷方式',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => '指派给我的请求',
	'Menu:UserRequest:MyRequests+' => '指派给我的请求 (我是处理人员)',
	'Menu:UserRequest:MySupportRequests' => "我支持的呼叫",
	'Menu:UserRequest:MySupportRequests+' => "我支持的呼叫",
	'Menu:UserRequest:EscalatedRequests' => '热门请求',
	'Menu:UserRequest:EscalatedRequests+' => '热门请求',
	'Menu:UserRequest:OpenRequests' => '所有打开的请求',
	'Menu:UserRequest:OpenRequests+' => '所有打开的请求',
	'UI:WelcomeMenu:MyAssignedCalls' => '指派给我的请求',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => '最近14天按类型汇总的请求',
	'UI-RequestManagementOverview-Last-14-days' => '最近14天请求的数量',
	'UI-RequestManagementOverview-OpenRequestByStatus' => '状态是打开的请求',
	'UI-RequestManagementOverview-OpenRequestByAgent' => '处理人的打开请求',
	'UI-RequestManagementOverview-OpenRequestByType' => '按类型汇总',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => '按客户汇总的请求',
	'Class:UserRequest:KnownErrorList' => '已知错误',
	'Menu:UserRequest:MyWorkOrders' => '分配给我的工作订单',
	'Menu:UserRequest:MyWorkOrders+' => '分配给我的所有工单',
	'Class:Problem:KnownProblemList' => '已知问题',
	'Tickets:Related:OpenIncidents' => '打开事件',
));



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:UserRequest' => '用户请求',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => '状态',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => '新建',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => '升级响应时间',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => '指派',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => '升级解决时间',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => '待批',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => '批准',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => '拒绝',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => '暂挂',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => '已解决',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => '关闭',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => '请求类型',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:incident' => '事件',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => '事件',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => '服务请求',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => '服务请求',
	'Class:UserRequest/Attribute:impact' => '影响度',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => '部门',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => '服务',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => '个人',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => '优先级',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => '紧急',
	'Class:UserRequest/Attribute:priority/Value:1+' => '紧急',
	'Class:UserRequest/Attribute:priority/Value:2' => '高',
	'Class:UserRequest/Attribute:priority/Value:2+' => '高',
	'Class:UserRequest/Attribute:priority/Value:3' => '中',
	'Class:UserRequest/Attribute:priority/Value:3+' => '中',
	'Class:UserRequest/Attribute:priority/Value:4' => '低',
	'Class:UserRequest/Attribute:priority/Value:4+' => '低',
	'Class:UserRequest/Attribute:urgency' => '紧急度',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => '紧急',
	'Class:UserRequest/Attribute:urgency/Value:1+' => '紧急',
	'Class:UserRequest/Attribute:urgency/Value:2' => '高',
	'Class:UserRequest/Attribute:urgency/Value:2+' => '高',
	'Class:UserRequest/Attribute:urgency/Value:3' => '中',
	'Class:UserRequest/Attribute:urgency/Value:3+' => '中',
	'Class:UserRequest/Attribute:urgency/Value:4' => '低',
	'Class:UserRequest/Attribute:urgency/Value:4+' => '低',
	'Class:UserRequest/Attribute:origin' => '请求方式',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => '邮件',
	'Class:UserRequest/Attribute:origin/Value:mail+' => '邮件',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => '监控',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => '监控',
	'Class:UserRequest/Attribute:origin/Value:phone' => '电话',
	'Class:UserRequest/Attribute:origin/Value:phone+' => '电话',
	'Class:UserRequest/Attribute:origin/Value:portal' => '门户',
	'Class:UserRequest/Attribute:origin/Value:portal+' => '门户网站',
	'Class:UserRequest/Attribute:approver_id' => '核准人',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => '核准人邮箱',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => '服务目录',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => '服务名称',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => '服务子目录',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => '服务子目录名称',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => '热门标识',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => '不',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => '不',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => '是',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => '是',
	'Class:UserRequest/Attribute:escalation_reason' => '热门原因',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => '指派日期',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => '启始时间',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => '最近暂挂日期',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => '累计暂挂',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => '响影时间期限',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => '服务响影时间已过',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => '服务响影时间结束',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => '解决时间期限',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => '服务解决时间已过',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => '服务解决时间结束',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => '延期解决',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:resolution_code' => '解决编码',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => '援助',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => '援助',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'bug 修复',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug 修复',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => '硬件维修',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => '硬件维修',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => '其它',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => '其它',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => '软件补丁',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => '软件补丁',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => '系统更新',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => '系统更新',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => '培训',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => '培训',
	'Class:UserRequest/Attribute:solution' => '解决方案',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => '待定的原因',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => '父级请求',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref 请求',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => '父级问题',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ref 问题',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => '父级变更',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ref 变更',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => '衍生事件',
	'Class:UserRequest/Attribute:related_request_list+' => '与这个事件相关的所有子事件',
	'Class:UserRequest/Attribute:public_log' => '公共日志',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => '用户满意度',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => '非常满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => '非常满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => '满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => '满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => '不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => '不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => '非常不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => '非常不满意',
	'Class:UserRequest/Attribute:user_comment' => '用户注释',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => '好记的父级请求Id名称',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => '指派',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => '重指派',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => '审批',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => '拒绝',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => '暂挂',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => '超时',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => '自动解决',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => '自动关闭',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => '标记为解决',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => '关闭这个请求',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => '重新打开',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => '等待审批',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => '不能分配父请求分配给自己',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Portal:TitleDetailsFor_Request' => '对于请求的详细信息',
	'Portal:ButtonUpdate' => '更新',
	'Portal:ButtonClose' => '关闭',
	'Portal:ButtonReopen' => '重开',
	'Portal:ShowServices' => '服务目录',
	'Portal:SelectRequestType' => '选择一种类型的请求',
	'Portal:SelectServiceElementFrom_Service' => '为%1$s选择服务元素',
	'Portal:ListServices' => '服务列表',
	'Portal:TitleDetailsFor_Service' => '服务详细信息',
	'Portal:Button:CreateRequestFromService' => '创建一个服务请求',
	'Portal:ListOpenRequests' => '列出打开请求',
'Portal:UserRequest:MoreInfo' => '更多详细信息',
	'Portal:Details-Service-Element' => '服务元素',
	'Portal:NoClosedTicket' => '没有关闭的请求',
	'Portal:NoService' => '',
	'Portal:ListOpenProblems' => '处理中的问题',
	'Portal:ShowProblem' => '问题',
	'Portal:ShowFaqs' => 'FAQs',
	'Portal:NoOpenProblem' => '没有打开的问题',
	'Portal:SelectLanguage' => "更改你的语言",
	'Portal:LanguageChangedTo_Lang' => '语言更改为',
	'Portal:ChooseYourFavoriteLanguage' => '选择你喜欢的语言',

	'Class:UserRequest/Method:ResolveChildTickets' => '解决子工单',
	'Class:UserRequest/Method:ResolveChildTickets+' => '级联解决子请求(请求自动解决),并使用以下请求的内容:服务,团队,处理人,解决方案',
));


/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
'Menu:ServiceManagement' => '服务管理',
'Menu:ServiceManagement+' => '服务管理概览',
'Menu:Service:Overview' => '概览',
'Menu:Service:Overview+' => '',
'UI-ServiceManagementMenu-ContractsBySrvLevel' => '按服务层级划分合同',
'UI-ServiceManagementMenu-ContractsByStatus' => '按状态划分合同',
'UI-ServiceManagementMenu-ContractsEndingIn30Days' => '合同30天内终止',


'Menu:ProviderContract' => '供应商合同',
'Menu:ProviderContract+' => '供应商合同',
'Menu:CustomerContract' => '客户合同',
'Menu:CustomerContract+' => '客户合同',
'Menu:ServiceSubcategory' => '服务子级类目',
'Menu:ServiceSubcategory+' => '服务子级类目',
'Menu:Service' => '服务',
'Menu:Service+' => '服务',
'Menu:ServiceElement' => '服务元素',
'Menu:ServiceElement+' => '服务元素',
'Menu:SLA' => '服务级别协议',
'Menu:SLA+' => '服务级别协议',
'Menu:SLT' => '服务级别目标',
'Menu:SLT+' => '服务级别目标',
'Menu:DeliveryModel' => '交付模式',
'Menu:DeliveryModel+' => '交付模式',
'Menu:ServiceFamily' => '服务族',
'Menu:ServiceFamily+' => '服务族',
'Menu:Procedure' => '程序目录',
'Menu:Procedure+' => '所有程序目录',



));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Organization/Attribute:deliverymodel_id' => '交付模式',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => '交付模式名称',

));



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ContractType' => '合同类型',
	'Class:ContractType+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Contract' => '合同',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:name' => '名称',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:org_id' => '客户',
	'Class:Contract/Attribute:org_id+' => '',
	'Class:Contract/Attribute:organization_name' => '客户名称',
	'Class:Contract/Attribute:organization_name+' => '常用名称',
	'Class:Contract/Attribute:contacts_list' => '联系方式',
	'Class:Contract/Attribute:contacts_list+' => '关于这个客户合同的所有联系方式',
	'Class:Contract/Attribute:documents_list' => '文档',
	'Class:Contract/Attribute:documents_list+' => '与该合同关联的文档',
	'Class:Contract/Attribute:description' => '描述',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:start_date' => '启始日期',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => '截止日期',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => '费用',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => '费用货币',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => '人民币',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => '美元',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:contracttype_id' => '合同类型',
	'Class:Contract/Attribute:contracttype_id+' => '',
	'Class:Contract/Attribute:contracttype_name' => '合同类型名称',
	'Class:Contract/Attribute:contracttype_name+' => '',
	'Class:Contract/Attribute:billing_frequency' => '付款周期',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:cost_unit' => '费用单位',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:provider_id' => '供应商',
	'Class:Contract/Attribute:provider_id+' => '',
	'Class:Contract/Attribute:provider_name' => '供应商名称',
	'Class:Contract/Attribute:provider_name+' => '常用名称',
	'Class:Contract/Attribute:status' => '状态',
	'Class:Contract/Attribute:status+' => '',
	'Class:Contract/Attribute:status/Value:implementation' => '实施',
	'Class:Contract/Attribute:status/Value:implementation+' => '实施',
	'Class:Contract/Attribute:status/Value:obsolete' => '废旧',
	'Class:Contract/Attribute:status/Value:obsolete+' => '废旧',
	'Class:Contract/Attribute:status/Value:production' => '生产',
	'Class:Contract/Attribute:status/Value:production+' => '生产',
	'Class:Contract/Attribute:finalclass' => '类型',
	'Class:Contract/Attribute:finalclass+' => '',
));

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CustomerContract' => '客户合同',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:services_list' => '服务',
	'Class:CustomerContract/Attribute:services_list+' => '这个合同购买的所有服务',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ProviderContract' => '供应商合同',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:functionalcis_list' => '配置项',
	'Class:ProviderContract/Attribute:functionalcis_list+' => '这个供应商合同涉及的所有配置项',
	'Class:ProviderContract/Attribute:sla' => '服务级别协议',
	'Class:ProviderContract/Attribute:sla+' => '服务级别协议',
	'Class:ProviderContract/Attribute:coverage' => '服务小时数',
	'Class:ProviderContract/Attribute:coverage+' => '',
	'Class:ProviderContract/Attribute:contracttype_id' => '合同类型',
	'Class:ProviderContract/Attribute:contracttype_id+' => '',
	'Class:ProviderContract/Attribute:contracttype_name' => '合同类型名称',
	'Class:ProviderContract/Attribute:contracttype_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToContract' => '链接联系人 / 合同',
	'Class:lnkContactToContract+' => '',
	'Class:lnkContactToContract/Attribute:contract_id' => '合同',
	'Class:lnkContactToContract/Attribute:contract_id+' => '',
	'Class:lnkContactToContract/Attribute:contract_name' => '合同名称',
	'Class:lnkContactToContract/Attribute:contract_name+' => '',
	'Class:lnkContactToContract/Attribute:contact_id' => '联系人',
	'Class:lnkContactToContract/Attribute:contact_id+' => '',
	'Class:lnkContactToContract/Attribute:contact_name' => '联系人名称',
	'Class:lnkContactToContract/Attribute:contact_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContractToDocument' => '链接合同 / 文档',
	'Class:lnkContractToDocument+' => '',
	'Class:lnkContractToDocument/Attribute:contract_id' => '合同',
	'Class:lnkContractToDocument/Attribute:contract_id+' => '',
	'Class:lnkContractToDocument/Attribute:contract_name' => '合同名称',
	'Class:lnkContractToDocument/Attribute:contract_name+' => '',
	'Class:lnkContractToDocument/Attribute:document_id' => '文档',
	'Class:lnkContractToDocument/Attribute:document_id+' => '',
	'Class:lnkContractToDocument/Attribute:document_name' => '文档名称',
	'Class:lnkContractToDocument/Attribute:document_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkFunctionalCIToProviderContract' => '链接功能配置项 / 供应商合同',
	'Class:lnkFunctionalCIToProviderContract+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id' => '供应商合同',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name' => '供应商合同名称',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id' => '配置项',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ServiceFamily' => '服务族',
	'Class:ServiceFamily+' => '',
	'Class:ServiceFamily/Attribute:name' => '名称',
	'Class:ServiceFamily/Attribute:name+' => '',
	'Class:ServiceFamily/Attribute:services_list' => '服务',
	'Class:ServiceFamily/Attribute:services_list+' => '这个类别的所有服务',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Service' => '服务',
	'Class:Service+' => '',
	'Class:Service/Attribute:name' => '名称',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:org_id' => '供应商',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:organization_name' => '供应商',
	'Class:Service/Attribute:organization_name+' => '',
	'Class:Service/Attribute:servicefamily_id' => '服务族',
	'Class:Service/Attribute:servicefamily_id+' => '',
	'Class:Service/Attribute:servicefamily_name' => '服务族名称',
	'Class:Service/Attribute:servicefamily_name+' => '',
	'Class:Service/Attribute:description' => '描述',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:documents_list' => '文档',
	'Class:Service/Attribute:documents_list+' => '与此服务相关的文档',
	'Class:Service/Attribute:contacts_list' => '联系人',
	'Class:Service/Attribute:contacts_list+' => '与此服务相关的联系人',
	'Class:Service/Attribute:status' => '状态',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:implementation' => '实施',
	'Class:Service/Attribute:status/Value:implementation+' => '实施',
	'Class:Service/Attribute:status/Value:obsolete' => '废旧',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => '生产',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:customercontracts_list' => '客户合同',
	'Class:Service/Attribute:customercontracts_list+' => '此服务关联的客户合同',
	'Class:Service/Attribute:providercontracts_list' => '供应商合同',
	'Class:Service/Attribute:providercontracts_list+' => '此服务项支持的合同',
	'Class:Service/Attribute:functionalcis_list' => '依赖配置项',
	'Class:Service/Attribute:functionalcis_list+' => '此服务所用到的配置项',
	'Class:Service/Attribute:servicesubcategories_list' => '子服务目录',
	'Class:Service/Attribute:servicesubcategories_list+' => '服务所关联的子服务目录',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDocumentToService' => '链接文档 / 服务',
	'Class:lnkDocumentToService+' => '',
	'Class:lnkDocumentToService/Attribute:service_id' => '服务',
	'Class:lnkDocumentToService/Attribute:service_id+' => '',
	'Class:lnkDocumentToService/Attribute:service_name' => '服务名称',
	'Class:lnkDocumentToService/Attribute:service_name+' => '',
	'Class:lnkDocumentToService/Attribute:document_id' => '文档',
	'Class:lnkDocumentToService/Attribute:document_id+' => '',
	'Class:lnkDocumentToService/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToService/Attribute:document_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToService' => '链接联系人 / 服务',
	'Class:lnkContactToService+' => '',
	'Class:lnkContactToService/Attribute:service_id' => '服务',
	'Class:lnkContactToService/Attribute:service_id+' => '',
	'Class:lnkContactToService/Attribute:service_name' => '服务名称',
	'Class:lnkContactToService/Attribute:service_name+' => '',
	'Class:lnkContactToService/Attribute:contact_id' => '联系人',
	'Class:lnkContactToService/Attribute:contact_id+' => '',
	'Class:lnkContactToService/Attribute:contact_name' => '联系人名称',
	'Class:lnkContactToService/Attribute:contact_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ServiceSubcategory' => '服务子级类目',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:name' => '名称',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => '描述',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => '服务',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => '服务名称',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
	'Class:ServiceSubcategory/Attribute:request_type' => '请求类型',
	'Class:ServiceSubcategory/Attribute:request_type+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident' => '事件',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident+' => '事件',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request' => '服务请求',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request+' => '服务请求',
	'Class:ServiceSubcategory/Attribute:status' => '状态',
	'Class:ServiceSubcategory/Attribute:status+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation' => '实施',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation+' => '实施',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete' => '废弃',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete+' => '废弃',
	'Class:ServiceSubcategory/Attribute:status/Value:production' => '生产',
	'Class:ServiceSubcategory/Attribute:status/Value:production+' => '生产',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SLA' => '服务级别协议',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => '名称',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:description' => '描述',
	'Class:SLA/Attribute:description+' => '',
	'Class:SLA/Attribute:org_id' => '供应商',
	'Class:SLA/Attribute:org_id+' => '',
	'Class:SLA/Attribute:organization_name' => '供应商名称',
	'Class:SLA/Attribute:organization_name+' => '常用名称',
	'Class:SLA/Attribute:slts_list' => '服务级别目标',
	'Class:SLA/Attribute:slts_list+' => '关于这个服务级别协议的所有服务级别目标',
	'Class:SLA/Attribute:customercontracts_list' => '客户合同',
	'Class:SLA/Attribute:customercontracts_list+' => '使用这个服务级别协议的所有客户合同',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SLT' => '服务级别目标',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:name' => '名称',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:priority' => '优先级',
	'Class:SLT/Attribute:priority+' => '',
	'Class:SLT/Attribute:priority/Value:1' => '紧急',
	'Class:SLT/Attribute:priority/Value:1+' => '紧急',
	'Class:SLT/Attribute:priority/Value:2' => '高',
	'Class:SLT/Attribute:priority/Value:2+' => '高',
	'Class:SLT/Attribute:priority/Value:3' => '中',
	'Class:SLT/Attribute:priority/Value:3+' => '中',
	'Class:SLT/Attribute:priority/Value:4' => '低',
	'Class:SLT/Attribute:priority/Value:4+' => '低',
	'Class:SLT/Attribute:request_type' => '请求类型',
	'Class:SLT/Attribute:request_type+' => '',
	'Class:SLT/Attribute:request_type/Value:incident' => '事件',
	'Class:SLT/Attribute:request_type/Value:incident+' => '事件',
	'Class:SLT/Attribute:request_type/Value:service_request' => '服务请求',
	'Class:SLT/Attribute:request_type/Value:service_request+' => '服务请求',
	'Class:SLT/Attribute:metric' => '单元',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:tto' => '响应时间',
	'Class:SLT/Attribute:metric/Value:tto+' => '响应时间',
	'Class:SLT/Attribute:metric/Value:ttr' => '解决时间',
	'Class:SLT/Attribute:metric/Value:ttr+' => '解决时间',
	'Class:SLT/Attribute:value' => '值',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:unit' => '单位',
	'Class:SLT/Attribute:unit+' => '',
	'Class:SLT/Attribute:unit/Value:hours' => '小时',
	'Class:SLT/Attribute:unit/Value:hours+' => '小时',
	'Class:SLT/Attribute:unit/Value:minutes' => '分钟',
	'Class:SLT/Attribute:unit/Value:minutes+' => '分钟',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkSLAToSLT' => '链接服务级别协议 / 服务级别目标',
	'Class:lnkSLAToSLT+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_id' => '服务级别协议',
	'Class:lnkSLAToSLT/Attribute:sla_id+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_name' => '服务级别协议名称',
	'Class:lnkSLAToSLT/Attribute:sla_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_id' => '服务级别目标',
	'Class:lnkSLAToSLT/Attribute:slt_id+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_name' => '服务级别目标名称',
	'Class:lnkSLAToSLT/Attribute:slt_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkCustomerContractToService' => '链接客户合同 / 服务',
	'Class:lnkCustomerContractToService+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id' => '客户合同',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name' => '客户合同名',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_id' => '服务',
	'Class:lnkCustomerContractToService/Attribute:service_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_name' => '服务名',
	'Class:lnkCustomerContractToService/Attribute:service_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_id' => '服务级别协议',
	'Class:lnkCustomerContractToService/Attribute:sla_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_name' => '服务级别协议名称',
	'Class:lnkCustomerContractToService/Attribute:sla_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkProviderContractToService' => '链接供应商合同 / 服务',
	'Class:lnkProviderContractToService+' => '',
	'Class:lnkProviderContractToService/Attribute:service_id' => '服务',
	'Class:lnkProviderContractToService/Attribute:service_id+' => '',
	'Class:lnkProviderContractToService/Attribute:service_name' => '服务名称',
	'Class:lnkProviderContractToService/Attribute:service_name+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_id' => '供应商合同',
	'Class:lnkProviderContractToService/Attribute:providercontract_id+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_name' => '供应商合同名称',
	'Class:lnkProviderContractToService/Attribute:providercontract_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkFunctionalCIToService' => '链接功能配置项 / 服务',
	'Class:lnkFunctionalCIToService+' => '',
	'Class:lnkFunctionalCIToService/Attribute:service_id' => '服务',
	'Class:lnkFunctionalCIToService/Attribute:service_id+' => '',
	'Class:lnkFunctionalCIToService/Attribute:service_name' => '服务名称',
	'Class:lnkFunctionalCIToService/Attribute:service_name+' => '',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_id' => '配置项',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DeliveryModel' => '交付模式',
	'Class:DeliveryModel+' => '',
	'Class:DeliveryModel/Attribute:name' => '名称',
	'Class:DeliveryModel/Attribute:name+' => '',
	'Class:DeliveryModel/Attribute:org_id' => '组织',
	'Class:DeliveryModel/Attribute:org_id+' => '',
	'Class:DeliveryModel/Attribute:organization_name' => '组织名称',
	'Class:DeliveryModel/Attribute:organization_name+' => '常用名称',
	'Class:DeliveryModel/Attribute:description' => '描述',
	'Class:DeliveryModel/Attribute:description+' => '',
	'Class:DeliveryModel/Attribute:contacts_list' => '联系方式',
	'Class:DeliveryModel/Attribute:contacts_list+' => '关于这个交付模式的所有联系方式(团队和成员)',
	'Class:DeliveryModel/Attribute:customers_list' => '客户',
	'Class:DeliveryModel/Attribute:customers_list+' => '使用这个交付模式的所有客户',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDeliveryModelToContact' => '链接交付模式 / 联系',
	'Class:lnkDeliveryModelToContact+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id' => '交付模式',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name' => '交付模式名称',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id' => '联系方式',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name' => '联系方式名称',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_id' => '角色',
	'Class:lnkDeliveryModelToContact/Attribute:role_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_name' => '角色名称',
	'Class:lnkDeliveryModelToContact/Attribute:role_name+' => '',
));




/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
'Menu:ServiceManagement' => '服务管理',
'Menu:ServiceManagement+' => '服务管理概览',
'Menu:Service:Overview' => '概览',
'Menu:Service:Overview+' => '',
'UI-ServiceManagementMenu-ContractsBySrvLevel' => '按服务层级划分合同',
'UI-ServiceManagementMenu-ContractsByStatus' => '按状态划分合同',
'UI-ServiceManagementMenu-ContractsEndingIn30Days' => '合同30天内终止',


'Menu:ProviderContract' => '供应商合同',
'Menu:ProviderContract+' => '供应商合同',
'Menu:CustomerContract' => '客户合同',
'Menu:CustomerContract+' => '客户合同',
'Menu:ServiceSubcategory' => '服务子级类目',
'Menu:ServiceSubcategory+' => '服务子级类目',
'Menu:Service' => '服务',
'Menu:Service+' => '服务',
'Menu:ServiceElement' => '服务元素',
'Menu:ServiceElement+' => '服务元素',
'Menu:SLA' => '服务级别协议',
'Menu:SLA+' => '服务级别协议',
'Menu:SLT' => '服务级别目标',
'Menu:SLT+' => '服务级别目标',
'Menu:DeliveryModel' => '交付模式',
'Menu:DeliveryModel+' => '交付模式',

));


/*
	'UI:ServiceManagementMenu' => 'Gestion des Services',
	'UI:ServiceManagementMenu+' => 'Gestion des Services',
	'UI:ServiceManagementMenu:Title' => 'Résumé des services & contrats',
	'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Contrats par niveau de service',
	'UI-ServiceManagementMenu-ContractsByStatus' => 'Contrats par état',
	'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Contrats se terminant dans moins de 30 jours',
*/


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Organization/Attribute:deliverymodel_id' => '交付模式',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => '交付模式名称',
	'Class:Organization/Attribute:deliverymodel_name+' => '',
));




Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ContractType' => '合同类型',
	'Class:ContractType+' => '',
));



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Contract' => '合同',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:name' => '名称',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:org_id' => '组织',
	'Class:Contract/Attribute:org_id+' => '',
	'Class:Contract/Attribute:organization_name' => '组织名称',
	'Class:Contract/Attribute:organization_name+' => '组织名称',
	'Class:Contract/Attribute:contacts_list' => '联系方式',
	'Class:Contract/Attribute:contacts_list+' => '关于这个客户合同的所有联系方式',
	'Class:Contract/Attribute:documents_list' => '文档',
	'Class:Contract/Attribute:documents_list+' => '与该合同关联的文档',
	'Class:Contract/Attribute:description' => '描述',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:start_date' => '启始日期',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => '截止日期',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => '费用',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => '费用货币',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => '人民币',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => '美元',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:contracttype_id' => '合同类型',
	'Class:Contract/Attribute:contracttype_id+' => '',
	'Class:Contract/Attribute:contracttype_name' => '合同类型名称',
	'Class:Contract/Attribute:contracttype_name+' => '',
	'Class:Contract/Attribute:billing_frequency' => '付款周期',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:cost_unit' => '费用单位',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:provider_id' => '供应商',
	'Class:Contract/Attribute:provider_id+' => '',
	'Class:Contract/Attribute:provider_name' => '供应商名称',
	'Class:Contract/Attribute:provider_name+' => '',
	'Class:Contract/Attribute:status' => '状态',
	'Class:Contract/Attribute:status+' => '',
	'Class:Contract/Attribute:status/Value:implementation' => '实施',
	'Class:Contract/Attribute:status/Value:implementation+' => '实施',
	'Class:Contract/Attribute:status/Value:obsolete' => '废弃',
	'Class:Contract/Attribute:status/Value:obsolete+' => '废弃',
	'Class:Contract/Attribute:status/Value:production' => '生产',
	'Class:Contract/Attribute:status/Value:production+' => '生产',
	'Class:Contract/Attribute:finalclass' => '合同类型',
	'Class:Contract/Attribute:finalclass+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CustomerContract' => '客户合同',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:services_list' => '服务',
	'Class:CustomerContract/Attribute:services_list+' => '这个合同购买的所有服务',
	'Class:CustomerContract/Attribute:functionalcis_list' => '配置项',
	'Class:CustomerContract/Attribute:functionalcis_list+' => '该合同涉及的配置项',
	'Class:CustomerContract/Attribute:providercontracts_list' => '供应商合同',
	'Class:CustomerContract/Attribute:providercontracts_list+' => '为本合同提供服务的所有的供应商合同（支持合同）',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ProviderContract' => '供应商合同',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:functionalcis_list' => '配置项',
	'Class:ProviderContract/Attribute:functionalcis_list+' => '这个供应商合同涉及的所有配置项',
	'Class:ProviderContract/Attribute:sla' => '服务级别协议',
	'Class:ProviderContract/Attribute:sla+' => '服务级别协议',
	'Class:ProviderContract/Attribute:coverage' => '服务小时数',
	'Class:ProviderContract/Attribute:coverage+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToContract' => '链接联系人 / 合同',
	'Class:lnkContactToContract+' => '',
	'Class:lnkContactToContract/Attribute:contract_id' => '合同',
	'Class:lnkContactToContract/Attribute:contract_id+' => '',
	'Class:lnkContactToContract/Attribute:contract_name' => '合同名称',
	'Class:lnkContactToContract/Attribute:contract_name+' => '',
	'Class:lnkContactToContract/Attribute:contact_id' => '联系人',
	'Class:lnkContactToContract/Attribute:contact_id+' => '',
	'Class:lnkContactToContract/Attribute:contact_name' => '联系人名称',
	'Class:lnkContactToContract/Attribute:contact_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContractToDocument' => '链接合同 / 文档',
	'Class:lnkContractToDocument+' => '',
	'Class:lnkContractToDocument/Attribute:contract_id' => '合同',
	'Class:lnkContractToDocument/Attribute:contract_id+' => '',
	'Class:lnkContractToDocument/Attribute:contract_name' => '合同名称',
	'Class:lnkContractToDocument/Attribute:contract_name+' => '',
	'Class:lnkContractToDocument/Attribute:document_id' => '文档',
	'Class:lnkContractToDocument/Attribute:document_id+' => '',
	'Class:lnkContractToDocument/Attribute:document_name' => '文档名称',
	'Class:lnkContractToDocument/Attribute:document_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkFunctionalCIToProviderContract' => '链接功能配置项 / 供应商合同',
	'Class:lnkFunctionalCIToProviderContract+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id' => '供应商合同',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name' => '供应商合同名',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id' => '配置项',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ServiceFamily' => '服务族',
	'Class:ServiceFamily+' => '',
	'Class:ServiceFamily/Attribute:name' => '名称',
	'Class:ServiceFamily/Attribute:name+' => '',
	'Class:ServiceFamily/Attribute:services_list' => '服务',
	'Class:ServiceFamily/Attribute:services_list+' => '这个类别的所有服务',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Service' => '服务',
	'Class:Service+' => '',
	'Class:Service/Attribute:name' => '名称',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:org_id' => '供应商',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:organization_name' => '供应商名称',
	'Class:Service/Attribute:organization_name+' => '',
	'Class:Service/Attribute:description' => '描述',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:documents_list' => '文档',
	'Class:Service/Attribute:documents_list+' => '与此服务相关的文档',
	'Class:Service/Attribute:contacts_list' => '联系人',
	'Class:Service/Attribute:contacts_list+' => '与此服务相关的联系人',
	'Class:Service/Attribute:status' => '状态',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:implementation' => '实施',
	'Class:Service/Attribute:status/Value:implementation+' => '实施',
	'Class:Service/Attribute:status/Value:obsolete' => '废弃',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => '生产',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:customercontracts_list' => '客户合同',
	'Class:Service/Attribute:customercontracts_list+' => '此服务关联的客户合同',
	'Class:Service/Attribute:servicesubcategories_list' => '子服务目录',
	'Class:Service/Attribute:servicesubcategories_list+' => '服务所关联的子服务目录',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDocumentToService' => '链接文档 / 服务',
	'Class:lnkDocumentToService+' => '',
	'Class:lnkDocumentToService/Attribute:service_id' => '服务',
	'Class:lnkDocumentToService/Attribute:service_id+' => '',
	'Class:lnkDocumentToService/Attribute:service_name' => '服务名称',
	'Class:lnkDocumentToService/Attribute:service_name+' => '',
	'Class:lnkDocumentToService/Attribute:document_id' => '文档',
	'Class:lnkDocumentToService/Attribute:document_id+' => '',
	'Class:lnkDocumentToService/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToService/Attribute:document_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToService' => '链接联系人 / 服务',
	'Class:lnkContactToService+' => '',
	'Class:lnkContactToService/Attribute:service_id' => '服务',
	'Class:lnkContactToService/Attribute:service_id+' => '',
	'Class:lnkContactToService/Attribute:service_name' => '服务名称',
	'Class:lnkContactToService/Attribute:service_name+' => '',
	'Class:lnkContactToService/Attribute:contact_id' => '联系人',
	'Class:lnkContactToService/Attribute:contact_id+' => '',
	'Class:lnkContactToService/Attribute:contact_name' => '联系人名称',
	'Class:lnkContactToService/Attribute:contact_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ServiceSubcategory' => '服务子级类目',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:name' => '名称',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => '描述',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => '服务',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => '服务名称',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
	'Class:ServiceSubcategory/Attribute:status' => '状态',
	'Class:ServiceSubcategory/Attribute:status+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation' => '实施',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation+' => '实施',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete' => '废弃',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete+' => '废弃',
	'Class:ServiceSubcategory/Attribute:status/Value:production' => '生产',
	'Class:ServiceSubcategory/Attribute:status/Value:production+' => '生产',
	'Class:ServiceSubcategory/Attribute:request_type' => '请求类型',
	'Class:ServiceSubcategory/Attribute:request_type+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident' => '事件',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident+' => '事件',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request' => '服务请求',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request+' => '服务请求',
	'Class:ServiceSubcategory/Attribute:service_provider' => '供应商名称',
	'Class:ServiceSubcategory/Attribute:service_org_id' => '供应商',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SLA' => '服务级别协议',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => '名称',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:description' => '描述',
	'Class:SLA/Attribute:description+' => '',
	'Class:SLA/Attribute:org_id' => '组织',
	'Class:SLA/Attribute:org_id+' => '',
	'Class:SLA/Attribute:organization_name' => '组织名称',
	'Class:SLA/Attribute:organization_name+' => '',
	'Class:SLA/Attribute:slts_list' => '服务级别目标',
	'Class:SLA/Attribute:slts_list+' => '关于这个SLA的所有服务级别目标',
	'Class:SLA/Attribute:customercontracts_list' => '客户合同',
	'Class:SLA/Attribute:customercontracts_list+' => '使用这个SLA的所有客户合同',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SLT' => '服务级别目标',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:name' => '名称',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:priority' => '单据优先级',
	'Class:SLT/Attribute:priority+' => '',
	'Class:SLT/Attribute:priority/Value:1' => '紧急',
	'Class:SLT/Attribute:priority/Value:1+' => '紧急',
	'Class:SLT/Attribute:priority/Value:2' => '高',
	'Class:SLT/Attribute:priority/Value:2+' => '高',
	'Class:SLT/Attribute:priority/Value:3' => '中',
	'Class:SLT/Attribute:priority/Value:3+' => '中',
	'Class:SLT/Attribute:priority/Value:4' => '低',
	'Class:SLT/Attribute:priority/Value:4+' => '低',
	'Class:SLT/Attribute:request_type' => '请求类型',
	'Class:SLT/Attribute:request_type+' => '',
	'Class:SLT/Attribute:request_type/Value:incident' => '事件',
	'Class:SLT/Attribute:request_type/Value:incident+' => '事件',
	'Class:SLT/Attribute:request_type/Value:service_request' => '服务请求',
	'Class:SLT/Attribute:request_type/Value:service_request+' => '服务请求',
	'Class:SLT/Attribute:metric' => '标准',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:tto' => '响应时间',
	'Class:SLT/Attribute:metric/Value:tto+' => '响应时间',
	'Class:SLT/Attribute:metric/Value:ttr' => '解决时间',
	'Class:SLT/Attribute:metric/Value:ttr+' => '解决时间',
	'Class:SLT/Attribute:value' => '值',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:unit' => '单位',
	'Class:SLT/Attribute:unit+' => '',
	'Class:SLT/Attribute:unit/Value:hours' => '小时',
	'Class:SLT/Attribute:unit/Value:hours+' => '小时',
	'Class:SLT/Attribute:unit/Value:minutes' => '分钟',
	'Class:SLT/Attribute:unit/Value:minutes+' => '分钟',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkSLAToSLT' => '链接服务级别协议 / 服务级别目标',
	'Class:lnkSLAToSLT+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_id' => '服务级别协议',
	'Class:lnkSLAToSLT/Attribute:sla_id+' => '',
	'Class:lnkSLAToSLT/Attribute:sla_name' => '服务级别协议名称',
	'Class:lnkSLAToSLT/Attribute:sla_name+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_id' => '服务级别目标',
	'Class:lnkSLAToSLT/Attribute:slt_id+' => '',
	'Class:lnkSLAToSLT/Attribute:slt_name' => '服务级别目标名称',
	'Class:lnkSLAToSLT/Attribute:slt_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkCustomerContractToService' => '链接客户合同 / 服务',
	'Class:lnkCustomerContractToService+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id' => '客户合同',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name' => '客户合同名称',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_id' => '服务',
	'Class:lnkCustomerContractToService/Attribute:service_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_name' => '服务名称',
	'Class:lnkCustomerContractToService/Attribute:service_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_id' => '服务级别协议',
	'Class:lnkCustomerContractToService/Attribute:sla_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_name' => '服务级别协议名称',
	'Class:lnkCustomerContractToService/Attribute:sla_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkCustomerContractToProviderContract' => '链接客户 / 供应商合同',
	'Class:lnkCustomerContractToProviderContract+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_id' => '客户合同',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_name' => '客户合同名称',
	'Class:lnkCustomerContractToProviderContract/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_id' => '供应商合同',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_name' => '供应商合同名称',
	'Class:lnkCustomerContractToProviderContract/Attribute:providercontract_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkCustomerContractToFunctionalCI' => '链接客户合同 / 功能配置项',
	'Class:lnkCustomerContractToFunctionalCI+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_id' => '客户合同',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_name' => '客户合名称',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_id' => '配置项',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkCustomerContractToFunctionalCI/Attribute:functionalci_name+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DeliveryModel' => '交付模式',
	'Class:DeliveryModel+' => '',
	'Class:DeliveryModel/Attribute:name' => '名称',
	'Class:DeliveryModel/Attribute:name+' => '',
	'Class:DeliveryModel/Attribute:org_id' => '组织',
	'Class:DeliveryModel/Attribute:org_id+' => '',
	'Class:DeliveryModel/Attribute:organization_name' => '组织名称',
	'Class:DeliveryModel/Attribute:organization_name+' => '',
	'Class:DeliveryModel/Attribute:description' => '描述',
	'Class:DeliveryModel/Attribute:description+' => '',
	'Class:DeliveryModel/Attribute:contacts_list' => '联系人',
	'Class:DeliveryModel/Attribute:contacts_list+' => '关于这个交付模式的所有联系方式(团队和成员)',
	'Class:DeliveryModel/Attribute:customers_list' => '客户',
	'Class:DeliveryModel/Attribute:customers_list+' => '使用这个交付模式的所有客户',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDeliveryModelToContact' => '链接交付模式 / 联系',
	'Class:lnkDeliveryModelToContact+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id' => '交付模式',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name' => '交付模式名称',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id' => '联系方式',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name' => '联系方式名称',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_id' => '角色',
	'Class:lnkDeliveryModelToContact/Attribute:role_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_name' => '角色名称',
	'Class:lnkDeliveryModelToContact/Attribute:role_name+' => '',
));



/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */




Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Ticket' => '工单',
	'Class:Ticket+' => '',
	'Class:Ticket/Attribute:ref' => '参照',
	'Class:Ticket/Attribute:ref+' => '',
	'Class:Ticket/Attribute:org_id' => '所属组织',
	'Class:Ticket/Attribute:org_id+' => '',
	'Class:Ticket/Attribute:org_name' => '所属组织名称',
	'Class:Ticket/Attribute:org_name+' => '',
	'Class:Ticket/Attribute:caller_id' => '发起人',
	'Class:Ticket/Attribute:caller_id+' => '',
	'Class:Ticket/Attribute:caller_name' => '发起人名称',
	'Class:Ticket/Attribute:caller_name+' => '',
	'Class:Ticket/Attribute:team_id' => '团队',
	'Class:Ticket/Attribute:team_id+' => '',
	'Class:Ticket/Attribute:team_name' => '团队名称',
	'Class:Ticket/Attribute:team_name+' => '',
	'Class:Ticket/Attribute:agent_id' => '处理人',
	'Class:Ticket/Attribute:agent_id+' => '',
	'Class:Ticket/Attribute:agent_name' => '处理人',
	'Class:Ticket/Attribute:agent_name+' => '',
	'Class:Ticket/Attribute:title' => '标题',
	'Class:Ticket/Attribute:title+' => '',
	'Class:Ticket/Attribute:description' => '描述',
	'Class:Ticket/Attribute:description+' => '',
	'Class:Ticket/Attribute:start_date' => '开始日期',
	'Class:Ticket/Attribute:start_date+' => '',
	'Class:Ticket/Attribute:end_date' => '结束日期',
	'Class:Ticket/Attribute:end_date+' => '',
	'Class:Ticket/Attribute:last_update' => '最新更新',
	'Class:Ticket/Attribute:last_update+' => '',
	'Class:Ticket/Attribute:close_date' => '结束日期',
	'Class:Ticket/Attribute:close_date+' => '',
	'Class:Ticket/Attribute:private_log' => '个人日志',
	'Class:Ticket/Attribute:private_log+' => '',
	'Class:Ticket/Attribute:contacts_list' => '联系人',
	'Class:Ticket/Attribute:contacts_list+' => '与该工单相关的联系人',
	'Class:Ticket/Attribute:functionalcis_list' => '配置项',
	'Class:Ticket/Attribute:functionalcis_list+' => '所有与该工单相关的配置项',
	'Class:Ticket/Attribute:workorders_list' => '工作单',
	'Class:Ticket/Attribute:workorders_list+' => '与该工单相关的工作单',
	'Class:Ticket/Attribute:finalclass' => '类型',
	'Class:Ticket/Attribute:finalclass+' => '',
	'Ticket:ImpactAnalysis' => '影响分析',
));



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToTicket' => '链接联系人/工单',
	'Class:lnkContactToTicket+' => '',
	'Class:lnkContactToTicket/Attribute:ticket_id' => '工单',
	'Class:lnkContactToTicket/Attribute:ticket_id+' => '',
	'Class:lnkContactToTicket/Attribute:ticket_ref' => '参考',
	'Class:lnkContactToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkContactToTicket/Attribute:contact_id' => '联系人',
	'Class:lnkContactToTicket/Attribute:contact_id+' => '',
	'Class:lnkContactToTicket/Attribute:contact_email' => '联系人Email',
	'Class:lnkContactToTicket/Attribute:contact_email+' => '',
	'Class:lnkContactToTicket/Attribute:role' => '角色（文本文档）',
	'Class:lnkContactToTicket/Attribute:role+' => '',
	'Class:lnkContactToTicket/Attribute:role_code' => '角色',
	'Class:lnkContactToTicket/Attribute:role_code/Value:manual' => '手动添加',
	'Class:lnkContactToTicket/Attribute:role_code/Value:computed' => '计算',
	'Class:lnkContactToTicket/Attribute:role_code/Value:do_not_notify' => '不通知',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkFunctionalCIToTicket' => '链接功能项 / 工单',
	'Class:lnkFunctionalCIToTicket+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_id' => '工单',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_id+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_ref' => '参照',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_id' => '配置项',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_name+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:impact' => '影响（文本文档）',
	'Class:lnkFunctionalCIToTicket/Attribute:impact+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code' => '影响',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code/Value:manual' => '手动添加',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code/Value:computed' => '计算',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code/Value:not_impacted' => '不影响',
));



Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:WorkOrder' => '工作单',
	'Class:WorkOrder+' => '',
	'Class:WorkOrder/Attribute:name' => '名称',
	'Class:WorkOrder/Attribute:name+' => '',
	'Class:WorkOrder/Attribute:status' => '状态',
	'Class:WorkOrder/Attribute:status+' => '',
	'Class:WorkOrder/Attribute:status/Value:open' => '打开',
	'Class:WorkOrder/Attribute:status/Value:open+' => '',
	'Class:WorkOrder/Attribute:status/Value:closed' => '关闭',
	'Class:WorkOrder/Attribute:status/Value:closed+' => '',
	'Class:WorkOrder/Attribute:description' => '说明',
	'Class:WorkOrder/Attribute:description+' => '',
	'Class:WorkOrder/Attribute:ticket_id' => '工单',
	'Class:WorkOrder/Attribute:ticket_id+' => '',
	'Class:WorkOrder/Attribute:ticket_ref' => '参考工单',
	'Class:WorkOrder/Attribute:ticket_ref+' => '',
	'Class:WorkOrder/Attribute:team_id' => '团队',
	'Class:WorkOrder/Attribute:team_id+' => '',
	'Class:WorkOrder/Attribute:team_name' => '团队名称',
	'Class:WorkOrder/Attribute:team_name+' => '',
	'Class:WorkOrder/Attribute:agent_id' => '代理',
	'Class:WorkOrder/Attribute:agent_id+' => '',
	'Class:WorkOrder/Attribute:agent_email' => '代理Email',
	'Class:WorkOrder/Attribute:agent_email+' => '',
	'Class:WorkOrder/Attribute:start_date' => '开始日期',
	'Class:WorkOrder/Attribute:start_date+' => '',
	'Class:WorkOrder/Attribute:end_date' => '结束日期',
	'Class:WorkOrder/Attribute:end_date+' => '',
	'Class:WorkOrder/Attribute:log' => '日志',
	'Class:WorkOrder/Attribute:log+' => '',
	'Class:WorkOrder/Stimulus:ev_close' => '关闭',
	'Class:WorkOrder/Stimulus:ev_close+' => '',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(

	'Ticket:baseinfo' => '总体信息',
	'Ticket:date' => '日期信息',
	'Ticket:contact' => '合同信息',
	'Ticket:moreinfo' => '详细信息',
	'Ticket:relation' => '层级关系',
	'Ticket:log' => '信息',
	'Ticket:Type' => '条件',
	'Ticket:support' => '支持',
	'Ticket:resolution' => '解决方案',
	'Ticket:SLA' => 'SLA报告',
	'WorkOrder:Details' => '详细信息',
	'WorkOrder:Moreinfo' => '更多信息',
	'Tickets:ResolvedFrom' => '从%1$s自动解决',

	'Class:cmdbAbstractObject/Method:Set' => '设置',
	'Class:cmdbAbstractObject/Method:Set+' => '用静态值设置字段',
	'Class:cmdbAbstractObject/Method:Set/Param:1' => '目标字段',
	'Class:cmdbAbstractObject/Method:Set/Param:1+' => '在当前的对象设置该字段',
	'Class:cmdbAbstractObject/Method:Set/Param:2' => '值',
	'Class:cmdbAbstractObject/Method:Set/Param:2+' => '设置该值',
	'Class:cmdbAbstractObject/Method:SetCurrentDate' => '设置当前日期',
	'Class:cmdbAbstractObject/Method:SetCurrentDate+' => '设置当前日期',
	'Class:cmdbAbstractObject/Method:SetCurrentDate/Param:1' => '目标字段',
	'Class:cmdbAbstractObject/Method:SetCurrentDate/Param:1+' => '设置当前对象的目标字段',
	'Class:cmdbAbstractObject/Method:SetCurrentUser' => '设置当前用户',
	'Class:cmdbAbstractObject/Method:SetCurrentUser+' => '设置当前登录用户的字段',
	'Class:cmdbAbstractObject/Method:SetCurrentUser/Param:1' => '目标字段',
	'Class:cmdbAbstractObject/Method:SetCurrentUser/Param:1+' => '设置当前对象的目标字段',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson' => '设置为当前用户',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson+' => '设置此字段为当前登录的用户("人员"关联到登录的"用户").',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson/Param:1' => '目标字段',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson/Param:1+' => '当前对象的字段设置.如果字段是一个字符串,那么好记的名称将被使用,否则将使用标识符。',
	'Class:cmdbAbstractObject/Method:SetElapsedTime' => '设置经过时间',
	'Class:cmdbAbstractObject/Method:SetElapsedTime+' => '设置字段与时间（秒）后经过由另一场给出一个日期',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:1' => '目标字段',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:1+' => '设置当前对象的目标字段',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:2' => '参考字段',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:2+' => '从该字段来获得基准日期',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:3' => '工作时间',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:3+' => '留工为标准工时方案,或者通过设置"DefaultWorkingTimeComputer" 改成 24X7 方案',
	'Class:cmdbAbstractObject/Method:Reset' => '重置若罔闻',
	'Class:cmdbAbstractObject/Method:Reset+' => '重置该字段为默认值',
	'Class:cmdbAbstractObject/Method:Reset/Param:1' => '目标字段',
	'Class:cmdbAbstractObject/Method:Reset/Param:1+' => '对当前对象的字段进行重置',
	'Class:cmdbAbstractObject/Method:Copy' => '复制',
	'Class:cmdbAbstractObject/Method:Copy+' => '复制当前字段的值到其它字段',
	'Class:cmdbAbstractObject/Method:Copy/Param:1' => '目标字段',
	'Class:cmdbAbstractObject/Method:Copy/Param:1+' => '设置当前对象的目标字段',
	'Class:cmdbAbstractObject/Method:Copy/Param:2' => '源字段',
	'Class:cmdbAbstractObject/Method:Copy/Param:2+' => '从当前字段获取到的值勤',
	'Class:ResponseTicketTTO/Interface:iMetricComputer' => '响应时间',
	'Class:ResponseTicketTTO/Interface:iMetricComputer+' => '基于服务级别目标里的响应时间',
	'Class:ResponseTicketTTR/Interface:iMetricComputer' => '解决时间',
	'Class:ResponseTicketTTR/Interface:iMetricComputer+' => '基于服务级别目标里的解决时间',
));

/**
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2014 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:WelcomeMenu' => '欢迎',
	'Menu:WelcomeMenu+' => '欢迎来到iTop',
	'Menu:WelcomeMenuPage' => '欢迎',
	'Menu:WelcomeMenuPage+' => '欢迎来到iTop',
	'Menu:AdminTools' => '管理工具',
	'Menu:AdminTools+' => '管理工具',
	'Menu:AdminTools?' => '具有系统管理员简档的用户才能获得的工具',
	'Menu:DataModelMenu' => '数据模型',
	'Menu:DataModelMenu+' => '数据模型概览',
	'Menu:ExportMenu' => '导出',
	'Menu:ExportMenu+' => '以HTML, CSV or XML格式导出任何查询的结果',
	'Menu:NotificationsMenu' => '通知',
	'Menu:NotificationsMenu+' => '通知的配置',
	'Menu:AuditCategories' => '审计类目',
	'Menu:AuditCategories+' => '审计类目',
	'Menu:Notifications:Title' => '审计类目',
	'Menu:QueryMenu' => '查询手册',
	'Menu:QueryMenu+' => '查询手册',
	'Menu:RunQueriesMenu' => '运行查询',
	'Menu:RunQueriesMenu+' => '运行任何查询',
	'Menu:UniversalSearchMenu' => '通用搜索',
	'Menu:UniversalSearchMenu+' => '搜索所有...',
	'Menu:UserManagementMenu' => '用户管理',
	'Menu:UserManagementMenu+' => '用户管理',
	'Menu:ProfilesMenu' => '角色',
	'Menu:ProfilesMenu+' => '角色',
	'Menu:ProfilesMenu:Title' => '角色',
	'Menu:UserAccountsMenu' => '用户帐户',
	'Menu:UserAccountsMenu+' => '用户帐户',
	'Menu:UserAccountsMenu:Title' => '用户帐户',
));

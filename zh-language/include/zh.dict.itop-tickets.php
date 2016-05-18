<?php
// Copyright (C) 2010-2014 Combodo SARL
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


//
// Class: Ticket
//

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


//
// Class: lnkContactToTicket
//

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

//
// Class: lnkFunctionalCIToTicket
//

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


//
// Class: WorkOrder
//

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


// Fieldset translation
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

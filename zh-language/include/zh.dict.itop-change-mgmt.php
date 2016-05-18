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
// Class: Change
//

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


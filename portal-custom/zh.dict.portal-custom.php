<?php

// Copyright (C) 2010-2015 Combodo SARL
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
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license	 http://opensource.org/licenses/AGPL-3.0
 */


// Portal
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Page:DefaultTitle' => '运维工单系统',
	'Page:PleaseWait' => '请等一会...',
	'Page:Home' => '主页',
	'Page:GoPortalHome' => '主页',
	'Page:GoPreviousPage' => '前一页',
	'Portal:Button:Submit' => '提交',
	'Portal:Button:Cancel' => '取消',
	'Portal:Button:Close' => '关闭',
	'Portal:Button:Add' => '新增',
	'Portal:Button:Remove' => '移除',
	'Portal:Button:Delete' => '删除',
	'Error:HTTP:404' => '页面没有找到',
	'Error:HTTP:500' => 'Oops! An error has occured.',
	'Error:HTTP:GetHelp' => '请联系运维处理.',
	'Error:XHR:Fail' => '载入数据失败，请联系运维处理',
	'Portal:Datatables:Language:Processing' => '请等一会...',
	'Portal:Datatables:Language:Search' => '过滤:',
	'Portal:Datatables:Language:LengthMenu' => '每页显示 _MENU_ 项',
	'Portal:Datatables:Language:ZeroRecords' => '没有可显示的项目',
	'Portal:Datatables:Language:Info' => '第 _PAGE_ 页/共 _PAGES_ 页',
	'Portal:Datatables:Language:InfoEmpty' => '没有可显示的信息',
	'Portal:Datatables:Language:InfoFiltered' => 'filtered out of _MAX_ items',
	'Portal:Datatables:Language:EmptyTable' => '没有可用数据',
	'Portal:Datatables:Language:DisplayLength:All' => '全部',
	'Portal:Datatables:Language:Paginate:First' => '第一页',
	'Portal:Datatables:Language:Paginate:Previous' => '前一页',
	'Portal:Datatables:Language:Paginate:Next' => '后一页',
	'Portal:Datatables:Language:Paginate:Last' => '最后一页',
	'Portal:Datatables:Language:Sort:Ascending' => '升序',
	'Portal:Datatables:Language:Sort:Descending' => '降序',
	'Portal:Autocomplete:NoResult' => '没有数据',
	'Portal:Attachments:DropZone:Message' => 'Drop your files to add them as attachments',
	'Portal:File:None' => '没有文件',
	'Portal:File:DisplayInfo' => '<a href="%2$s" class="file_download_link">%1$s</a>',
	'Portal:File:DisplayInfo+' => '%1$s (%2$s) <a href="%3$s" class="file_open_link" target="_blank">Open</a> / <a href="%4$s" class="file_download_link">Download</a>',
));

// UserProfile brick
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Brick:Portal:UserProfile:Name' => '用户资料',
	'Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil' => '我的资料',
	'Brick:Portal:UserProfile:Navigation:Dropdown:Logout' => '登出',
	'Brick:Portal:UserProfile:Password:Title' => '密码',
	'Brick:Portal:UserProfile:Password:ChoosePassword' => '更改密码',
	'Brick:Portal:UserProfile:Password:ConfirmPassword' => '确认密码',
	'Brick:Portal:UserProfile:Password:CantChangeContactAdministrator' => '不支持修改密码，请联系运维处理',
	'Brick:Portal:UserProfile:Password:CantChangeForUnknownReason' => '无法修改密码，请联系运维处理',
	'Brick:Portal:UserProfile:PersonalInformations:Title' => '个人信息',
	'Brick:Portal:UserProfile:Photo:Title' => '照片',
));

// BrowseBrick brick
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Brick:Portal:Browse:Name' => 'Browse throught items',
	'Brick:Portal:Browse:Mode:List' => '列表',
	'Brick:Portal:Browse:Mode:Tree' => '树形',
	'Brick:Portal:Browse:Action:Drilldown' => 'Drilldown',
	'Brick:Portal:Browse:Action:View' => '详情',
	'Brick:Portal:Browse:Action:Edit' => '编辑',
	'Brick:Portal:Browse:Action:Create' => '创建',
	'Brick:Portal:Browse:Action:CreateObjectFromThis' => '创建 %1$s',
	'Brick:Portal:Browse:Tree:ExpandAll' => '全部展开',
	'Brick:Portal:Browse:Tree:CollapseAll' => '全部收起',
	'Brick:Portal:Browse:Filter:NoData' => '没有可以展示的项目',
));

// ManageBrick brick
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Brick:Portal:Manage:Name' => '管理',
	'Brick:Portal:Manage:Table:NoData' => '没有项目.',
));

// ObjectBrick brick
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Brick:Portal:Object:Name' => '对象',
	'Brick:Portal:Object:Form:Create:Title' => '创建 %1$s',
	'Brick:Portal:Object:Form:Edit:Title' => '更新 %2$s (%1$s)',
	'Brick:Portal:Object:Form:View:Title' => '%1$s : %2$s',
	'Brick:Portal:Object:Form:Stimulus:Title' => '请补全以下信息:',
	'Brick:Portal:Object:Form:Message:Saved' => '已保存',
	'Brick:Portal:Object:Search:Regular:Title' => '选择 %1$s (%2$s)',
	'Brick:Portal:Object:Search:Hierarchy:Title' => '选择 %1$s (%2$s)',
));

// CreateBrick brick
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Brick:Portal:Create:Name' => '快速提单',

	'portal:itop-portal' => '工单系统', // This is the portal name that will be displayed in portal dispatcher (eg. URL in menus)
	'Page:DefaultTitle' => '运维工单系统',
	'Brick:Portal:UserProfile:Title' => '我的资料',
	'Brick:Portal:NewRequest:Title' => '提交工单',
	'Brick:Portal:NewRequest:Title+' => '<p>需要帮助?</p><p>从列表选择一个服务，提交工单</p>',
	'Brick:Portal:OngoingRequests:Title' => '执行中的工单',
	'Brick:Portal:OngoingRequests:Title+' => '<p>跟进您的工单执行状态，您可以查看工单进度，增加评论，将工单标记为解决或关闭工单</p>',
	'Brick:Portal:OngoingRequests:Tab:OnGoing' => '执行中',
	'Brick:Portal:OngoingRequests:Tab:Resolved' => '已解决',
	'Brick:Portal:ClosedRequests:Title' => '已关闭的工单',

	'Brick:Portal:FAQ:Menu' => 'FAQ',
	'Brick:Portal:FAQ:Title' => '常见问题与解答',
	'Brick:Portal:FAQ:Title+' => '<p>遇到问题了?</p><p>点击这里检索常见问题与解答，或许您能立即找到答案</p>',
	
	
));
?>

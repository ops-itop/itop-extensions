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

//////////////////////////////////////////////////////////////////////
// Relations
//////////////////////////////////////////////////////////////////////
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Relation:impacts/Description' => '被影响的元素',
	'Relation:impacts/DownStream' => '影响...',
	'Relation:impacts/UpStream' => '被影响的元素...',
	'Relation:depends on/Description' => '该元素依赖的元素',
	'Relation:depends on/DownStream' => '依赖于...',
	'Relation:depends on/UpStream' => '影响...',
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

//////////////////////////////////////////////////////////////////////
// Note: The classes have been grouped by categories: bizmodel
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//


//
// Class: Organization
//

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

//
// Class: Location
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Location' => '机房',
//	'Class:Location+' => '任何类型的地理位置: 区域, 国家, 城市, 位置, 建筑, 楼层, 房间, 机架,...',
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

//
// Class: Contact
//

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
	'Class:Contact/Attribute:phone' => '电话',
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

//
// Class: Person
//

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
	'Class:Person/Attribute:location_name' => '位置名字',
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

//
// Class: Team
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Team' => '团队',
	'Class:Team+' => '',
	'Class:Team/Attribute:persons_list' => '成员',
	'Class:Team/Attribute:persons_list+' => '团队所辖成员',
	'Class:Team/Attribute:tickets_list' => '工单',
	'Class:Team/Attribute:tickets_list+' => '该团队的所有工单',
));

//
// Class: Document
//

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

//
// Class: DocumentFile
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DocumentFile' => '文档文件',
	'Class:DocumentFile+' => '',
	'Class:DocumentFile/Attribute:file' => '文件',
	'Class:DocumentFile/Attribute:file+' => '',
));

//
// Class: DocumentNote
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DocumentNote' => '备注',
	'Class:DocumentNote+' => '',
	'Class:DocumentNote/Attribute:text' => '文本',
	'Class:DocumentNote/Attribute:text+' => '',
));

//
// Class: DocumentWeb
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DocumentWeb' => '网页文档',
	'Class:DocumentWeb+' => '',
	'Class:DocumentWeb/Attribute:url' => '网页地址',
	'Class:DocumentWeb/Attribute:url+' => '',
));

//
// Class: FunctionalCI
//

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
	'Class:FunctionalCI/Attribute:applicationsolution_list' => '应用方案',
	'Class:FunctionalCI/Attribute:applicationsolution_list+' => '在该配置项支持的所有应用方案',
	'Class:FunctionalCI/Attribute:providercontracts_list' => '供应商联系人清单',
	'Class:FunctionalCI/Attribute:providercontracts_list+' => '所有供应商的联系人清单',
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

//
// Class: PhysicalDevice
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PhysicalDevice' => '物理设备',
	'Class:PhysicalDevice+' => '',
	'Class:PhysicalDevice/Attribute:serialnumber' => '设备串号',
	'Class:PhysicalDevice/Attribute:serialnumber+' => '',
	'Class:PhysicalDevice/Attribute:location_id' => '位置',
	'Class:PhysicalDevice/Attribute:location_id+' => '',
	'Class:PhysicalDevice/Attribute:location_name' => '位置名称',
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

//
// Class: Rack
//

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

//
// Class: TelephonyCI
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:TelephonyCI' => '电话配置项',
	'Class:TelephonyCI+' => '',
	'Class:TelephonyCI/Attribute:phonenumber' => '电话号码',
	'Class:TelephonyCI/Attribute:phonenumber+' => '',
));

//
// Class: Phone
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Phone' => '电话',
	'Class:Phone+' => '',
));

//
// Class: MobilePhone
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:MobilePhone' => '移动电话',
	'Class:MobilePhone+' => '',
	'Class:MobilePhone/Attribute:imei' => 'IMEI',
	'Class:MobilePhone/Attribute:imei+' => '',
	'Class:MobilePhone/Attribute:hw_pin' => '硬件 PIN',
	'Class:MobilePhone/Attribute:hw_pin+' => '',
));

//
// Class: IPPhone
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:IPPhone' => 'IP电话',
	'Class:IPPhone+' => '',
));

//
// Class: Tablet
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Tablet' => '平板设备',
	'Class:Tablet+' => '',
));

//
// Class: ConnectableCI
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:ConnectableCI' => '可连接的配置项',
	'Class:ConnectableCI+' => '物理配置项',
	'Class:ConnectableCI/Attribute:networkdevice_list' => '网络设备',
	'Class:ConnectableCI/Attribute:networkdevice_list+' => '所有连接到该设备的网络设备',
	'Class:ConnectableCI/Attribute:physicalinterface_list' => '网络接口',
	'Class:ConnectableCI/Attribute:physicalinterface_list+' => '该设备所有物理网络接口',
));

//
// Class: DatacenterDevice
//

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

//
// Class: NetworkDevice
//

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

//
// Class: Server
//

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

//
// Class: StorageSystem
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:StorageSystem' => '存储系统',
	'Class:StorageSystem+' => '',
	'Class:StorageSystem/Attribute:logicalvolume_list' => '逻辑卷',
	'Class:StorageSystem/Attribute:logicalvolume_list+' => '所有的逻辑卷',
));

//
// Class: SANSwitch
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:SANSwitch' => '存储网络交换',
	'Class:SANSwitch+' => '',
	'Class:SANSwitch/Attribute:datacenterdevice_list' => '设备',
	'Class:SANSwitch/Attribute:datacenterdevice_list+' => '连接到该设备的所有设备',
));

//
// Class: TapeLibrary
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:TapeLibrary' => '磁带库',
	'Class:TapeLibrary+' => '',
	'Class:TapeLibrary/Attribute:tapes_list' => '磁带',
	'Class:TapeLibrary/Attribute:tapes_list+' => '所有磁带',
));

//
// Class: NAS
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:NAS' => '网络附加存储NAS',
	'Class:NAS+' => '',
	'Class:NAS/Attribute:nasfilesystem_list' => '文件系统',
	'Class:NAS/Attribute:nasfilesystem_list+' => '该存储的所有文件系统',
));

//
// Class: PC
//

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

//
// Class: Printer
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Printer' => '打印机',
	'Class:Printer+' => '',
));

//
// Class: PowerConnection
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PowerConnection' => '电源连接',
	'Class:PowerConnection+' => '',
));

//
// Class: PowerSource
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PowerSource' => '电源',
	'Class:PowerSource+' => '',
	'Class:PowerSource/Attribute:pdus_list' => '板插',
	'Class:PowerSource/Attribute:pdus_list+' => '使用该电源的所有板插',
));

//
// Class: PDU
//

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

//
// Class: Peripheral
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Peripheral' => '外围设备',
	'Class:Peripheral+' => '',
));

//
// Class: Enclosure
//

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

//
// Class: ApplicationSolution
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:ApplicationSolution' => '应用方案',
	'Class:ApplicationSolution+' => '',
	'Class:ApplicationSolution/Attribute:functionalcis_list' => '配置项',
	'Class:ApplicationSolution/Attribute:functionalcis_list+' => '构成该方案的配置项',
	'Class:ApplicationSolution/Attribute:businessprocess_list' => '业务流程',
	'Class:ApplicationSolution/Attribute:businessprocess_list+' => '依赖于该方案的业务流程',
	'Class:ApplicationSolution/Attribute:status' => '状态',
	'Class:ApplicationSolution/Attribute:status+' => '',
	'Class:ApplicationSolution/Attribute:status/Value:active' => '激活',
	'Class:ApplicationSolution/Attribute:status/Value:active+' => '激活',
	'Class:ApplicationSolution/Attribute:status/Value:inactive' => '未激活',
	'Class:ApplicationSolution/Attribute:status/Value:inactive+' => '未激活',
	'Class:ApplicationSolution/Attribute:redundancy' => '影响分析: 冗余配置',
	'Class:ApplicationSolution/Attribute:redundancy/disabled' => '如果应用方案激活，方案里的所有配置项也会激活',
	'Class:ApplicationSolution/Attribute:redundancy/count' => '如果想激活应用方案至少激活%1$s配置项',
	'Class:ApplicationSolution/Attribute:redundancy/percent' => '如果要激活应用方案至少激活%1$s %%配置项',

));

//
// Class: BusinessProcess
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:BusinessProcess' => '业务流程',
	'Class:BusinessProcess+' => '',
	'Class:BusinessProcess/Attribute:applicationsolutions_list' => '应用方案',
	'Class:BusinessProcess/Attribute:applicationsolutions_list+' => '业务流程所依赖的应用方案',
	'Class:BusinessProcess/Attribute:status' => '状态',
	'Class:BusinessProcess/Attribute:status+' => '',
	'Class:BusinessProcess/Attribute:status/Value:active' => '激活',
	'Class:BusinessProcess/Attribute:status/Value:active+' => '激活',
	'Class:BusinessProcess/Attribute:status/Value:inactive' => '未激活',
	'Class:BusinessProcess/Attribute:status/Value:inactive+' => '未激活',
));

//
// Class: SoftwareInstance
//

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

//
// Class: Middleware
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Middleware' => '中间件',
	'Class:Middleware+' => '',
	'Class:Middleware/Attribute:middlewareinstance_list' => '中间件实例',
	'Class:Middleware/Attribute:middlewareinstance_list+' => '该设备提供的所有中间件实例',
));

//
// Class: DBServer
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DBServer' => '数据库',
	'Class:DBServer+' => '',
	'Class:DBServer/Attribute:dbschema_list' => '数据库架构',
	'Class:DBServer/Attribute:dbschema_list+' => '所有的数据库架构',
));

//
// Class: WebServer
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:WebServer' => '网站服务器',
	'Class:WebServer+' => '',
	'Class:WebServer/Attribute:webapp_list' => '网站应用',
	'Class:WebServer/Attribute:webapp_list+' => '该服务器上的所有网站应用',
));

//
// Class: PCSoftware
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:PCSoftware' => '电脑软件',
	'Class:PCSoftware+' => '',
));

//
// Class: OtherSoftware
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:OtherSoftware' => '其它软件',
	'Class:OtherSoftware+' => '',
));

//
// Class: MiddlewareInstance
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:MiddlewareInstance' => '中间件实例',
	'Class:MiddlewareInstance+' => '',
	'Class:MiddlewareInstance/Attribute:middleware_id' => '中间件',
	'Class:MiddlewareInstance/Attribute:middleware_id+' => '',
	'Class:MiddlewareInstance/Attribute:middleware_name' => '中间件名称',
	'Class:MiddlewareInstance/Attribute:middleware_name+' => '',
));

//
// Class: DatabaseSchema
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DatabaseSchema' => '数据库架构',
	'Class:DatabaseSchema+' => '',
	'Class:DatabaseSchema/Attribute:dbserver_id' => '数据库服务器',
	'Class:DatabaseSchema/Attribute:dbserver_id+' => '',
	'Class:DatabaseSchema/Attribute:dbserver_name' => '数据库服务器名',
	'Class:DatabaseSchema/Attribute:dbserver_name+' => '',
));

//
// Class: WebApplication
//

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


//
// Class: VirtualDevice
//

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

//
// Class: VirtualHost
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:VirtualHost' => '虚拟主机',
	'Class:VirtualHost+' => '',
	'Class:VirtualHost/Attribute:virtualmachine_list' => '虚拟机',
	'Class:VirtualHost/Attribute:virtualmachine_list+' => '该主机上的所有虚拟机',
));

//
// Class: Hypervisor
//

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

//
// Class: Farm
//

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

//
// Class: VirtualMachine
//

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

//
// Class: LogicalVolume
//

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

//
// Class: lnkServerToVolume
//

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

//
// Class: lnkVirtualDeviceToVolume
//

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

//
// Class: lnkSanToDatacenterDevice
//

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

//
// Class: Tape
//

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

//
// Class: NASFileSystem
//

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

//
// Class: Software
//

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

//
// Class: Patch
//

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

//
// Class: OSPatch
//

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

//
// Class: SoftwarePatch
//

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

//
// Class: Licence
//

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

//
// Class: OSLicence
//

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

//
// Class: SoftwareLicence
//

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

//
// Class: lnkDocumentToLicence
//

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

//
// Class: Typology
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Typology' => '类型配置',
	'Class:Typology+' => '',
	'Class:Typology/Attribute:name' => '名称',
	'Class:Typology/Attribute:name+' => '',
	'Class:Typology/Attribute:finalclass' => '类型',
	'Class:Typology/Attribute:finalclass+' => '',
));

//
// Class: OSVersion
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:OSVersion' => 'OS 版本',
	'Class:OSVersion+' => '',
	'Class:OSVersion/Attribute:osfamily_id' => 'OS 家族',
	'Class:OSVersion/Attribute:osfamily_id+' => '',
	'Class:OSVersion/Attribute:osfamily_name' => 'OS 家族名称',
	'Class:OSVersion/Attribute:osfamily_name+' => '',
));

//
// Class: OSFamily
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:OSFamily' => 'OS 家族',
	'Class:OSFamily+' => '',
));

//
// Class: DocumentType
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:DocumentType' => '文档类型',
	'Class:DocumentType+' => '',
));

//
// Class: ContactType
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:ContactType' => '联系类型',
	'Class:ContactType+' => '',
));

//
// Class: Brand
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:Brand' => '品牌',
	'Class:Brand+' => '',
	'Class:Brand/Attribute:physicaldevices_list' => '物理设备',
	'Class:Brand/Attribute:physicaldevices_list+' => '与这个品牌相符的所有物理设备',
));

//
// Class: Model
//

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

//
// Class: NetworkDeviceType
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:NetworkDeviceType' => '网络设备类型',
	'Class:NetworkDeviceType+' => '',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list' => '网络设备',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list+' => '符合这个类型的所有物理设备',
));

//
// Class: IOSVersion
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:IOSVersion' => 'IOS 版本',
	'Class:IOSVersion+' => '',
	'Class:IOSVersion/Attribute:brand_id' => '品牌',
	'Class:IOSVersion/Attribute:brand_id+' => '',
	'Class:IOSVersion/Attribute:brand_name' => '品牌名称',
	'Class:IOSVersion/Attribute:brand_name+' => '',
));

//
// Class: lnkDocumentToPatch
//

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

//
// Class: lnkSoftwareInstanceToSoftwarePatch
//

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

//
// Class: lnkFunctionalCIToOSPatch
//

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

//
// Class: lnkDocumentToSoftware
//

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

//
// Class: lnkContactToFunctionalCI
//

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

//
// Class: lnkDocumentToFunctionalCI
//

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

//
// Class: Subnet
//

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

//
// Class: VLAN
//

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

//
// Class: lnkSubnetToVLAN
//

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

//
// Class: NetworkInterface
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:NetworkInterface' => '网络接口',
	'Class:NetworkInterface+' => '',
	'Class:NetworkInterface/Attribute:name' => '名称',
	'Class:NetworkInterface/Attribute:name+' => '',
	'Class:NetworkInterface/Attribute:finalclass' => '类型',
	'Class:NetworkInterface/Attribute:finalclass+' => '',
));

//
// Class: IPInterface
//

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

//
// Class: PhysicalInterface
//

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

//
// Class: lnkPhysicalInterfaceToVLAN
//

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


//
// Class: LogicalInterface
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:LogicalInterface' => '逻辑接口',
	'Class:LogicalInterface+' => '',
	'Class:LogicalInterface/Attribute:virtualmachine_id' => '虚拟机',
	'Class:LogicalInterface/Attribute:virtualmachine_id+' => '',
	'Class:LogicalInterface/Attribute:virtualmachine_name' => '虚拟机名称',
	'Class:LogicalInterface/Attribute:virtualmachine_name+' => '',
));

//
// Class: FiberChannelInterface
//

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

//
// Class: lnkConnectableCIToNetworkDevice
//

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

//
// Class: lnkApplicationSolutionToFunctionalCI
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkApplicationSolutionToFunctionalCI' => '应用方案 / 配置项',
	'Class:lnkApplicationSolutionToFunctionalCI+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id' => '应用方案',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name' => '应用方案名',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id' => '配置项',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name' => '配置项名',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name+' => '',
));

//
// Class: lnkApplicationSolutionToBusinessProcess
//

Dict::Add('ZH CN', "Chinese", "简体中文", array(
	'Class:lnkApplicationSolutionToBusinessProcess' => '应用方案/ 业务流程',
	'Class:lnkApplicationSolutionToBusinessProcess+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id' => '业务流程',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name' => '业务流程名称',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id' => '应用方案',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name' => '应用方案名称',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name+' => '',
));

//
// Class: lnkPersonToTeam
//

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

//
// Class: Group
//

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

//
// Class: lnkGroupToCI
//

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


//
// Application Menu
//

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
'Menu:ApplicationSolution' => '应用方案',
'Menu:ApplicationSolution+' => '所有应用方案',
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


// Add translation for Fieldsets

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

# itop-request-template的修改

新增功能
- 资源申请name唯一性检查
- 资源变更归属检查
- 服务器类工单
- 通过trigger + action-shell-exec实现自动指派，自动更新CI
- description字段改为textarea，可以填入html格式文本，将在portal工单申请页面作为提示信息显示

由于需要cmdbApi/actions/tasks脚本进行工单指派等流程处理，工单模板需要一些指定的字段。请按照以下说明设置。

模板字段说明

| 属性 | 说明 |
| ---- | ---- |
| relatedclass | 模板将要修改的类，如果为Server，将不进行唯一性检查（不进行唯一性检查的需要设置为Server）|
| type | new: 资源申请类工单, change: 资源变更类工单, server: 服务器类工单, incident:事件类工单 |

## 服务器类工单

### 账号申请
模板
```
Label,Name,relatedclass,type,Service->名称,Service->Provider Name,Service sub category->名称,Description
账号申请,账号申请,lnkUserToServer,server,服务器类,运维,服务器登录权限,
```

模板Fields
```
Code,Order,Mandatory,Input type,Values (OQL or CSV),Initial value,Label,Format,Template->Name
expiration,0,yes,Drop-down list,临时账号,永久账号,临时账号,过期时间,,账号申请
sudo,1,yes,Drop-down list,需要,不需要,不需要,Sudo权限,,账号申请
request_template_ip_textarea,2,no,Text area,,,IP列表,,账号申请
```

### 服务器管理员变更
模板
```
Label,Name,relatedclass,type,Service->名称,Service->Provider Name,Service sub category->名称,Description
服务器管理员变更,服务器管理员变更,lnkContactToFunctionalCI,server,服务器类,运维,服务器管理员变更,
```

模板Fields
```
Code,Order,Mandatory,Input type,Values (OQL or CSV),Initial value,Format,Label,Template->Name,Template->finalclass,Template->Label
type,0,yes,Drop-down list,新增,删除,新增,,变更类型,服务器管理员变更,Request template,服务器管理员变更
request_template_ip_textarea,1,no,Text area,,,,服务器列表,服务器管理员变更,Request template,服务器管理员变更
```

## 普通请求工单
工单模板
 - 允许tips开头的code，作为提示信息或辅助表单存在。另外，可以通过display_control.js来实现提示信息的显示，推荐后者
 - tips之外的code必须为模板relatedclass的有效属性名，action脚本根据code来创建资源对象
 - _list类属性目前只支持applicationsolution_list

## 事件管理工单
工单模板
 - 只有一个code: functionalcis_list(事件涉及的APP)。应在onchecktowrite函数中将其写入工单functionalcis_list，这样action就能直接通过functionalcis_list来指派工单（考虑到从rest api创建工单的情况，这样做能统一action行为）

## 工单提示信息
模板的description字段如果包含 "提示</label>" ，会将description字段输出到工单创建表单用户数据前面，可以作为提示信息，支持HTML，例如:

```
<div id="template_tips" class="portal_form_field form_field"><div class="form-group"><label class="control-label">提示</label><div class="help-block"></div><p>域名-集群对应规则表</p><table><tr><td>*.online.com</td><td>Online</td></tr></table></div></div>
```

### template-base补丁
如果需要使用description显示提示信息，建议打补丁 `template_base_3.0.4.patch`，将description字段改为AttributeText类型，支持更长的html代码（AttributeString类型255个字节不够用）

打补丁命令:

```
cd extensions/itop-request-template-modify/
patch -p1 < template_base_3.0.4.patch
 ```

## 附参考模板

RequestTemplate
```
Name,Label,finalclass,relatedclass,type,Service->名称,Service sub category->名称,Service->Provider Name
MongoDB申请模板,MongoDB申请模板,Request template,MongoDB,new,资源申请,MongoDB申请,运维
Mysql申请模板,Mysql申请模板,Request template,MySQL,new,资源申请,MySQL申请,运维
RDS MySQL申请,RDS MySQL申请,Request template,RDS,new,资源申请,RDS MySQL申请,运维
Redis申请,Redis申请,Request template,Redis,new,资源申请,Redis申请,运维
S3申请模板,S3申请模板,Request template,S3,new,资源申请,S3申请,运维
一般申请模板,一般申请模板,Request template,Server,new,资源申请,一般申请,运维
上线APP,上线APP,Request template,ApplicationSolution,new,资源申请,上线APP,运维
云盘申请模板,云盘申请模板,Request template,Yunpan,new,资源申请,云盘申请,运维
域名变更模板,域名变更模板,Request template,Domain,change,资源变更,域名变更,运维
域名申请模板,域名申请模板,Request template,Domain,new,资源申请,域名申请,运维
普通事件,普通事件,Request template,Server,incident,事件管理,普通事件,运维
服务器管理员变更,服务器管理员变更,Request template,lnkContactToFunctionalCI,server,服务器类,服务器管理员变更,运维
监控事件追踪,监控事件追踪,Request template,Server,incident,事件管理,监控事件追踪,运维
账号申请,账号申请,Request template,lnkUserToServer,server,服务器类,服务器登录权限,运维
```

Fields
```
Template->Name,Code,Order,Label,Input type,Values (OQL or CSV),Initial value,Format,Mandatory
MongoDB申请模板,applicationsolution_list,2,所属APP,Drop-down list,SELECT ApplicationSolution AS app JOIN lnkContactToApplicationSolution AS l ON l.applicationsolution_id=app.id WHERE l.contact_id=:current_contact_id,,,yes
MongoDB申请模板,location,1,地区,Drop-down list,China,CIBN,HongKong,UnitedStates,India,Russia,,,yes
MongoDB申请模板,name,0,名称,Text,,,^[a-z0-9-_]{3,20}$,yes
MongoDB申请模板,tips_cache,6,缓存类型,Drop-down list,cbase,redis,无缓存,redis,,yes
MongoDB申请模板,tips_capacity,5,数据容量及增长,Text,,当前500M每月新增50M,,yes
MongoDB申请模板,tips_qps,3,QPS预估,Text,,2000,[1-9][0-9]+,yes
MongoDB申请模板,tips_rw,4,读写比例预估,Text,,8|2,[0-9]|[0-9],yes
Mysql申请模板,applicationsolution_list,2,所属APP,Drop-down list,SELECT ApplicationSolution AS app JOIN lnkContactToApplicationSolution AS l ON l.applicationsolution_id=app.id WHERE l.contact_id=:current_contact_id,,,yes
Mysql申请模板,location,1,地区,Drop-down list,India,,,yes
Mysql申请模板,name,0,数据库名称,Text,,,^[a-z0-9-_]{3,20}$,yes
Mysql申请模板,tips_cache,6,缓存类型,Drop-down list,cbase,redis,无缓存,redis,,yes
Mysql申请模板,tips_capacity,5,数据容量及增长,Text,,当前500M每月新增50M,,yes
Mysql申请模板,tips_qps,3,QPS预估,Text,,2000,[1-9][0-9]+,yes
Mysql申请模板,tips_rw,4,读写比例预估,Text,,8|2,[0-9]|[0-9],yes
RDS MySQL申请,applicationsolution_list,2,所属APP,Drop-down list,SELECT ApplicationSolution AS app JOIN lnkContactToApplicationSolution AS l ON l.applicationsolution_id=app.id WHERE l.contact_id=:current_contact_id,,,yes
RDS MySQL申请,location,1,地区,Drop-down list,China,CIBN,HongKong,Russia,UnitedStates,,,yes
RDS MySQL申请,name,0,名称,Text,,,^[a-z0-9_]{3,16}$,yes
Redis申请,applicationsolution_list,1,所属APP,Drop-down list,SELECT ApplicationSolution AS app JOIN lnkContactToApplicationSolution AS l ON l.applicationsolution_id=app.id WHERE l.contact_id=:current_contact_id,,,yes
Redis申请,business,8,业务归属,Drop-down list,common,mobile,tv,,,yes
Redis申请,capacity,3,容量预估,Text,,2G,,yes
Redis申请,datatype,4,数据类型,Text,,指：string/list/hashes/set/sorted-sets,,yes
Redis申请,language,5,客户端程序语言,Drop-down list,PHP,Go,Python,Java,,,yes
Redis申请,location,2,地区,Drop-down list,China,CIBN,UnitedStates,HongKong,Russia,,,yes
Redis申请,name,0,名称,Text,,前缀规范: cn_appname, cibn_appname,us_appname,hk_appname,ru_appname,in_appname,^(cn|cibn|us|ru|hk|in)_[a-z1-9-_]+$,yes
Redis申请,persistence,7,是否持久化,Drop-down list,yes,no,,,yes
Redis申请,type,6,Redis类型,Drop-down list,cluster,cluster,,yes
S3申请模板,applicationsolution_list,2,所属APP,Drop-down list,SELECT ApplicationSolution AS app JOIN lnkContactToApplicationSolution AS l ON l.applicationsolution_id=app.id WHERE l.contact_id=:current_contact_id,,,no
S3申请模板,location,1,地区,Drop-down list,China,UnitedStates,HongKong,Russia,,,yes
S3申请模板,name,0,bucket名称,Text,,,^[a-z0-9_]{3,16}$,yes
S3申请模板,tips_delete,4,是否有删除操作,Drop-down list,有,没有,,,yes
S3申请模板,tips_size,3,bucket空间大小,Text,,,,yes
服务器管理员变更,request_template_ip_textarea,1,服务器列表,Text area,,,,no
服务器管理员变更,type,0,变更类型,Drop-down list,新增,删除,新增,,yes
监控事件追踪,functionalcis_list,0,关联的APP,Drop-down list,SELECT ApplicationSolution,,,yes
普通事件,functionalcis_list,0,关联的APP,Drop-down list,SELECT ApplicationSolution,,,yes
上线APP,business_criticity,5,业务级别,Drop-down list,high,medium,low,,,yes
上线APP,businessprocess_id,3,业务线,Drop-down list,SELECT BusinessProcess,,,yes
上线APP,business_type,6,业务类型,Drop-down list,tv,mobile,common,,,yes
上线APP,name,0,英文名称,Text,,,^[a-z][a-z0-9-_]+[a-z0-9]$,yes
上线APP,name_cn,1,中文名称,Text,,,,yes
上线APP,type,4,类型,Drop-down list,web,other,shadowlink,,,yes
域名变更模板,name,0,域名,Drop-down list,SELECT Domain AS d JOIN lnkApplicationSolutionToFunctionalCI AS l ON l.functionalci_id=d.id JOIN ApplicationSolution AS app ON l.applicationsolution_id=app.id JOIN lnkContactToApplicationSolution AS l2 ON l2.applicationsolution_id=app.id WHERE l2.contact_id=:current_contact_id,,,yes
域名变更模板,record_id,2,解析地址,Drop-down list,SELECT Cluster AS c WHERE c.type = 'Router' AND c.name NOT IN ('online-router','cibn-router','ru-router','ru-online-router','in-online-router'),,,yes
域名申请模板,applicationsolution_list,1,所属APP,Drop-down list,SELECT ApplicationSolution AS app JOIN lnkContactToApplicationSolution AS l ON l.applicationsolution_id=app.id WHERE l.contact_id=:current_contact_id,,,yes
域名申请模板,name,0,域名,Text,,,^([a-z0-9-]+\.){1,5}(com|cn|net|org)$,yes
域名申请模板,record_id,3,解析地址,Drop-down list,SELECT Cluster AS c WHERE c.type = 'Router' AND c.name NOT IN ('online-router','cibn-router','ru-router','ru-online-router','in-online-router','online-router-internal'),,,yes
云盘申请模板,applicationsolution_list,2,所属APP,Drop-down list,SELECT ApplicationSolution AS app JOIN lnkContactToApplicationSolution AS l ON l.applicationsolution_id=app.id WHERE l.contact_id=:current_contact_id,,,yes
云盘申请模板,location,1,地区,Drop-down list,China,UnitedStates,HongKong,Russia,,,yes
云盘申请模板,name,0,名称,Text,,,,yes
账号申请,expiration,0,过期时间,Drop-down list,临时账号,永久账号,临时账号,,yes
账号申请,request_template_ip_textarea,2,IP列表,Text area,,,,no
账号申请,sudo,1,Sudo权限,Drop-down list,需要,不需要,不需要,,yes
```
# itop-extensions
iTop扩展

## Features
- 自定义数据模型，唯一性校验
- 修改`request-template`，结合`action-shell-exec`实现工单自动指派，申请资源唯一性检查，资源自动入库
- 独立的中文翻译扩展
- [kubernetes](kubernetes) 工作流支持
- 自定义页面实现批量查询功能
- REST接口新增ext/get_related

## 版本
- v3.x 基于2.5.1
- v2.0 基于新版portal(2.3.3)
- v1.0 基于legency portal

## 扩展列表

| 名称 | 功能 |备注 |
| ---- | ---- | --- |
|action-shell-exec |支持脚本类型的action |Fork from [action-shell-exec](https://github.com/itop-itsm-ru/action-shell-exec)，修改支持自定义变量 |
|add-user-action-menu |右上角新增编辑用户资料按钮 | |
|api-client | iTop Rest/json api的客户端，方便在其他扩展里调用api | |
|attribute-custom |添加AttributeClassCustom类型 | |
|combodo-autoclose-ticket | 自动关闭工单 |iTop官方插件 |
|custom-mod |修改工单生命周期（拒绝->关闭, 指派->拒绝） | |
|custom-pages |批量查询页面，服务器账号管理页面 | |
|email-reply | 工单更新邮件通知 |iTop官方插件 |
|itop-object-copier |克隆/复制 对象 |iTop官方插件 |
|itop-request-template |请求模板 |iTop官方插件 |
|templates-base |请求模板-base |iTop官方插件 |
|itop-request-template-portal |请求模板-portal |iTop官方插件 |
|itop-request-template-modify |请求模板-修改，新增自动派单，资源申请自动录入CMDB，唯一性检查等功能 | |
|knowitop-trigger-on-update |触发器（对象更新时） |Fork from: [knowitop-trigger-on-update](https://github.com/vbkunin/knowitop-trigger-on-update) |
|le-alert-rule |定义报警规则 | |
|le-config-mgmt |自定义数据模型 | |
|portal-custom |自定义新版portal样式 | |
|precanned-replies |工单预定义回复 |iTop官方插件 |
|precanned-replies-pro |工单预定义回复 |iTop官方插件 |
|rest-ext |rest/json扩展，新增ext/get_related接口 |
|trigger-on-delete |触发器（对象删除时） | |
|zh-language |中文翻译 | |
|kubernetes |Kubernetes工作流 | |

## 补丁
本扩展需要打补丁，参见 [README](patches)

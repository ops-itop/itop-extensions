# itop-request-template的修改

新增功能
- 资源申请name唯一性检查
- 资源变更归属检查
- 服务器类工单
- 通过trigger + action-shell-exec实现自动指派，自动更新CI

## 服务器类工单

工单模板

| code | value | input type | 备注 |
| ---  | ----  | ---------- | ---- |
| type | add,delete| drop-down list | |
|request_template_ip_textarea | |textarea | code必须为request_template_ip_textarea |

## 普通请求工单
工单模板
 - 允许tips开头的code，作为提示信息存在。另外，可以通过display_control.js来实现提示信息的显示，推荐后者
 - tips之外的code必须为模板relatedclass的有效属性名，action脚本根据code来创建资源对象
 - _list类属性目前只支持applicationsolution_list

## 事件管理工单
工单模板
 - 只有一个code: functionalcis_list(事件涉及的APP)。应在onchecktowrite函数中将其写入工单functionalcis_list，这样action就能直接通过functionalcis_list来指派工单（考虑到从rest api创建工单的情况，这样做能统一action行为）

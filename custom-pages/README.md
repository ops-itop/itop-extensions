# server_accounts 文档

账号管理工单流程分为工单提交，创建账号，自动指派几个过程，其中，创建账号操作很费时，因此借助除非其和action-shell-exec插件把耗时操作放到后台执行。

动作调用的脚本在 [cmdbApi/actions](https://github.com/annProg/cmdbApi/tree/master/actions) 目录下

## 需要配置如下触发器及动作

| 触发器 | 过滤条件 | 动作 |
| ------ | -------- | ---- |
| 工单创建（对象创建时） |SELECT UserRequest WHERE title LIKE '服务器登录权限申请-Server IDs%'| SCRIPT_NAME=accountReuest_create.php ID=$this->ref$ |
| 工单重开（进入一个状态时）| 过滤条件同上, 状态为 new | 同上 |
| 工单完成（进入一个状态时）| 过滤条件同上, 状态为 resolved | SCRIPT_NAME=update_accounts.php ID=$this->ref$ |

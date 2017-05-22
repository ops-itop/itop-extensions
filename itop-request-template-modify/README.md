# itop-request-template的修改

add:资源申请name唯一性检查

## 服务器类工单

工单模板

| code | value | input type | 备注 |
| ---  | ----  | ---------- | ---- |
| type | add,delete| drop-down list | |
| tips | <div class="btn-group"><button class="btn btn-primary form_btn_transition" type="button" name="le_server_list" onclick="displayList()"><span class="glyphicon glyphicon-list"></span>    从列表勾选机器</button><button class="btn btn-info form_btn_transition" type="button" name="le_server_textarea" onclick="displayTextarea()"><span class="glyphicon glyphicon-text-height"></span>    直接输入IP地址</button></div>| read-only| |
|request_template_ip_textarea | |textarea | code必须为request_template_ip_textarea |

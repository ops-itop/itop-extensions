## kubernetes

面向Kubernetes最终用户

## 工作原理
iTop对象创建或删除时触发动作执行脚本，脚本中调用Kubernetes API应用iTop中的更新

触发器需要安装插件 annProg/itop-extensions/knowitop-trigger-on-update

自定义动作需要安装插件 annProg/itop-extensions/action-shell-exec

## 触发器配置

TriggerOnCreate
```
"描述","类别","目标类","过滤器"
"Kubernetes对象创建","触发器 (对象创建时)","Kubernetes","SELECT Kubernetes"
```

TriggerOnObjectUpdate
```
"描述","类别","目标类","Tracked attributes","过滤器"
"Kubernetes对象更新","Trigger on object update","Kubernetes","","SELECT Kubernetes"
```

两个触发器均链接以下动作:

```
"名称","类别","名称","描述","状态","Path","Parameters"
"Kubernetes","Script execution","Kubernetes","Kubernetes对象操作","生产中","/home/wwwroot/default/cmdb/cmdbApi/actions/demo.sh","SCRIPT_NAME=kubernetes.php\nID=$this->id$"
```

动作脚本参见 https://github.com/annProg/cmdbApi/tree/master/actions

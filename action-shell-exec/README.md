# action-shell-exec

## Action shell script execution for Combodo iTop

##### Описание на русском здесь: http://community.itop-itsm.ru/t/modul-zapuska-shell-skriptov/303.

Can be used in linux.

1. Install like any other extension. 
   - Copy the action-shell-exec to itop/extensions folder and go to http://localhost/setup/. 
   - Select "Upgrade an existing iTop instance" and follow the wizard.
  
2. Create a new action and link it with triggers. See example below how to pass parameters to the script.
   **Using user data in a Shell script potentially not secure!**

  ![action-shell-script-1.png](images/action-shell-script-1.png)
  
3. The script output will be written to the notification log (see "Notifications" tab in the target object).

  ![action-shell-script-2.png](images/action-shell-script-2.png)

4. Use "Being tested" status in the action and check the notification log to find errors and the command that will be executed.

  ![action-shell-script-3.png](images/action-shell-script-3.png)
  ![action-shell-script-4.png](images/action-shell-script-4.png)

### Links
- [iTop ITSM & CMDB по-русски](http://community.itop-itsm.ru)
- [Combodo iTop](http://www.combodo.com/itop)

## demo
demo script(shell)

```
#!/bin/bash
d=`cd $(dirname $0);pwd`
cd $d
ds=`date +%Y%m%d-%H%M%S`

echo "$ds  $THIS_NAME - $THIS_HOSTNAME"
echo "$ds  $THIS_NAME - $THIS_HOSTNAME" >> demo.log
```

demo script(php). 需要读取环境变量

```
#!/usr/bin/php
<?
$THIS_HOSTNAME = getenv("THIS_HOSTNAME");
$THIS_NAME = getenv("THIS_NAME");
echo "$THIS_HOSTNAME $THIS_NAME";
?>
```

### 异步任务

假设脚本需要执行很长时间

```
#!/usr/bin/php
<?
$THIS_HOSTNAME = getenv("THIS_HOSTNAME");
$THIS_NAME = getenv("THIS_NAME");
$log = "php.log";
sleep(15);
file_put_contents($log, "$THIS_HOSTNAME $THIS_NAME\n", FILE_APPEND);
?>
```

如上代码，实测此时itop前端要等待15至16秒之间，因此考虑用shell脚本包裹一下，实现后台异步执行真正的任务

```
#!/bin/bash
d=`cd $(dirname $0);pwd`
cd $d
ds=`date +%Y%m%d-%H%M%S`

echo "$ds  $THIS_NAME - $THIS_HOSTNAME"
echo "$ds  $THIS_NAME - $THIS_HOSTNAME" >> demo.log
#./demo.php &   # 这种做法无效，需要下一行那样(启动子脚本，必须要使用&和指定输出(只好是定向到/dev/null)
./demo.php &>/dev/null  &
```

### 自定义变量
对插件做了修改，支持自定义变量，例如定义 `SCRIPT_NAME=demo.php`，然后在shell脚本中调用 `./$SCRIPT_NAME &>/dev/null &`，这样做可以避免为每一个异步php脚本重复写shell包裹脚本.

注意，变量定义时不要带引号，插件会自动加上引号。


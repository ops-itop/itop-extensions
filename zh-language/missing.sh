#!/bin/bash

############################
# Usage:
# File Name: missing.sh
# Author: annhe  
# Mail: i@annhe.net
# Created Time: 2018-12-03 15:02:57
############################

echo "<?php"
echo "Dict::Add('ZH CN', 'Chinese', '简体中文', array("

for id in `grep "=>" ../../env-production/dictionaries/en-us.dict.php  |awk '{print $1}'`;do grep $id ../../env-production/dictionaries/zh-cn.dict.php &>/dev/null || grep $id ../../env-production/dictionaries/en-us.dict.php;done

echo "));"

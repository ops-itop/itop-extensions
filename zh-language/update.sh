#!/bin/bash

############################
# Usage:
# File Name: update.sh
# Author: annhe  
# Mail: i@annhe.net
# Created Time: 2016-05-18 15:11:05
############################

cat >zh.dict.zh-language.php <<EOF
<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http:opensource.org/licenses/AGPL-3.0
 */

\$basedir="../extensions/zh-language/";
\$dict="../core/dict.class.inc.php";
//require_once(\$dict);
//include \$basedir."include/zh.dict.itop-request-mgmt.php";
//include \$basedir."include/zh.dict.itop-backup.php";
//include \$basedir."include/zh.dict.authent-local.php";
//include \$basedir."include/zh.dict.itop-service-mgmt.php";
//include \$basedir."include/zh.dict.itop-problem-mgmt.php";
//include \$basedir."include/zh.dict.itop-attachments.php";
//include \$basedir."include/zh.dict.authent-ldap.php";
//include \$basedir."include/zh.dict.itop-service-mgmt-provider.php";
//include \$basedir."include/zh.dictionary.itop.core.php";
EOF

cat include/*.php |sed '/<?php/d' |sed '/^\/\//d' >> zh.dict.zh-language.php

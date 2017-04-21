<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2016 Vladimir Kunin <v.b.kunin@gmail.com>
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('RU RU', 'Russian', 'Russian', array(

    'Class:ActionShellExec' => 'Запуск скрипта',
    'Class:ActionShellExec+' => 'Действие запуска shell-скрипта',
    'Class:ActionShellExec/Attribute:script_path' => 'Путь',
    'Class:ActionShellExec/Attribute:script_path+' => 'Путь до файла скрипта',
    'Class:ActionShellExec/Attribute:script_path?' => 'Проверьте наличие прав на запуск файла!',
    'Class:ActionShellExec/Attribute:params' => 'Параметры',
    'Class:ActionShellExec/Attribute:params+' => 'Передаваемые параметры, один на строку',
    'Class:ActionShellExec/Attribute:params?' => "Примеры (как задать => как забрать в скрипте):
    \$this->name\$ => \$THIS_NAME
    \$this->caller_id->org_id\$ => \$THIS_CALLER_ID_ORG_ID
    START = \$this->start_date\$ => \$START
    DESC = \$this->html(description)\$ => \$DESC
    YOUR_ENV_VAR = \$this->attcode\$ => \$YOUR_ENV_VAR",

    'Class:EventNotificationShellExec' => 'Уведомление о запуске скрипта',
    'Class:EventNotificationShellExec+' => 'Уведомление о запуске скрипта',
    'Class:EventNotificationShellExec/Attribute:log' => 'Журнал',
    'Class:EventNotificationShellExec/Attribute:log+' => 'Журнал',
));



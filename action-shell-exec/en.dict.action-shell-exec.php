<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2016 Vladimir Kunin <v.b.kunin@gmail.com>
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(

    'Class:ActionShellExec' => 'Script execution',
    'Class:ActionShellExec+' => 'Action shell-script execution',
    'Class:ActionShellExec/Attribute:script_path' => 'Path',
    'Class:ActionShellExec/Attribute:script_path+' => 'Path to the script',
    'Class:ActionShellExec/Attribute:script_path?' => 'Check the permissions on the script can be executed!!',
    'Class:ActionShellExec/Attribute:params' => 'Parameters',
    'Class:ActionShellExec/Attribute:params+' => 'Passed parameters, one per line',
    'Class:ActionShellExec/Attribute:params?' => "Examples (how to set => how to pick up in the script):
    \$this->name\$ => \$THIS_NAME
    \$this->caller_id->org_id\$ => \$THIS_CALLER_ID_ORG_ID
    START = \$this->start_date\$ => \$START
    DESC = \$this->html(description)\$ => \$DESC
    YOUR_ENV_VAR = \$this->attcode\$ => \$YOUR_ENV_VAR",

    'Class:EventNotificationShellExec' => 'Notification of script execution',
    'Class:EventNotificationShellExec+' => 'Notification of script execution',
    'Class:EventNotificationShellExec/Attribute:log' => 'Log',
    'Class:EventNotificationShellExec/Attribute:log+' => 'Log',
));


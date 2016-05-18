<?php
/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2013 Combodo
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(

	'bkp-backup-running' => '一个备任务正在运行. Please wait...',
	'bkp-restore-running' => '一个恢复任务正在运行. Please wait...',

	'Menu:BackupStatus' => '定期备份',
	'bkp-status-title' => '定期备份',
	'bkp-status-checks' => '检查与设置',
	'bkp-mysqldump-ok' => '已确认mysqldump存在: %1$s',
	'bkp-mysqldump-notfound' => 'mysqldump没有找到: %1$s - 请确认它已经安装在正确的路径上,或者编辑"mysql_bindir"选项来调整mysqldump的位置.',
	'bkp-mysqldump-issue' => 'mysqldump无法执行(retcode=%1$d): 请确认它已经安装在正确的路径上,或者编辑"mysql_bindir"选项来调整mysqldump的位置',
	'bkp-missing-dir' => '目标目录%1$s没有找到',
	'bkp-free-disk-space' => '备份目标路径%2$s <b>空闲空间为 %1$s</b>',
	'bkp-dir-not-writeable' => '%1$s不可写',
	'bkp-wrong-format-spec' => '当前文件名(%1$s)格式的规格是错误的.默认的规范格式应该是: %2$s',
	'bkp-name-sample' => '备份文件将以数据库名,日期和时间进行命名.例如: %1$s',
	'bkp-week-days' => '在 <b>每个 %1$s 的 %2$s</b> 时段将进行备份操作',
	'bkp-retention' => '最多保留 <b>%1$d份</b> 备份文件在备份目录里.',
	'bkp-next-to-delete' => '当下一次备份时将被删除 (设置文件档为 "retention_count")',
	'bkp-table-file' => '文件', 
	'bkp-table-file+' => '只有扩展名是.zip的文件才被认为是备份文件',
	'bkp-table-size' => '大小',
	'bkp-table-size+' => '',
	'bkp-table-actions' => '操作',
	'bkp-table-actions+' => '',
	'bkp-status-backups-auto' => '计划备份',
	'bkp-status-backups-manual' => '手动备份',
	'bkp-status-backups-none' => '没有任何备份',
	'bkp-next-backup' => '下次备份将发生在<b>%1$s</b> (%2$s) 的 %3$s',
	'bkp-button-backup-now' => '立即备份!',
	'bkp-button-restore-now' => '恢复!',
	'bkp-confirm-backup' => '请确认您现在是要进行备份.',
	'bkp-confirm-restore' => '请确认您要还原的备份文件 %1$s.',
	'bkp-wait-backup' => '请等待备份完成...',
	'bkp-wait-restore' => '请等待恢复完成...',
	'bkp-success-restore' => '恢复成功完成.',
));

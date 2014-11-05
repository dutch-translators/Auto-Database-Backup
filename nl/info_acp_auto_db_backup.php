<?php
/**
*
* Auto Database Backup
*
* @copyright (c) 2014 Lukasz Kaczynski
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_AUTO_DB_BACKUP'					=> 'Auto Database Backup',
	'ACP_AUTO_DB_BACKUP_SETTINGS'			=> 'Auto backup instellingen',
	'LOG_AUTO_DB_BACKUP'					=> '<strong>Automatische database backup</strong>',
	'LOG_AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> '<strong>Auto Database Backup instellingen gewijzigd</strong>',
));

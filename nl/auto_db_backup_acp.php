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
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Auto Database Backup instellingen',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Hier kan je de standaard instellingen van Auto Database Backup beheren. Afhankelijk van je serverconfiguratie kan je de database comprimeren.<br />Alle backups worden opgeslagen in de <samp>/store/</samp> map. Je kan een backup terugzetten via het <em>Herstellen</em> paneel.',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Auto Database Backup Instellingen gewijzigd.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Schakel Auto Database Backup in',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'			=> 'Schakel automatische backups in of uit',
	'AUTO_DB_BACKUP_FREQ'					=> 'Backup interval',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Stel een backup interval in. De waarde moet hoger zijn dan 0.',
	'AUTO_DB_BACKUP_FREQ_ERROR'				=> 'Ingevoerde waarde van <em>Backup interval</em> is incorrect. De waarde moet hoger zijn dan <strong>0</strong>.',
	'AUTO_DB_BACKUP_COPIES'					=> 'Opgeslagen backups',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'Hoeveel backups worden er opgeslagen op de server. 0 betekent ongelimiteerd, dan worden alle backups opgeslagen op de server.',
	'AUTO_DB_BACKUP_COPIES_ERROR'			=> 'Ingevoerde waarde van <em>Opgeslagen backups</em> is incorrect. Waarde moet hoger zijn of gelijk aan <strong>0</strong>.',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'Bestandstype',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Kies het bestandstype voor backups.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Optimaliseer database voor backup',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Optimaliseer alleen niet geoptimaliseerde tabellen voor de backup.',
	'AUTO_DB_BACKUP_TIME'					=> 'Volgende backup tijd',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Kies wanneer de volgende backup wordt gemaakt.<br /><strong>Opmerking</strong>: je moet een tijd in de toekomst opgeven.',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> 'De <em>volgende backup tijd</em> is incorrect. Deze tijd moet in de toekomst liggen.',

	'HOUR'		=> 'Uur',
	'MINUTE'	=> 'Minuut',
));

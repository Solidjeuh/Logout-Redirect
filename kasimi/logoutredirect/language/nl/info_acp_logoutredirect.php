<?php

/**
 *
 * @package phpBB Extension - Logout Redirect
 * @copyright (c) 2016 kasimi
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
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
	'LOGOUTREDIRECT_TITLE'				=> 'Logout Omleiding',
	'LOGOUTREDIRECT_CONFIG'				=> 'Configuratie',
	'LOGOUTREDIRECT_CONFIG_UPDATED'		=> '<strong>Logout Omleiding Extensie</strong><br />» Configuratie geupdate',
	'LOGOUTREDIRECT_ENABLED'			=> 'Gebruikers omleiden na afmelden',
	'LOGOUTREDIRECT_URL'				=> 'Omleiding URL',
));

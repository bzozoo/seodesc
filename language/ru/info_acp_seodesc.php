<?php
/**
*
* Meta Description [Russian]
*
* @package info_acp_seodesc.php
* @copyright (c) 2015 Anvar http://bb3.mobi
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_META_DESCRIPTION'			=> 'Meta описание форума',
	'ACP_META_DESCRIPTION_EXPLAIN'	=> 'Если не задано, будут включены в описание названия форумов.',
));

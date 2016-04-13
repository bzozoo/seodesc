<?php
/**
*
* Meta Description [English]
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
	'ACP_META_DESCRIPTION'			=> 'Meta Description Forum',
	'ACP_META_DESCRIPTION_EXPLAIN'	=> 'If not specified, will be included in the description of the name of the forum.',
));

<?php
/**
* @package phpBB3.1 Seo Meta Description
* @copyright (c) 2015 Anvar (http://bb3.mobi)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace bb3mobi\seodesc\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class acp_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.acp_board_config_edit_add'	=> 'acp_board_config',
		);
	}

	public function acp_board_config($event)
	{
		if ($event['mode'] == 'settings')
		{
			$display_vars = $event['display_vars'];
			$new_config['meta_description'] = array(
				'lang' => 'ACP_META_DESCRIPTION',
				'validate' => 'string',
				'type' => 'text:40:255',
				'explain' => true
			);
			$display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $new_config, array('after' =>'site_desc'));
			$event['display_vars'] = array('title' => $display_vars['title'], 'vars' => $display_vars['vars']);
		}
	}
}

<?php
/**
*
* @package Seo Meta Description
* @copyright (c) 2015 Anvar http://bb3.mobi
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace bb3mobi\seodesc\migrations;

class v_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['seodesc_version']) && version_compare($this->config['seodesc_version'], '1.0.0', '>=');
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('meta_description', 'SEO Description phpBB')),
			// Current version
			array('config.add', array('seodesc_version', '1.0.0')),
		);
	}
}

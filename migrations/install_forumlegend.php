<?php
/**
 *
 * Forum Legend. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, spaceace, https://www.livemembersonly.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace spaceace\forumlegend\migrations;

class install_forumlegend extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['forumlegend_icon_1']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('forumlegend_enable_disable', 1)),
			array('config.add', array('forumlegend_icon_1', 1)),
			array('config.add', array('forumlegend_icon_2', 1)),
			array('config.add', array('forumlegend_icon_3', 0)),
			array('config.add', array('forumlegend_icon_4', 1)),
			array('config.add', array('forumlegend_icon_5', 0)),
			array('config.add', array('forumlegend_icon_6', 0)),
			array('config.add', array('forumlegend_icon_7', 0)),
			array('config.add', array('forumlegend_right_width', 50)),
			array('config.add', array('forumlegend_left_width', 50)),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_FORUMLEGEND_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_FORUMLEGEND_TITLE',
				array(
					'module_basename'	=> '\spaceace\forumlegend\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}

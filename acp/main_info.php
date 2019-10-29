<?php
/**
 *
 * Forum Legend. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, spaceace, https://www.livemembersonly.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace spaceace\forumlegend\acp;

/**
 * Forum Legend ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\spaceace\forumlegend\acp\main_module',
			'title'		=> 'ACP_FORUMLEGEND_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_FORUMLEGEND_SETTINGS',
					'auth'	=> 'ext_spaceace/forumlegend && acl_a_board',
					'cat'	=> array('ACP_FORUMLEGEND_TITLE')
				),
			),
		);
	}
}

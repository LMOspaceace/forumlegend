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
 * Forum Legend ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('spaceace/forumlegend', 'common');
		$this->tpl_name = 'acp_forumlegend_body';
		$this->page_title = $user->lang('ACP_FORUMLEGEND_TITLE');
		add_form_key('spaceace/forumlegend');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('spaceace/forumlegend'))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}

			$config->set('forumlegend_enable_disable', $request->variable('forumlegend_enable_disable', 0));
			$config->set('forumlegend_icon_1', $request->variable('forumlegend_icon_1', 0));
			$config->set('forumlegend_icon_2', $request->variable('forumlegend_icon_2', 0));
			$config->set('forumlegend_icon_3', $request->variable('forumlegend_icon_3', 0));
			$config->set('forumlegend_icon_4', $request->variable('forumlegend_icon_4', 0));
			$config->set('forumlegend_icon_5', $request->variable('forumlegend_icon_5', 0));
			$config->set('forumlegend_icon_6', $request->variable('forumlegend_icon_6', 0));
			$config->set('forumlegend_icon_7', $request->variable('forumlegend_icon_7', 0));
			$config->set('forumlegend_right_width', $request->variable('forumlegend_right_width', 50));
			$config->set('forumlegend_left_width', $request->variable('forumlegend_left_width', 50));

			trigger_error($user->lang('ACP_FORUMLEGEND_SETTINGS_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'FORUMLEGEND_ENABLE_DISABLE'	=> $config['forumlegend_enable_disable'],
			'FORUMLEGEND_ICON_1'			=> $config['forumlegend_icon_1'],
			'FORUMLEGEND_ICON_2'			=> $config['forumlegend_icon_2'],
			'FORUMLEGEND_ICON_3'			=> $config['forumlegend_icon_3'],
			'FORUMLEGEND_ICON_4'			=> $config['forumlegend_icon_4'],
			'FORUMLEGEND_ICON_5'			=> $config['forumlegend_icon_5'],
			'FORUMLEGEND_ICON_6'			=> $config['forumlegend_icon_6'],
			'FORUMLEGEND_ICON_7'			=> $config['forumlegend_icon_7'],
			'FORUMLEGEND_RIGHT_WIDTH'		=> $config['forumlegend_right_width'],
			'FORUMLEGEND_LEFT_WIDTH'		=> $config['forumlegend_left_width'],
		));
	}
}

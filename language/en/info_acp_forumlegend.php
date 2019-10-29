<?php
/**
 *
 * Forum Legend. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, spaceace, https://www.livemembersonly.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'ACP_FORUMLEGEND_TITLE'				=> 'Forum Legend',
	'ACP_FORUMLEGEND_SETTINGS'			=> 'Settings',
	'ACP_FORUMLEGEND_SETTINGS_SAVED'	=> 'Settings have been saved successfully!',
	'ACP_FORUMLEGEND_ENABLE_DISABLE'	=> 'Enable Forum Legend',
	'ACP_FORUMLEGEND_ICON_SELECT'		=> 'Select the icon(s) to display on the forum index page.',
	'ACP_FORUMLEGEND_ICON_1'			=> 'Unread posts',
	'ACP_FORUMLEGEND_ICON_2'			=> 'No unread posts',
	'ACP_FORUMLEGEND_ICON_3'			=> 'Unread posts [ Locked ]',
	'ACP_FORUMLEGEND_ICON_4'			=> 'No unread posts [ Locked ]',
	'ACP_FORUMLEGEND_ICON_5'			=> 'Forum link',
	'ACP_FORUMLEGEND_ICON_6'			=> 'No unread posts Subforum',
	'ACP_FORUMLEGEND_ICON_7'			=> 'Unread posts Subforum',
	'ACP_FORUMLEGEND_WIDTH_SETTING'		=> 'These are for adjusting the width of the legend in the viewforum page if the legend does not align properly which is normally due to languages.',
	'ACP_FORUMLEGEND_LEFT_WIDTH'		=> 'Left width % of legend on viewforum page',
	'ACP_FORUMLEGEND_RIGHT_WIDTH'		=> 'Right width % of legend on viewforum page',
));

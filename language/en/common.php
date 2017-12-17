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
	'NO_UNREAD_POSTS_SUBFORUM'			=> 'No unread posts Subforum',
	'UNREAD_POSTS_SUBFORUM'				=> 'Unread posts Subforum',
));

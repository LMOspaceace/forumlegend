<?php
/**
 *
 * Forum Legend. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, spaceace, https://www.livemembersonly.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace spaceace\forumlegend\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use \phpbb\config\config;
use \phpbb\template\template;
use \phpbb\user;

/**
 * Forum Legend Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/**
	* Constructor for listener
	*
	* @param \phpbb\config\config			$config
	* @param \phpbb\template\template		$template
	* @param \phpbb\user					$user
	*
	* @access public
	*/
	public function __construct(config $config, template $template, user $user)
	{
		$this->config		= $config;
		$this->template		= $template;
		$this->user			= $user;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'		=> 'load_language_on_setup',
			'core.page_header'		=> 'forumlegend_index_template_vars',
		);
	}

	/**
	* Load common user language files during user setup
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function load_language_on_setup($event)
	{
		$lang_set_ext	= $event['lang_set_ext'];
		$lang_set_ext[]	= array(
			'ext_name' => 'spaceace/forumlegend',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	* Update the template variables
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function forumlegend_index_template_vars($event)
	{
		$this->template->assign_vars(
			array(
				'FORUMLEGEND_ENABLED'			=> ($this->config['forumlegend_enable_disable']) ? true : false,
				'FORUMLEGEND_ICON_1'			=> ($this->config['forumlegend_icon_1']) ? true : false,
				'FORUMLEGEND_ICON_2'			=> ($this->config['forumlegend_icon_2']) ? true : false,
				'FORUMLEGEND_ICON_3'			=> ($this->config['forumlegend_icon_3']) ? true : false,
				'FORUMLEGEND_ICON_4'			=> ($this->config['forumlegend_icon_4']) ? true : false,
				'FORUMLEGEND_ICON_5'			=> ($this->config['forumlegend_icon_5']) ? true : false,
				'FORUMLEGEND_ICON_6'			=> ($this->config['forumlegend_icon_6']) ? true : false,
				'FORUMLEGEND_ICON_7'			=> ($this->config['forumlegend_icon_7']) ? true : false,
				'FORUM_IMG'						=> $this->user->img('forum_read', 'NO_UNREAD_POSTS'),
				'FORUM_UNREAD_IMG'				=> $this->user->img('forum_unread', 'UNREAD_POSTS'),
				'FORUM_LOCKED_IMG'				=> $this->user->img('forum_read_locked', 'NO_UNREAD_POSTS_LOCKED'),
				'FORUM_UNREAD_LOCKED_IMG'		=> $this->user->img('forum_unread_locked', 'UNREAD_POSTS_LOCKED'),
				'FORUM_LINK_IMG'				=> $this->user->img('forum_link', 'FORUM_LINK'),
				'FORUM_READ_SUBFORUM_IMG'		=> $this->user->img('forum_read_subforum', 'NO_UNREAD_POSTS_SUBFORUM'),
				'FORUM_UNREAD_SUBFORUM_IMG'		=> $this->user->img('forum_unread_subforum', 'UNREAD_POSTS_SUBFORUM'),
				'FORUMLEGEND_RIGHT_WIDTH'		=> $this->config['forumlegend_right_width'],
				'FORUMLEGEND_LEFT_WIDTH'		=> $this->config['forumlegend_left_width'],
			)
		);
	}
}

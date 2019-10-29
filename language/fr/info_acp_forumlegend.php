<?php
/**
 *
 * Forum Legend. An extension for the phpBB Forum Software package.
 * French translation by stone23 & Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017, spaceace <https://www.livemembersonly.com>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_FORUMLEGEND_TITLE'				=> 'Légende du forum',
	'ACP_FORUMLEGEND_SETTINGS'			=> 'Paramètres',
	'ACP_FORUMLEGEND_SETTINGS_SAVED'	=> 'Les paramètres ont été sauvegardés avec succès !',
	'ACP_FORUMLEGEND_ENABLE_DISABLE'	=> 'Activer l’affichage de la légende du forum',
	'ACP_FORUMLEGEND_ICON_SELECT'		=> 'Sélectionner « Oui » ci-dessous pour afficher les icônes sur la page de l’index du forum.',
	'ACP_FORUMLEGEND_ICON_1'			=> 'Message(s) non lu(s)',
	'ACP_FORUMLEGEND_ICON_2'			=> 'Aucun message non lu',
	'ACP_FORUMLEGEND_ICON_3'			=> 'Message(s) non lu(s) [ verrouillé(s) ]',
	'ACP_FORUMLEGEND_ICON_4'			=> 'Aucun message non lu [ verrouillé ]',
	'ACP_FORUMLEGEND_ICON_5'			=> 'Forum(s) lien(s)',
	'ACP_FORUMLEGEND_ICON_6'			=> 'Aucun message non lu [ forum & sous-forum(s) ]',
	'ACP_FORUMLEGEND_ICON_7'			=> 'Message(s) non lu(s) [ forum / sous-forum(s) ]',
	'ACP_FORUMLEGEND_WIDTH_SETTING'		=> 'Paramètres permettant d’ajuster la largeur de la légende sur la page de la vue des forums lorsque la légende n’est pas alignée correctement suivant la langue utilisée.',
	'ACP_FORUMLEGEND_LEFT_WIDTH'		=> 'Largeur gauche % de la légende sur la page de la vue des forums',
	'ACP_FORUMLEGEND_RIGHT_WIDTH'		=> 'Largeur droite % de la légende sur la page de la vue des forums',
));

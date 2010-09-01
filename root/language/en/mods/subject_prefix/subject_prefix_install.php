<?php
/**
 *
 * subject_prefix_install [English]
 *
 * @package language
 * @copyright (c) 2010 Erik Frèrejean ( erikfrerejean@phpbb.com ) http://www.erikfrerejean.nl
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'INSTALL_SUBJECTPREFIX'				=> 'Install Subject Prefix',
	'INSTALL_SUBJECTPREFIX_CONFIRM'		=> 'Do you really want to install Subject Prefix',
	'UPDATE_SUBJECTPREFIX'				=> 'Update Subject Prefix',
	'UPDATE_SUBJECTPREFIX_CONFIRM'		=> 'Do you really want to update Subject Prefix',
	'UNINSTALL_SUBJECTPREFIX'			=> 'Remove Subject Prefix',
	'UNINSTALL_SUBJECTPREFIX_CONFIRM'	=> 'Do you really want to remove Subject Prefix',
));
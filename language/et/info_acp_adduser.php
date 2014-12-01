<?php
/**
* 
* @copyright (c) 201 Rich McGirr; Estonian translation by www.phpbbeesti.com 11/2014
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
/**
* DO NOT CHANGE
*/
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
$lang = array_merge($lang, array(
	// ACP Module => AJP Moodul
	'ACP_ADD_USER'				=> 'Lisa uus liige AJP\'st',
	// ACP Logs => AJP Logid
	'LOG_USER_ADDED'			=> '<strong>Uus kasutajakonto on loodud</strong><br />» %s',
));

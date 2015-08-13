<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	// ACP Module
	'ACP_ADD_USER'				=> 'Benutzer anlegen',
	'DIR_NOT_EXIST'				=> 'Die Sprachauswahl %s funktioniert nicht da die erforderlichen Dateien fehlen. Bitte übersetzen und ins Verzeichnis %s hochladen um die Sprache zu benutzen.',
	'ACP_ACCOUNT_ADDED'			=> 'Der Benutzer wurde angelegt. Der Benutzer kann sich nun mit den von dir eingegebenen Daten welche er per Mail erhalten hat einloggen.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Der Benutzer wurde angelegt. Das Forum benötigt jedoch eine E-Mailbestätigung.<br />Ein Aktivierungscode wurde hierzu an die von dir angegebene Benutzeradresse geschickt.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Der Benutzer wurde angelegt. Das Forum benötigt jedoch eine Adminfreigabe.<br />Hierzu wurde eine E-mail an die Admins geschickt und der Benutzer wird informiert sobald die Aktivierung erfolgt ist',
	'ACP_ADMIN_ACTIVATE'		=> 'An email will be dispatched to an Administrator for account activation, alternatively you may check the activate account box below to activate the account instantly once created. The user will receive an email containing account login details.',
	'ACP_EMAIL_ACTIVATE'		=> 'Once the account has been created, the user will receive an email containing an activation link to activate the account.',
	'ACP_INSTANT_ACTIVATE'		=> 'The Account will be activated instantly. The user will receive an email with account login details.',

	'ADD_USER'					=> 'Benutzer Anlegen',
	'ADD_USER_EXPLAIN'			=> 'Create a new user account. If your activation settings are to Admin Activativation only, you will have the option to activate the user instantly.',
	'MOD_VERSION'				=> 'Version %s', 
	'ADMIN_ACTIVATE'			=> 'Activate user account',
	'CONFIRM_PASSWORD'			=> 'Confirm password',
	'EDIT_USER_GROUPS'			=> '%sClick here to edit the user groups for this user%s',
	'GROUP_ADD'					=> 'Making a selection here will add the user to the group selected as well as to the registered users group.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'Checking this box will set the group selected above to be the users default.',
	'CONTINUE_EDIT_USER'		=> '%1$sHier klicken um %2$s’s profil%3$s zu ändern', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD_EXPLAIN'			=> 'Wenn hier keine Eingabe erfolgt wird automatisch ein Passwort generiert.',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>Neuer Benutzer angelegt</strong><br />» %s',
));

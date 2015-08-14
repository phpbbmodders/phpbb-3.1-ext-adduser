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
	'ACP_ADMIN_ACTIVATE'		=> 'Die Administratoren werden per E-Mail informiert, dass ein Benutzer freigeschaltet werden möchte, alternativ kannst du durch klicken der Checkbox die Aktivierung direkt vornehmen. Der Benutzer erhält eine E-Mail mit den Zugangsdaten.',
	'ACP_EMAIL_ACTIVATE'		=> 'Sobald der Benutzer angelegt ist, erhält der neue Benutzer eine E-Mail mit dem Aktivierungslink.',
	'ACP_INSTANT_ACTIVATE'		=> 'Der Benutzer wird unmittelbar freigeschaltet. Eine E-Mail mit den Zugangsdaten wird ihm an die angegebene E-Mailadresse zugesandt .',

	'ADD_USER'					=> 'Benutzer Anlegen',
	'ADD_USER_EXPLAIN'			=> 'Einen neuen Benutzer anlegen. Sollte eine Freigabe eines Admins erforderlich sein, so hast du die Möglichkeit dies während der Erstellung zu tun.',
	'MOD_VERSION'				=> 'Version %s', 
	'ADMIN_ACTIVATE'			=> 'Benutzer aktivieren',
	'CONFIRM_PASSWORD'			=> 'Passwort bestätigen',
	'EDIT_USER_GROUPS'			=> '%sHier klicken um die Gruppenzugehörigkeit für diesen Benutzer%s festzulegen',
	'GROUP_ADD'					=> 'Triffst du hier eine Auswahl, wird der Benutzer dieser Gruppe ebenso wie der Gruppe "Registrierter Benutzer" hinzugefügt.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'Checking this box will set the group selected above to be the users default.',
	'CONTINUE_EDIT_USER'		=> '%1$sHier klicken um %2$s’s profil%3$s zu ändern', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD_EXPLAIN'			=> 'Wenn hier keine Eingabe erfolgt wird automatisch ein Passwort generiert.',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>Neuer Benutzer angelegt</strong><br />» %s',
));
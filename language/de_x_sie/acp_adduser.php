<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 * @translated into German by Samyonair (http://www.wowfriends.de)
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
	'ACP_ACCOUNT_ADDED'			=> 'Der Benutzer wurde angelegt. Der Benutzer kann sich nun mit den Zugangsdaten, die an die von Ihnen für Ihn angegebene E-Mailadresse gesendet wurden, einloggen.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Der Benutzer wurde angelegt. Die Foreneinstellungen erfordern, dass der Account durch den Benutzer aktiviert wird.<br /> Es wurde ein Aktivierungscode an die von Ihnen für Ihren Benutzer angegebene E-Mailadresse gesendet.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Der Benutzer wurde angelegt. Die Foreneinstellungen erfordern, dass der Account durch einen Administrator aktiviert wird.<br />Eine E-Mail wurde an die Administratoren und den Benutzer gesandt und der Benutzer wird darüber informiert wenn der Account aktiviert wurde.',
	'ACP_ADD_USER'				=> 'Benutzer hinzuf&uuml;gen via ACP',
	'ACP_ADMIN_ACTIVATE'		=> 'Es wird eine E-Mail an die Administratoren verschickt für die Freischaltung, alternativ k&ouml;nnen Sie den Benutzer auch Freischalten, in dem Sie das K&auml;stchen "Benutzer sofort aktivieren" anklicken, der Benutzer wird dann eine E-Mail mit den Zugangsdaten erhalten.',
	'ACP_EMAIL_ACTIVATE'		=> 'Sobald der Benutzer von Ihnen erstellt wurde wird eine E-Mail an den Benutzer versandt mit dem Aktivierungscode, mit dem sich der Benutzer Freischalten kann.',
	'ACP_INSTANT_ACTIVATE'		=> 'Der Benutzer wird sofort aktiviert, er erh&auml;lt eine E-Mail mit den Zugangsdaten.',

	'ADD_USER'					=> 'Benutzer hinzuf&uuml;gen',
	'ADD_USER_EXPLAIN'			=> 'Einen neuen Benutzer anlegen. Wenn Ihre %Foreneinstellungen%s es erfordern, dass Benutzer durch einen Administrator aktiviert werden, werden Sie die Möglichkeit haben dies während des Anlegens zu tun.',
	'MOD_VERSION'				=> 'Version %s',
	'ADMIN_ACTIVATE'			=> 'Benutzer sofort aktivieren',
	'CONFIRM_PASSWORD'			=> 'Passwort best&aumltigen;',
	'EDIT_USER_GROUPS'			=> '%sHier Klicken um die Benutzergruppe des Benutzers festzulegen%s',
	'GROUP_ADD'					=> 'Mit der Auswahl einer Benutzergruppe hier wird der Benutzer zu dieser und der Gruppe "registrierter Benutzer" hinzugef&uuml;gt.',

	'CONTINUE_EDIT_USER'		=> '%1$sHier klicken um  %2$s’s profil%3$s zu &auml;ndern.', // z.B.: Hier klicken um Joe’s profil zu ändern.
	'PASSWORD'					=> 'Passwort',
	'PASSWORD_EXPLAIN'			=> 'Wenn sie hier ein Passwort angeben, wird kein zufälliges Passwort generiert.',
));

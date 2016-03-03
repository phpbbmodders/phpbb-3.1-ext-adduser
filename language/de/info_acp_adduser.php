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
	'ACP_ADD_USER'				=> 'Benutzer hinzufügen',
	'DIR_NOT_EXIST'				=> 'Für die ausgewählte Sprache %s gibt es die für die Erweiterung benötigten Dateien nicht. Bitte übersetze sie und lade sie in das  %s-Verzeichnis der Erweiterung hoch, um diese nutzen zu können.',
	'ACP_ACCOUNT_ADDED'			=> 'Das Benutzerkonto wurde angelegt. Der Nutzer kann sich jetzt mit dem Benutzernamen und dem Kennwort, die an die E-Mail-Adresse, die Du angegeben hast, gesendet wurden, anmelden.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Das Benutzerkonto wurde angelegt. Die Foreneinstellungen erfordern jedoch, dass der Nutzer sein Konto aktiviert.<br />Ein Aktivierungs-Link wurde an die E-Mail-Adresse, die Du angegeben hast, gesendet.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Das Benutzerkonto wurde angelegt. Die Foreneinstellungen erfordern jedoch, dass ein Administrator das Konto aktiviert.<br />Eine Informations-E-Mail dazu wurde an die Administratoren geschickt. Der Nutzer wird automatisch informiert, sobald das Konto aktiviert wurde.',
	'ACP_ADMIN_ACTIVATE'		=> 'Zur Aktivierung wird eine E-Mail an einen Administrator gesendet. Du kannst alternativ auch die Aktivierungs-Box unten auswählen, damit das Konto direkt nach Anlage aktiv wird. Dem Nutzer wird eine E-Mail mit den Anmeldedaten zugesendet.',
	'ACP_EMAIL_ACTIVATE'		=> 'Sobald das Konto angelegt wurde, wird eine E-Mail mit einem Link zur Aktivierung des Kontos an den Nutzer gesendet.',
	'ACP_INSTANT_ACTIVATE'		=> 'Das Konto wird sofort aktiviert. Dem Nutzer wird eine E-Mail mit den Anmeldedaten zugesendet.',

	'ADD_USER'					=> 'Benutzerkonto anlegen',
	'ADD_USER_EXPLAIN'			=> 'Leg ein neues Benutzerkonto an. Wenn die Foreneinstellung nur Admin-Aktivierung erfordern, kannst Du das Konto sofort aktiv schalten.',
	'MOD_VERSION'				=> 'Version %s',
	'ADMIN_ACTIVATE'			=> 'Benutzerkonto aktivieren',
	'CONFIRM_PASSWORD'			=> 'Kennwort bestätigen',
	'EDIT_USER_GROUPS'			=> '%sKlicke hier, um die Gruppen für diesen Benutzer zu bearbeiten%s',
	'GROUP_ADD'					=> 'Wenn Du hier eine Auswahl triffst, wird der Benutzer zur ausgewählten Gruppe und zur Gruppe Registrierte Benutzer hinzufügen.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'Auswahl dieser Box legt die oben ausgewählte Gruppe als Standardgruppe für den Benutzer fest.',
	'CONTINUE_EDIT_USER'		=> '%1$sKlicke hier, um %2$s’s Profil zu bearbeiten%3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD_EXPLAIN'			=> 'Wird dieses Feld leer gelassen, wird automatisch ein Kennwort erzeugt.',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>Neuer Benutzer angelegt</strong><br />» %s',
));

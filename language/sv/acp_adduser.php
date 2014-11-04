<?php
/**
*
* @copyright (c) 2014 Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translated into Swedish by Holger (http://www.maskinisten.net)
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
	'ACP_ACCOUNT_ADDED'			=> 'Medlemskontot har skapats. Medlemmen kan nu logga in med användarnamnet och lösenordet som har skickats till e-postadressen som du har angivit.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Medlemskontot har skapats. Foruminställningarna kräver dock att medlemmen själv aktiverar kontot.<br />En aktiveringsnyckel har skickats till e-postadressen som du har angivit.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Medlemskontot har skapats. Foruminställningarna kräver dock att en administratör aktiverar kontot.<br />Ett e-postmeddelande har skickats till administratörerna och medlemmen kommer att informeras när kontot har aktiverats.',
	'ACP_ADD_USER'				=> 'Medlemskonto via ACP',
	'ACP_ADMIN_ACTIVATE'		=> 'Ett e-postmeddelande kommer att skickas till en administratör rörande aktivering av kontot, alternativ kan du markera fältet för omedelbar aktivering av kontot nedan. Medlemmen kommer att få ett e-postmeddelande med login-information.',
	'ACP_EMAIL_ACTIVATE'		=> 'När medlemskontot har skapats får medlemmen ett e-postmeddelande med en aktiveringslänk.',
	'ACP_INSTANT_ACTIVATE'		=> 'Medlemskontot kommer att aktiveras omedelbart. Medlemmen kommer att få ett e-postmeddelande med login-information.',

	'ADD_USER'					=> 'Skapa medlemskonto',
	'ADD_USER_EXPLAIN'			=> 'Skapa ett nytt medlemskonto. Om %saktiveringsinställningarna%s är inställda till Aktivering genom admin så kan du aktivera kontot omedelbart.',
	'MOD_VERSION'				=> 'Version %s',
	'ADMIN_ACTIVATE'			=> 'Aktivera omedelbart',
	'CONFIRM_PASSWORD'			=> 'Bekräfta lösenordet',
	'EDIT_USER_GROUPS'			=> '%sKlicka här för att ställa in medlemmens medlemsgrupper%s',
	'GROUP_ADD'					=> 'Välj grupp(er) som medlemmen ska läggas till utöver gruppen Registrerade medlemmar',

	'CONTINUE_EDIT_USER'		=> '%1$sKlicka här för att hantera %2$sâ€™s profil%3$s', // e.g.: Click here to edit Joe's profile.
	'PASSWORD'					=> 'Lösenord',
	'PASSWORD_EXPLAIN'			=> 'Ange ett lösenord om lösenordet ej ska genereras automatiskt.',
));

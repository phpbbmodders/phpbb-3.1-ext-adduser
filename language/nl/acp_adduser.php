<?php
/**
* 
* @copyright (c) 201 Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
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
	'ACP_ACCOUNT_ADDED'			=> 'Het gebruikersaccount is aangemaakt. De gebruiker kan zich nu aanmelden met de gebruikersnaam en wachtwoord dat verstuurd is naar het e-mailadres dat is opgegeven.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Het gebruikersaccount is aangemaakt. Echter, de foruminstellingen vereisen dat de gebruiker het account zelf activeert.<br />Een activatiesleutel is verstuurd naar het opgegeven e-mailadres.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Het gebruikersaccount is aangemaakt. Echter, de foruminstellingen vereisen dat het account wordt geactiveerd door een beheerder.<br />Een e-mail is verstuurd naar de beheerders, de gebruiker zal geïnformeerd worden wanneer hun account geactiveerd is',
	'ACP_ADD_USER'				=> 'ACP Gebruiker Toevoegen',
	'ACP_ADMIN_ACTIVATE'		=> 'Een e-mail zal worden verstuurd naar een beheerder voor de accountactivatie, als alternatief kan je het “activeer account”-vak hieronder aanvinken om het account direct te activeren nadat het account is aangemaakt. De gebruiker zal een e-mail ontvangen met daarin de accountdetails.',
	'ACP_EMAIL_ACTIVATE'		=> 'Wanneer het account is aangemaakt, zal de gebruiker een e-mail ontvangen met daarin een activatielink om de account te activeren.',
	'ACP_INSTANT_ACTIVATE'		=> 'Het account zal meteen geactiveerd worden. De gebruiker zal een e-mail ontvangen met daarin zijn accountdetails..',

	'ADD_USER'					=> 'Gebruiker toevoegen',
	'ADD_USER_EXPLAIN'			=> 'Een nieuw gebruikersaccount aanmaken. Als je %saccountactivatie instellingen%s ingesteld zijn op "door beheerder", dan heb je de optie om het gebruikersaccount meteen te activeren.',
	'MOD_VERSION'				=> 'Versie %s',
	'ADMIN_ACTIVATE'			=> 'Activeer gebruikersaccount',
	'CONFIRM_PASSWORD'			=> 'Bevestig wachtwoord',
	'EDIT_USER_GROUPS'			=> '%sKlik hier om de gebruikersgroep voor deze gebruiker te wijzigen%s',
	'GROUP_ADD'					=> 'Als je hier een groep selecteert, wordt het gebruikersaccount aan de geselecteerde groep toegevoegd evenals aan de geregistreerde gebruikersgroep',

	'CONTINUE_EDIT_USER'		=> '%1$sKlik hier om %2$s’s profiel te beheren%3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD'					=> 'Wachtwoord',
	'PASSWORD_EXPLAIN'			=> 'Als je hier een wachtwoord opgeeft, dan zal er niet automatisch een wachtwoord gegenereerd worden.',
));

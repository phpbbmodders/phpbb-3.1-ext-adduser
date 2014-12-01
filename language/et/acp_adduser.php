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
	'ACP_ACCOUNT_ADDED'			=> 'Kasutajakonto on loodud, liige võib nüüd sisselogida kasutajanime ja parooliga, mis talle saadeti e-postiaadressile.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Kasutajakonto on loodud, kuid siiski tulenevalt foorumi seadetest nõutakse uutelt liikmetelt oma konto aktiveerimist ise.<br /> Aktiveerimislink on saadetud e-postiaadressile, mille oled määranud liikmele.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Kasutajakonto on loodud, kuid siiski tulenevalt foorumi seadetest, peab enne administraator ise kasutajakonto aktiveerima.<br /> E-kiri saadeti automaatselt administraatoritele, ning kasutajat informeeritakse kui konto on aktiveeritud',
	'ACP_ADD_USER'				=> 'Uue liikme lisamine AJP\'st',
	'ACP_ADMIN_ACTIVATE'		=> 'Administraatorile saadetakse e-kiri kasutajakonto aktiveerimise kohta, alternatiivse valikuna võid teha linnukese kasti, et kasutajakonto koheselt aktiveeritakse. Uus liige saab e-posti, mis sisaldab teavet kasutajakonto kohta.',
	'ACP_EMAIL_ACTIVATE'		=> 'Peale seda kui kasutajakonto on loodud, saab uus liige e-kirja, mis sisaldab aktiveerimislinki.',
	'ACP_INSTANT_ACTIVATE'		=> 'Kasutajakonto aktiveeritakse koheselt. Uus liige saab e-kirja, mis sisaldab teavet konto kohta.',
	'ADD_USER'					=> 'Lisa liige',
	'ADD_USER_EXPLAIN'			=> 'Loo uus kasutajakonto. Juhul, kui  %saktiveerimis seadetes%s on seatud "Administraator ainult", siis saad ka valida valiku, aktiveeri kasutajakonto koheselt.',
	'MOD_VERSION'				=> 'Versioon %s',
	'ADMIN_ACTIVATE'			=> 'Aktiveeri kasutajakonto',
	'CONFIRM_PASSWORD'			=> 'Kinnita parool',
	'EDIT_USER_GROUPS'			=> '%sVajuta siia, et muuta kasutajagruppi%s',
	'GROUP_ADD'					=> 'Tehes siin oma valikud lisatakse uus liige valitud gruppidesse, kui ka registreeritud kasutajad gruppi',
	'CONTINUE_EDIT_USER'		=> '%1$sVajuta siia, et hallata %2$s profiili%3$s', // näiteks: vajuta siia, et hallata Joe profiili.
	'PASSWORD'					=> 'Parool',
	'PASSWORD_EXPLAIN'			=> 'Sisestades parooli siia, siis seda ei genereerita automaatselt.',
));

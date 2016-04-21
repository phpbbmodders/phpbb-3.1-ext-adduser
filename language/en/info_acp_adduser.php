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
	'ACP_ADD_USER'				=> 'ACP Add User',
	'DIR_NOT_EXIST'				=> 'The language you have chosen %s does not have the files needed for the extension. Please translate them and upload to the %s directory of the extension to use the extension.',
	'ACP_ACCOUNT_ADDED'			=> 'The user account has been created. The user may now login with the username and password sent to the email address you provided.',
	'ACP_ACCOUNT_INACTIVE'		=> 'The user account has been created. However, the forum settings require the user to activate their account.<br />An activation key has been sent to the email address you provided for the user.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'The account has been created. However, the forum settings require account activation by an administrator.<br />An email has been sent to the Administrators and the user will be informed when their account has been activated',
	'ACP_ADMIN_ACTIVATE'		=> 'An email will be dispatched to an Administrator for account activation, alternatively you may check the activate account box below to activate the account instantly once created. The user will receive an email containing account login details.',
	'ACP_EMAIL_ACTIVATE'		=> 'Once the account has been created, the user will receive an email containing an activation link to activate the account.',
	'ACP_INSTANT_ACTIVATE'		=> 'The Account will be activated instantly. The user will receive an email with account login details.',

	'ADD_USER'					=> 'Add User',
	'ADD_USER_EXPLAIN'			=> 'Create a new user account. If your activation settings are to Admin Activativation only, you will have the option to activate the user instantly.',
	'MOD_VERSION'				=> 'Version %s',
	'ADMIN_ACTIVATE'			=> 'Activate user account',
	'CONFIRM_PASSWORD'			=> 'Confirm password',
	'EDIT_USER_GROUPS'			=> '%sClick here to edit the user groups for this user%s',
	'GROUP_ADD'					=> 'Making a selection here will add the user to the group selected as well as to the registered users group.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'Checking this box will set the group selected above to be the users default.',
	'CONTINUE_EDIT_USER'		=> '%1$sClick here to the manage %2$s’s profile%3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD_EXPLAIN'			=> 'If left blank a password will be auto generated.',
	'ENABLE_NEWUSER'			=> 'Enable new user',
	'ENABLE_NEWUSER_EXPLAIN'	=> 'If set as yes the user will be added to the newly registered user group',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>New user created</strong><br />» %s',
));

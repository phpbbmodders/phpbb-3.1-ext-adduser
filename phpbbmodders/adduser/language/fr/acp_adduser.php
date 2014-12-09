<?php
/**
* 
* @copyright (c) 201 Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* French Translation by ForumsFaciles (http://www.forumsfaciles.fr)
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
	'ACP_ACCOUNT_ADDED'			=> 'Le compte utilisateur a été créé. L’utilisateur peut désormais se connecter avec le pseudo et le mot de passe envoyés à l’adresse e-mail que vous avez indiquée.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Le compte utilisateur a été créé. Cependant, les paramètres du forum exigent que l’utilisateur active son compte.<br />A cet effet, une clef d’activation a été envoyée à l’adresse que vous avez indiquée pour l’utilisateur.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Le compte utilisateur a été créé. Cependant, les paramètres du forum exigent que le compte soit activé par un administrateur.<br />Un e-mail a été envoyé aux administrateurs et l’utilisateur sera informé lorsque son compte aura été activé',
	'ACP_ADD_USER'				=> 'Ajout d’utilisateur via le PCA',
	'ACP_ADMIN_ACTIVATE'		=> 'Un e-mail sera envoyé à un administrateur pour l’activation du compte. Cependant vous pouvez également cocher la case "activer le compte" ci-dessous pour activer le compe immédiatement une fois qu’il a été créé. L’utilisateur recevra un e-mail contenant les identifiants de connexion.',
	'ACP_EMAIL_ACTIVATE'		=> 'Une fois le compte créé, l’utilisateur recevra un e-mail contenant un lien pour activer son compte.',
	'ACP_INSTANT_ACTIVATE'		=> 'Le compte sera activé immédiatement. L’utilisateur recevra un e-mail contenant ses identifiants de connexion.',

	'ADD_USER'					=> 'Ajouter l’utilisateur',
	'ADD_USER_EXPLAIN'			=> 'Créer un nouveau compte utilisateur. Si vos %paramètres d’activation%s sont sur Activation par l’administrateur seulement, vous pourrez activer l’utilisateur immédiatement.',
	'MOD_VERSION'				=> 'Version %s',
	'ADMIN_ACTIVATE'			=> 'Activer le compte utilisateur',
	'CONFIRM_PASSWORD'			=> 'Confirmer le mot de passe',
	'EDIT_USER_GROUPS'			=> '%sCliquer ici pour modifier les groupes de cet utilisateur%s',
	'GROUP_ADD'					=> 'Effectuer une sélection ici ajoutera l’utilisateur au groupe sélectionné ainsi qu’au groupe des utilisateurs enregistrés',

	'CONTINUE_EDIT_USER'		=> '%1$sCliquer ici pour gérer le profil de %2$s%3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD'					=> 'Mot de passe',
	'PASSWORD_EXPLAIN'			=> 'Si vous saisissez un mot de passe ici, aucune ne sera généré automatiquement.',
));

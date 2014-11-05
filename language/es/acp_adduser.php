<?php
/**
* 
* @copyright (c) 201 Rich McGirr
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
	'ACP_ACCOUNT_ADDED'			=> 'La cuenta de usuario ha sido creada. El usuario podrá iniciar sesión con el nombre de usuario y contraseña enviada por correo electrónico proporcionado.',
	'ACP_ACCOUNT_INACTIVE'		=> 'La cuenta de usuario ha sido creada. Sin embargo, la configuración de foro requiere que el usuario active su cuenta.<br />Una clave de activación ha sido enviada a la dirección de correo electrónico que proporcionó para el usuario.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'La cuenta de usuario ha sido creada. Sin embargo, la configuración de foro requiere activación de la cuenta por un administrador.<br />Un correo electrónico ha sido enviado a los Administradores y el usuario será informado cuando su cuenta haya sido activada',
	'ACP_ADD_USER'				=> 'Agregar Usuario',
	'ACP_ADMIN_ACTIVATE'		=> 'Un correo electrónico será enviado a un Administrador para la activación de la cuenta, de forma alternativa, puede marcar la casilla de abajo para activar la cuenta al instante una vez creada. El usuario recibirá un correo electrónico con los datos de la cuenta, y poder iniciar sesión.',
	'ACP_EMAIL_ACTIVATE'		=> 'Una vez que la cuenta ha sido creada, el usuario recibirá un correo electrónico con un enlace de activación para activar la cuenta.',
	'ACP_INSTANT_ACTIVATE'		=> 'La cuenta se activará al instante. El usuario recibirá un correo electrónico con datos de acceso a su cuenta.',
	
	'ADD_USER'					=> 'Agregar Usuario',
	'ADD_USER_EXPLAIN'			=> 'Crear una nueva cuenta de usuario. Si los %sajustes de activación%s están para Administradores solamente, usted tendrá la opción de activar el usuario al instante.',
	'MOD_VERSION'				=> 'Versión %s',
	'ADMIN_ACTIVATE'			=> 'Activate user account',
	'CONFIRM_PASSWORD'			=> 'Confirmar contraseña',
	'EDIT_USER_GROUPS'			=> '%sClic aquí para editar los grupos de usuarios para este usuario%s',
	'GROUP_ADD'					=> 'Seleccione aquí para agregar al usuario al grupo seleccionado, así como para el grupo de usuarios registrados',

	'CONTINUE_EDIT_USER'		=> '%1$sClic aquí para gestionar el perfil de %2$s %3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD'					=> 'Contraseña',
	'PASSWORD_EXPLAIN'			=> 'Si introduce una contraseña, no será generada automáticamente.',
));

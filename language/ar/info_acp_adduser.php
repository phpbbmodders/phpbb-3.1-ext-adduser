<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'ACP_ADD_USER'				=> 'إضافة عضو من لوحة التحكم الرئيسية',
	'DIR_NOT_EXIST'				=> 'اللغة التي أخترتها %s لا تحتوي على الملفات المطلوبة لهذه الإضافة. نرجوا ترجمتها ورفعها إلى المسار %s لكي تعمل الإضافة.',
	'ACP_ACCOUNT_ADDED'			=> 'تم إنشاء حساب العضو. يستطيع العضو الآن تسجيل الدخول بإسم المستخدم وكلمة المرور التي تم إرسالها إلى البريد الإلكتروني الذي أضفته عند التسجيل.',
	'ACP_ACCOUNT_INACTIVE'		=> 'تم إنشاء حساب العضو. يجب على العضو الآن تفعيل حسابه.<br />وذلك بالنقر على رابط التفعيل الذي تم إرساله إلى البريد الإلكتروني الذي أضفته عند التسجيل.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'تم إنشاء الحساب. والآن يتطلب تفعيل الحساب بواسطة المدير.<br />تم إرسال بريد الكتروني إلى المدراء وسيتم إبلاغ العضو عندما يتم تفعيل الحساب.',
	'ACP_ADMIN_ACTIVATE'		=> 'سيتم إرسال بريد إلكتروني إلى المدير لتفعيل الحساب , وبدلاً من ذلك تستطيع التأشير على صندوق تفعيل الحساب الموجود بالأسفل لكي يتم تفعيل الحساب بعد إنشائه مُباشرة. سوف يستلم العضو بريد إلكتروني يحتوي على تفاصيل الدخول لحسابه.',
	'ACP_EMAIL_ACTIVATE'		=> 'عند إنشاء الحساب , سوف يستلم العضو بريد إلكتروني يحتوي على رابط تفعيل حسابه.',
	'ACP_INSTANT_ACTIVATE'		=> 'سيتم تفعيل حساب العضو مُباشرة. سوف يستلم العضو بريد إلكتروني يحتوي على تفاصيل الدخول لحسابه.',

	'ADD_USER'					=> 'إضافة عضو',
	'ADD_USER_EXPLAIN'			=> 'إنشاء حساب عضو جديد. تستطيع تفعيل العضو مباشرة إذا إعدادات "تفعيل الحساب" مُحددة بواسطة المدير فقط.',
	'MOD_VERSION'				=> 'النسخة %s',
	'ADMIN_ACTIVATE'			=> 'تفعيل حساب العضو',
	'CONFIRM_PASSWORD'			=> 'تأكيد كلمة المرور ',
	'EDIT_USER_GROUPS'			=> '%sأنقر هنا لتعديل المجموعات لهذا العضو%s',
	'GROUP_ADD'					=> 'سيتم إضافة العضو إلى المجموعة التي ستحددها هنا وأيضاً إلى مجموعة آخر الأعضاء المسجلين.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'النقر على هذا المربع سيجعل المجموعة المُحددة أعلاه هي الإفتراضية للعضو.',
	'CONTINUE_EDIT_USER'		=> '%1$sأنقر هنا لتعديل الملف الشخصي للعضو %2$s’s %3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD_EXPLAIN'			=> 'سيتم إنشاء كلمة مرور تلقائية إذا تركت هذا الحقل فارغاً.',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>تم إنشاء عضو جديد</strong><br />» %s',
));

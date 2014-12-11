<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\adduser\acp;

/**
* @package module_install
*/
class adduser_info
{
	function module()
	{
		return array(
			'filename'	=> 'phpbbmodders\adduser\acp\adduser_module',
			'title'		=> 'ADD_USER',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'main'	=> array('title' => 'ACP_ADD_USER', 'auth'	=> 'ext_phpbbmodders/adduser && acl_a_user', 'cat'	=> array('ACP_CAT_USERS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

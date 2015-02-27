<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\adduser\migrations\v100;

class install_v100 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['adduser_version']) && version_compare($this->config['adduser_version'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\gold');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('adduser_version', '1.0.0')),

			array('module.add', array(
				'acp',
				'ACP_CAT_USERS',
				array(
					'module_basename'	=> '\phpbbmodders\adduser\acp\adduser_module',
					'auth'				=> 'ext_phpbbmodders/adduser && acl_a_user',
					'modes'				=> array('main'),
				),
			)),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('adduser_version')),

			array('module.remove', array(
				'acp',
				'ACP_CAT_USERS',
				array(
					'module_basename'	=> '\phpbbmodders\adduser\acp\adduser_module',
				),
			)),
		);
	}
}

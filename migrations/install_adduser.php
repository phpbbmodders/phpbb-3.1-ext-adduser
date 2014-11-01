<?php
/**
*
* @package Add User
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rmcgirr83\adduser\migrations;

class install_adduser extends \phpbb\db\migration\migration
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
					'module_basename'	=> '\rmcgirr83\adduser\acp\adduser_module',
					'auth'				=> 'ext_rmcgirr83/adduser && acl_a_user',
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
					'module_basename'	=> '\rmcgirr83\adduser\acp\adduser_module',
				),
			)),
		);
	}
}

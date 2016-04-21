<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2015 phpbbmodders.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\adduser\migrations\v103;

class version_103 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['adduser_version']) && version_compare($this->config['adduser_version'], '1.0.3', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbbmodders\adduser\migrations\v102\version_102');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('adduser_version', '1.0.3')),
		);
	}
}

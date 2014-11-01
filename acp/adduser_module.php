<?php
/**
*
* @package Add User
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rmcgirr83\adduser\acp;

class add_user_module
{
	public $u_action;
	public $main_link;
	public $back_link;
	var $error = '';

	public function main($id, $mode)
	{
		global $config, $db, $request, $template, $user, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$this->page_title = $user->lang['ACP_ADD_USER'];
		$this->tpl_name = 'acp_adduser';

		//include files we need to add a user
		include($phpbb_root_path . 'includes/functions_profile_fields.' . $phpEx);
		include($phpbb_root_path . 'includes/functions_user.' . $phpEx);

		// include lang files we need
		$user->add_lang(array('posting', 'ucp', 'acp/users', 'acp/groups'));

		// add custom profile fields
		$cp = new custom_profile();

		//set empty error strings
		$error = $cp_data = $cp_error = array();

		// Load a template from adm/style for our ACP page
		$this->tpl_name = 'acp_adduser';

		// Define the name of the form for use as a form key
		add_form_key('acp_adduser');

		// Try to automatically determine the timezone and daylight savings time settings
		$timezone = date('Z') / 3600;
		$is_dst = date('I');

		if ($this->config['board_timezone'] == $timezone || $this->config['board_timezone'] == ($timezone - 1))
		{
			$timezone = ($is_dst) ? $timezone - 1 : $timezone;

			if (!isset($this->user->lang['tz_zones'][(string) $timezone]))
			{
				$timezone = $this->config['board_timezone'];
			}
		}
		else
		{
			$is_dst = $this->config['board_dst'];
			$timezone = $this->config['board_timezone'];
		}

		$data = array(
			'username'			=> $this->request->variable('username', '', true),
			'new_password'		=> $this->request->variable('new_password', '', true),
			'password_confirm'	=> $this->request->variable('password_confirm', '', true),
			'email'				=> strtolower($this->request->variable('email', '')),
			'email_confirm'		=> strtolower($this->request->variable('email_confirm', '')),
			'lang'				=> basename($this->request->variable('lang', $this->user->lang_name)),
			'tz'				=> $this->request->variable('tz', (float) $timezone),
			'group' 			=> $this->request->variable('group', 0),
		);

		if ($this->config['allow_birthdays'])
		{
			$data['bday_day'] = $data['bday_month'] = $data['bday_year'] = 0;

			$data['bday_day'] = $this->request->variable('bday_day', $data['bday_day']);
			$data['bday_month'] = $this->request->variable('bday_month', $data['bday_month']);
			$data['bday_year'] = $this->request->variable('bday_year', $data['bday_year']);
			$data['user_birthday'] = sprintf('%2d-%2d-%4d', $data['bday_day'], $data['bday_month'], $data['bday_year']);
		}

		// if form is submitted
		if ($this->request->is_set_post('submit'))
		{
			// Test if form key is valid
			if (!check_form_key('acp_adduser'))
			{
				trigger_error('FORM_INVALID');
			}

			// lets create a wacky new password for our user...but only if there is nothing for a password already
			if (empty($data['new_password']) && empty($data['password_confirm']))
			{
				if ($this->config['pass_complex'] == 'PASS_TYPE_ANY' || $this->config['pass_complex'] == 'PASS_TYPE_CASE')
				{
					$new_password = str_split(base64_encode(md5(time() . $data['username'])), $this->config['min_pass_chars'] + rand(3, 5));
					$data['new_password'] = $data['password_confirm'] = $new_password[0];
				}
				elseif ($this->config['pass_complex'] == 'PASS_TYPE_ALPHA')
				{
					$new_password = $this->generate_password($this->config['min_pass_chars'] + rand(3, 5), 'PASS_TYPE_ALPHA');
					$data['new_password'] = $data['password_confirm'] = $new_password;
				}
				else
				{
					$new_password = $this->generate_password($this->config['min_pass_chars'] + rand(3, 5), 'PASS_TYPE_SYMBOL');
					$data['new_password'] = $data['password_confirm'] = $new_password;
				}
			}
			
			// validate entries
			$validate_array = array(
				'username'			=> array(
					array('string', false, $this->config['min_name_chars'], $this->config['max_name_chars']),
					array('username', '')),
				'email'				=> array(
					array('string', false, 6, 60),
					array('email')),
				'new_password'		=> array(
					array('string', false, $this->config['min_pass_chars'], $this->config['max_pass_chars']),
					array('password')),
				'password_confirm'	=> array('string', false, $this->config['min_pass_chars'], $this->config['max_pass_chars']),
				'email_confirm'		=> array('string', false, 6, 60),
				'tz'				=> array('num', false, -14, 14),
				'lang'				=> array('match', false, '#^[a-z_\-]{2,}$#i'),
			);

			if ($this->config['allow_birthdays'])
			{
				$validate_array = array_merge($validate_array, array(
					'bday_day'		=> array('num', true, 1, 31),
					'bday_month'	=> array('num', true, 1, 12),
					'bday_year'		=> array('num', true, 1901, gmdate('Y', time()) + 50),
					'user_birthday' => array('date', true),
				));
			}

			$error = validate_data($data, $validate_array);

			// validate custom profile fields
			$cp->submit_cp_field('register', $this->user->get_iso_lang_id(), $cp_data, $error);

			if (sizeof($cp_error))
			{
				$error = array_merge($error, $cp_error);
			}

			if ($data['new_password'] != $data['password_confirm'])
			{
				$error[] = $user->lang['NEW_PASSWORD_ERROR'];
			}

			if ($data['email'] != $data['email_confirm'])
			{
				$error[] = $this->user->lang['NEW_EMAIL_ERROR'];
			}

			if (!sizeof($error))
			{
				$server_url = generate_board_url();

				$sql = 'SELECT group_id
						FROM ' . GROUPS_TABLE . "
						WHERE group_name = 'REGISTERED'
							AND group_type = " . GROUP_SPECIAL;
				$result = $db->sql_query($sql);
				$group_id = $db->sql_fetchfield('group_id');
				$db->sql_freeresult($result);

				// use group_id here
				if (!$group_id)
				{
					trigger_error('NO_GROUP');
				}

				if (($this->config['require_activation'] == USER_ACTIVATION_SELF || $this->config['require_activation'] == USER_ACTIVATION_ADMIN) && $this->config['email_enable'] && !$admin_activate)
				{
					$user_actkey = gen_rand_string(mt_rand(6, 10));
					$user_type = USER_INACTIVE;
					$user_inactive_reason = INACTIVE_REGISTER;
					$user_inactive_time = time();
				}
				else
				{
					$user_type = USER_NORMAL;
					$user_actkey = '';
					$user_inactive_reason = 0;
					$user_inactive_time = 0;
				}

				$user_row = array(
					'username'				=> $data['username'],
					'user_password'			=> phpbb_hash($data['new_password']),
					'user_email'			=> $data['email'],
					'group_id'				=> (int) $group_id,
					'user_timezone'			=> (float) $data['tz'],
					'user_dst'				=> $is_dst,
					'user_lang'				=> $data['lang'],
					'user_type'				=> $user_type,
					'user_actkey'			=> $user_actkey,
					'user_ip'				=> $this->user->ip,
					'user_regdate'			=> time(),
					'user_inactive_reason'	=> $user_inactive_reason,
					'user_inactive_time'	=> $user_inactive_time,
				);

				if ($config['new_member_post_limit'])
				{
					$user_row['user_new'] = 1;
				}
				if ($config['allow_birthdays'])
				{
					$user_row['user_birthday'] = $data['user_birthday'];
				}
				// Register user...
				$user_id = user_add($user_row, $cp_data);
				if (!empty($data['group']))
				{
					group_user_add($data['group'],$user_id);
				}
				$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_USER_ADDED');

				// This should not happen, because the required variables are listed above...
				if ($user_id === false)
				{
					trigger_error($this->user->lang['NO_USER'], E_USER_ERROR);
				}

				$message = array();
				if ($this->config['require_activation'] == USER_ACTIVATION_SELF && $this->config['email_enable'])
				{
					$message[] = $this->user->lang['ACP_ACCOUNT_INACTIVE'];
					$email_template = 'user_added_inactive';
				}
				else if ($this->config['require_activation'] == USER_ACTIVATION_ADMIN && $this->config['email_enable'] && !$admin_activate)
				{
					$message[] = $this->user->lang['ACP_ACCOUNT_INACTIVE_ADMIN'];
					$email_template = 'admin_welcome_inactive';
				}
				else
				{
					$message[] = $this->user->lang['ACP_ACCOUNT_ADDED'];
					$email_template = 'user_added_welcome';
				}

				if ($this->config['email_enable'])
				{
					if (!class_exists('messenger'))
					{
						include($phpbb_root_path . 'includes/functions_messenger.' . $phpEx);
					}

					$messenger = new messenger(false);

					$messenger->template($email_template, $data['lang']);

					$messenger->to($data['email'], $data['username']);

					$messenger->headers('X-AntiAbuse: Board servername - ' . $this->config['server_name']);
					$messenger->headers('X-AntiAbuse: User_id - ' . $this->user->data['user_id']);
					$messenger->headers('X-AntiAbuse: Username - ' . $this->user->data['username']);
					$messenger->headers('X-AntiAbuse: User IP - ' . $this->user->ip);

					$messenger->assign_vars(array(
						'WELCOME_MSG'	=> htmlspecialchars_decode(sprintf($this->user->lang['WELCOME_SUBJECT'], $this->config['sitename'])),
						'USERNAME'		=> htmlspecialchars_decode($data['username']),
						'PASSWORD'		=> htmlspecialchars_decode($data['new_password']),
						'U_ACTIVATE'	=> "$server_url/ucp.$phpEx?mode=activate&u=$user_id&k=$user_actkey")
					);

					$messenger->send(NOTIFY_EMAIL);

					if ($this->config['require_activation'] == USER_ACTIVATION_ADMIN && !$admin_activate)
					{
						// Grab an array of user_id's with a_user permissions ... these users can activate a user
						$admin_ary = $auth->acl_get_list(false, 'a_user', false);
						$admin_ary = (!empty($admin_ary[0]['a_user'])) ? $admin_ary[0]['a_user'] : array();

						// Also include founders
						$where_sql = ' WHERE user_type = ' . USER_FOUNDER;

						if (sizeof($admin_ary))
						{
							$where_sql .= ' OR ' . $this->db->sql_in_set('user_id', $admin_ary);
						}

						$sql = 'SELECT user_id, username, user_email, user_lang, user_jabber, user_notify_type
							FROM ' . USERS_TABLE . ' ' .
							$where_sql;
						$result = $this->db->sql_query($sql);

						while ($row = $this->db->sql_fetchrow($result))
						{
							$messenger->template('admin_activate', $row['user_lang']);
							$messenger->to($row['user_email'], $row['username']);
							$messenger->im($row['user_jabber'], $row['username']);

							$messenger->assign_vars(array(
								'USERNAME'			=> htmlspecialchars_decode($data['username']),
								'U_USER_DETAILS'	=> "$server_url/memberlist.$phpEx?mode=viewprofile&amp;u=$user_id",
								'U_ACTIVATE'		=> "$server_url/ucp.$phpEx?mode=activate&u=$user_id&k=$user_actkey")
							);

							$messenger->send($row['user_notify_type']);
						}
						$this->db->sql_freeresult($result);
					}
				}

				$message[] = sprintf($user->lang['CONTINUE_EDIT_USER'], '<a href="' . append_sid("{$this->phpbb_admin_path}index.$phpEx", 'i=users&amp;mode=profile&amp;u=' . $user_id) . '">', $data['username'], '</a>');
				$message[] = sprintf($user->lang['EDIT_USER_GROUPS'], '<a href="' . append_sid("{$this->phpbb_admin_path}index.$phpEx", 'i=users&amp;mode=groups&amp;u=' . $user_id) . '">', '</a>');
				$message[] = adm_back_link($this->u_action);

				trigger_error(implode('<br />', $message));
			}
				
		}
		$l_reg_cond = '';
		switch ($this->config['require_activation'])
		{
			case USER_ACTIVATION_SELF:
				$l_reg_cond = $this->user->lang['ACP_EMAIL_ACTIVATE'];
			break;

			case USER_ACTIVATION_ADMIN:
				$l_reg_cond = $this->user->lang['ACP_ADMIN_ACTIVATE'];
			break;

			default:
				$l_reg_cond = $this->user->lang['ACP_INSTANT_ACTIVATE'];
			break;
		}

		if ($this->config['allow_birthdays'])
		{
			$s_birthday_day_options = '<option value="0"' . ((!$data['bday_day']) ? ' selected="selected"' : '') . '>--</option>';
			for ($i = 1; $i < 32; $i++)
			{
				$selected = ($i == $data['bday_day']) ? ' selected="selected"' : '';
				$s_birthday_day_options .= "<option value=\"$i\"$selected>$i</option>";
			}

			$s_birthday_month_options = '<option value="0"' . ((!$data['bday_month']) ? ' selected="selected"' : '') . '>--</option>';
			for ($i = 1; $i < 13; $i++)
			{
				$selected = ($i == $data['bday_month']) ? ' selected="selected"' : '';
				$s_birthday_month_options .= "<option value=\"$i\"$selected>$i</option>";
			}
			$s_birthday_year_options = '';

			$now = getdate();
			$s_birthday_year_options = '<option value="0"' . ((!$data['bday_year']) ? ' selected="selected"' : '') . '>--</option>';
			for ($i = $now['year'] - 100; $i <= $now['year']; $i++)
			{
				$selected = ($i == $data['bday_year']) ? ' selected="selected"' : '';
				$s_birthday_year_options .= "<option value=\"$i\"$selected>$i</option>";
			}
			unset($now);

			$this->template->assign_vars(array(
				'S_BIRTHDAY_DAY_OPTIONS'	=> $s_birthday_day_options,
				'S_BIRTHDAY_MONTH_OPTIONS'	=> $s_birthday_month_options,
				'S_BIRTHDAY_YEAR_OPTIONS'	=> $s_birthday_year_options,
				'S_BIRTHDAYS_ENABLED'		=> true,
			));
		}

		// Get the groups, so that the user can be added to them
		$ignore_groups = array('BOTS', 'ANONYMOUS', 'REGISTERED', 'NEWLY_REGISTERED');
		$sql = 'SELECT group_name, group_id, group_type
			FROM ' . GROUPS_TABLE . '
			WHERE ' . $this->db->sql_in_set('group_name', $ignore_groups, true) . '
			ORDER BY group_type DESC, group_name ASC';
		$result = $this->db->sql_query($sql);

		$s_group_options = '';
		$s_group_options .= '<select name="group"><option value="0" select="selected">' . $this->user->lang['NO_GROUP'] . '</option>';
		while ($row = $this->db->sql_fetchrow($result))
		{
			if (!$this->config['coppa_enable'] && $row['group_name'] == 'REGISTERED_COPPA')
			{
				continue;
			}
			$s_group_options .= '<option' . (($row['group_type'] == GROUP_SPECIAL) ? ' class="sep"' : '') . ' value="' . $row['group_id'] . '">' . (($row['group_type'] == GROUP_SPECIAL) ? $this->user->lang['G_' . $row['group_name']] : $row['group_name']) . '</option>';
		}
		$s_group_options .='</select>';	
		$this->db->sql_freeresult($result);			
			
		$this->template->assign_vars(array(
			'ERROR'				=> (sizeof($error)) ? implode('<br />', $error) : '',
			'NEW_USERNAME'		=> $data['username'],
			'EMAIL'				=> $data['email'],
			'EMAIL_CONFIRM'		=> $data['email_confirm'],
			'PASSWORD'			=> $data['new_password'],
			'PASSWORD_CONFIRM'	=> $data['password_confirm'],
			'L_PASSWORD_EXPLAIN'		=> $this->user->lang['PASSWORD_EXPLAIN'] . '<br />' . sprintf($this->user->lang[$config['pass_complex'] . '_EXPLAIN'], $this->config['min_pass_chars'], $this->config['max_pass_chars']),

			'L_USERNAME_EXPLAIN'=> sprintf($this->user->lang[$config['allow_name_chars'] . '_EXPLAIN'], $this->config['min_name_chars'], $this->config['max_name_chars']),

			'S_LANG_OPTIONS'	=> language_select($data['lang']),
			'L_REG_COND'		=> $l_reg_cond,
			'S_TZ_OPTIONS'		=> tz_select($data['tz']),
			'S_GROUP_OPTIONS'	=> $s_group_options,
			'L_MOD_VERSION'		=> sprintf($this->user->lang['MOD_VERSION'] , $this->config['add_user_version']),

			'S_ADMIN_ACTIVATE'			=> ($this->config['require_activation'] == USER_ACTIVATION_ADMIN) ? true : false,
			'U_ADMIN_ACTIVATE'			=> ($admin_activate) ? ' checked="checked"' : '',
		));

		$this->user->profile_fields = array();

		// Generate profile fields -> Template Block Variable profile_fields
		$cp->generate_profile_fields('register', $this->user->get_iso_lang_id());

	}

	//a function to generate passwords
	public function generate_password($length, $type) 
	{
		$lowercase = "abcdefghijklmnopqrstuvwxyz";
		$uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$numbers = "1234567890";
		$specialcharacters = "{}[];:,./<>?_+~!@#";

		$pword_string = '';
		//mt_srand(crc32(microtime()));
		$max = strlen($lowercase) - 1;
		for ($x = 0; $x < abs($length/3); $x++) 
		{
			$pword_string .= $lowercase{mt_rand(0, $max)};
		}
		$max = strlen($uppercase) - 1;
		for ($x = 0; $x < abs($length/3); $x++) 
		{
			$pword_string .= $uppercase{mt_rand(0, $max)};
		}
		$max = strlen($numbers) - 1;
		for ($x = 0; $x < abs($length/3); $x++) 
		{
			$pword_string .= $numbers{mt_rand(0, $max)};
		}
		if ($type == 'PASS_TYPE_SYMBOL')
		{
			$max = strlen($specialcharacters) - 1;
			for ($x = 0; $x < abs($length/3); $x++) 
			{
				$pword_string .= $specialcharacters{mt_rand(0, $max)};
			}		
		}

		return str_shuffle($pword_string);
	}
}

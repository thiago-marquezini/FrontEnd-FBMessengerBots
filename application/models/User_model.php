
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model 
{
	// ----------- sets
	function setUserSettings($settings = array(), $uid)
	{
		$this->db->update('users_settings', $settings, array("user" => $uid));
	}

	function setCurrentUserBot($uid, $bid)
	{
		$this->db->update('autobots_fb', array("dash" => "on"), array("user" => $uid, "id" => $bid));
	}

	function setBotWebHook($bid, $url)
	{
		$this->db->update('autobots_fb', array("webhook_url" => $url), array("id" => $bid));
	}


	// ----------- gets
	function getUser($uid)
	{
		return $this->db->get_where('users', array('id' => $uid))->row();
	}

	function getUserActiveBot($uid)
	{
		return $this->db->get_where('autobots_fb', array('user' => $uid, 'active' => '1'))->row();
	}

	function getUserBots($uid)
	{
		$this->db->order_by("id", "asc");
		return $this->db->get_where('autobots_fb', array('user' => $uid))->result();
	}

	function getUserNotif($uid)
	{
		$this->db->order_by("id", "desc");
		return $this->db->get_where('users_notifications', array('user' => $uid))->result();
	}


	// ----------- returns
	function retnJson($data)
	{
        return $this->output->set_content_type('application/json')->set_output(json_encode($data, JSON_UNESCAPED_UNICODE));
    }
	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
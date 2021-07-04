
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dash_model extends CI_Model 
{
	function setLastView($location, $uid)
	{
		$this->db->update('users', array("last_view" => $location), array("id" => $uid));
	}

	function setCurrentUserBot($uid, $bid)
	{
		$this->db->update('autobots_fb', array("dash" => "on"), array("user" => $uid, "id" => $bid));
	}



	function retnJson($data)
	{
        return $this->output->set_content_type('application/json')->set_output(json_encode($data, JSON_UNESCAPED_UNICODE));
    }

	function getUser($uid)
	{
		return $this->db->get_where('users', array('id' => $uid))->row();
	}

	function getUserCurrentBot()
	{
		return $this->db->get_where('autobots_fb', array('user' => $uid, 'dash' => 'on'))->result();
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

	function getUserBotsNotif($uid)
	{
		$this->db->order_by("id", "desc");
		return $this->db->get_where('bots_notifications', array('user' => $uid))->result();
	}

	function getUserTasks($uid)
	{
		$this->db->order_by("id", "desc");
		return $this->db->get_where('users_tasks', array('user' => $uid))->result();
	}
	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
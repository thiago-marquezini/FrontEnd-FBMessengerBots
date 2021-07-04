
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class settings_model extends CI_Model 
{

	// ----------- sets
	
	function setUserSettings($settings = array(), $uid)
	{
		$this->db->update('users_settings', $settings, array("user" => $uid));
	}

	// ----------- gets
	

	// returns

	function retnJson($data)
	{
        return $this->output->set_content_type('application/json')->set_output(json_encode($data, JSON_UNESCAPED_UNICODE));
    }
	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
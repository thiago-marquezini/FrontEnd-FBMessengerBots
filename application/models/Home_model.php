
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model 
{
	function getUser($id)
	{
		return $this->db->get_where('users', array('id' => $id))->row();
	}
	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
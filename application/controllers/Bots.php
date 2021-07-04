<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bots extends CI_Controller 
{

	public function autoreplies($action = "")
	{
		
	}

	public function index()
	{
		$this->load->model('bots_model');

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');

		} else
		{
			//$data['SystemUser'] = $this->bots_model->getUser($this->ion_auth->get_user_id());

			//$this->load->view('dash', $data, FALSE);
		}
		
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
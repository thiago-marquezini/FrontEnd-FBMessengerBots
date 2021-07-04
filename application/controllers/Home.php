<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

	public function index()
	{
		$this->load->model('home_model');

		if (!$this->ion_auth->logged_in())
		{
			$data['Loggined'] = false;
			//redirect('auth/login', 'refresh');

		} else
		{
			$data['Loggined'] = true;
			$data['SystemUser'] = $this->home_model->getUser($this->ion_auth->get_user_id());
			
			$this->load->view('home', $data, FALSE);
		}
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
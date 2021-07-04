<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller 
{

	public function notif()
	{
		$type = $this->input->post('type');
		if ($type)
		{
			$this->load->model('dash_model');

			if (!$this->ion_auth->logged_in())
			{
				redirect('auth/login', 'refresh');

			} else
			{
				$UserNotifications = $this->dash_model->getUserNotif($this->ion_auth->get_user_id());
				$BotsNotifications = $this->dash_model->getUserBotsNotif($this->ion_auth->get_user_id());
				$UserTasksList = $this->dash_model->getUserTasks($this->ion_auth->get_user_id());

				$Notifications = array(
			                        'user' => $UserNotifications,
			                        'bots' => $BotsNotifications, 
			                        'tasks' => $UserTasksList  
			                        );

				$this->dash_model->retnJson($Notifications);
			}
		}
	}

	public function view()
	{
		$location = $this->input->post('loc');
		if (!($location))
		{
			redirect('dash', 'refresh');

		} else
		{
			$this->load->model('dash_model');

			if (!$this->ion_auth->logged_in())
			{
				redirect('auth/login', 'refresh');

			} else
			{
				$data['SystemUser'] = $this->dash_model->getUser($this->ion_auth->get_user_id());
				$data['UserBots'] = $this->dash_model->getUserBots($this->ion_auth->get_user_id());

				$this->db->update('users', array("last_view" => $location), array("id" => $this->ion_auth->get_user_id()));

				$this->load->view('dash.fragments/fragment.' . $location . '.php', $data, FALSE);
			}
		}

	}

	public function index()
	{
		$this->load->model('dash_model');

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');

		} else
		{
			$data['SystemUser'] = $this->dash_model->getUser($this->ion_auth->get_user_id());
			$data['UserBots'] = $this->dash_model->getUserBots($this->ion_auth->get_user_id());

			$this->load->view('dash', $data, FALSE);
		}
		
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
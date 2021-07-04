<?php
defined('BASEPATH') OR exit('No direct script access allowed');

set_time_limit(0);
date_default_timezone_set('UTC');



class Insta extends CI_Controller 
{
	public $basedir = "/home/nitrogra/dashboard/sessions/";
	public $instagram = 0;

	private function _outputjson($array)
	{
		return $this->output
		            ->set_content_type('application/json')
		            ->set_output(json_encode($array));
	}

	private function _instagram($username, $password, $twofactor)
	{
		$this->username = $username;
		$this->password = $password;
		$this->istwofactor = $twofactor;

		//$this->load->helper('utils');
        //if (file_exists($this->basedir . $this->username)) { _session_killer($this->basedir . $this->username); }   

		\InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
        $storage_config = [ "storage" => "file", "basefolder" => $this->basedir . $this->username ];

		return new \InstagramAPI\Instagram(false, false, $storage_config);
	}

	private function _login()
	{
		try 
		{
		    $login = $this->instagram->login($this->username, $this->password);
		    $this->session->login = 
			[
			   	"username" => $this->username,
	           	"password" => $this->password
			];

		    if ($login !== null && $login->isTwoFactorRequired()) 
		    {
		        $i2fauthid = $login->getTwoFactorInfo()->getTwoFactorIdentifier();

		        $this->session->login->i2fauth = $i2fauthid;
		        $this->session->set_userdata('continue', 'i2fauth');

		    } else
		    {
		    	$this->session->set_userdata('continue', 'flow');
		    }

		    return $this->session->continue;

		} catch (\Exception $e) 
		{
			$this->session->set_userdata('continue', 'failure');
			$this->session->set_userdata('exception', $e->getMessage());

		    return $this->session->continue;
		}
	}

	private function _i2fauth($code)
	{
		try 
		{
			$this->instagram->finishTwoFactorLogin($this->session->login->username, 
												   $this->session->login->password, 
												   $this->session->login->i2fauth, 
												   $code);

			$this->session->set_userdata('continue', 'flow');

		} catch (\Exception $e) 
		{
		    $this->session->set_userdata('continue', 'failure');
			$this->session->set_userdata('exception', $e->getMessage());

		    return $this->session->continue;
		}
	}

	private function _auth($i2fauth = '')
	{
		// --- 2 Factor Authentication Required --- //
		if ($i2fauth !== '')
		{
			$this->instagram = $this->_instagram($this->session->login->username, 
												 $this->session->login->password, 
												 false);

			return $this->_i2fauth($i2fauth);

		// --- 2 Factor Authentication NOT Required --- //
		} else
		{
			$this->instagram = $this->_instagram("igunbounds2",
												 "1324abcA", 
												 false);

			return $this->_login();
		}
	}

	private function _get_follower_page($pagecount, $laststop)
	{
		$info = $this->instagram->people->getInfoByName($this->username);

		$this->user_id 			= $info->getUser()->getId();
		$this->user_userid 		= $info->getUser()->getUser_id();
		$this->user_pk 			= $info->getUser()->getPk();
		$this->user_username 	= $info->getUser()->getUsername();
		$this->user_fullname 	= $info->getUser()->getFull_name();
		$this->user_profile_pic = $info->getUser()->getProfile_pic_url();
		$this->user_isverified 	= $info->getUser()->getIs_verified();
		$this->user_isprivate 	= $info->getUser()->getIs_private();
		$this->user_isbusinnes 	= $info->getUser()->getIs_business();

		$pages = [];

		try 
		{
			$followings = [];
			$maxId = ($laststop === null) ? null : $laststop;

			do 
			{
				$rank_token = \InstagramAPI\Signatures::generateUUID();
				$followers = $this->instagram->people->getFollowers($this->user_pk, $rank_token, $maxId);

				//echo "Count: " . count($followers->getUsers()) . "\n";
				foreach($followers->getUsers() as $follower)
				{
					$pagedata = 
					[
						"pk" => $follower->getPk(),
						"username" => $follower->getUsername(),
						"full_name" => $follower->getFull_name(),
						"is_private" => $follower->getIs_private(),
						"profile_pic_url" => $follower->getProfile_pic_url(),
						"profile_pic_id" => $follower->getProfile_pic_url(),
						"is_verified" => $follower->getIs_verified(),
					];

					$pages[] = $pagedata;
				}

				$maxId = $followers->getNextMaxId();

			} while ($maxId !== null); // Must use "!==" for comparison instead of "!=".

		} catch (\Exception $e) 
		{
			return ['success' => false, 'message' => $e->getMessage()];
		}

		return [ 'success' => true, 'count' => count($pages), 'followers' => $pages ];
	}




	public function followers()
	{
		if ($this->_auth() == "flow")
		{
			$followers = $this->_get_follower_page(1, null);
			$this->_outputjson($followers);
		}
	}


	public function direct($i2fauth = '')
	{
		if ($this->_auth() == "flow")
		{
			$direct = $this->input->post('direct');

			if ($direct) 
			{ 
				$direct = json_decode($direct);

				$recipients = $direct->recipients;
				$filters = $direct->filters;

				foreach ($recipients as $recipient)
				{

				}
			}
			
			$this->_outputjson($followers);
		}

		
	}

	public function index()
	{
		
	}

}

/* End of file Insta.php */
/* Location: ./application/controllers/Insta.php */
<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class CI_Helper
{
	
	function __construct()
	{
		$this->ci =& get_instance();
	}

	function get_config($item)
	{
		return $this->ci->config->item($item);
	}
}


?>
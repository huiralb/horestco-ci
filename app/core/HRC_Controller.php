<?php
/**
* HRC Base Controller 
*/
class HRC_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function isEnabled($value = 1)
	{
		return $value == 1 ? true : false;
	}
}
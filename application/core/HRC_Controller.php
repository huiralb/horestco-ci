<?php
/**
* HRC Base Controller 
*/
class HRC_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		echo "Base Controller : ". __class__;
		echo "<br>";
	}
}
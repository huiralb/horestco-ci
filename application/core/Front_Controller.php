<?php
/**
* Controlling Admin
*/
class Front_Controller extends HRC_Controller
{
	
	function __construct()
	{
		parent::__construct();

		echo "Front End Controller : ". __class__ . " was loaded <br>";
	}
}
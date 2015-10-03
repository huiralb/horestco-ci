<?php
@include_once(APPPATH . 'core/Admin_Controller.php');

/**
* 
*/
class Admin extends Admin_Controller
{
	private $products;

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('migration');
		if ( ! $this->migration->current())
		{
			show_error($this->migration->error_string());
		}
		$this->migration->current();
	}

}
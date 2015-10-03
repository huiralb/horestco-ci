<?php
@include_once APPPATH . 'core/Admin_Controller.php';
/**
* 
*/
class Migration extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('migration');
	}

	public function create()
	{
		if ( ! $this->migration->current())
		{
			show_error($this->migration->error_string());
		}

		$create = $this->migration->latest();
		if($create) echo "Migration success";
	}

	public function drop($version = 0)
	{
		$drop = $this->migration->version($version);
		var_dump( $drop );
	}
}
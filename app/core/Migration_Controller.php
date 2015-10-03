<?php
/**
* 
*/
class Migration_Controller extends HRC_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('migration');
	}

	protected function create()
	{
		if ( ! $this->migration->current())
		{
			show_error($this->migration->error_string());
		}

		$create = $this->migration->latest();
		return $create;
	}

	public function drop($version = 0)
	{
		$drop = $this->migration->version($version);
		return $drop;
	}
}
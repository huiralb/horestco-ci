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

	public function catalogs()
	{
		return \Product::enabled()->with(array('images'))->get();
	}

	public function catalog($slug)
	{
		return \Product::where('slug', $slug)->enabled()
						->with(array(
							'images' => function($query){
								$query->sort();
							}
						))
						->first();
	}
}
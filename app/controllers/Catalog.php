<?php
/**
* 
*/
class Catalog extends HRC_Controller
{
	private $products;

	function __construct() {
		parent::__construct();
	}

	// show all product
	public function index()
	{
		$data['products'] = Product::enabled()->get();
		$this->load->view('catalog/products', $data);
	}

	public function detail($id)
	{
		$data['product'] = Product::where('slug', $id)->first();
		$this->load->view('catalog/detail', $data);
	}
}
<?php
@include_once(APPPATH . 'core/Front_Controller.php');

/**
* 
*/
class Catalog extends Front_Controller
{
	private $products;

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['products'] = Product::active()->get();
		$this->load->view('catalog/home', $data);
	}

	public function detail($id)
	{
		$data['product'] = Product::where('productId', $id)->first();
		$this->load->view('catalog/detail', $data);
	}
}
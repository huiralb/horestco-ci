<?php
/**
* 
*/
class Catalog extends HRC_Controller
{
	private $products;
	protected $image;

	function __construct() {
		parent::__construct();
		$this->load->helper('Image');
	}

	// show all product
	public function index()
	{
		$data['products'] = parent::fetchProduct();
		$this->load->view('catalog/products', $data);
	}

	public function detail($id)
	{
		$data['product'] = Product::where('slug', $id)->first();
		$this->load->view('catalog/detail', $data);
	}
}
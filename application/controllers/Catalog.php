<?php
/**
* 
*/
class Catalog extends CI_Controller
{
	
	function index()
	{
		var_dump(Supplier::all()->toArray());
	}

	public function detail($id)
	{
		$product = Product::where('productId', $id)->get()->toArray();
		echo "<pre>";
		var_dump($product);
		echo "</pre>";
	}
}
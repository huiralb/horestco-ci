<?php
use \Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent{

    protected $table = 'product';

	protected $primaryKey = 'productId';
}
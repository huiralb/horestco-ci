<?php
use \Illuminate\Database\Eloquent\Model;

class Product extends Model{

    protected $table = 'hrc_products';

	public function scopeEnabled($query)
	{
		return $query->where('is_enabled', 1);
	}
}
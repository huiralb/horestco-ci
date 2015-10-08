<?php
use \Illuminate\Database\Eloquent\Model as Eloquent;
class Product extends Eloquent{

    protected $table = 'hrc_products';

	public function scopeEnabled($query)
	{
		return $query->where('is_enabled', 1);
	}

	// Relationship hasmany
	public function images()
	{
		return $this->hasMany('Image');
	}
}
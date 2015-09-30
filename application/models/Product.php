<?php
use \Illuminate\Database\Eloquent\Model;

class Product extends Model{

    protected $table = 'product';

	protected $primaryKey = 'productId';

	public function scopeActive($query)
	{
		return $query->where('status', 'A');
	}

	public function scopeInactive($query)
	{
		return $query->where('status', 'I');
	}
}
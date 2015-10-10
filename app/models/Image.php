<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Illuminate\Database\Eloquent\Model as Eloquent;

class Image extends Eloquent{
	protected $table = 'hrc_images';

	public function scopeSort($query, $sort = 'asc')
	{
		return $query->orderBy('sort_order', $sort);
	}
}

/* End of file Image.php */
/* Location: .//D/GDRIVE/www.horestco.com/ci/app/models/Image.php */
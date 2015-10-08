<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Intervention\Image\ImageManagerStatic as Image;

/**
 * IMAGE FILE SYSTEM
 */
class HRC_Image extends Image{

	protected $imagick;
	protected $image =  'storage/images/';
	protected $file;
	protected $thumb;

	public function __construct($width = '', $file = '')
	{
		$this->file = $file;
		$this->width = $width;
	}

	public function display()
	{
		// if file image thumb is not exists, create it
		if(! file_exists($img = $this->thumb(APPPATH . $this->getImagePath())) )
		{
			$image = Image::make(APPPATH . $this->getImagePath() . $this->file);

			$image->resize($this->width, $this->width)->save($img);
		}
		
		echo '<img src="'.base_url() . $this->thumb( 'app/' . $this->getImagePath() ) .'">';
	}

	public function getPath()
	{
		$path = array(
			'year'		=> substr($this->file, 0, 4 ),
			'month'		=> substr($this->file, 4, 2 ),
			'code'		=> substr($this->file, 6, 7 ),
			'filename'  => $this->file
		);

		return $path;
	}

	public function generateFilename($code = 'hrc')
	{
		$rand = rand(5, 9);
		if ($rand < 1000) {
			$rand = 0 . $rand;
		}

		if ($rand < 100) {
			$rand = 0 . $rand;
		}

		if ($rand < 10) {
			$rand = 0 . $rand;
		}

		return date('Ym') . $code . $rand . substr(md5($rand), strlen(md5($rand)) / 2) ;
	}

	protected function folder_exist($folder)
	{
	    // Get canonicalized absolute pathname
	    $path = realpath($folder);

	    // If it exist, check if it's a directory
	    return ($path !== false AND is_dir($path)) ? $path : false;
	}

	private function thumb($path = '')
	{
		$this->thumb = 'thumb_' . $this->width .'_.jpg'; // extensi file kita perbaiki nanti

		return $path . $this->thumb;
	}

	private function getImagePath()
	{
		$path = $this->getPath();

		return $this->image . $path['year'] . '/' . $path['code'] . '/';
	}



}

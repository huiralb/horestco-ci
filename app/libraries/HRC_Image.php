<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * IMAGE FILE SYSTEM
 */
class HRC_Image{

	protected $file;
	protected $image;
	protected $width;
	protected $height;
	protected $ci;

	public function __construct($id = '', $width = '', $height = '')
	{
        // header('Content-Type: image/jpeg');
		$this->ci =& get_instance();

		$this->ci->config->load('cms/config');

		$this->ci->load->library('Imagick');

		$this->config = get_config();

		//
		$id = $id == '' ? null : $id;

		$this->width = $width == '' ? null : $width;

		$this->height = $height == '' ? null : $height;

		// getImage Table DB
		$this->image = \Image::where('id', $id)->first();

	}

	public function display()
	{
		// if file image thumb is not exists, create it
		if( !file_exists(BASEDIR . $this->thumb( $this->getImagePath() )) && !is_null($this->width) )
		{
			$image = new Imagick();
			$image->load(BASEDIR . $this->getImagePath() . $this->image->name);
			$image->resize($this->width, $this->height);
			$image->save(BASEDIR . $this->thumb( $this->getImagePath() ) );
		}
			

		if( is_null($this->width) )
		{
			echo '<img src="'.base_url() . $this->getImagePath() . $this->image->name . '">';
		}else{
			echo '<img src="'.base_url() . $this->thumb( $this->getImagePath() ) .'">';
		}
		
	}

	private function thumb($path = '')
	{
		return $path . 'thumb_' . $this->width .'_'. $this->height .'_'. $this->image->id .'.jpg'; // extensi file kita perbaiki nanti
	}

	private function getImagePath()
	{
		$path = $this->getPath();

		return $this->config['image-storage'] . $path['year'] . '/' . $path['code'] . '/';
	}

	public function getPath()
	{
		$path = array(
			'storage'	=> $this->config['image-storage'],
			'year'		=> substr($this->image->name, 0, 4 ),
			'month'		=> substr($this->image->name, 4, 2 ),
			'code'		=> substr($this->image->name, 6, 7 ),
			'filename'  => $this->image->name
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



}

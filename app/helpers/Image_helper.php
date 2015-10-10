<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function imageThumb($id, $width, $height)
{
	$CI =& get_instance();
	$CI->load->library('HRC_Image');
	$image = new HRC_Image($id, $width, $height);
	return $image->display();
}



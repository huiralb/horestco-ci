<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function imageThumb($width, $file)
{
	$CI =& get_instance();
	$CI->load->library('HRC_Image');
	$image = new HRC_Image($width, $file);
	$image->display();
}



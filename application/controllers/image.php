<?php

class Image extends CI_Controller {

	public function __construct() {
		parent::__construct();
	   
		$this->load->library("wimage");
	}

	public function resize() {
		$src 	= $_GET["src"];
		$path 	= str_replace(URL_APP, "", $src);
		$width 	= (int)$_GET["width"];
		$height = (int)$_GET["height"];
		
		WideImage::load($src)->resize($width, $height)->output("jpg");
	}

}
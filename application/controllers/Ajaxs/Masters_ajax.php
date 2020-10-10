<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masters_ajax extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('header_model');
		//$this->load->model('Masters/Category_model');
		$this->load->model('master_model');
	}  
	
}
?>
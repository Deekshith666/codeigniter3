<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masters_ajax extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('header_model');
		$this->load->model('Masters/Category_model');
	}  
	public function new_category()
	{
		// $details['menu'] = $this->header_model->get_menu();
		// $page = "modal/category_add";
		$this->load->view('modal/category_add');
	// echo "asd";
	}

	public function save_category()
	{
		$this->load->model('Masters/Category_model');   
		$category_name 			= $this->input->post('category_name');
		//log_message('debug','find'.$category_name);
		//var_dump($category_name);
		$this->Category_model->add_category($category_name);
		$details['category'] = $this->Category_model->get_category();
		$this->load->view('masters/category_saved',$details);
	
	}
}
?>
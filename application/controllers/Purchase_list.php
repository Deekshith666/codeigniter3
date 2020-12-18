<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class purchase_list extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('master_model');
			$this->load->model('header_model');
		} 
		public function index()
		{ 			
			$details1["menu"] = $this->header_model->get_menu();	
			$details["Purchase_list"] = $this->master_model->get_Purchase_list(0);
			$this->load->view("header",$details1);
			$this->load->view("Purchase_list",$details);
			$this->load->view("footer"); 
		} 
	}	
?>
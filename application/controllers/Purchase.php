<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class purchase extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('master_model');
			$this->load->model('header_model');
		} 
		public function index()
		{ 			
			$details1["menu"] 		= $this->header_model->get_menu();	
			$details["Purchase"] 	= $this->master_model->get_Purchase(0);
			$details["Supplier"] 	= $this->master_model->get_Suppliers(0);
			$details["Manufacturer"]= $this->master_model->get_Manufacturer(0);
			$details["Tax_group"] 	= $this->master_model->get_Tax_group(0);
			$this->load->view("header",$details1);
			$this->load->view("Purchase",$details);
			$this->load->view("footer"); 
		} 
}		
?>
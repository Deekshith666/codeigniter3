<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masters extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
		{
			parent::__construct();
			$this->load->model('master_model');
			$this->load->model('header_model');
		}  
	public function Tax_Group()
		{ 			
			$details1["menu"] = $this->header_model->get_menu();	
			$details["Tax_Group"] = $this->master_model->get_Tax_Group(0);
			$this->load->view("header",$details1);
			$this->load->view("Tax_Group",$details);
			$this->load->view("footer"); 
		}
	public function Bill_category()
		{ 			
			$details1["menu"] = $this->header_model->get_menu();	
			$details["Bill_category"] = $this->master_model->get_Bill_category(0);
			$this->load->view("header",$details1);
			$this->load->view("Bill_category",$details);
			$this->load->view("footer"); 
		} 	
}
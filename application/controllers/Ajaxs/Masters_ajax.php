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
	public function new_Tax_Group($id=0)
	{
	$details["id"] = $id;	
	$details["Tax_Group"] = $this->master_model->get_Tax_Group($id);	
	$this->load->view("ajax/new_Tax_Group",$details); 
	}
	public function save_Tax_Group()
	{
	$gtgl_id_pk = $_POST["gtgl_id_pk"];
	$gtgl_name = $_POST["gtgl_name"];
	$this->master_model->insert_Tax_Group($gtgl_id_pk,$gtgl_name);
	$details["Tax_Group"] = $this->master_model->get_Tax_Group(0);
	$this->load->view("ajax/Tax_Group_body",$details);
	}
	public function edit_Tax_Group()
	{
	$id=$_GET["id"];
	$details["id"] = $id;
	$details["Tax_Group"] = $this->master_model->get_Tax_Group($id);	
	$this->load->view("ajax/new_Tax_Group",$details); 	
	}
	public function delete_Tax_Group()
	{
	$id=$_GET["id"];
	$this->master_model->delete_Tax_Group($id);
	$details["Tax_Group"] = $this->master_model->get_Tax_Group(0);
	$this->load->view("ajax/Tax_Group_body",$details);
	}
	public function new_Bill_category($id=0)
					{
					$details["id"] = $id;	
					$details["Bill_category"] = $this->master_model->get_Bill_category($id);	
					$this->load->view("ajax/new_Bill_category",$details); 
					}
					public function save_Bill_category()
					{
						$gbcl_id_pk = $_POST["gbcl_id_pk"];
						$gbcl_name = $_POST["gbcl_name"];
					$this->master_model->insert_Bill_category($gbcl_id_pk,$gbcl_name);
					$details["Bill_category"] = $this->master_model->get_Bill_category(0);
					$this->load->view("ajax/Bill_category_body",$details);
					}
					public function edit_Bill_category()
					{
					$id=$_GET["id"];
					$details["id"] = $id;
					$details["Bill_category"] = $this->master_model->get_Bill_category($id);	
					$this->load->view("ajax/new_Bill_category",$details); 	
					}
					public function delete_Bill_category()
					{
					$id=$_GET["id"];
					$this->master_model->delete_Bill_category($id);
					$details["Bill_category"] = $this->master_model->get_Bill_category(0);
					$this->load->view("ajax/Bill_category_body",$details);
					}
}
?>
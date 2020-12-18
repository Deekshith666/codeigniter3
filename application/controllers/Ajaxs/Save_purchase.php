<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class save_purchase extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('header_model');
		//$this->load->model('Masters/Category_model');
		$this->load->model('ajax_model');
	}  
	public function index()
	{
		$Supplier_fk 	= $_GET['Supplier_fk'];
		$Invoice_no 	= $_GET['Invoice_no'];
		$Invoice_date 	= $_GET['Invoice_date'];
		$Cess	 		= $_GET['Cess'];
		$this->ajax_model->save_Purchase($Supplier_fk,$Invoice_no,$Invoice_date,$Cess);
	}
}
?>
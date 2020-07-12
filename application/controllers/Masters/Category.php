<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

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
		$this->load->model('header_model');
		$this->load->model('Masters/Category_model');
	}  
	public function index()
	{
		$details['menu'] = $this->header_model->get_menu();
		$details['category'] = $this->Category_model->get_category();
		$this->load->view('header',$details);
		$this->load->view('masters/category',$details);
		$this->load->view('footer');
	}
}

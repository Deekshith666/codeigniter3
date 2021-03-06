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
	}  
	public function products()
	{
		$details['products'] = $this->master_model->get_products();
		$this->load->view('header',$details);
		$this->load->view('products');
		$this->load->view('footer');
	}
	public function tax()
	{
		$details['tax'] = $this->master_model->get_tax();
		$this->load->view('header',$details);
		$this->load->view('tax');
		$this->load->view('footer');
	}
	public function category()
	{
		$details['category'] = $this->master_model->get_category();
		$this->load->view('header',$details);
		$this->load->view('category');
		$this->load->view('footer');
	}
}

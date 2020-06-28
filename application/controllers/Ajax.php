<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller {

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
		$this->load->model('ajax_model');
		$this->load->model('window_model');
	} 
	public function getRate()
	{
		$product_id = $_GET['id'];
		$rate = $this->ajax_model->get_rate($product_id);
		echo $rate;
	}
	public function getProduct()
	{
		$term = $_POST['term'];
		$reult = $this->window_model->get_items($term);
		echo json_encode($reult);
	}
}

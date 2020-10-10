<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
	public function get_category()
	{
		$this->db->select('CL_ID_PK,CL_Name');
		$this->db->from('gen_category_lookup');
		$this->db->where('CL_Active',10);
		$sql = $this->db->get()->result_array();
		echo $this->db->last_query() ;
		return $sql;
	}
	public function add_category($category_name)
	{
		
		$data = array(
			'CL_Name' => $category_name ,
		    'CL_Active' => 10 );
		$this->db->insert('gen_category_lookup', $data);
		//echo $this->db->last_query() ;
	}
}

/* End of file Affiliate_model.php */
/* Location: ./application/models/Affiliate_model.php */
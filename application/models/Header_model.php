<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
	public function get_menu()
	{
		$this->db->select('*');
		$this->db->from('gen_menu_table');
		$this->db->where('MT_Active', 10);
		$this->db->where('MT_Parent_FK is null');
		$this->db->order_by("MT_Order");
		$query = $this->db->get();
		return $query->result_array($query);
	}
	public function get_submenu($id)
	{
		$this->db->select('*');
		$this->db->from('gen_menu_table');
		$this->db->where('MT_Active', 10);
		$this->db->where('MT_Parent_FK',$id);
		$this->db->order_by("MT_Order");
		$query = $this->db->get();
		return $query->result_array($query);
		
	}
}

/* End of file Affiliate_model.php */
/* Location: ./application/models/Affiliate_model.php */
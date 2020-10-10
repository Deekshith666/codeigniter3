<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
	public function get_Tax_Group($id="0")
				{
					$this->db->select("*");
					$this->db->from("gen_tax_group_lookup");
					$this->db->where("gtgl_active", 10);
					if($id > 0)
					{
						$this->db->where("gtgl_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Tax_Group($id,$gtgl_name)
				{
					if($id > 0)
					{
						$data = array('gtgl_name' => $gtgl_name
						,'gtgl_active' => 10
						,'gtgl_added_by' => 0
						,'gtgl_added_on' => date('Y-m-d h:i:s')
						);
						$this->db->where("gtgl_id_pk", $id);
						$this->db->update("gen_tax_group_lookup", $data);
					}
					else
					{
					$data = array('gtgl_name' => $gtgl_name
	,'gtgl_active' => 10
	,'gtgl_added_by' => 0
	,'gtgl_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("gen_tax_group_lookup", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Tax_Group($id)
				{
					$this->db->where("gtgl_id_pk", $id);
					$this->db->delete("gen_tax_group_lookup");
				}
				public function get_Bill_category($id="0")
				{
					$this->db->select("*");
					$this->db->from("gen_bill_category_lookup");
					$this->db->where("gbcl_active", 10);
					if($id > 0)
					{
						$this->db->where("gbcl_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Bill_category($id,$gbcl_name)
				{
					if($id > 0)
					{
						$data = array('gbcl_name' => $gbcl_name
	,'gbcl_active' => 10
	,'gbcl_added_by' => 0
	,'gbcl_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("gbcl_id_pk", $id);
						$this->db->update("gen_bill_category_lookup", $data);
					}
					else
					{
					$data = array('gbcl_name' => $gbcl_name
	,'gbcl_active' => 10
	,'gbcl_added_by' => 0
	,'gbcl_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("gen_bill_category_lookup", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Bill_category($id)
				{
					$this->db->where("gbcl_id_pk", $id);
					$this->db->delete("gen_bill_category_lookup");
				}
}

/* End of file Affiliate_model.php */
/* Location: ./application/models/Affiliate_model.php */
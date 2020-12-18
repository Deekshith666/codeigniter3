<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajax_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
	public function get_rate($id)
	{
		$this->db->select('*');
		$this->db->from('gen_products');
		$this->db->where('p_id_pk', $id);
		$query = $this->db->get();
		$result = $query->result_array($query);
		$rate = 0 ;
		if($result)
		{
			foreach($result as $row)
			{
				$rate = $row['p_rate'];
			}
		}
		return $rate;
	}
	public function save_purchase($Supplier_fk,$Invoice_no,$Invoice_date,$Cess)
	{
		echo $Supplier_fk.",".$Invoice_no.",".$Invoice_date.",".$Cess;
		$this->db->select('*');
		$this->db->from('gen_products');
		$this->db->where('p_id_pk', $id);
		$query = $this->db->get();
		$result = $query->result_array($query);
		$rate = 0 ;
		if($result)
		{
			foreach($result as $row)
			{
				$rate = $row['p_rate'];
			}
		}
		return $rate;
	}
}

/* End of file Affiliate_model.php */
/* Location: ./application/models/Affiliate_model.php */
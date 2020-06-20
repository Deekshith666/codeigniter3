<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class window_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
	public function get_items()
	{
		$this->db->select('*');
		$this->db->from('gen_products');
		$this->db->where('p_active', 10);
		$this->db->order_by("p_name");
		$this->db->limit(10);
		$query = $this->db->get();
		$result = $query->result_array($query);
		$items = '[';
		if($result)
		{
			foreach($result as $row)
			{
				if($row['p_name'] != '')$items = $items."{ value: '".$row['p_name']."', id: '".$row['p_id_pk']."' },";
			}
		}
		$items = $items.']';
		return $items;
	}
}

/* End of file Affiliate_model.php */
/* Location: ./application/models/Affiliate_model.php */
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
				public function get_Items($id="0")
				{
					$this->db->select("*");
					$this->db->from("gen_item_lookup");
					$this->db->where("gil_active", 10);
					if($id > 0)
					{
						$this->db->where("gil_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Items($id,$gil_name,$gil_code,$gil_item_category_FK,$gil_reorder_quantity,$gil_unit_FK,$gil_manufacturer_FK,$gil_supplier_FK,$gil_tax_group_FK,$gil_cess,$gil_barcode,$gil_price,$gil_bill_category_FK,$gil_rack_FK)
				{
					if($id > 0)
					{
						$data = array('gil_name' => $gil_name
	,'gil_code' => $gil_code
	,'gil_item_category_FK' => $gil_item_category_FK
	,'gil_reorder_quantity' => $gil_reorder_quantity
	,'gil_unit_FK' => $gil_unit_FK
	,'gil_manufacturer_FK' => $gil_manufacturer_FK
	,'gil_supplier_FK' => $gil_supplier_FK
	,'gil_tax_group_FK' => $gil_tax_group_FK
	,'gil_cess' => $gil_cess
	,'gil_barcode' => $gil_barcode
	,'gil_price' => $gil_price
	,'gil_bill_category_FK' => $gil_bill_category_FK
	,'gil_rack_FK' => $gil_rack_FK
	,'gil_active' => 10
	,'gil_added_by' => 0
	,'gil_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("gil_id_pk", $id);
						$this->db->update("gen_item_lookup", $data);
					}
					else
					{
					$data = array('gil_name' => $gil_name
	,'gil_code' => $gil_code
	,'gil_item_category_FK' => $gil_item_category_FK
	,'gil_reorder_quantity' => $gil_reorder_quantity
	,'gil_unit_FK' => $gil_unit_FK
	,'gil_manufacturer_FK' => $gil_manufacturer_FK
	,'gil_supplier_FK' => $gil_supplier_FK
	,'gil_tax_group_FK' => $gil_tax_group_FK
	,'gil_cess' => $gil_cess
	,'gil_barcode' => $gil_barcode
	,'gil_price' => $gil_price
	,'gil_bill_category_FK' => $gil_bill_category_FK
	,'gil_rack_FK' => $gil_rack_FK
	,'gil_active' => 10
	,'gil_added_by' => 0
	,'gil_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("gen_item_lookup", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Items($id)
				{
					$this->db->where("gil_id_pk", $id);
					$this->db->delete("gen_item_lookup");
				}
	public function get_Suppliers($id="0")
				{
					$this->db->select("*");
					$this->db->from("gen_supplier_lookup");
					$this->db->where("gsl_active", 10);
					if($id > 0)
					{
						$this->db->where("gsl_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Suppliers($id,$gsl_name,$gsl_gstin,$gsl_contact_number,$gsl_address)
				{
					if($id > 0)
					{
						$data = array('gsl_name' => $gsl_name
	,'gsl_gstin' => $gsl_gstin
	,'gsl_contact_number' => $gsl_contact_number
	,'gsl_address' => $gsl_address
	,'gsl_,active' => 10
	,'gsl_added_by' => 0
	,'gsl_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("gsl_id_pk", $id);
						$this->db->update("gen_supplier_lookup", $data);
					}
					else
					{
					$data = array('gsl_name' => $gsl_name
	,'gsl_gstin' => $gsl_gstin
	,'gsl_contact_number' => $gsl_contact_number
	,'gsl_address' => $gsl_address
	,'gsl_,active' => 10
	,'gsl_added_by' => 0
	,'gsl_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("gen_supplier_lookup", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Suppliers($id)
				{
					$this->db->where("gsl_id_pk", $id);
					$this->db->delete("gen_supplier_lookup");
				}
public function get_Manufacturer($id="0")
				{
					$this->db->select("*");
					$this->db->from("gen_manufacturer_lookup");
					$this->db->where("gml_active", 10);
					if($id > 0)
					{
						$this->db->where("gml_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Manufacturer($id,$gml_name,$gml_hsn)
				{
					if($id > 0)
					{
						$data = array('gml_name' => $gml_name
	,'gml_hsn' => $gml_hsn
	,',gml_active' => 10
	,'gml_added_by' => 0
	,'gml_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("gml_id_pk", $id);
						$this->db->update("gen_manufacturer_lookup", $data);
					}
					else
					{
					$data = array('gml_name' => $gml_name
	,'gml_hsn' => $gml_hsn
	,',gml_active' => 10
	,'gml_added_by' => 0
	,'gml_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("gen_manufacturer_lookup", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Manufacturer($id)
				{
					$this->db->where("gml_id_pk", $id);
					$this->db->delete("gen_manufacturer_lookup");
				}
public function get_Item_category($id="0")
				{
					$this->db->select("*");
					$this->db->from("gen_item_category_lookup");
					$this->db->where("gicl_active", 10);
					if($id > 0)
					{
						$this->db->where("gicl_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Item_category($id,$gicl_name)
				{
					if($id > 0)
					{
						$data = array('gicl_name' => $gicl_name
	,',gicl_active' => 10
	,'gicl_added_by' => 0
	,'gicl_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("gicl_id_pk", $id);
						$this->db->update("gen_item_category_lookup", $data);
					}
					else
					{
					$data = array('gicl_name' => $gicl_name
	,',gicl_active' => 10
	,'gicl_added_by' => 0
	,'gicl_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("gen_item_category_lookup", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Item_category($id)
				{
					$this->db->where("gicl_id_pk", $id);
					$this->db->delete("gen_item_category_lookup");
				}
}

/* End of file Affiliate_model.php */
/* Location: ./application/models/Affiliate_model.php */
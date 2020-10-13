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
	,'gsl_active' => 10
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
	,'gsl_active' => 10
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
	,'gml_active' => 10
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
	,'gml_active' => 10
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
	,'gicl_active' => 10
	,'gicl_added_by' => 0
	,'gicl_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("gicl_id_pk", $id);
						$this->db->update("gen_item_category_lookup", $data);
					}
					else
					{
					$data = array('gicl_name' => $gicl_name
	,'gicl_active' => 10
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
	public function get_Rack($id="0")
				{
					$this->db->select("*");
					$this->db->from("gen_rack_lookup");
					$this->db->where("grl_active", 10);
					if($id > 0)
					{
						$this->db->where("grl_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Rack($id,$grl_name,$grl_shelf)
				{
					if($id > 0)
					{
						$data = array('grl_name' => $grl_name
	,'grl_shelf' => $grl_shelf
	,'grl_active' => 10
	,'grl_added_by' => 0
	,'grl_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("grl_id_pk", $id);
						$this->db->update("gen_rack_lookup", $data);
					}
					else
					{
					$data = array('grl_name' => $grl_name
	,'grl_shelf' => $grl_shelf
	,'grl_active' => 10
	,'grl_added_by' => 0
	,'grl_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("gen_rack_lookup", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Rack($id)
				{
					$this->db->where("grl_id_pk", $id);
					$this->db->delete("gen_rack_lookup");
				}
				public function get_Units($id="0")
				{
					$this->db->select("*");
					$this->db->from("gen_units_lookup");
					$this->db->where("gul_active", 10);
					if($id > 0)
					{
						$this->db->where("gul_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Units($id,$gul_name)
				{
					if($id > 0)
					{
						$data = array('gul_name' => $gul_name
	,'gul_active' => 10
	,'gul_added_by' => 0
	,'gul_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("gul_id_pk", $id);
						$this->db->update("gen_units_lookup", $data);
					}
					else
					{
					$data = array('gul_name' => $gul_name
	,'gul_active' => 10
	,'gul_added_by' => 0
	,'gul_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("gen_units_lookup", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Units($id)
				{
					$this->db->where("gul_id_pk", $id);
					$this->db->delete("gen_units_lookup");
				}
public function get_Tax($id="0")
				{
					$this->db->select("*");
					$this->db->from("gen_tax_lookup");
					$this->db->where("gtl_active", 10);
					if($id > 0)
					{
						$this->db->where("gtl_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Tax($id,$gtl_name,$gtl_tax_percentage)
				{
					if($id > 0)
					{
						$data = array('gtl_name' => $gtl_name
	,'gtl_tax_percentage' => $gtl_tax_percentage
	,'gtl_active' => 10
	,'gtl_added_by' => 0
	,'gtl_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("gtl_id_pk", $id);
						$this->db->update("gen_tax_lookup", $data);
					}
					else
					{
					$data = array('gtl_name' => $gtl_name
	,'gtl_tax_percentage' => $gtl_tax_percentage
	,'gtl_active' => 10
	,'gtl_added_by' => 0
	,'gtl_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("gen_tax_lookup", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Tax($id)
				{
					$this->db->where("gtl_id_pk", $id);
					$this->db->delete("gen_tax_lookup");
				}
				public function get_Purchase($id="0")
				{
					$this->db->select("*");
					$this->db->from("item_purchase_details");
					$this->db->where("ipd_active", 10);
					if($id > 0)
					{
						$this->db->where("ipd_id_pk", $id);
					}
					$query = $this->db->get();
					return $query->result_array($query);
				}
				public function insert_Purchase($id,$ipd_Item_fk,$ipd_Manufacturer_fk,$ipd_HSN,$ipd_Batch,$ipd_Expiry,$ipd_Packing,$ipd_No_of_unit,$ipd_Total_Quantity,$ipd_Free,$ipd_Rate,$ipd_Total_item_value,$ipd_Cost_per_Quantity,$ipd_Packing_Mrp,$ipd_Mrp_per_Quantity,$ipd_Discount,$ipd_Discount_Type,$ipd_Amount_Include_Gst,$ipd_Tax_fk,$ipd_Margin_Percentage,$ipd_Tax_on_free)
				{
					if($id > 0)
					{
						$data = array('ipd_Item_fk' => $ipd_Item_fk
	,'ipd_Manufacturer_fk' => $ipd_Manufacturer_fk
	,'ipd_HSN' => $ipd_HSN
	,'ipd_Batch' => $ipd_Batch
	,'ipd_Expiry' => $ipd_Expiry
	,'ipd_Packing' => $ipd_Packing
	,'ipd_No_of_unit' => $ipd_No_of_unit
	,'ipd_Total_Quantity' => $ipd_Total_Quantity
	,'ipd_Free' => $ipd_Free
	,'ipd_Rate' => $ipd_Rate
	,'ipd_Total_item_value' => $ipd_Total_item_value
	,'ipd_Cost_per_Quantity' => $ipd_Cost_per_Quantity
	,'ipd_Packing_Mrp' => $ipd_Packing_Mrp
	,'ipd_Mrp_per_Quantity' => $ipd_Mrp_per_Quantity
	,'ipd_Discount' => $ipd_Discount
	,'ipd_Discount_Type' => $ipd_Discount_Type
	,'ipd_Amount_Include_Gst' => $ipd_Amount_Include_Gst
	,'ipd_Tax_fk' => $ipd_Tax_fk
	,'ipd_Margin_Percentage' => $ipd_Margin_Percentage
	,'ipd_Tax_on_free' => $ipd_Tax_on_free
	,'ipd_active' => 10
	,'ipd_added_by' => 0
	,'ipd_added_on' => date('Y-m-d h:i:s')
	);
						$this->db->where("ipd_id_pk", $id);
						$this->db->update("item_purchase_details", $data);
					}
					else
					{
					$data = array('ipd_Item_fk' => $ipd_Item_fk
	,'ipd_Manufacturer_fk' => $ipd_Manufacturer_fk
	,'ipd_HSN' => $ipd_HSN
	,'ipd_Batch' => $ipd_Batch
	,'ipd_Expiry' => $ipd_Expiry
	,'ipd_Packing' => $ipd_Packing
	,'ipd_No_of_unit' => $ipd_No_of_unit
	,'ipd_Total_Quantity' => $ipd_Total_Quantity
	,'ipd_Free' => $ipd_Free
	,'ipd_Rate' => $ipd_Rate
	,'ipd_Total_item_value' => $ipd_Total_item_value
	,'ipd_Cost_per_Quantity' => $ipd_Cost_per_Quantity
	,'ipd_Packing_Mrp' => $ipd_Packing_Mrp
	,'ipd_Mrp_per_Quantity' => $ipd_Mrp_per_Quantity
	,'ipd_Discount' => $ipd_Discount
	,'ipd_Discount_Type' => $ipd_Discount_Type
	,'ipd_Amount_Include_Gst' => $ipd_Amount_Include_Gst
	,'ipd_Tax_fk' => $ipd_Tax_fk
	,'ipd_Margin_Percentage' => $ipd_Margin_Percentage
	,'ipd_Tax_on_free' => $ipd_Tax_on_free
	,'ipd_active' => 10
	,'ipd_added_by' => 0
	,'ipd_added_on' => date('Y-m-d h:i:s')
	);
					$this->db->insert("item_purchase_details", $data);
					}
					//echo $this->db->last_query() ;
				}
				public function delete_Purchase($id)
				{
					$this->db->where("ipd_id_pk", $id);
					$this->db->delete("item_purchase_details");
				}
}

/* End of file Affiliate_model.php */
/* Location: ./application/models/Affiliate_model.php */
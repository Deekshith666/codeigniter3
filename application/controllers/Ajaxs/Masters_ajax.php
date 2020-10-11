<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masters_ajax extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('header_model');
		//$this->load->model('Masters/Category_model');
		$this->load->model('master_model');
	}  
	public function new_Tax_Group($id=0)
	{
	$details["id"] = $id;	
	$details["Tax_Group"] = $this->master_model->get_Tax_Group($id);	
	$this->load->view("ajax/new_Tax_Group",$details); 
	}
	public function save_Tax_Group()
	{
	$gtgl_id_pk = $_POST["gtgl_id_pk"];
	$gtgl_name = $_POST["gtgl_name"];
	$this->master_model->insert_Tax_Group($gtgl_id_pk,$gtgl_name);
	$details["Tax_Group"] = $this->master_model->get_Tax_Group(0);
	$this->load->view("ajax/Tax_Group_body",$details);
	}
	public function edit_Tax_Group()
	{
	$id=$_GET["id"];
	$details["id"] = $id;
	$details["Tax_Group"] = $this->master_model->get_Tax_Group($id);	
	$this->load->view("ajax/new_Tax_Group",$details); 	
	}
	public function delete_Tax_Group()
	{
	$id=$_GET["id"];
	$this->master_model->delete_Tax_Group($id);
	$details["Tax_Group"] = $this->master_model->get_Tax_Group(0);
	$this->load->view("ajax/Tax_Group_body",$details);
	}
	public function new_Bill_category($id=0)
					{
					$details["id"] = $id;	
					$details["Bill_category"] = $this->master_model->get_Bill_category($id);	
					$this->load->view("ajax/new_Bill_category",$details); 
					}
					public function save_Bill_category()
					{
						$gbcl_id_pk = $_POST["gbcl_id_pk"];
						$gbcl_name = $_POST["gbcl_name"];
					$this->master_model->insert_Bill_category($gbcl_id_pk,$gbcl_name);
					$details["Bill_category"] = $this->master_model->get_Bill_category(0);
					$this->load->view("ajax/Bill_category_body",$details);
					}
					public function edit_Bill_category()
					{
					$id=$_GET["id"];
					$details["id"] = $id;
					$details["Bill_category"] = $this->master_model->get_Bill_category($id);	
					$this->load->view("ajax/new_Bill_category",$details); 	
					}
					public function delete_Bill_category()
					{
					$id=$_GET["id"];
					$this->master_model->delete_Bill_category($id);
					$details["Bill_category"] = $this->master_model->get_Bill_category(0);
					$this->load->view("ajax/Bill_category_body",$details);
					}

					public function new_Items($id=0)
					{
					$details["id"] = $id;	
					$details["Items"] = $this->master_model->get_Items($id);	
					$this->load->view("ajax/new_Items",$details); 
					}
					public function save_Items()
					{
						$gil_id_pk = $_POST["gil_id_pk"];
						$gil_name = $_POST["gil_name"];
						$gil_code = $_POST["gil_code"];
						$gil_item_category_FK = $_POST["gil_item_category_FK"];
						$gil_reorder_quantity = $_POST["gil_reorder_quantity"];
						$gil_unit_FK = $_POST["gil_unit_FK"];
						$gil_manufacturer_FK = $_POST["gil_manufacturer_FK"];
						$gil_supplier_FK = $_POST["gil_supplier_FK"];
						$gil_tax_group_FK = $_POST["gil_tax_group_FK"];
						$gil_cess = $_POST["gil_cess"];
						$gil_barcode = $_POST["gil_barcode"];
						$gil_price = $_POST["gil_price"];
						$gil_bill_category_FK = $_POST["gil_bill_category_FK"];
						$gil_rack_FK = $_POST["gil_rack_FK"];
					$this->master_model->insert_Items($gil_id_pk,$gil_name,$gil_code,$gil_item_category_FK,$gil_reorder_quantity,$gil_unit_FK,$gil_manufacturer_FK,$gil_supplier_FK,$gil_tax_group_FK,$gil_cess,$gil_barcode,$gil_price,$gil_bill_category_FK,$gil_rack_FK);
					$details["Items"] = $this->master_model->get_Items(0);
					$this->load->view("ajax/Items_body",$details);
					}
					public function edit_Items()
					{
					$id=$_GET["id"];
					$details["id"] = $id;
					$details["Items"] = $this->master_model->get_Items($id);	
					$this->load->view("ajax/new_Items",$details); 	
					}
					public function delete_Items()
					{
					$id=$_GET["id"];
					$this->master_model->delete_Items($id);
					$details["Items"] = $this->master_model->get_Items(0);
					$this->load->view("ajax/Items_body",$details);
					}
public function new_Suppliers($id=0)
					{
					$details["id"] = $id;	
					$details["Suppliers"] = $this->master_model->get_Suppliers($id);	
					$this->load->view("ajax/new_Suppliers",$details); 
					}
					public function save_Suppliers()
					{
						$gsl_id_pk = $_POST["gsl_id_pk"];
						$gsl_name = $_POST["gsl_name"];
						$gsl_gstin = $_POST["gsl_gstin"];
						$gsl_contact_number = $_POST["gsl_contact_number"];
						$gsl_address = $_POST["gsl_address"];
					$this->master_model->insert_Suppliers($gsl_id_pk,$gsl_name,$gsl_gstin,$gsl_contact_number,$gsl_address);
					$details["Suppliers"] = $this->master_model->get_Suppliers(0);
					$this->load->view("ajax/Suppliers_body",$details);
					}
					public function edit_Suppliers()
					{
					$id=$_GET["id"];
					$details["id"] = $id;
					$details["Suppliers"] = $this->master_model->get_Suppliers($id);	
					$this->load->view("ajax/new_Suppliers",$details); 	
					}
					public function delete_Suppliers()
					{
					$id=$_GET["id"];
					$this->master_model->delete_Suppliers($id);
					$details["Suppliers"] = $this->master_model->get_Suppliers(0);
					$this->load->view("ajax/Suppliers_body",$details);
					}
				public function new_Manufacturer($id=0)
					{
					$details["id"] = $id;	
					$details["Manufacturer"] = $this->master_model->get_Manufacturer($id);	
					$this->load->view("ajax/new_Manufacturer",$details); 
					}
					public function save_Manufacturer()
					{
						$gml_id_pk = $_POST["gml_id_pk"];
						$gml_name = $_POST["gml_name"];
						$gml_hsn = $_POST["gml_hsn"];
					$this->master_model->insert_Manufacturer($gml_id_pk,$gml_name,$gml_hsn);
					$details["Manufacturer"] = $this->master_model->get_Manufacturer(0);
					$this->load->view("ajax/Manufacturer_body",$details);
					}
					public function edit_Manufacturer()
					{
					$id=$_GET["id"];
					$details["id"] = $id;
					$details["Manufacturer"] = $this->master_model->get_Manufacturer($id);	
					$this->load->view("ajax/new_Manufacturer",$details); 	
					}
					public function delete_Manufacturer()
					{
					$id=$_GET["id"];
					$this->master_model->delete_Manufacturer($id);
					$details["Manufacturer"] = $this->master_model->get_Manufacturer(0);
					$this->load->view("ajax/Manufacturer_body",$details);
					}
public function new_Item_category($id=0)
					{
					$details["id"] = $id;	
					$details["Item_category"] = $this->master_model->get_Item_category($id);	
					$this->load->view("ajax/new_Item_category",$details); 
					}
					public function save_Item_category()
					{
						$gicl_id_pk = $_POST["gicl_id_pk"];
						$gicl_name = $_POST["gicl_name"];
					$this->master_model->insert_Item_category($gicl_id_pk,$gicl_name);
					$details["Item_category"] = $this->master_model->get_Item_category(0);
					$this->load->view("ajax/Item_category_body",$details);
					}
					public function edit_Item_category()
					{
					$id=$_GET["id"];
					$details["id"] = $id;
					$details["Item_category"] = $this->master_model->get_Item_category($id);	
					$this->load->view("ajax/new_Item_category",$details); 	
					}
					public function delete_Item_category()
					{
					$id=$_GET["id"];
					$this->master_model->delete_Item_category($id);
					$details["Item_category"] = $this->master_model->get_Item_category(0);
					$this->load->view("ajax/Item_category_body",$details);
					}

	public function new_Purchase($id=0)
					{
					$details["id"] = $id;	
					$details["Purchase"] = $this->master_model->get_Purchase($id);	
					$this->load->view("ajax/new_Purchase",$details); 
					}
					public function save_Purchase()
					{
						$ipd_id_pk = $_POST["ipd_id_pk"];
						$ipd_Item_fk = $_POST["ipd_Item_fk"];
						$ipd_Manufacturer_fk = $_POST["ipd_Manufacturer_fk"];
						$ipd_HSN = $_POST["ipd_HSN"];
						$ipd_Batch = $_POST["ipd_Batch"];
						$ipd_Expiry = $_POST["ipd_Expiry"];
						$ipd_Packing = $_POST["ipd_Packing"];
						$ipd_No_of_unit = $_POST["ipd_No_of_unit"];
						$ipd_Total_Quantity = $_POST["ipd_Total_Quantity"];
						$ipd_Free = $_POST["ipd_Free"];
						$ipd_Rate = $_POST["ipd_Rate"];
						$ipd_Total_item_value = $_POST["ipd_Total_item_value"];
						$ipd_Cost_per_Quantity = $_POST["ipd_Cost_per_Quantity"];
						$ipd_Packing_Mrp = $_POST["ipd_Packing_Mrp"];
						$ipd_Mrp_per_Quantity = $_POST["ipd_Mrp_per_Quantity"];
						$ipd_Discount = $_POST["ipd_Discount"];
						$ipd_Discount_Type = $_POST["ipd_Discount_Type"];
						$ipd_Total_Item_value = $_POST["ipd_Total_Item_value"];
						$ipd_Amount_Include_Gst = $_POST["ipd_Amount_Include_Gst"];
						$ipd_Tax_fk = $_POST["ipd_Tax_fk"];
						$ipd_Margin_Percentage = $_POST["ipd_Margin_Percentage"];
						$ipd_Tax_on_free = $_POST["ipd_Tax_on_free"];
					$this->master_model->insert_Purchase($ipd_id_pk,$ipd_Item_fk,$ipd_Manufacturer_fk,$ipd_HSN,$ipd_Batch,$ipd_Expiry,$ipd_Packing,$ipd_No_of_unit,$ipd_Total_Quantity,$ipd_Free,$ipd_Rate,$ipd_Total_item_value,$ipd_Cost_per_Quantity,$ipd_Packing_Mrp,$ipd_Mrp_per_Quantity,$ipd_Discount,$ipd_Discount_Type,$ipd_Total_Item_value,$ipd_Amount_Include_Gst,$ipd_Tax_fk,$ipd_Margin_Percentage,$ipd_Tax_on_free);
					$details["Purchase"] = $this->master_model->get_Purchase(0);
					$this->load->view("ajax/Purchase_body",$details);
					}
					public function edit_Purchase()
					{
					$id=$_GET["id"];
					$details["id"] = $id;
					$details["Purchase"] = $this->master_model->get_Purchase($id);	
					$this->load->view("ajax/new_Purchase",$details); 	
					}
					public function delete_Purchase()
					{
					$id=$_GET["id"];
					$this->master_model->delete_Purchase($id);
					$details["Purchase"] = $this->master_model->get_Purchase(0);
					$this->load->view("ajax/Purchase_body",$details);
					}	
public function new_Rack($id=0)
					{
					$details["id"] = $id;	
					$details["Rack"] = $this->master_model->get_Rack($id);	
					$this->load->view("ajax/new_Rack",$details); 
					}
					public function save_Rack()
					{
						$grl_id_pk = $_POST["grl_id_pk"];
						$grl_name = $_POST["grl_name"];
						$grl_shelf = $_POST["grl_shelf"];
					$this->master_model->insert_Rack($grl_id_pk,$grl_name,$grl_shelf);
					$details["Rack"] = $this->master_model->get_Rack(0);
					$this->load->view("ajax/Rack_body",$details);
					}
					public function edit_Rack()
					{
					$id=$_GET["id"];
					$details["id"] = $id;
					$details["Rack"] = $this->master_model->get_Rack($id);	
					$this->load->view("ajax/new_Rack",$details); 	
					}
					public function delete_Rack()
					{
					$id=$_GET["id"];
					$this->master_model->delete_Rack($id);
					$details["Rack"] = $this->master_model->get_Rack(0);
					$this->load->view("ajax/Rack_body",$details);
					}

	public function new_Units($id=0)
					{
					$details["id"] = $id;	
					$details["Units"] = $this->master_model->get_Units($id);	
					$this->load->view("ajax/new_Units",$details); 
					}
					public function save_Units()
					{
						$gul_id_pk = $_POST["gul_id_pk"];
						$gul_name = $_POST["gul_name"];
					$this->master_model->insert_Units($gul_id_pk,$gul_name);
					$details["Units"] = $this->master_model->get_Units(0);
					$this->load->view("ajax/Units_body",$details);
					}
					public function edit_Units()
					{
					$id=$_GET["id"];
					$details["id"] = $id;
					$details["Units"] = $this->master_model->get_Units($id);	
					$this->load->view("ajax/new_Units",$details); 	
					}
					public function delete_Units()
					{
					$id=$_GET["id"];
					$this->master_model->delete_Units($id);
					$details["Units"] = $this->master_model->get_Units(0);
					$this->load->view("ajax/Units_body",$details);
					}			

}
?>
<link href="<?php echo $this->config->item('admin_js_path');?>chosen/chosen.min.css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="<?php echo $this->config->item('admin_js_path');?>chosen/chosen.jquery.min.js"></script>
<div class='form-group'>
				<?php
				$ipd_id_pk='';$ipd_Item_fk='';$ipd_Manufacturer_fk='';$ipd_HSN='';$ipd_Batch='';$ipd_Expiry='';$ipd_Packing='';$ipd_No_of_unit='';$ipd_Total_Quantity='';$ipd_Free='';$ipd_Rate='';$ipd_Total_item_value='';$ipd_Cost_per_Quantity='';$ipd_Packing_Mrp='';$ipd_Mrp_per_Quantity='';$ipd_Discount='';$ipd_Discount_Type='';$ipd_Amount_Include_Gst='';$ipd_Tax_fk='';$ipd_Margin_Percentage='';$ipd_Tax_on_free=''; 
				if($id > 0)
				{
					if($Purchase)
					{
						foreach($Purchase as $row)
						{
							$ipd_id_pk = $row['ipd_id_pk'];$ipd_Item_fk=$row['ipd_Item_fk'];$ipd_Manufacturer_fk=$row['ipd_Manufacturer_fk'];$ipd_HSN=$row['ipd_HSN'];$ipd_Batch=$row['ipd_Batch'];$ipd_Expiry=$row['ipd_Expiry'];$ipd_Packing=$row['ipd_Packing'];$ipd_No_of_unit=$row['ipd_No_of_unit'];$ipd_Total_Quantity=$row['ipd_Total_Quantity'];$ipd_Free=$row['ipd_Free'];$ipd_Rate=$row['ipd_Rate'];$ipd_Total_item_value=$row['ipd_Total_item_value'];$ipd_Cost_per_Quantity=$row['ipd_Cost_per_Quantity'];$ipd_Packing_Mrp=$row['ipd_Packing_Mrp'];$ipd_Mrp_per_Quantity=$row['ipd_Mrp_per_Quantity'];$ipd_Discount=$row['ipd_Discount'];$ipd_Discount_Type=$row['ipd_Discount_Type'];$ipd_Amount_Include_Gst=$row['ipd_Amount_Include_Gst'];$ipd_Tax_fk=$row['ipd_Tax_fk'];$ipd_Margin_Percentage=$row['ipd_Margin_Percentage'];$ipd_Tax_on_free=$row['ipd_Tax_on_free'];
						}
					}
				}	
				?>
				<input type='hidden' id='ipd_id_pk' name='ipd_id_pk' value='<?php echo $id;?>' />
				
						<div>
							
							<!-- <input type="hidden" name="ipd_Item_fk" id="ipd_Item_fk"> -->
							<select placeholder="Type here" class="chosen-select2 form-control">
								
                                    <option value="0">Select Items</option>
                                    <?php 
                                    $Items_array = '';
                                    if($Items)
                                    {
                                        foreach ($Items as $row) {
                                            ?>
                                        <option value="<?php echo $row['gil_id_pk'];?>" id="ipd_Item_fk"><?php echo $row['gil_name'];?></option>
                                            <?php
                                        }
                                    }
                                    ?> 
                            </select>

						</div>
						<label></label>
					
						<div>
							 <!-- <input type="hidden" name="ipd_Manufacturer_fk" id="ipd_Manufacturer_fk"> -->
							<select placeholder="Type here" class="chosen-select3 form-control">
                                    <option value="0">Select Manufacturer</option>
                                    <?php 
                                    $Manufacturer_array = '';
                                    if($Manufacturer)
                                    {
                                        foreach ($Manufacturer as $row) {
                                            ?>
                                        <option value="<?php echo $row['gml_id_pk'];?>" id="ipd_Manufacturer_fk"><?php echo $row['gml_name'];?></option>
                                            <?php
                                        }
                                    }
                                    ?> 
                              </select>
						</div>
						<label></label>
					
						<input  type='text' name='ipd_HSN' id='ipd_HSN' class='form-control' value='<?php echo $ipd_HSN;?>' placeholder='HSN'>
						<label></label>
						
						<input  type='text' name='ipd_Batch' id='ipd_Batch' class='form-control' value='<?php echo $ipd_Batch;?>' placeholder='Batch'>
						<label></label>
						<input  type='text' name='ipd_Expiry' id='ipd_Expiry' class='form-control' value='<?php echo $ipd_Expiry;?>' placeholder='Expiry'>
						<label></label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_Packing' id='ipd_Packing' class='form-control' value='<?php echo $ipd_Packing;?>' placeholder='Packing'>
						<label></label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_No_of_unit' id='ipd_No_of_unit' class='form-control' value='<?php echo $ipd_No_of_unit;?>' placeholder='No of unit'>
						<label></label>
						<input  type='text' name='ipd_Total_Quantity' id='ipd_Total_Quantity' class='form-control' value='<?php echo $ipd_Total_Quantity;?>' placeholder='Total_Quantity'>
						<label></label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_Free' id='ipd_Free' class='form-control' value='<?php echo $ipd_Free;?>' placeholder='Free'>
						<label></label>
						<input  type='text' name='ipd_Rate' id='ipd_Rate' class='form-control' value='<?php echo $ipd_Rate;?>' placeholder='Rate'>
						<label></label>
						<input  type='text' name='ipd_Total_item_value' id='ipd_Total_item_value' class='form-control' value='<?php echo $ipd_Total_item_value;?>' placeholder='Total item value'>
						<label></label>
						<input  type='text' name='ipd_Cost_per_Quantity' id='ipd_Cost_per_Quantity' class='form-control' value='<?php echo $ipd_Cost_per_Quantity;?>' placeholder='Cost per Quantity'>
						<label></label>
						<input  type='text' name='ipd_Packing_Mrp' id='ipd_Packing_Mrp' class='form-control' value='<?php echo $ipd_Packing_Mrp;?>' placeholder='Packing Mrp'>
						<label></label>
						<input  type='text' name='ipd_Mrp_per_Quantity' id='ipd_Mrp_per_Quantity' class='form-control' value='<?php echo $ipd_Mrp_per_Quantity;?>' placeholder='Mrp per Quantity'>
						<label></label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_Discount' id='ipd_Discount' class='form-control' value='<?php echo $ipd_Discount;?>' placeholder='Discount'>
						<label></label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_Discount_Type' id='ipd_Discount_Type' class='form-control' value='<?php echo $ipd_Discount_Type;?>' placeholder='Discount Type'>
						<label></label>
						<input  type='text' name='ipd_Amount_Include_Gst' id='ipd_Amount_Include_Gst' class='form-control' value='<?php echo $ipd_Amount_Include_Gst;?>' placeholder='Amount Include GST'>
						
						<label></label>
						<div>
							<!-- <input type="hidden" name="ipd_Tax_fk" id="ipd_Tax_fk"> -->
							<select placeholder="Type here" class="chosen-select3 form-control">
                                    <option value="0">Select Tax</option>
                                    <?php 
                                    $Tax_array = '';
                                    if($Tax_group)
                                    {
                                        foreach ($Tax_group as $row) {
                                            ?>
                                        <option value="<?php echo $row['gtgl_id_pk'];?>" id="ipd_Tax_fk"><?php echo $row['gtgl_name'];?></option>
                                            <?php
                                        }
                                    }
                                    ?> 
                            </select>
						</div>
						
						<label></label>
						<input  type='text' name='ipd_Margin_Percentage' id='ipd_Margin_Percentage' class='form-control' value='<?php echo $ipd_Margin_Percentage;?>' placeholder='Margin Percentage'>
						<label></label>
						<input  type='text' name='ipd_Tax_on_free' id='ipd_Tax_on_free' class='form-control' value='<?php echo $ipd_Tax_on_free;?>' placeholder='Tax on free'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addPurchase' onclick='save_Purchase()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Purchase() {
					var ipd_id_pk = document.getElementById('ipd_id_pk').value;	
					
						var ipd_Item_fk = document.getElementById('ipd_Item_fk').value;
						if(ipd_Item_fk == '')
							{
								alert('Please enter Item_fk');
								document.getElementById('ipd_Item_fk').focus();
								return false;
							}
						var ipd_Manufacturer_fk = document.getElementById('ipd_Manufacturer_fk').value;
						if(ipd_Manufacturer_fk == '')
							{
								alert('Please enter Manufacturer_fk');
								document.getElementById('ipd_Manufacturer_fk').focus();
								return false;
							}
						var ipd_HSN = document.getElementById('ipd_HSN').value;
						if(ipd_HSN == '')
							{
								alert('Please enter HSN');
								document.getElementById('ipd_HSN').focus();
								return false;
							}
						var ipd_Batch = document.getElementById('ipd_Batch').value;
						if(ipd_Batch == '')
							{
								alert('Please enter Batch');
								document.getElementById('ipd_Batch').focus();
								return false;
							}
						var ipd_Expiry = document.getElementById('ipd_Expiry').value;
						if(ipd_Expiry == '')
							{
								alert('Please enter Expiry');
								document.getElementById('ipd_Expiry').focus();
								return false;
							}
						var ipd_Packing = document.getElementById('ipd_Packing').value;
						if(ipd_Packing == '')
							{
								alert('Please enter Packing');
								document.getElementById('ipd_Packing').focus();
								return false;
							}
						var ipd_No_of_unit = document.getElementById('ipd_No_of_unit').value;
						if(ipd_No_of_unit == '')
							{
								alert('Please enter No_of_unit');
								document.getElementById('ipd_No_of_unit').focus();
								return false;
							}
						var ipd_Total_Quantity = document.getElementById('ipd_Total_Quantity').value;
						if(ipd_Total_Quantity == '')
							{
								alert('Please enter Total_Quantity');
								document.getElementById('ipd_Total_Quantity').focus();
								return false;
							}
						var ipd_Free = document.getElementById('ipd_Free').value;
						if(ipd_Free == '')
							{
								alert('Please enter Free');
								document.getElementById('ipd_Free').focus();
								return false;
							}
						var ipd_Rate = document.getElementById('ipd_Rate').value;
						if(ipd_Rate == '')
							{
								alert('Please enter Rate');
								document.getElementById('ipd_Rate').focus();
								return false;
							}
						var ipd_Total_item_value = document.getElementById('ipd_Total_item_value').value;
						if(ipd_Total_item_value == '')
							{
								alert('Please enter Total_item_value');
								document.getElementById('ipd_Total_item_value').focus();
								return false;
							}
						var ipd_Cost_per_Quantity = document.getElementById('ipd_Cost_per_Quantity').value;
						if(ipd_Cost_per_Quantity == '')
							{
								alert('Please enter Cost_per_Quantity');
								document.getElementById('ipd_Cost_per_Quantity').focus();
								return false;
							}
						var ipd_Packing_Mrp = document.getElementById('ipd_Packing_Mrp').value;
						if(ipd_Packing_Mrp == '')
							{
								alert('Please enter Packing_Mrp');
								document.getElementById('ipd_Packing_Mrp').focus();
								return false;
							}
						var ipd_Mrp_per_Quantity = document.getElementById('ipd_Mrp_per_Quantity').value;
						if(ipd_Mrp_per_Quantity == '')
							{
								alert('Please enter Mrp_per_Quantity');
								document.getElementById('ipd_Mrp_per_Quantity').focus();
								return false;
							}
						var ipd_Discount = document.getElementById('ipd_Discount').value;
						if(ipd_Discount == '')
							{
								alert('Please enter Discount');
								document.getElementById('ipd_Discount').focus();
								return false;
							}
						var ipd_Discount_Type = document.getElementById('ipd_Discount_Type').value;
						if(ipd_Discount_Type == '')
							{
								alert('Please enter Discount_Type');
								document.getElementById('ipd_Discount_Type').focus();
								return false;
							}
						var ipd_Amount_Include_Gst = document.getElementById('ipd_Amount_Include_Gst').value;
						if(ipd_Amount_Include_Gst == '')
							{
								alert('Please enter Amount_Include_Gst');
								document.getElementById('ipd_Amount_Include_Gst').focus();
								return false;
							}
						var ipd_Tax_fk = document.getElementById('ipd_Tax_fk').value;
						if(ipd_Tax_fk == '')
							{
								alert('Please enter Tax_fk');
								document.getElementById('ipd_Tax_fk').focus();
								return false;
							}
						var ipd_Margin_Percentage = document.getElementById('ipd_Margin_Percentage').value;
						if(ipd_Margin_Percentage == '')
							{
								alert('Please enter Margin_Percentage');
								document.getElementById('ipd_Margin_Percentage').focus();
								return false;
							}
						var ipd_Tax_on_free = document.getElementById('ipd_Tax_on_free').value;
						if(ipd_Tax_on_free == '')
							{
								alert('Please enter Tax_on_free');
								document.getElementById('ipd_Tax_on_free').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Purchase');?>',
			    type  :'POST',
			    data  :{ipd_id_pk : ipd_id_pk,ipd_Item_fk:ipd_Item_fk,ipd_Manufacturer_fk:ipd_Manufacturer_fk,ipd_HSN:ipd_HSN,ipd_Batch:ipd_Batch,ipd_Expiry:ipd_Expiry,ipd_Packing:ipd_Packing,ipd_No_of_unit:ipd_No_of_unit,ipd_Total_Quantity:ipd_Total_Quantity,ipd_Free:ipd_Free,ipd_Rate:ipd_Rate,ipd_Total_item_value:ipd_Total_item_value,ipd_Cost_per_Quantity:ipd_Cost_per_Quantity,ipd_Packing_Mrp:ipd_Packing_Mrp,ipd_Mrp_per_Quantity:ipd_Mrp_per_Quantity,ipd_Discount:ipd_Discount,ipd_Discount_Type:ipd_Discount_Type,ipd_Amount_Include_Gst:ipd_Amount_Include_Gst,ipd_Tax_fk:ipd_Tax_fk,ipd_Margin_Percentage:ipd_Margin_Percentage,ipd_Tax_on_free:ipd_Tax_on_free},
			    success:function(data){
					document.getElementById('addPurchase').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Purchase Saved';
					document.getElementById('Purchase_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalPurchase').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			<script>

         	$(document).ready(function(){
         	$(".chosen-select2").chosen({no_results_text: "nothing found!"});
            $(".chosen-select3").chosen({no_results_text: "nothing found!"});
            $(".chosen-select4").chosen({no_results_text: "nothing found!"});
            });

			</script>
			
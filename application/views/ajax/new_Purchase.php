<div class='form-group'>
				<?php
				$ipd_id_pk='';$ipd_Item_fk='';$ipd_Manufacturer_fk='';$ipd_HSN='';$ipd_Batch='';$ipd_Expiry='';$ipd_Packing='';$ipd_No_of_unit='';$ipd_Total_Quantity='';$ipd_Free='';$ipd_Rate='';$ipd_Total_item_value='';$ipd_Cost_per_Quantity='';$ipd_Packing_Mrp='';$ipd_Mrp_per_Quantity='';$ipd_Discount='';$ipd_Discount_Type='';$ipd_Total_Item_value='';$ipd_Amount_Include_Gst='';$ipd_Tax_fk='';$ipd_Margin_Percentage='';$ipd_Tax_on_free=''; 
				if($id > 0)
				{
					if($Purchase)
					{
						foreach($Purchase as $row)
						{
							$ipd_id_pk = $row['ipd_id_pk'];$ipd_Item_fk=$row['ipd_Item_fk'];$ipd_Manufacturer_fk=$row['ipd_Manufacturer_fk'];$ipd_HSN=$row['ipd_HSN'];$ipd_Batch=$row['ipd_Batch'];$ipd_Expiry=$row['ipd_Expiry'];$ipd_Packing=$row['ipd_Packing'];$ipd_No_of_unit=$row['ipd_No_of_unit'];$ipd_Total_Quantity=$row['ipd_Total_Quantity'];$ipd_Free=$row['ipd_Free'];$ipd_Rate=$row['ipd_Rate'];$ipd_Total_item_value=$row['ipd_Total_item_value'];$ipd_Cost_per_Quantity=$row['ipd_Cost_per_Quantity'];$ipd_Packing_Mrp=$row['ipd_Packing_Mrp'];$ipd_Mrp_per_Quantity=$row['ipd_Mrp_per_Quantity'];$ipd_Discount=$row['ipd_Discount'];$ipd_Discount_Type=$row['ipd_Discount_Type'];$ipd_Total_Item_value=$row['ipd_Total_Item_value'];$ipd_Amount_Include_Gst=$row['ipd_Amount_Include_Gst'];$ipd_Tax_fk=$row['ipd_Tax_fk'];$ipd_Margin_Percentage=$row['ipd_Margin_Percentage'];$ipd_Tax_on_free=$row['ipd_Tax_on_free'];
						}
					}
				}	
				?>
				<input type='hidden' id='ipd_id_pk' name='ipd_id_pk' value='<?php echo $id;?>' />
				
						<label>Item</label>
						<input  type='text' name='ipd_Item_fk' id='ipd_Item_fk' class='form-control' value='<?php echo $ipd_Item_fk;?>' palceholder='Item_fk'>
						<label>Manufacturer</label>
						<input  type='text' name='ipd_Manufacturer_fk' id='ipd_Manufacturer_fk' class='form-control' value='<?php echo $ipd_Manufacturer_fk;?>' palceholder='Manufacturer_fk'>
						<label>HSN</label>
						<input  type='text' name='ipd_HSN' id='ipd_HSN' class='form-control' value='<?php echo $ipd_HSN;?>' palceholder='HSN'>
						<label>Batch</label>
						<input  type='text' name='ipd_Batch' id='ipd_Batch' class='form-control' value='<?php echo $ipd_Batch;?>' palceholder='Batch'>
						<label>Expiry</label>
						<input  type='text' name='ipd_Expiry' id='ipd_Expiry' class='form-control' value='<?php echo $ipd_Expiry;?>' palceholder='Expiry'>
						<label>Packing</label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_Packing' id='ipd_Packing' class='form-control' value='<?php echo $ipd_Packing;?>' palceholder='Packing'>
						<label>No_of_unit</label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_No_of_unit' id='ipd_No_of_unit' class='form-control' value='<?php echo $ipd_No_of_unit;?>' palceholder='No_of_unit'>
						<label>Total_Quantity</label>
						<input  type='text' name='ipd_Total_Quantity' id='ipd_Total_Quantity' class='form-control' value='<?php echo $ipd_Total_Quantity;?>' palceholder='Total_Quantity'>
						<label>Free</label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_Free' id='ipd_Free' class='form-control' value='<?php echo $ipd_Free;?>' palceholder='Free'>
						<label>Rate</label>
						<input  type='text' name='ipd_Rate' id='ipd_Rate' class='form-control' value='<?php echo $ipd_Rate;?>' palceholder='Rate'>
						<label>Total_item_value</label>
						<input  type='text' name='ipd_Total_item_value' id='ipd_Total_item_value' class='form-control' value='<?php echo $ipd_Total_item_value;?>' palceholder='Total_item_value'>
						<label>Cost_per_Quantity</label>
						<input  type='text' name='ipd_Cost_per_Quantity' id='ipd_Cost_per_Quantity' class='form-control' value='<?php echo $ipd_Cost_per_Quantity;?>' palceholder='Cost_per_Quantity'>
						<label>Packing_Mrp</label>
						<input  type='text' name='ipd_Packing_Mrp' id='ipd_Packing_Mrp' class='form-control' value='<?php echo $ipd_Packing_Mrp;?>' palceholder='Packing_Mrp'>
						<label>Mrp_per_Quantity</label>
						<input  type='text' name='ipd_Mrp_per_Quantity' id='ipd_Mrp_per_Quantity' class='form-control' value='<?php echo $ipd_Mrp_per_Quantity;?>' palceholder='Mrp_per_Quantity'>
						<label>Discount</label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_Discount' id='ipd_Discount' class='form-control' value='<?php echo $ipd_Discount;?>' palceholder='Discount'>
						<label>Discount_Type</label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='ipd_Discount_Type' id='ipd_Discount_Type' class='form-control' value='<?php echo $ipd_Discount_Type;?>' palceholder='Discount_Type'>
						<label>Total_Item_value</label>
						<input  type='text' name='ipd_Total_Item_value' id='ipd_Total_Item_value' class='form-control' value='<?php echo $ipd_Total_Item_value;?>' palceholder='Total_Item_value'>
						<label>Amount_Include_Gst</label>
						<input  type='text' name='ipd_Amount_Include_Gst' id='ipd_Amount_Include_Gst' class='form-control' value='<?php echo $ipd_Amount_Include_Gst;?>' palceholder='Amount_Include_Gst'>
						<label>Tax</label>
						<input  type='text' name='ipd_Tax_fk' id='ipd_Tax_fk' class='form-control' value='<?php echo $ipd_Tax_fk;?>' palceholder='Tax_fk'>
						<label>Margin_Percentage</label>
						<input  type='text' name='ipd_Margin_Percentage' id='ipd_Margin_Percentage' class='form-control' value='<?php echo $ipd_Margin_Percentage;?>' palceholder='Margin_Percentage'>
						<label>Tax_on_free</label>
						<input  type='text' name='ipd_Tax_on_free' id='ipd_Tax_on_free' class='form-control' value='<?php echo $ipd_Tax_on_free;?>' palceholder='Tax_on_free'></div>
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
						var ipd_Total_Item_value = document.getElementById('ipd_Total_Item_value').value;
						if(ipd_Total_Item_value == '')
							{
								alert('Please enter Total_Item_value');
								document.getElementById('ipd_Total_Item_value').focus();
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
			    data  :{ipd_id_pk : ipd_id_pk,ipd_Item_fk:ipd_Item_fk,ipd_Manufacturer_fk:ipd_Manufacturer_fk,ipd_HSN:ipd_HSN,ipd_Batch:ipd_Batch,ipd_Expiry:ipd_Expiry,ipd_Packing:ipd_Packing,ipd_No_of_unit:ipd_No_of_unit,ipd_Total_Quantity:ipd_Total_Quantity,ipd_Free:ipd_Free,ipd_Rate:ipd_Rate,ipd_Total_item_value:ipd_Total_item_value,ipd_Cost_per_Quantity:ipd_Cost_per_Quantity,ipd_Packing_Mrp:ipd_Packing_Mrp,ipd_Mrp_per_Quantity:ipd_Mrp_per_Quantity,ipd_Discount:ipd_Discount,ipd_Discount_Type:ipd_Discount_Type,ipd_Total_Item_value:ipd_Total_Item_value,ipd_Amount_Include_Gst:ipd_Amount_Include_Gst,ipd_Tax_fk:ipd_Tax_fk,ipd_Margin_Percentage:ipd_Margin_Percentage,ipd_Tax_on_free:ipd_Tax_on_free},
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
			
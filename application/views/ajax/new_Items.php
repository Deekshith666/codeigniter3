<div class='form-group'>
				<?php
				$gil_id_pk='';$gil_name='';$gil_code='';$gil_item_category_FK='';$gil_reorder_quantity='';$gil_unit_FK='';$gil_manufacturer_FK='';$gil_supplier_FK='';$gil_tax_group_FK='';$gil_cess='';$gil_barcode='';$gil_price='';$gil_bill_category_FK='';$gil_rack_FK=''; 
				if($id > 0)
				{
					if($Items)
					{
						foreach($Items as $row)
						{
							$gil_id_pk = $row['gil_id_pk'];$gil_name=$row['gil_name'];$gil_code=$row['gil_code'];$gil_item_category_FK=$row['gil_item_category_FK'];$gil_reorder_quantity=$row['gil_reorder_quantity'];$gil_unit_FK=$row['gil_unit_FK'];$gil_manufacturer_FK=$row['gil_manufacturer_FK'];$gil_supplier_FK=$row['gil_supplier_FK'];$gil_tax_group_FK=$row['gil_tax_group_FK'];$gil_cess=$row['gil_cess'];$gil_barcode=$row['gil_barcode'];$gil_price=$row['gil_price'];$gil_bill_category_FK=$row['gil_bill_category_FK'];$gil_rack_FK=$row['gil_rack_FK'];
						}
					}
				}	
				?>
				<input type='hidden' id='gil_id_pk' name='gil_id_pk' value='<?php echo $id;?>' />
				
						<label>Name</label>
						<input  type='text' name='gil_name' id='gil_name' class='form-control' value='<?php echo $gil_name;?>' palceholder='Name'>
						<label>Code</label>
						<input  type='text' name='gil_code' id='gil_code' class='form-control' value='<?php echo $gil_code;?>' palceholder='Code'>
						<label>Item Category</label>
						<input  type='text' name='gil_item_category_FK' id='gil_item_category_FK' class='form-control' value='<?php echo $gil_item_category_FK;?>' palceholder='Item_category_FK'>
						<label>Reorder Quantity</label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='gil_reorder_quantity' id='gil_reorder_quantity' class='form-control' value='<?php echo $gil_reorder_quantity;?>' palceholder='Reorder_quantity'>
						<label>Unit</label>
						<input  type='text' name='gil_unit_FK' id='gil_unit_FK' class='form-control' value='<?php echo $gil_unit_FK;?>' palceholder='Unit_FK'>
						<label>Manufacturer</label>
						<input  type='text' name='gil_manufacturer_FK' id='gil_manufacturer_FK' class='form-control' value='<?php echo $gil_manufacturer_FK;?>' palceholder='Manufacturer_FK'>
						<label>Supplier</label>
						<input  type='text' name='gil_supplier_FK' id='gil_supplier_FK' class='form-control' value='<?php echo $gil_supplier_FK;?>' palceholder='Supplier_FK'>
						<label>Tax group</label>
						<input  type='text' name='gil_tax_group_FK' id='gil_tax_group_FK' class='form-control' value='<?php echo $gil_tax_group_FK;?>' palceholder='Tax_group_FK'>
						<label>Cess</label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='gil_cess' id='gil_cess' class='form-control' value='<?php echo $gil_cess;?>' palceholder='Cess'>
						<label>Barcode</label>
						<input  type='text' name='gil_barcode' id='gil_barcode' class='form-control' value='<?php echo $gil_barcode;?>' palceholder='Barcode'>
						<label>Price</label>
						<input  type='text' name='gil_price' id='gil_price' class='form-control' value='<?php echo $gil_price;?>' palceholder='Price'>
						<label>Bill Category</label>
						<input  type='text' name='gil_bill_category_FK' id='gil_bill_category_FK' class='form-control' value='<?php echo $gil_bill_category_FK;?>' palceholder='Bill_category_FK'>
						<label>Rack</label>
						<input  type='text' name='gil_rack_FK' id='gil_rack_FK' class='form-control' value='<?php echo $gil_rack_FK;?>' palceholder='Rack_FK'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addItems' onclick='save_Items()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Items() {
					var gil_id_pk = document.getElementById('gil_id_pk').value;	
					
						var gil_name = document.getElementById('gil_name').value;
						if(gil_name == '')
							{
								alert('Please enter name');
								document.getElementById('gil_name').focus();
								return false;
							}
						var gil_code = document.getElementById('gil_code').value;
						if(gil_code == '')
							{
								alert('Please enter code');
								document.getElementById('gil_code').focus();
								return false;
							}
						var gil_item_category_FK = document.getElementById('gil_item_category_FK').value;
						if(gil_item_category_FK == '')
							{
								alert('Please enter item_category_FK');
								document.getElementById('gil_item_category_FK').focus();
								return false;
							}
						var gil_reorder_quantity = document.getElementById('gil_reorder_quantity').value;
						if(gil_reorder_quantity == '')
							{
								alert('Please enter reorder_quantity');
								document.getElementById('gil_reorder_quantity').focus();
								return false;
							}
						var gil_unit_FK = document.getElementById('gil_unit_FK').value;
						if(gil_unit_FK == '')
							{
								alert('Please enter unit_FK');
								document.getElementById('gil_unit_FK').focus();
								return false;
							}
						var gil_manufacturer_FK = document.getElementById('gil_manufacturer_FK').value;
						if(gil_manufacturer_FK == '')
							{
								alert('Please enter manufacturer_FK');
								document.getElementById('gil_manufacturer_FK').focus();
								return false;
							}
						var gil_supplier_FK = document.getElementById('gil_supplier_FK').value;
						if(gil_supplier_FK == '')
							{
								alert('Please enter supplier_FK');
								document.getElementById('gil_supplier_FK').focus();
								return false;
							}
						var gil_tax_group_FK = document.getElementById('gil_tax_group_FK').value;
						if(gil_tax_group_FK == '')
							{
								alert('Please enter tax_group_FK');
								document.getElementById('gil_tax_group_FK').focus();
								return false;
							}
						var gil_cess = document.getElementById('gil_cess').value;
						if(gil_cess == '')
							{
								alert('Please enter cess');
								document.getElementById('gil_cess').focus();
								return false;
							}
						var gil_barcode = document.getElementById('gil_barcode').value;
						if(gil_barcode == '')
							{
								alert('Please enter barcode');
								document.getElementById('gil_barcode').focus();
								return false;
							}
						var gil_price = document.getElementById('gil_price').value;
						if(gil_price == '')
							{
								alert('Please enter price');
								document.getElementById('gil_price').focus();
								return false;
							}
						var gil_bill_category_FK = document.getElementById('gil_bill_category_FK').value;
						if(gil_bill_category_FK == '')
							{
								alert('Please enter bill_category_FK');
								document.getElementById('gil_bill_category_FK').focus();
								return false;
							}
						var gil_rack_FK = document.getElementById('gil_rack_FK').value;
						if(gil_rack_FK == '')
							{
								alert('Please enter rack_FK');
								document.getElementById('gil_rack_FK').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Items');?>',
			    type  :'POST',
			    data  :{gil_id_pk : gil_id_pk,gil_name:gil_name,gil_code:gil_code,gil_item_category_FK:gil_item_category_FK,gil_reorder_quantity:gil_reorder_quantity,gil_unit_FK:gil_unit_FK,gil_manufacturer_FK:gil_manufacturer_FK,gil_supplier_FK:gil_supplier_FK,gil_tax_group_FK:gil_tax_group_FK,gil_cess:gil_cess,gil_barcode:gil_barcode,gil_price:gil_price,gil_bill_category_FK:gil_bill_category_FK,gil_rack_FK:gil_rack_FK},
			    success:function(data){
					document.getElementById('addItems').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Items Saved';
					document.getElementById('Items_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalItems').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			
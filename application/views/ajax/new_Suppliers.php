<div class='form-group'>
				<?php
				$gsl_id_pk='';$gsl_name='';$gsl_gstin='';$gsl_contact_number='';$gsl_address=''; 
				if($id > 0)
				{
					if($Suppliers)
					{
						foreach($Suppliers as $row)
						{
							$gsl_id_pk = $row['gsl_id_pk'];$gsl_name=$row['gsl_name'];$gsl_gstin=$row['gsl_gstin'];$gsl_contact_number=$row['gsl_contact_number'];$gsl_address=$row['gsl_address'];
						}
					}
				}	
				?>
				<input type='hidden' id='gsl_id_pk' name='gsl_id_pk' value='<?php echo $id;?>' />
				
						<label>Name</label>
						<input  type='text' name='gsl_name' id='gsl_name' class='form-control' value='<?php echo $gsl_name;?>' palceholder='Name'>
						<label>Gstin</label>
						<input  type='text' name='gsl_gstin' id='gsl_gstin' class='form-control' value='<?php echo $gsl_gstin;?>' palceholder='Gstin'>
						<label>Contact_number</label>
						<input  type='text' name='gsl_contact_number' id='gsl_contact_number' class='form-control' value='<?php echo $gsl_contact_number;?>' palceholder='Contact_number'>
						<label>Address</label>
						<input  type='text' name='gsl_address' id='gsl_address' class='form-control' value='<?php echo $gsl_address;?>' palceholder='Address'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addSuppliers' onclick='save_Suppliers()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Suppliers() {
					var gsl_id_pk = document.getElementById('gsl_id_pk').value;	
					
						var gsl_name = document.getElementById('gsl_name').value;
						if(gsl_name == '')
							{
								alert('Please enter name');
								document.getElementById('gsl_name').focus();
								return false;
							}
						var gsl_gstin = document.getElementById('gsl_gstin').value;
						if(gsl_gstin == '')
							{
								alert('Please enter gstin');
								document.getElementById('gsl_gstin').focus();
								return false;
							}
						var gsl_contact_number = document.getElementById('gsl_contact_number').value;
						if(gsl_contact_number == '')
							{
								alert('Please enter contact_number');
								document.getElementById('gsl_contact_number').focus();
								return false;
							}
						var gsl_address = document.getElementById('gsl_address').value;
						if(gsl_address == '')
							{
								alert('Please enter address');
								document.getElementById('gsl_address').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Suppliers');?>',
			    type  :'POST',
			    data  :{gsl_id_pk : gsl_id_pk,gsl_name:gsl_name,gsl_gstin:gsl_gstin,gsl_contact_number:gsl_contact_number,gsl_address:gsl_address},
			    success:function(data){
					document.getElementById('addSuppliers').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Suppliers Saved';
					document.getElementById('Suppliers_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalSuppliers').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			
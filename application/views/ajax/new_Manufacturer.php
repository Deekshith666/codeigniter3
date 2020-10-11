<div class='form-group'>
				<?php
				$gml_id_pk='';$gml_name='';$gml_hsn=''; 
				if($id > 0)
				{
					if($Manufacturer)
					{
						foreach($Manufacturer as $row)
						{
							$gml_id_pk = $row['gml_id_pk'];$gml_name=$row['gml_name'];$gml_hsn=$row['gml_hsn'];
						}
					}
				}	
				?>
				<input type='hidden' id='gml_id_pk' name='gml_id_pk' value='<?php echo $id;?>' />
				
						<label>Name</label>
						<input  type='text' name='gml_name' id='gml_name' class='form-control' value='<?php echo $gml_name;?>' palceholder='Name'>
						<label>Hsn</label>
						<input  type='text' name='gml_hsn' id='gml_hsn' class='form-control' value='<?php echo $gml_hsn;?>' palceholder='Hsn'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addManufacturer' onclick='save_Manufacturer()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Manufacturer() {
					var gml_id_pk = document.getElementById('gml_id_pk').value;	
					
						var gml_name = document.getElementById('gml_name').value;
						if(gml_name == '')
							{
								alert('Please enter name');
								document.getElementById('gml_name').focus();
								return false;
							}
						var gml_hsn = document.getElementById('gml_hsn').value;
						if(gml_hsn == '')
							{
								alert('Please enter hsn');
								document.getElementById('gml_hsn').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Manufacturer');?>',
			    type  :'POST',
			    data  :{gml_id_pk : gml_id_pk,gml_name:gml_name,gml_hsn:gml_hsn},
			    success:function(data){
					document.getElementById('addManufacturer').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Manufacturer Saved';
					document.getElementById('Manufacturer_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalManufacturer').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			
<div class='form-group'>
				<?php
				$gtl_id_pk='';$gtl_name='';$gtl_tax_percentage=''; 
				if($id > 0)
				{
					if($Tax)
					{
						foreach($Tax as $row)
						{
							$gtl_id_pk = $row['gtl_id_pk'];$gtl_name=$row['gtl_name'];$gtl_tax_percentage=$row['gtl_tax_percentage'];
						}
					}
				}	
				?>
				<input type='hidden' id='gtl_id_pk' name='gtl_id_pk' value='<?php echo $id;?>' />
				
						<label>Name</label>
						<input  type='text' name='gtl_name' id='gtl_name' class='form-control' value='<?php echo $gtl_name;?>' palceholder='Name'>
						<label>Tax_percentage</label>
						<input  onkeypress='return IsNumeric(event);'  type='text' name='gtl_tax_percentage' id='gtl_tax_percentage' class='form-control' value='<?php echo $gtl_tax_percentage;?>' palceholder='Tax_percentage'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addTax' onclick='save_Tax()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Tax() {
					var gtl_id_pk = document.getElementById('gtl_id_pk').value;	
					
						var gtl_name = document.getElementById('gtl_name').value;
						if(gtl_name == '')
							{
								alert('Please enter name');
								document.getElementById('gtl_name').focus();
								return false;
							}
						var gtl_tax_percentage = document.getElementById('gtl_tax_percentage').value;
						if(gtl_tax_percentage == '')
							{
								alert('Please enter tax_percentage');
								document.getElementById('gtl_tax_percentage').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Tax');?>',
			    type  :'POST',
			    data  :{gtl_id_pk : gtl_id_pk,gtl_name:gtl_name,gtl_tax_percentage:gtl_tax_percentage},
			    success:function(data){
					document.getElementById('addTax').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Tax Saved';
					document.getElementById('Tax_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalTax').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			
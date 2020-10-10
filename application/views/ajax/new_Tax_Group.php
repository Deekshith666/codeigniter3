<div class='form-group'>
				<?php
				$gtgl_id_pk='';$gtgl_name=''; 
				if($id > 0)
				{
					if($Tax_Group)
					{
						foreach($Tax_Group as $row)
						{
							$gtgl_id_pk = $row['gtgl_id_pk'];$gtgl_name=$row['gtgl_name'];
						}
					}
				}	
				?>
				<input type='hidden' id='gtgl_id_pk' name='gtgl_id_pk' value='<?php echo $id;?>' />
				
						<label>Name</label>
						<input  type='text' name='gtgl_name' id='gtgl_name' class='form-control' value='<?php echo $gtgl_name;?>' palceholder='Name'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addTax_Group' onclick='save_Tax_Group()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Tax_Group() {
					var gtgl_id_pk = document.getElementById('gtgl_id_pk').value;	
					
						var gtgl_name = document.getElementById('gtgl_name').value;
						if(gtgl_name == '')
							{
								alert('Please enter name');
								document.getElementById('gtgl_name').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Tax_Group');?>',
			    type  :'POST',
			    data  :{gtgl_id_pk : gtgl_id_pk,gtgl_name:gtgl_name},
			    success:function(data){
					document.getElementById('addTax_Group').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Tax_Group Saved';
					document.getElementById('Tax_Group_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalTax_Group').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			
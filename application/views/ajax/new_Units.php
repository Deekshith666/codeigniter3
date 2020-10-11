<div class='form-group'>
				<?php
				$gul_id_pk='';$gul_name=''; 
				if($id > 0)
				{
					if($Units)
					{
						foreach($Units as $row)
						{
							$gul_id_pk = $row['gul_id_pk'];$gul_name=$row['gul_name'];
						}
					}
				}	
				?>
				<input type='hidden' id='gul_id_pk' name='gul_id_pk' value='<?php echo $id;?>' />
				
						<label>Name</label>
						<input  type='text' name='gul_name' id='gul_name' class='form-control' value='<?php echo $gul_name;?>' palceholder='Name'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addUnits' onclick='save_Units()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Units() {
					var gul_id_pk = document.getElementById('gul_id_pk').value;	
					
						var gul_name = document.getElementById('gul_name').value;
						if(gul_name == '')
							{
								alert('Please enter name');
								document.getElementById('gul_name').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Units');?>',
			    type  :'POST',
			    data  :{gul_id_pk : gul_id_pk,gul_name:gul_name},
			    success:function(data){
					document.getElementById('addUnits').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Units Saved';
					document.getElementById('Units_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalUnits').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			
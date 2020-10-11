<div class='form-group'>
				<?php
				$grl_id_pk='';$grl_name='';$grl_shelf=''; 
				if($id > 0)
				{
					if($Rack)
					{
						foreach($Rack as $row)
						{
							$grl_id_pk = $row['grl_id_pk'];$grl_name=$row['grl_name'];$grl_shelf=$row['grl_shelf'];
						}
					}
				}	
				?>
				<input type='hidden' id='grl_id_pk' name='grl_id_pk' value='<?php echo $id;?>' />
				
						<label>Name</label>
						<input  type='text' name='grl_name' id='grl_name' class='form-control' value='<?php echo $grl_name;?>' palceholder='Name'>
						<label>Shelf</label>
						<input  type='text' name='grl_shelf' id='grl_shelf' class='form-control' value='<?php echo $grl_shelf;?>' palceholder='Shelf'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addRack' onclick='save_Rack()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Rack() {
					var grl_id_pk = document.getElementById('grl_id_pk').value;	
					
						var grl_name = document.getElementById('grl_name').value;
						if(grl_name == '')
							{
								alert('Please enter name');
								document.getElementById('grl_name').focus();
								return false;
							}
						var grl_shelf = document.getElementById('grl_shelf').value;
						if(grl_shelf == '')
							{
								alert('Please enter shelf');
								document.getElementById('grl_shelf').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Rack');?>',
			    type  :'POST',
			    data  :{grl_id_pk : grl_id_pk,grl_name:grl_name,grl_shelf:grl_shelf},
			    success:function(data){
					document.getElementById('addRack').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Rack Saved';
					document.getElementById('Rack_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalRack').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			
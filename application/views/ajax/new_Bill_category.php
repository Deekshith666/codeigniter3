<div class='form-group'>
				<?php
				$gbcl_id_pk='';$gbcl_name=''; 
				if($id > 0)
				{
					if($Bill_category)
					{
						foreach($Bill_category as $row)
						{
							$gbcl_id_pk = $row['gbcl_id_pk'];$gbcl_name=$row['gbcl_name'];
						}
					}
				}	
				?>
				<input type='hidden' id='gbcl_id_pk' name='gbcl_id_pk' value='<?php echo $id;?>' />
				
						<label>Name</label>
						<input  type='text' name='gbcl_name' id='gbcl_name' class='form-control' value='<?php echo $gbcl_name;?>' palceholder='Name'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addBill_category' onclick='save_Bill_category()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Bill_category() {
					var gbcl_id_pk = document.getElementById('gbcl_id_pk').value;	
					
						var gbcl_name = document.getElementById('gbcl_name').value;
						if(gbcl_name == '')
							{
								alert('Please enter name');
								document.getElementById('gbcl_name').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Bill_category');?>',
			    type  :'POST',
			    data  :{gbcl_id_pk : gbcl_id_pk,gbcl_name:gbcl_name},
			    success:function(data){
					document.getElementById('addBill_category').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Bill_category Saved';
					document.getElementById('Bill_category_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalBill_category').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			
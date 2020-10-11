<div class='form-group'>
				<?php
				$gicl_id_pk='';$gicl_name=''; 
				if($id > 0)
				{
					if($Item_category)
					{
						foreach($Item_category as $row)
						{
							$gicl_id_pk = $row['gicl_id_pk'];$gicl_name=$row['gicl_name'];
						}
					}
				}	
				?>
				<input type='hidden' id='gicl_id_pk' name='gicl_id_pk' value='<?php echo $id;?>' />
				
						<label>Name</label>
						<input  type='text' name='gicl_name' id='gicl_name' class='form-control' value='<?php echo $gicl_name;?>' palceholder='Name'></div>
			<div class='modal-footer'>
			    <button type='button' class='btn btn-white' data-dismiss='modal'>Close</button>
			    <button type='button' id ='addItem_category' onclick='save_Item_category()' class='btn btn-primary'>Save changes</button>
			    <div id='msg'></div>
			</div>
			<script> 
				function save_Item_category() {
					var gicl_id_pk = document.getElementById('gicl_id_pk').value;	
					
						var gicl_name = document.getElementById('gicl_name').value;
						if(gicl_name == '')
							{
								alert('Please enter name');
								document.getElementById('gicl_name').focus();
								return false;
							}
				$.ajax({
			    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_Item_category');?>',
			    type  :'POST',
			    data  :{gicl_id_pk : gicl_id_pk,gicl_name:gicl_name},
			    success:function(data){
					document.getElementById('addItem_category').style.display = 'none';
					document.getElementById('msg').innerHTML = 'Item_category Saved';
					document.getElementById('Item_category_body').innerHTML = data;
					setTimeout(function() {
				           		$('#myModalItem_category').modal('hide');
								}, 900);
						}
						});
				}
			</script>
			
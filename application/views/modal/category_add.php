<div class="form-group">
	<label>Category Name</label>
	<input type="text" name="category_name" id="category_name" class="form-control" value="">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
    <button type="button" id ="addcategory" onclick="add_category()" class="btn btn-primary">Save changes</button>
    <div id="msg"></div>
</div>
<script> 
	function add_category() {
	var category_name = document.getElementById('category_name').value;
	if(category_name=='')
		{
			alert('Please enter Category');
			return false;
		}
	$.ajax({
    url    :'<?php echo site_url('Ajaxs/Masters_ajax/save_category');?>',
    type  :'POST',
    data  :{category_name:category_name},
    success:function(data){
		document.getElementById('addcategory').style.display = 'none';
		document.getElementById('msg').innerHTML = 'Category Saved';
		document.getElementById('category_body').innerHTML = data;
		setTimeout(function() {
	           		$('#myModal4').modal('hide');
					}, 900);
			}
			});
	}
</script>
<div class="row wrapper border-bottom white-bg page-heading" id="">
	<div class="col-lg-10">
		<h2>Category</h2>
		<ol class="breadcrumb">
	    	<li class="breadcrumb-item"><a href="">Home</a></li>
	    	<li class="breadcrumb-item"><a href="">Add and view categories</a></li>
    	</ol>
   </div> 
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<div title="Click to add new category"><a href='javascript:void(0)' onclick="add_category()" class="btn btn-w-m btn-primary" data-toggle="modal"> Add</a></div></div>
				<div class="ibox-content">

					<div class="responsive">
						<div class="dataTables_wrapper container-fluid dt-bootstrap4" id="DataTables_Table_0_wrapper">
								<div class="html5buttons">
								<div class="dt-buttons btn-group">
								<a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#">
										<span>Copy</span>
								</a>
								<a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#">
										<span>CSV</span>
								</a>
								<a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#">
										<span>Excel</span>
								</a>
								<a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#">
										<span>PDF</span>
								</a>
								<a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" href="#">
										<span>Print</span>
								</a>
								</div>
								</div>
								<div class="dataTables_length" id="DataTables_Table_0_length">
								<label>
									Show
									<select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									
									</select>
								</label>
								</div>
								<div id="DataTables_Table_0_filter" class="dataTables_filter">
									<label>
										Search:
										<input type="Search"  class="form-control form-control-sm" placeholder aria-controls="DataTables_Table_0">
									</label>
								</div>
								<div id="DataTables_Table_0_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 25 of 57 entries
								</div>

							<table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
								<thead>
									<tr role="row">
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Count">Count</th>
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product Name">Category Name</th>
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Type">Actions</th>
									</tr>
								</thead>
								<tbody id="category_body">
 								<?php
									if($category)
								{
						
									$j = 0 ;
									$total = 0;
										foreach($category as $row)
											{
											//var_dump($BillCategory);
											$j++;
											
												?>


									<tr class="gradeA odd" role="row">
										<td><?php echo $j;?></td>
										<td><?php echo ucfirst($row['CL_Name']); ?></td>
										<td class="center">
											<a title="Click to edit" onclick="edit()" href="javascript:void(0)" class="btn btn-info" type="button"> <i class="fa fa-pencil"></i></a>
											<a title="Click to delete" onclick="inactive()" href="javascript:void(0)" class="btn btn-info" type="button"> <i class="fa fa-times"></i></a>
										</td>
									</tr>
									<?php
									}
									}
									?>

								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan>Count</th>
										<th rowspan="1" colspan>Category Name</th>
										<th rowspan="1" colspan>Actions</th>
									</tr>
								</tfoot>
							</table>
							<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
								<ul class="pagination">
								<li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"> <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
								<li class="paginate_button page-item active"> <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
								<li class="paginate_button page-item active"> <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
								<li class="paginate_button page-item active"> <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
								<li class="paginate_button page-item next" id="DataTables_Table_0_next"> <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li>
								</ul>
							</div>
						</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
<script>
	function add_category() {

		$('#myModal4').modal();
		$('#mymodal_body').html('Loading...');
		// console.log("<?php echo site_url('Ajaxs/Masters_ajax/new_category');?>")
		 $.ajax({url:"<?php echo site_url('Ajaxs/Masters_ajax/new_category');?>" ,type: "GET",async:false, success:function(result){
		 	// alert(result)
		 $('#mymodal_body').html(result);
		 setTimeout(function(){
		
		 $('#remarks1').focus();
		 },400);
		
		 }
		 });
	}
</script>

<div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
 	<div class="modal-dialog">
 		<div class="modal-content animated fadeIn">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Add and Edit Category</h4>
			</div>
			<div class="modal-body" id="mymodal_body">
				<div class="form-group"></div>			
			</div>
		</div>
	</div>
</div>
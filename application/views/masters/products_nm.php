<div class="row wrapper border-bottom white-bg page-heading" id="">
	<div class="col-lg-10">
		<h2>Products</h2>
		<ol class="breadcrumb">
	    	<li class="breadcrumb-item"><a href="">Home</a></li>
	    	<li class="breadcrumb-item"><a href="">Add and view products</a></li>
    	</ol>
   </div> 
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>All Detailed Products List</h5></div>
					<div title="Click to add new product" class="ibox-tools"><a href='javascript:void(0)' onclick="document.getElementById('show_product_div').style.display='block'" class="btn btn-w-m btn-primary"> Add</a></div>
				<div class="ibox-content">
	<div class="ibox-content m-b-sm border-bottom" id="show_product_div" style="display:none">
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label class="col-form-label" for="product_name">Product</label>
					<input type="text" name="product_name" id="product_name" value="" placeholder="Product Name" class="form-control">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="col-form-label" for="product_name">Type</label>
					<input type="text" name="product_name" id="product_name" value="" placeholder="Type" class="form-control">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="col-form-label" for="product_name">Unit</label>
					<input type="text" name="product_name" id="product_name" value="" placeholder="Unit" class="form-control">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="col-form-label" for="product_name">Company</label>
					<input type="text" name="product_name" id="product_name" value="" placeholder="Company" class="form-control">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="col-form-label" for="product_name">Supplier</label>
					<input type="text" name="product_name" id="product_name" value="" placeholder="Supplier" class="form-control">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label class="col-form-label" for="product_name">Tax Type</label>
					<input type="text" name="product_name" id="product_name" value="" placeholder="Tax Type" class="form-control">
				</div>
			</div>
		</div>
		
	</div>


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
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product Name">Product Name</th>
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Type">Type</th>
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Unit">Unit</th>
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Company">Company</th>
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Suppler">Supplier</th>
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Tax Type">Tax Type</th>
										<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Tax Type">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr class="gradeA odd" role="row">
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="center">
											<a title="Click to edit" onclick="edit()" href="javascript:void(0)" class="btn btn-info" type="button"> <i class="fa fa-pencil"></i></a>
											<a title="Click to delete" onclick="inactive()" href="javascript:void(0)" class="btn btn-info" type="button"> <i class="fa fa-times"></i></a>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan>Count</th>
										<th rowspan="1" colspan>Product Name</th>
										<th rowspan="1" colspan>Type</th>
										<th rowspan="1" colspan>Unit</th>
										<th rowspan="1" colspan>Company</th>
										<th rowspan="1" colspan>Suppler</th>
										<th rowspan="1" colspan>Tax Type</th>
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


<link href="<?php echo $this->config->item('admin_js_path');?>chosen/chosen.min.css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="<?php echo $this->config->item('admin_js_path');?>chosen/chosen.jquery.min.js"></script>

<link href="<?php echo $this->config->item('admin_css_path');?>datepicker.css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="<?php echo $this->config->item('admin_js_path');?>bootstrap-datepicker.js"></script>

<form id='Purchase_id' action="<?php echo site_url('ajaxs/save_purchase/index');?>" method="GET">
			<div class='row wrapper border-bottom white-bg page-heading' >
				<div class='col-lg-10'>
					<h2>Purchase</h2>
					<ol class='breadcrumb'>
				    	<li class='breadcrumb-item'><a href=''>Home</a></li>
				    	<li class='breadcrumb-item'><a href=''>Add and View Purchase</a></li>
			    	</ol>
			   </div> 
			</div>
			<div class='wrapper wrapper-content animated fadeInRight'>
            <div class='row'>
                    <div class='col-md-3'>
                        <div class="input-group m-b">
                                <select placeholder="Type here" class="chosen-select1 form-control" id="Supplier_fk" name="Supplier_fk">
                                    <option value="0">Select Supplier</option>
                                    <?php 
                                    $Supplier_array = '';
                                    if($Supplier)
                                    {
                                        foreach ($Supplier as $row) {
                                            ?>
                                        <option value="<?php echo $row['gsl_id_pk'];?>"><?php echo $row['gsl_name'];?></option>
                                            <?php
                                        }
                                    }
                                    ?> 
                                </select>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class="input-group m-b">
                                <div class="input-group-prepend">
                                    <span class="input-group-addon">Invoice No.</span>
                                </div>
                                <input type="text" placeholder="eg:1234" class="form-control" id="Invoice_no" name="Invoice_no">
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class="input-group m-b">
                                <div class="input-group-prepend date" id='datepicker'>
                                    <span class="input-group-addon">Inv&nbspDate</span>
                                    <input type='text' class="form-control" id="Invoice_date" name="Invoice_date" placeholder="dd/mm/yyyy" />
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar">
                                    </span>
                                    </span>
                                 </div>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <div class="input-group m-b">
                                <div class="input-group-prepend">
                                    <span class="input-group-addon">Include Cess</span>
                                </div>
                                <div class="input-group-append">
                                <select id="Cess" name="Cess">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                
            </div>
            <div class='row'>
                <div class='col-lg-12'>
                <div class='ibox '>
	                <div class='ibox-title'>
						<div title='Click to add new category'>
							<a href='javascript:void(0)' onclick='add_Purchase()' class='btn btn-w-m btn-primary' data-toggle='modal'> Add</a>
						</div>
					</div>
                    <div class='ibox-title'>
                        <h5>List of Purchase</h5>
                        <div class='ibox-tools'>
                            <a class='collapse-link'>
                                <i class='fa fa-chevron-up'></i>
                            </a>
                            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                <i class='fa fa-wrench'></i>
                            </a>
                            <ul class='dropdown-menu dropdown-user'>
                                <li><a href='#' class='dropdown-item'>Config option 1</a>
                                </li>
                                <li><a href='#' class='dropdown-item'>Config option 2</a>
                                </li>
                            </ul>
                            <a class='close-link'>
                                <i class='fa fa-times'></i>
                            </a>
                        </div>
                    </div>
                    <div class='ibox-content'>

                        <div class='table-responsive'>
                    
                    <table class='table table-striped table-bordered table-hover dataTables-example dataTable' id='DataTables_Table_0' aria-describedby='DataTables_Table_0_info' role='grid'>
                    <thead>
                    <tr role='row'>
                	    	<th class='sorting_asc' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-sort='ascending' aria-label='Rendering engine: activate to sort column descending' style='width: 201px;'>Item</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Manufacturer</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>HSN</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Batch</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Expiry</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Packing</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>No_of_unit</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Total_Quantity</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Free</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Rate</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Total_item_value</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Cost_per_Quantity</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Packing_Mrp</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Mrp_per_Quantity</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Discount</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Discount_Type</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Total_Item_value</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Amount_Include_Gst</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Tax</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Margin_Percentage</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Tax_on_free</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Action</th>
                    </tr>
                    </thead>
                    <tbody id='Purchase_body'>
                    <?php
                    if($Purchase)
                    {
                    	foreach($Purchase as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['gil_name'];?></td>
	                    	    <td><?php echo $row['gml_name'];?></td>
	                    	    <td><?php echo $row['ipd_HSN'];?></td>
	                    	    <td><?php echo $row['ipd_Batch'];?></td>
	                    	    <td><?php echo $row['ipd_Expiry'];?></td>
	                    	    <td><?php echo $row['ipd_Packing'];?></td>
	                    	    <td><?php echo $row['ipd_No_of_unit'];?></td>
	                    	    <td><?php echo $row['ipd_Total_Quantity'];?></td>
	                    	    <td><?php echo $row['ipd_Free'];?></td>
	                    	    <td><?php echo $row['ipd_Rate'];?></td>
	                    	    <td><?php echo $row['ipd_Total_item_value'];?></td>
	                    	    <td><?php echo $row['ipd_Cost_per_Quantity'];?></td>
	                    	    <td><?php echo $row['ipd_Packing_Mrp'];?></td>
	                    	    <td><?php echo $row['ipd_Mrp_per_Quantity'];?></td>
	                    	    <td><?php echo $row['ipd_Discount'];?></td>
	                    	    <td><?php echo $row['ipd_Discount_Type'];?></td>
	                    	    <td><?php echo $row['ipd_Amount_Include_Gst'];?></td>
	                    	    <td><?php echo $row['gtgl_name'];?></td>
	                    	    <td><?php echo $row['ipd_Margin_Percentage'];?></td>
	                    	    <td><?php echo $row['ipd_Tax_on_free'];?></td>
	                    	    <td>
									<a title='Edit' onclick='edit_Purchase(<?php echo $row['ipd_id_pk']; ?>)' class='btn btn-primary btn-xs' id='2'><i class='fa fa-pencil-square-o'></i></a>
									<a title='Delete' onclick='delete_Purchase(<?php echo $row['ipd_id_pk']; ?>)' class='btn btn-danger btn-xs' id='2'><i class='fa fa-trash'></i></a>
	                    	    </td>
		                    </tr>
                    		<?php
                    	}
                    }    
                    ?>  
                </tbody>
                    <tfoot>
                    <tr><th rowspan='1' colspan='1'>Item</th><th rowspan='1' colspan='1'>Manufacturer</th><th rowspan='1' colspan='1'>HSN</th><th rowspan='1' colspan='1'>Batch</th><th rowspan='1' colspan='1'>Expiry</th><th rowspan='1' colspan='1'>Packing</th><th rowspan='1' colspan='1'>No_of_unit</th><th rowspan='1' colspan='1'>Total_Quantity</th><th rowspan='1' colspan='1'>Free</th><th rowspan='1' colspan='1'>Rate</th><th rowspan='1' colspan='1'>Total_item_value</th><th rowspan='1' colspan='1'>Cost_per_Quantity</th><th rowspan='1' colspan='1'>Packing_Mrp</th><th rowspan='1' colspan='1'>Mrp_per_Quantity</th><th rowspan='1' colspan='1'>Discount</th><th rowspan='1' colspan='1'>Discount_Type</th><th rowspan='1' colspan='1'>Total_Item_value</th><th rowspan='1' colspan='1'>Amount_Include_Gst</th><th rowspan='1' colspan='1'>Tax</th><th rowspan='1' colspan='1'>Margin_Percentage</th><th rowspan='1' colspan='1'>Tax_on_free</th><th rowspan='1' colspan='1'>Action</th></tr>
                    </tfoot>
                    </table>

                    </div>
                </div>
                <div class='ibox-title' align="right">
                        <div title='Click to add new category'>
                            <a href='javascript:void(0)' onclick='save_purchase()' class='btn btn-w-m btn-primary' data-toggle='modal'> Save</a>
                        </div>
                    </div>
            </div>
            </div>
</form>            
        <script>
           
         
        $(document).ready(function(){
        $(".chosen-select1").chosen({no_results_text: "nothing found!"});

            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<\'html5buttons\'B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });
        });
        function add_Purchase()
        {
        	$('#myModalPurchase').modal();
		$('#mymodal_body').html('Loading...');
		 $.ajax({url:"<?php echo site_url('Ajaxs/Masters_ajax/new_Purchase');?>" ,type: 'GET',async:false, success:function(result){
		 	$('#mymodal_Purchasebody').html(result);
		 	}
		 });
        }
        function edit_Purchase(id)
        {
        	param = '?id='+id;
        	$('#myModalPurchase').modal();
			$('#Purchase_body').html('Loading...');
        	$.ajax({url:"<?php echo site_url('Ajaxs/Masters_ajax/edit_Purchase');?>"+param ,type: 'GET',async:false, success:function(result){
		 	$('#mymodal_Purchasebody').html(result);
		 	}
		 });
        }
        function delete_Purchase(id)
        {
        	var r = confirm('Confirm Delete');
            if(r)
            { 
	        	param = '?id='+id;
	        	$.ajax({url:"<?php echo site_url('Ajaxs/Masters_ajax/delete_Purchase');?>"+param ,type: 'GET',async:false, success:function(result){
			 			$('#Purchase_body').html(result);
			 	}
			 	});
		 	}
        }
        function save_purchase()
        {
            var Invoice_no = document.getElementById('Invoice_no').value;
            var Supplier_fk = document.getElementById('Supplier_fk').value;
            var Invoice_date = document.getElementById('Invoice_date').value;
            var Cess = document.getElementById('Cess').value;

            if(Supplier_fk == '0')
            {
                alert("Please select supplier")
                document.getElementById('Supplier_fk').focus();
                return;   
            }
            if(Invoice_no == '')
            {
                alert("Please enter Invoice no.")
                document.getElementById('Invoice_no').focus();
                return;
            }
            if(Invoice_date == '')
            {
                alert("Please enter Invoice date.")
                document.getElementById('Invoice_date').focus();
                return;   
            }   
            document.getElementById('Purchase_id').submit(); 
        }
        </script>
        <script type="text/javascript">
          $(function () {
                  $("#datepicker").datepicker({
                        autoclose: true, 
                        todayHighlight: true,
                        format: 'dd/mm/yyyy',
                        endDate: '+1d',
                  }).datepicker('update', new Date());
                });
       </script>
        <div class='modal inmodal' id='myModalPurchase' tabindex='-1' role='dialog'  aria-hidden='true'>
		 	<div class='modal-dialog'>
		 		<div class='modal-content animated fadeIn'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
							<h4 class='modal-title'>Add and Edit Purchase</h4>
					</div>
					<div class='modal-body' id='mymodal_Purchasebody'>
						<div class='form-group'></div>			
					</div>
				</div>
			</div>
		</div>
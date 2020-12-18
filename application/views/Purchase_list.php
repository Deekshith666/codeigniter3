
			<div class='row wrapper border-bottom white-bg page-heading' id=''>
				<div class='col-lg-10'>
					<h2>Purchase_list</h2>
					<ol class='breadcrumb'>
				    	<li class='breadcrumb-item'><a href=''>Home</a></li>
				    	<li class='breadcrumb-item'><a href=''>Add and View Purchase_list</a></li>
			    	</ol>
			   </div> 
			</div>
			<div class='wrapper wrapper-content animated fadeInRight'>
            <div class='row'>
                <div class='col-lg-12'>
                <div class='ibox '>
	                <div class='ibox-title'>
						<div title='Click to add new category'>
							<a href='javascript:void(0)' onclick='add_Purchase_list()' class='btn btn-w-m btn-primary' data-toggle='modal'> Add</a>
						</div>
					</div>
                    <div class='ibox-title'>
                        <h5>List of Purchase_list</h5>
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
                	    	<th class='sorting_asc' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-sort='ascending' aria-label='Rendering engine: activate to sort column descending' style='width: 201px;'>Supplier_fk</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Invoice_no</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Invoice_date</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Cess_flag</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Action</th>
                    </tr>
                    </thead>
                    <tbody id='Purchase_list_body'>
                    <?php
                    if($Purchase_list)
                    {
                    	foreach($Purchase_list as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['gpl_supplier_fk'];?></td>
	                    	    <td><?php echo $row['gpl_invoice_no'];?></td>
	                    	    <td><?php echo $row['gpl_invoice_date'];?></td>
	                    	    <td><?php echo $row['gpl_cess_flag'];?></td>
	                    	    <td>
									<a title='Edit' onclick='edit_Purchase_list(<?php echo $row['gpl_id_pk']; ?>)' class='btn btn-primary btn-xs' id='2'><i class='fa fa-pencil-square-o'></i></a>
									<a title='Delete' onclick='delete_Purchase_list(<?php echo $row['gpl_id_pk']; ?>)' class='btn btn-danger btn-xs' id='2'><i class='fa fa-trash'></i></a>
	                    	    </td>
		                    </tr>
                    		<?php
                    	}
                    }    
                    ?>  
                </tbody>
                    <tfoot>
                    <tr><th rowspan='1' colspan='1'>Supplier_fk</th><th rowspan='1' colspan='1'>Invoice_no</th><th rowspan='1' colspan='1'>Invoice_date</th><th rowspan='1' colspan='1'>Cess_flag</th></tr>
                    </tfoot>
                    </table>

                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function(){
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
        function add_Purchase_list()
        {
        	window.location.href = "<?php echo site_url('purchase');?>";
        }
        function edit_Purchase_list(id)
        {
        	param = '?id='+id;
            window.location.href = "<?php echo site_url('purchase');?>?id="+id;
        }
        function delete_Purchase_list(id)
        {
        	var r = confirm('Confirm Delete');
            if(r)
            { 
	        	param = '?id='+id;
	        	$.ajax({url:"<?php echo site_url('Ajaxs/Masters_ajax/delete_Purchase_list');?>"+param ,type: 'GET',async:false, success:function(result){
			 			$('#Purchase_list_body').html(result);
			 	}
			 	});
		 	}
        }
        </script>
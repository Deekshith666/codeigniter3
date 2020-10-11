
			<div class='row wrapper border-bottom white-bg page-heading' id=''>
				<div class='col-lg-10'>
					<h2>Manufacturer</h2>
					<ol class='breadcrumb'>
				    	<li class='breadcrumb-item'><a href=''>Home</a></li>
				    	<li class='breadcrumb-item'><a href=''>Add and View Manufacturer</a></li>
			    	</ol>
			   </div> 
			</div>
			<div class='wrapper wrapper-content animated fadeInRight'>
            <div class='row'>
                <div class='col-lg-12'>
                <div class='ibox '>
	                <div class='ibox-title'>
						<div title='Click to add new category'>
							<a href='javascript:void(0)' onclick='add_Manufacturer()' class='btn btn-w-m btn-primary' data-toggle='modal'> Add</a>
						</div>
					</div>
                    <div class='ibox-title'>
                        <h5>List of Manufacturer</h5>
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
                	    	<th class='sorting_asc' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-sort='ascending' aria-label='Rendering engine: activate to sort column descending' style='width: 201px;'>Name</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Hsn</th>
                    	    <th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Browser: activate to sort column ascending' style='width: 250.6px;'>Action</th>
                    </tr>
                    </thead>
                    <tbody id='Manufacturer_body'>
                    <?php
                    if($Manufacturer)
                    {
                    	foreach($Manufacturer as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['gml_name'];?></td>
	                    	    <td><?php echo $row['gml_hsn'];?></td>
	                    	    <td>
									<a title='Edit' onclick='edit_Manufacturer(<?php echo $row['gml_id_pk']; ?>)' class='btn btn-primary btn-xs' id='2'><i class='fa fa-pencil-square-o'></i></a>
									<a title='Delete' onclick='delete_Manufacturer(<?php echo $row['gml_id_pk']; ?>)' class='btn btn-danger btn-xs' id='2'><i class='fa fa-trash'></i></a>
	                    	    </td>
		                    </tr>
                    		<?php
                    	}
                    }    
                    ?>  
                </tbody>
                    <tfoot>
                    <tr><th rowspan='1' colspan='1'>Name</th><th rowspan='1' colspan='1'>Hsn</th></tr>
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
        function add_Manufacturer()
        {
        	$('#myModalManufacturer').modal();
		$('#mymodal_body').html('Loading...');
		 $.ajax({url:"<?php echo site_url('Ajaxs/Masters_ajax/new_Manufacturer');?>" ,type: 'GET',async:false, success:function(result){
		 	$('#mymodal_Manufacturerbody').html(result);
		 	}
		 });
        }
        function edit_Manufacturer(id)
        {
        	param = '?id='+id;
        	$('#myModalManufacturer').modal();
			$('#Manufacturer_body').html('Loading...');
        	$.ajax({url:"<?php echo site_url('Ajaxs/Masters_ajax/edit_Manufacturer');?>"+param ,type: 'GET',async:false, success:function(result){
		 	$('#mymodal_Manufacturerbody').html(result);
		 	}
		 });
        }
        function delete_Manufacturer(id)
        {
        	var r = confirm('Confirm Delete');
            if(r)
            { 
	        	param = '?id='+id;
	        	$.ajax({url:"<?php echo site_url('Ajaxs/Masters_ajax/delete_Manufacturer');?>"+param ,type: 'GET',async:false, success:function(result){
			 			$('#Manufacturer_body').html(result);
			 	}
			 	});
		 	}
        }
        </script>
        <div class='modal inmodal' id='myModalManufacturer' tabindex='-1' role='dialog'  aria-hidden='true'>
		 	<div class='modal-dialog'>
		 		<div class='modal-content animated fadeIn'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
							<h4 class='modal-title'>Add and Edit Manufacturer</h4>
					</div>
					<div class='modal-body' id='mymodal_Manufacturerbody'>
						<div class='form-group'></div>			
					</div>
				</div>
			</div>
		</div>
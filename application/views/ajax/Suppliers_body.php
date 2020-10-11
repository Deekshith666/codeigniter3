<?php
                    if($Suppliers)
                    {
                    	foreach($Suppliers as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['gsl_name'];?></td>
	                    	    <td><?php echo $row['gsl_gstin'];?></td>
	                    	    <td><?php echo $row['gsl_contact_number'];?></td>
	                    	    <td><?php echo $row['gsl_address'];?></td>
	                    	    <td>
									<a title='Edit' onclick='edit_Suppliers(<?php echo $row['gsl_id_pk']; ?>)' class='btn btn-primary btn-xs' id='2'><i class='fa fa-pencil-square-o'></i></a>
									<a title='Delete' onclick='delete_Suppliers(<?php echo $row['gsl_id_pk']; ?>)' class='btn btn-danger btn-xs' id='2'><i class='fa fa-trash'></i></a>
	                    	    </td>
		                    </tr>
                    		<?php
                    	}
                    }    
                    ?>
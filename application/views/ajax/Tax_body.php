<?php
                    if($Tax)
                    {
                    	foreach($Tax as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['gtl_name'];?></td>
	                    	    <td><?php echo $row['gtl_tax_percentage'];?></td>
	                    	    <td>
									<a title='Edit' onclick='edit_Tax(<?php echo $row['gtl_id_pk']; ?>)' class='btn btn-primary btn-xs' id='2'><i class='fa fa-pencil-square-o'></i></a>
									<a title='Delete' onclick='delete_Tax(<?php echo $row['gtl_id_pk']; ?>)' class='btn btn-danger btn-xs' id='2'><i class='fa fa-trash'></i></a>
	                    	    </td>
		                    </tr>
                    		<?php
                    	}
                    }    
                    ?>
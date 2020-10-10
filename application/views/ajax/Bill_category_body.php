<?php
                    if($Bill_category)
                    {
                    	foreach($Bill_category as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['gbcl_name'];?></td>
	                    	    <td>
									<a title='Edit' onclick='edit_Bill_category(<?php echo $row['gbcl_id_pk']; ?>)' class='btn btn-primary btn-xs' id='2'><i class='fa fa-pencil-square-o'></i></a>
									<a title='Delete' onclick='delete_Bill_category(<?php echo $row['gbcl_id_pk']; ?>)' class='btn btn-danger btn-xs' id='2'><i class='fa fa-trash'></i></a>
	                    	    </td>
		                    </tr>
                    		<?php
                    	}
                    }    
                    ?>
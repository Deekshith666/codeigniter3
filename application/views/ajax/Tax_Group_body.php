<?php
                    if($Tax_Group)
                    {
                    	foreach($Tax_Group as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['gtgl_name'];?></td>
	                    	    <td>
									<a title='Edit' onclick='edit_Tax_Group(<?php echo $row['gtgl_id_pk']; ?>)' class='btn btn-primary btn-xs' id='2'><i class='fa fa-pencil-square-o'></i></a>
									<a title='Delete' onclick='delete_Tax_Group(<?php echo $row['gtgl_id_pk']; ?>)' class='btn btn-danger btn-xs' id='2'><i class='fa fa-trash'></i></a>
	                    	    </td>
		                    </tr>
                    		<?php
                    	}
                    }    
                    ?>
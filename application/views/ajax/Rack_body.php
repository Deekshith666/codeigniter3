<?php
                    if($Rack)
                    {
                    	foreach($Rack as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['grl_name'];?></td>
	                    	    <td><?php echo $row['grl_shelf'];?></td>
	                    	    <td>
									<a title='Edit' onclick='edit_Rack(<?php echo $row['grl_id_pk']; ?>)' class='btn btn-primary btn-xs' id='2'><i class='fa fa-pencil-square-o'></i></a>
									<a title='Delete' onclick='delete_Rack(<?php echo $row['grl_id_pk']; ?>)' class='btn btn-danger btn-xs' id='2'><i class='fa fa-trash'></i></a>
	                    	    </td>
		                    </tr>
                    		<?php
                    	}
                    }    
                    ?>
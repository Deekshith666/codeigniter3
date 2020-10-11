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
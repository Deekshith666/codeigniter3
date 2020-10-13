<?php
                    if($Purchase)
                    {
                    	foreach($Purchase as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['ipd_Item_fk'];?></td>
	                    	    <td><?php echo $row['ipd_Manufacturer_fk'];?></td>
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
	                    	    <td><?php echo $row['ipd_Tax_fk'];?></td>
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
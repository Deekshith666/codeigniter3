<?php
                    if($Items)
                    {
                    	foreach($Items as $row)
                    	{
                    		?>
	                    	<tr class='gradeA even' role='row'>
                    	    	<td class='sorting_1'><?php echo $row['gil_name'];?></td>
	                    	    <td><?php echo $row['gil_code'];?></td>
	                    	    <td><?php echo $row['gil_item_category_FK'];?></td>
	                    	    <td><?php echo $row['gil_reorder_quantity'];?></td>
	                    	    <td><?php echo $row['gil_unit_FK'];?></td>
	                    	    <td><?php echo $row['gil_manufacturer_FK'];?></td>
	                    	    <td><?php echo $row['gil_supplier_FK'];?></td>
	                    	    <td><?php echo $row['gil_tax_group_FK'];?></td>
	                    	    <td><?php echo $row['gil_cess'];?></td>
	                    	    <td><?php echo $row['gil_barcode'];?></td>
	                    	    <td><?php echo $row['gil_price'];?></td>
	                    	    <td><?php echo $row['gil_bill_category_FK'];?></td>
	                    	    <td><?php echo $row['gil_rack_FK'];?></td>
	                    	    <td>
									<a title='Edit' onclick='edit_Items(<?php echo $row['gil_id_pk']; ?>)' class='btn btn-primary btn-xs' id='2'><i class='fa fa-pencil-square-o'></i></a>
									<a title='Delete' onclick='delete_Items(<?php echo $row['gil_id_pk']; ?>)' class='btn btn-danger btn-xs' id='2'><i class='fa fa-trash'></i></a>
	                    	    </td>
		                    </tr>
                    		<?php
                    	}
                    }    
                    ?>
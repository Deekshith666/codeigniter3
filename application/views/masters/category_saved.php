<?php
									if($category)
								{
						
									$j = 0 ;
									$total = 0;
										foreach($category as $row)
											{
											//var_dump($BillCategory);
											$j++;
											
												?>


									<tr class="gradeA odd" role="row">
										<td><?php echo $j;?></td>
										<td><?php echo ucfirst($row['CL_Name']); ?></td>
										<td class="center">
											<a title="Click to edit" onclick="edit()" href="javascript:void(0)" class="btn btn-info" type="button"> <i class="fa fa-pencil"></i></a>
											<a title="Click to delete" onclick="inactive()" href="javascript:void(0)" class="btn btn-info" type="button"> <i class="fa fa-times"></i></a>
										</td>
									</tr>
									<?php
									}
									}
									?>
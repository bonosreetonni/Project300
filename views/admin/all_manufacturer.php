<!--  <?php 

echo "<pre>";
print_r($all_category);
?>  -->


		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Category ID</th>
								  <th>Category Name</th>
								  <th>Status</th>
								  <th>Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
								<?php
								 foreach ($all_manufacturer as $manufacturer) { ?>
								 	<tr>
								 		<td><?php echo $manufacturer->manufacturer_id; ?></td>
								 		<td class="center"><?php echo $manufacturer->manufacturer_name ; ?></td>
								 		<td class="center">
								 			<?php
								 			if ($manufacturer->manufacturer_status == 1) {
								 				echo "Active";
								 			}elseif ($manufacturer->manufacturer_status == 2) {
								 				echo "Inactive";
								 			}
								 			elseif ($manufacturer->manufacturer_status == 3) {
								 				echo "Deleted";
								 			}
								 			


								 			 ?>

								 		</td>

								 		<td class="center">

<!-- aikane ami active inactive ar dlt er kaj korechi logiig dia  -->



								 			<?php
												if ($manufacturer->manufacturer_status == 1) {
								 			 ?>
											<a class="btn btn-success" href="<?php echo base_url("change-manufacturer-status/$manufacturer->manufacturer_id/2") ?>"title="Update-Status">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											<?php } elseif ($manufacturer->manufacturer_status == 2 || $manufacturer->manufacturer_status == 3) { ?>
											<a class="btn btn-danger" href="<?php echo base_url("change-manufacturer-status/$manufacturer->manufacturer_id/1") ?>"title="Update-Status">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>

											<?php } ?>




											<a class="btn btn-info" href="<?php echo base_url("Edit-manufacturer/$manufacturer->manufacturer_id") ?>" title="Edit-Status">
												<i class="halflings-icon white edit"></i>  
											</a>



											<?php if ($manufacturer->manufacturer_status != 3) { ?>
											
											<a class="btn btn-danger" href="<?php echo base_url("change-manufacturerstatus/$manufacturer->manufacturer_id/3") ?>" title="delete-Status">
												<i class="halflings-icon white trash"></i> 
											</a>
											<?php } ?> 







											<!-- <a class="btn btn-danger" href="#">
												<i class="halflings-icon white trash"></i> 
											</a> -->
										</td>
								 	</tr>

								 



								 <?php } ?>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>
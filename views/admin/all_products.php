<!-- <?php 

echo "<pre>";
print_r($all_products);

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
							      <th>Product Image </th>
								  <th>product Name</th>
								  <th>Price</th>
								  <th>Status</th>
								  <th>Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
								<?php
								 foreach ($all_products as $product) { ?>
								 	<tr>
								 		<td style="width: 100px; height: 100px;">
								 			<!-- <img src="<?php echo $product->product_image; ?>"> -->
								 			<img src="<?php echo base_url().$product->product_image; ?>" style="height: 50px; width: 50px">

								 		</td>
								 		
								 		<td class="center"><?php echo $product->product_name ; ?></td>
								 		<td><?php echo $product->product_price; ?></td>
								 		<td class="center">
								 			<?php
								 			if ($product->product_status == 1) {
								 				echo "Active";
								 			}elseif ($product->product_status == 2) {
								 				echo "Inactive";
								 			}
								 			elseif ($product->product_status == 3) {
								 				echo "Deleted";
								 			}								 			

								 			 ?>

								 		</td>


								 		<td class="center">

<!-- aikane ami active inactive ar dlt er kaj korechi logiig dia -->


								 			<?php
												if ($product->product_status == 1) {
								 			 ?>
											<a class="btn btn-success" href="<?php echo base_url("change-product-status/$product->product_id/2") ?>"title="Update-Status">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											<?php } elseif ($product->product_status == 2 || $product->product_status == 3) { ?>
											<a class="btn btn-danger" href="<?php echo base_url("change-product-status/$product->product_id/1") ?>"title="Update-Status">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>

											<?php } ?>




											<a class="btn btn-info" href="<?php echo base_url("Edit-Product/$product->product_id") ?>" title="Edit-Status">
												<i class="halflings-icon white edit"></i>  
											</a>



											<?php if ($product->product_status != 3) { ?>
											
											<a class="btn btn-danger" href="<?php echo base_url("change-product-status/$product->product_id/3") ?>" title="delete-Status">
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
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
							      <th>ID </th>
								  <th>Customer Name</th>
								  <th>Customer p.Num</th>
								  <th>Shipping City</th>
								  <th>Shipping p.Num</th>
								  <th>Details</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
								<?php 
								 foreach ($all_invoice as $invoice) { ?>
								 	
								 	<tr>
								 		<td class="center"><?php echo $invoice->order_id; ?></td>	
								 		<td class="center"><?php echo $invoice->customer_name ?></td>
								 		<td class="center"><?php echo $invoice->mobile_number ?></td>
								 		<td class="center"><?php echo $invoice->city?></td>
								 		<td class="center"><?php echo $invoice->mobile_number ?></td>
								 		<td class="center"><a href="<?php echo base_url() ?>/View-Invoice" class="btn btn-dark">View details</a></td>

								 	</tr>
								<?php } ?> 
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>
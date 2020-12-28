
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
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Address</th>
						<th>House No.</th>
						<th>Zip</th>
						<th>City</th>
						<th>Country</th>
						<th>Fax</th>
						<th>Total(৳)</th>
						<th>Date & Time</th>


					</tr>
				</thead>   
				<tbody>

					<?php 
					foreach ($all_invoice as $invoice) { ?>

						<tr>
							<td class="center"><?php echo $invoice->customer_name?></td>
							<td class="center"><?php echo $invoice->email_address ?></td>
							<td class="center"><?php echo $invoice->mobile_number ?></td>
							<td class="center"><?php echo $invoice->address ?></td>
							<td class="center"><?php echo $invoice->house_number ?></td>
							<td class="center"><?php echo $invoice->zip_code ?></td>
							<td class="center"><?php echo $invoice->city ?></td>
							<td class="center"><?php echo $invoice->country ?></td>
							<td class="center"><?php echo $invoice->fax_num ?></td>
							<td class="center"><?php echo $invoice->order_total."৳"?></td>
							<td class="center"><?php echo $invoice->order_date_time ?></td>

							

						</tr>
					<?php } ?> 

				</tbody>
			</table>            
		</div>
	</div><!--/span-->

</div>
<!-- <?php
echo "<pre>";
print_r($product_info);


?> -->


<div class="product-details" style="float: left;">
	<div class="view-product">
		<img src="<?php echo base_url().$product_info->product_image;?>" style=" height: 300px; width: 300px;"/>
		<h3>ZOOM</h3>
	</div>

	</div>
	<div class="col-sm-7">
		<div class="product-information">
			<img src="images/product-details/new.jpg" class="newarrival" alt="" />
			<h2><?php echo $product_info->product_name ?></h2>
			<p><?php echo $product_info->product_id ?></p>
			<img src="images/product-details/rating.png" alt="" />


			<span>
				<span><?php echo $product_info->product_price; ?></span>
				<label style="margin-top: 9px;">Quantity:</label>
				<!-- cart option -->
				<form method="post" action="<?php echo base_url("Add-To-Cart") ?>" style="float: right;">

					<input type="text" value="1" name="qty" />

					<input type="hidden" name="product_id" value="<?php echo $product_info->product_id ?>" />
					<button type="submit" class="btn btn-fefault cart">
						<i class="fa fa-shopping-cart"></i>
						Add to cart
					</button>
				</form>
				<!-- cart option -->

			</span>
			<p>

				<b>Availability:</b>
				<?php
				if ($product_info->product_qty>3) { ?>
					In Stock

				<?php	} else{
					?>
					Out of Stock
				<?php } ?>
				

			</p>
			<p><b>Condition:</b> New</p>
			<p><b>Brand:</b> <?php echo $product_info->manufacturer_name ?></p>
			<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
		</div>

	</div>
</div>
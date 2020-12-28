<body>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						<?php
						$all_contents = $this->cart->contents();



						foreach ($all_contents as $contents) {
							
							?>
							<tr>
								<td class="cart_product">
									<a href=""><img width="100px" src="<?php echo base_url().$contents['options']['image'] ?>" alt=""></a>
								</td>
								<td class="cart_description">
									<h4><a href=""><?php echo $contents['name'] ?></a></h4>

								</td>
								<td class="cart_price">
									<!-- ainakne ami agr moto $contents->product_price aivabe lokhe code korte parbo na karon aikane ami cart teke array akare data enechi tai tai ai kane data anar khetre same system apply korete hbe every time  -->

									<p><?php echo $contents['price'] ?></p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button"> 

										<form name="qty" action="<?php echo base_url()?>Update-Cart/" method="post">
											<!-- <a class="cart_quantity_up" href=""> + </a> -->
											<input style="padding: 4px 1px;" class="cart_quantity_input" type="text" name="qty" value="<?php echo $contents['qty'] ?>" autocomplete="off" size="2">

											<input type="hidden" name="rowid" value="<?php echo $contents['rowid']?>";>
											<input style="margin-top: 1px;" type="submit" name="btn" value="Update" class="btn btn-primary">

											<!-- <a class="cart_quantity_down" href=""> - </a> -->
										</form>

									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price"><?php echo $contents['subtotal'] ?></p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="<?php echo base_url();?>Delete-To-Cart/<?php echo $contents['rowid']?>"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<?php } ?> -

						</tbody>
					</table>
				</div>
			</div>
		</section> <!--/#cart_items-->

		<section id="do_action">
			<div class="container">
				<div class="heading">
					<h3>What would you like to do next?</h3>
					<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="chose_area">
							<ul class="user_option">
								<li>
									<input type="checkbox">
									<label>Use Coupon Code</label>
								</li>
								<li>
									<input type="checkbox">
									<label>Use Gift Voucher</label>
								</li>
								<li>
									<input type="checkbox">
									<label>Estimate Shipping & Taxes</label>
								</li>
							</ul>
							<ul class="user_info">
								<li class="single_field">
									<label>Country:</label>
									<select>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>

								</li>
								<li class="single_field">
									<label>Region / State:</label>
									<select>
										<option>Select</option>
										<option>Dhaka</option>
										<option>London</option>
										<option>Dillih</option>
										<option>Lahore</option>
										<option>Alaska</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>

								</li>
								<li class="single_field zip-field">
									<label>Zip Code:</label>
									<input type="text">
								</li>
							</ul>
							<a class="btn btn-default update" href="">Get Quotes</a>
							<a class="btn btn-default check_out" href="">Continue</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="total_area">
							<ul>
								<li>Cart Sub Total <span>BDT <?php echo $this->cart->total();?></span></li>
								<li>Vat(5%)
									<span>
										<?php
										$vat = ($this->cart->total() * 5 )/100 ;
										echo 'BDT '.$vat;

										?>

									</span>
								</li>
								<li>Shipping Cost 
									<span>
										<?php
									// ami aikane 360000 er besi damer oile ami shiping cost ta nibo na 
										if ($vat == true && $this->cart->total() < 360000) {
											$shipping_cost = 100;
											echo 'BDT '.$shipping_cost;
										}
										else
										{
											$shipping_cost = 0;
											echo 'BDT '.$shipping_cost;
										}
										// $shipping_cost = 100;
										// echo 'BDT '.$shipping_cost;
										?>
									</span>
								</li>
								<li>Grand Total
									<span>BDT 
										<?php $g_total =$this->cart->total()+$vat+$shipping_cost;
										echo $g_total;

										$sdata =array();
										$sdata['total'] = $g_total;
										$this->session->set_userdata($sdata);
										?>

									</span>
								</li>
							</ul>
							
							<a class="btn btn-default check_out" href="<?php echo base_url()?>Check-Out/">Check Out</a>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#do_action-->





		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/main.js"></script>
	</body>
	</html>
				<div class="col-sm-4">
					<!-- <div class="order-message">
						<p>Shipping Order</p>
						<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
						<label><input type="checkbox"> Shipping to bill address</label>
					</div> -->	
				</div>	
<div class="col-sm-9 clearfix">
	<div class="bill-to">
		<p>Bill To</p>
		<div class="form-one">
			<form action="<?php echo base_url()?>/Update-billing" method="post" name="billing_info">
				<input type="text" name="customer_name" placeholder="Customer Name" value="<?php echo $customer_info->customer_name ?>">
				<input type="hidden" name="customer_id" value="<?php echo $customer_info->customer_id ?>">

				<input type="text" name="email_address" placeholder="Email Address*" value="<?php echo $customer_info->email_address ?>">
				<input type="text" name="mobile_number" placeholder="Mobile Number" value="<?php echo $customer_info->mobile_number ?>">
				<input type="text" name="address" placeholder="Address*" value="<?php echo $customer_info->address ?>">
				<input type="text" name="city" placeholder="City" value="<?php echo $customer_info->city ?>">
				<input type="text" name="zip_code" placeholder="Zip Code" value="<?php echo $customer_info->zip_code ?>">

				<select name="country" value="<?php echo $customer_info->country ?>">
					<option> Country </option>
					<option value="usa">United States</option>
					<option value="ban">Bangladesh</option>
					<option value="uk">UK</option>
					<option value="india">India</option>
					<option value="pak">Pakistan</option>
					<option value="ucrane">Ucrane</option>
					<option value="can">Canada</option>
					<option value="dub">Dubai</option>
				</select>
				<br>
				<input type="submit" name="btn" value="Save & Continue" class="btn btn-primary">
				
			</form>
		</div>
		<!-- <div class="form-two">
			<form>
				<input type="text" placeholder="Zip / Postal Code *">
				<select>
					<option>-- Country --</option>
					<option>United States</option>
					<option>Bangladesh</option>
					<option>UK</option>
					<option>India</option>
					<option>Pakistan</option>
					<option>Ucrane</option>
					<option>Canada</option>
					<option>Dubai</option>
				</select>
				<select>
					<option>-- State / Province / Region --</option>
					<option>United States</option>
					<option>Bangladesh</option>
					<option>UK</option>
					<option>India</option>
					<option>Pakistan</option>
					<option>Ucrane</option>
					<option>Canada</option>
					<option>Dubai</option>
				</select>
				<input type="password" placeholder="Confirm password">
				<input type="text" placeholder="Phone *">
				<input type="text" placeholder="Mobile Phone">
				<input type="text" placeholder="Fax">

				<a class="btn btn-primary" href="<?php echo base_url()?>Payment">Continue</a>
			</form> -->
		</div>
	</div>
</div>
<script>
    document.forms['billing_info'].elements['country'].value = <?php  echo 
    $customer_info->country?>;

</script>
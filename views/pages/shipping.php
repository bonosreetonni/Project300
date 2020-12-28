				<div class="col-sm-4">
					<!-- <div class="order-message">
						<p>Shipping Order</p>
						<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
						<label><input type="checkbox"> Shipping to bill address</label>
					</div> -->	
				</div>	
<div class="col-sm-9 clearfix">
	<div class="bill-to">
		<p>Shipping Address</p>
		<div class="form-one">
			<form action="<?php echo base_url()?>/Shipping-info" method="post" name="shipping_info">
				<input type="text" name="customer_name" placeholder="Customer Name" >
				<input type="hidden" name="customer_id" >
				<input type="text" name="email_address" placeholder="Email Address*">
				<input type="text" name="mobile_number" placeholder="Mobile Number" >
				
				<input type="text" name="zip_code" placeholder="Zip Code">
				<input type="text" name="fax_num" placeholder="Fax-Number">
				<input type="text" name="house_number" placeholder="house_number">
				<input type="text" name="city" placeholder="City">
				<input type="text" name="state" placeholder="State">
				<select name="country">
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
		</div>
	</div>
</div>
<script>
    document.forms['Shipping-info'].elements['country'].value = <?php  echo 
    $customer_info->country?>;

</script>
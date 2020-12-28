<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Check out</li>
			</ol>
		</div><!--/breadcrums-->

		<div class="step-one">
			<h2 class="heading">Step1</h2>
		</div>
		<div class="checkout-options">
			
			<p>Create New Customer</p>
		</div><!--/checkout-options-->

		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-6">
					<div class="shopper-info">
						<h3>New User</h3>

						<form method="post" action="<?php echo base_url()?>/Customer-registration">
							<input type="text" name="customer_name" placeholder="Customer Name">
							<input type="text" name="email_address" placeholder="Customer Email">
							<input type="password" name="password" placeholder="Password">
							<input type="password" placeholder="Confirm password">
							<input type="submit" name="" class="btn btn-primary">
						</form>
						
					</div>
				</div>
							<div class="col-sm-4">
					<div class="shopper-info">
						<!--<h3>Log In</h3>-->
						
						<!--<h3>ai kaj ta ami akn o kori nai kisu bug fix krte hbe</h3>-->
						<!--<form method="post" action="<?php echo base_url()?>Customer-login"  >-->


						<!--	<input class="input-large span10" name="email_address" id="username" type="text" placeholder="type email_address"/>-->
							
						<!--	<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>-->

						<!--	<input type="submit" name="btn" class="btn btn-primary" value="Log In">-->
							
						<!--</form>-->
						<!-- <a class="btn btn-primary" href="">Get Quotes</a>
						<a class="btn btn-primary" href="<?php echo base_url()?>Billing">Continue</a> -->
					</div>
				</div>

				
			</div>
		</div>

	</div>
	</section> <!--/#cart_items-->
		<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			<div class="row-fluid">
				
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number"><?php echo sizeof($all_category) ?><i class="icon-arrow-up"></i></div>
					<div class="title">Category</div>
					<div class="footer">
						<a href="#">Total published Category</a>
					</div>	
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
					<div class="number"><?php echo sizeof($manufacturer_info) ?><i class="icon-arrow-up"></i></div>
					<div class="title">Manufacturer</div>
					<div class="footer">
						<a href="#"> All published Manufacturer</a>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
					<div class="number"><?php echo sizeof($all_active_product) ?><i class="icon-arrow-up"></i></div>
					<div class="title">Products</div>
					<div class="footer">
						<a href="#">All published products</a>
					</div>
				</div>
				<div class="span3 statbox black" onTablet="span6" onDesktop="span3">
					<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
					<div class="number"><?php echo sizeof($all_invoice) ?><i class="icon-arrow-right"></i></div>
					<div class="title">Order</div>
					<div class="footer">
						<a href="#"> Total Orders</a>
					</div>
				</div>	
				
			</div>		


								
		
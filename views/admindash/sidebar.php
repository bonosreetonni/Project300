

		<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url('admin-dashboard') ?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="<?php echo base_url('register-admin') ?>"><i class="icon-edit"></i><span class="hidden-tablet">Register Now</span></a></li>
						<li><a href="<?php echo base_url('Add-Category') ?>"><i class="icon-tasks"></i><span class="hidden-tablet">Add Catagory</span></a></li>
						
						<li><a href="<?php echo base_url('All-Category') ?>"><i class="icon-list-alt"></i><span class="hidden-tablet">Manage Catagory</span></a></li>
						<li><a href="<?php echo base_url('Add-Manufacturer') ?>"><i class="icon-picture"></i><span class="hidden-tablet">Add Manufacturer</span></a></li>
						<li><a href="<?php echo base_url('All-Manufacturer') ?>"><i class="icon-tasks"></i><span class="hidden-tablet">Manage Manufacturer</span></a></li>

						<li><a href="<?php echo base_url('Add-Product') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add-Product</span></a></li>
						<li><a href="<?php echo base_url('All-Products') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet">Manage-Products</span></a></li>
						<li><a href="<?php echo base_url('Product-Invoice') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet">Product Invoice</span></a></li>
					  <!--  <li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Dropdown</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li> -->
						<!-- <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li> -->
					</ul>
				</div>

				<script type="text/javascript">
					
					  function showCategory(){
            $.ajax({

                type : 'ajax',
                method: 'get',
                async: false,
                dataType: 'html',
                url: "<?php echo base_url(); ?>" + "categories_data",
                success: function(response){
                    $('#content').html(response);
                }
            });
        }
				</script>
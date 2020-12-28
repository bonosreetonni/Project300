


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('asset/admin_asset/css/style.css') ?>"> 
</head>
 <body>
 <div style="color: green ;">
    <?php
        $message = $this->session->message;
        if (isset($message)) {
            echo $message;
            $this->session->unset_userdata('message');
        }
        else{
            $unmessage = $this->session->unseccessfullmessage;
            echo $unmessage;
             // $this->session->unset_userdata('message');
        }


     ?>
 </div> 

    <div class="main" style="background-color: gray ">





        <!-- Sign up form -->
        <section class="signup">
            <div class="container" style="padding-left: 30px">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="font-size: 30px; padding-bottom: 20px ">Add Product</h2>

                        <?php echo form_open_multipart('Save-Product', 'class=register-form, id=register-form'); ?>

                       <!--  <form method="POST" class="register-form" id="register-form" action="<?php  ?>"> -->

                            <div class="form-group">
                                <label for="name">product Name<i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="product_name" id="name" placeholder="Admin Name"/>
                                <div class="col-lg-6" style="color: #8AFF33">
                                <?php echo form_error('product_name'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">product Short Description<i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="product_short_desc" id="name" placeholder="Admin Name"/>
                                <div class="col-lg-6" style="color: #8AFF33">
                                <?php echo form_error('product_short_desc'); ?>
                                </div>
                            </div>


                            <div class="form-group">
                               <label class="control-label" for="textarea2">product Description</label>
							  <div class="controls">
								<textarea name="product_long_desc" class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							  <div class="col-lg-6" style="color:#8AFF33">
                                <?php echo form_error('product_long_desc'); ?>
                                </div>
                            </div>


                            <div class="form-group" style="padding-top: 10px">
                                <label for="name">Product Quantity <i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="product_qty" id="name" placeholder="Product Quantity"/>
                                <div class="col-lg-6" style="color: #8AFF33">
                                <?php echo form_error('product_qty'); ?>
                                </div>
                            </div>
                             <div class="form-group" style="padding-top: 10px">
                                <label for="name">Product Price <i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="product_price" id="name" placeholder="Product Price"/>
                                <div class="col-lg-6" style="color: #8AFF33">
                                <?php echo form_error('product_price'); ?>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="selectError3">Product Category</label>
                                <div class="controls">
                                  <select id="selectError3" name="product_category">

                                    <option>Select Category</option>
                                    <?php
                                            foreach ($category_info as $category) { ?>
                                            <option value="<?php echo $category ->category_id ?>"> <?php echo         $category->category_name ; ?> </option>
                                   <?php }  ?>

                                  </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="selectError3">Product Manufacturer</label>
                                <div class="controls">
                                  <select id="selectError3" name="product_category">

                                    <option>Select Manufacturer</option>
                                    <?php
                                            foreach ($manufacturer_info as $manufacturer) { ?>
                                            <option value="<?php echo $manufacturer ->manufacturer_id ?>"> <?php echo $manufacturer->manufacturer_name ; ?> </option>
                                   <?php }  ?>

                                  </select>
                                </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="fileInput">Product Image</label>
                              <div class="controls">
                                <input name="product_image" class="input-file uniform_on" id="fileInput" type="file">
                              </div>
                            </div>  

                            <div class="control-group">
                              <label class="control-label" for="fileInput">Top Product</label>
                              <div class="controls">
                                <input name="top_product" type="checkbox">
                              </div>
                            </div>  




                            
                         <!--    <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <button name="product_image" type="submit" class="btn btn-primary" style="margin-top: 6px">
                                    Add product
                                </button>
                            </div>
                        <!-- </form> -->

                        <?php echo form_close(); ?>
                    </div>
                   
     
                       
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
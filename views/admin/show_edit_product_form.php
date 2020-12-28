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
 <!--    <div style="color: green">
     <?php 
        if (isset($success_messageone)) {
            echo $success_messageone;
        }


       elseif (isset($unsuccess_message)) {
           echo $unsuccess_message;
       }
    ?> 

</div>  --> 

<div class="main" style="background-color: gray ">




    <!-- Sign up form -->
    <section class="signup">
        <div class="container" style="padding-left: 30px">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>

                    <?php
                    echo form_open_multipart('Update-Product', 'class="register-form" id="register-form" name = "edit_product"');
                    ?>

                    <!--  <form method="POST" class="register-form" id="register-form" action="<?php  ?>"> -->

                        <div class="form-group">
                            <label for="name">Product Name<i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="product_name" value ="<?php echo $product_data->product_name ?>" id="name" placeholder="Admin Name"/>
                            <input type="hidden" name="product_id" value ="<?php echo $product_data->product_id ?>" />
                            <div class="col-lg-6" style="color: red">
                                <?php echo form_error('product_name'); ?>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label for="name">Product Short Description<i class="zmdi zmdi-account material-icons-name"></i></label>

                            <!--  ekane ami product_data enechi amr controller er $data[product_data] theke  -->
                            <input type="text" name="product_short_desc" value ="<?php echo $product_data->product_short_desc ?>" id="name" placeholder="Admin Name"/>
                            <div class="col-lg-6" style="color: red">
                                <?php echo form_error('product_short_desc'); ?>
                            </div>
                        </div>


                        <div class="form-group">
                         <label class="control-label" for="textarea2">Product Description</label>
                         <div class="controls">
                            <textarea name="product_long_desc" class="cleditor" id="textarea2" rows="3"><?php echo $product_data->product_long_desc ?></textarea>
                        </div>
                        <div class="col-lg-6" style="color:white">
                            <?php echo form_error('product_long_desc'); ?>
                        </div>
                    </div>


                    <div class="form-group" style="padding-top: 10px">
                        <label for="name">Product Quantity <i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="number" name="product_qty" value ="<?php echo $product_data->product_qty ?>" id="name" placeholder="Product Quantity"/>
                        <div class="col-lg-6" style="color: #8AFF33">
                            <?php echo form_error('product_qty'); ?>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px">
                        <label for="name">Product Price <i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="number" name="product_price" value ="<?php echo $product_data->product_price ?>" id="name" placeholder="Product Price"/>
                        <div class="col-lg-6" style="color: #8AFF33">
                            <?php echo form_error('product_price'); ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="selectError3">Product Category</label>
                        <div class="controls">
                          <select id="selectError3" name="product_category" value ="<?php echo $product_data->category_id ?>" >

                            <option>Select Category</option>
                            <?php
                            foreach ($category_info as $category) { ?>
                            <option value="<?php echo $category ->category_id ?>"> <?php echo $category->category_name ; ?> </option>
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
                <!-- <input name="product_old_image"  value="<?php echo $product_data->product_image;?>" class="input-file uniform_on" id="fileInput" type="hidden">  -->
                <img src="<?php echo base_url().$product_data->product_image;?>"
                style= "height: 50px; width: 50px"> 
                
            </div>
        </div> 

        <div class="control-group">
          <label class="control-label" for="fileInput">Top Product</label>
          <div class="controls">
            <?php 
            if($product_data->top_product == 1)
            {
                ?>
                <input name="top_product" type="checkbox" checked>
                <?php
            }
            else 
            {
               ?>
               <input name="top_product" type="checkbox">
               <?php }?>
           </div>
       </div>

       <!-- // sb jaygau ami value te likechu but text area te amake text area r tag er vitore likte hbe  --> 
       
       
       <div class="form-group form-button">
         <button type="submit" class="btn btn-primary" style="margin-top: 6px">
            Save Changes
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
<script>
    document.forms['edit_product'].elements['category_id'].value = <?php  echo 
    $product_data->category_id ?>;

</script>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
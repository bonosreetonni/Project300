


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

                        <?php echo form_open('Update-category', 'class=register-form, id=register-form'); ?>

                       <!--  <form method="POST" class="register-form" id="register-form" action="<?php  ?>"> -->

                            <div class="form-group">
                                <label for="name">category Name<i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="category_name" value ="<?php echo $category_data->category_name ?>" id="name" placeholder="Admin Name"/>
                                <input type="hidden" name="category_id" value ="<?php echo $category_data->category_id ?>" />
                                <div class="col-lg-6" style="color: red">
                                <?php echo form_error('category_name'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">category Short Description<i class="zmdi zmdi-account material-icons-name"></i></label>

                               <!--  ekane ami category_data enechi amr controller er $data[category_data] theke  -->
                                <input type="text" name="category_short_des" value ="<?php echo $category_data->category_short_des ?>" id="name" placeholder="Admin Name"/>
                                <div class="col-lg-6" style="color: red">
                                <?php echo form_error('category_short_des'); ?>
                                </div>
                            </div>


                             <div class="form-group">
                               <label class="control-label" for="textarea2">category Description</label>
							  <div class="controls">
								<textarea name="category_long_des" class="cleditor" id="textarea2" rows="3"><?php echo $category_data->category_long_des ?></textarea>
							  </div>
							  <div class="col-lg-6" style="color:white">
                                <?php echo form_error('category_long_des'); ?>
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

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
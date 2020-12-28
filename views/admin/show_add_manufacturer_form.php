
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


<div style="color: green">
    <?php 
        if (isset($success_message)) {
            echo $success_message;
        }
       elseif (isset($unsuccess_message)) {
           echo $unsuccess_message;
       }
    ?>

</div>

    <div class="main" style="background-color: #FF5733 ">




        <!-- Sign up form -->
        <section class="signup">
            <div class="container" style="padding-left: 30px">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="font-size: 30px; padding-bottom: 20px ">Add Manufacturer</h2>

                        <?php echo form_open('Save-Manufacturer','class=register-form, id=register-form'); ?>

                       <!--  <form method="POST" class="register-form" id="register-form" action="<?php  ?>"> -->

                            <div class="form-group">
                                <label for="name">Manufacturer Name<i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="manufacturer_name" value ="<?php echo set_value('manufacturer_name')?>" id="name" placeholder="Admin Name"/>
                                <div class="col-lg-6" style="color: white">
                                <?php echo form_error('manufacturer_name'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Manufacturer Short Description<i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="manufacturer_short_desc" value ="<?php echo set_value('manufacturer_short_desc')?>" id="name" placeholder="Admin Name"/>
                                <div class="col-lg-6" style="color: white">
                                <?php echo form_error('manufacturer_short_desc'); ?>
                                </div>
                            </div>


                             <div class="form-group">
                               <label class="control-label" for="textarea2">Manufacturer Description</label>
                              <div class="controls">
                                <textarea name="manufacturer_long_desc" class="cleditor" id="textarea2" rows="3"></textarea>
                              </div>
                              <div class="col-lg-6" style="color:white">
                                <?php echo form_error('manufacturer_long_desc'); ?>
                                </div>
                            </div>


                            
                            




                            
                         <!--    <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <button type="submit" class="btn btn-primary" style="margin-top: 6px">
                                    Add Manufacturer
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
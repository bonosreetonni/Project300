


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
   <!--  <link rel="stylesheet" href="<?php echo base_url('asset/reg_form/style.css') ?>"> -->
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

    <div class="main">




        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="font-size: 30px; padding-bottom: 20px ">Sign up</h2>

                        <?php echo form_open('registration-form', 'class=register-form, id=register-form'); ?>

                       <!--  <form method="POST" class="register-form" id="register-form" action="<?php  ?>"> -->

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user_name" value ="<?php echo set_value('user_name')?>" id="name" placeholder="Admin Name"/>
                                <div class="col-lg-6" style="color: red">
                                <?php echo form_error('user_name'); ?>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="user_email" value =" <?php echo set_value('user_email') ?>" id="email" placeholder="Admin Email"/>
                                <div class="col-lg-6" style="color: red">
                                <?php echo form_error('user_email'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="user_password" id="pass" placeholder="Admin Password"/>
                                <div class="col-lg-6" style="color: red">
                                <?php echo form_error('user_password'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Confirm password"/>
                                
                            </div>
                         <!--    <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <button type="submit" class="btn btn-primary" style="margin-top: 6px">
                                    Register
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
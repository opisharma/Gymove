<?php
require_once("dbConnect.php");
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dashboard_asset/images/favicon.png">
    <link href="dashboard_asset/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="dashboard_asset/images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                                           <!-- login error  -->
                       <?php
                        if(isset($_SESSION['login_error'])):       
                        ?>

                        <div class="alert alert-danger">
                            <?php
                            print_r( $_SESSION['login_error']);
                           
                            ?>

                       </div>

                        <?php    
                         endif; 
                        ?>
                       <?php
                        if(isset( $_SESSION['auth_e'])):       
                        ?>

                        <div class="alert alert-danger">
                            <?php
                            print_r( $_SESSION['auth_e']);
                           
                            ?>

                       </div>

                        <?php    
                         endif; 
                        ?>

                        <!-- registration -->
                       <?php
                        if(isset($_SESSION['submit_succ'])):       
                        ?>

                        <div class="alert alert-success">
                            <?php
                            print_r($_SESSION['submit_succ']);
                           
                            ?>

                       </div>

                        <?php    
                         endif; 
                        ?>

                     <!-- email error  -->
                       <?php
                        if(isset($_SESSION['email_error'])):       
                        ?>

                        <div class="alert alert-danger">
                            <?php
                            print_r($_SESSION['email_error']);
                           
                            ?>

                       </div>

                        <?php    
                         endif; 
                        ?>      
                        
                        <!-- password error  -->
                        <?php
                        if(isset($_SESSION['password_error'])):       
                        ?>

                        <div class="alert alert-danger">
                            <?php
                            print_r($_SESSION['password_error']);
                           
                            ?>

                       </div>

                        <?php    
                         endif; 
                        ?>      
                        

                                    <form action="loginPost.php" method="POST"> 
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email"  placeholder="Enter Email Address" name="email" class=" form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="Password" placeholder="Enter Password" name="Password" class=" form-control">
                                        </div>
                              
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>

                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="register.php">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="dashboard_asset/dashboard_asset/vendor/global/global.min.js"></script>
	<script src="dashboard_asset/dashboard_asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="dashboard_asset/dashboard_asset/js/custom.min.js"></script>
    <script src="dashboard_asset/dashboard_asset/js/deznav-init.js"></script>

</body>

</html>
<?php
session_unset();
?>
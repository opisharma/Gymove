<?php

require_once('dbConnect.php');

  if(!isset($_SESSION['email'])){

    $_SESSION['auth_e'] = "You have to  login first!";

    header("location: login.php");

  }
  

?>
<!DOCTYPE html>
<html lanF="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>--</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dashboard_asset/images/favicon.png">
	<link rel="stylesheet" href="dashboard_asset/vendor/chartist/css/chartist.min.css">
    <link href="dashboard_asset/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="dashboard_asset/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="dashboard_asset/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->

    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="dashborad.php" class="brand-logo">
                <img class="logo-abbr" src="dashboard_asset/images/logo.png" alt="">
                <img class="logo-compact" src="dashboard_asset/images/logo-text.png" alt="">
                <img class="brand-title" src="dashboard_asset/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		

		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
					

				<?php 
                 //   default profile photo 
                 $email_address = $_SESSION['email'];
                $default_photo_query = "SELECT default_photo FROM users WHERE Email = '$email_address'";
                $default_photo_from_db = mysqli_query($conn,  $default_photo_query);
                $default_photo = mysqli_fetch_assoc($default_photo_from_db)['default_photo']; 
                ?>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="upload/profile_photos/<?php echo $default_photo ;?>" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong><?php echo $_SESSION['fullname'];?></strong></span>
										<p class="fs-12 mb-0"><?= $_SESSION['email']?></p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>

                                    <a href="logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="dashborad.php" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>

                    <li><a class="has-arrow ai-icon" href="profile.php" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Profile</span>
						</a>

                    </li>
                    <li><a class="has-arrow ai-icon" href="testimonial.php" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Testimonial </span>
						</a>
                        
                    </li>
                    <li><a class="has-arrow ai-icon" href="portfolio.php" aria-expanded="false">
							<i class="fa fa-image"></i>
							<span class="nav-text">Portfolio</span>
						</a>
                        
                    </li>
             
                    <li><a class="has-arrow ai-icon" href="banerimg.php" aria-expanded="false">
							<i class="fa fa-image"></i>
							<span class="nav-text">Baner Images</span>
						</a>
                        
                    </li>
                    <li><a class="has-arrow ai-icon" href="banerimg2.php" aria-expanded="false">
							<i class="fa fa-image"></i>
							<span class="nav-text">Baner Images 2</span>
						</a>
                        
                    </li>

                    <li><a class="has-arrow ai-icon" href="brand.php" aria-expanded="false">
							<i class="fa fa-briefcase"></i>
							<span class="nav-text">Brand</span>
						</a>
                    
                    </li>
               
                    <li><a class="has-arrow ai-icon" href="skill.php" aria-expanded="false">
                    <i class="fas fa-book-open"></i>
							<span class="nav-text">SKILL</span>
						</a>
                    
                    </li>
                    <li><a class="has-arrow ai-icon" href="addfactarea.php" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Fact Area</span>
						</a>
                    
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="fa fa-cubes"></i>
							<span class="nav-text">services</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="Addservice.php">Add service</a></li>
                            <li><a href="listservice.php">list service</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="setting.php" aria-expanded="false">
							<i class="fa fa-cog"></i>
							<span class="nav-text">Settings</span>
						</a>
                    
                    </li>
                    <li><a class="has-arrow ai-icon" href="index.php" target="_blank" aria-expanded="false">
							<i class="fa fa-globe"></i>
							<span class="nav-text">Visit Websites</span>
						</a>

                    </li>

  
                </ul>
				<div class="add-menu-sidebar">
					<img src="dashboard_asset/images/calendar.png" alt="" class="mr-3">
					<p class="	font-w500 mb-0">Create Workout Plan Now</p>
				</div>
				<div class="copyright">
					<p><strong>Gymove Fitness Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <?php
        
        ?>
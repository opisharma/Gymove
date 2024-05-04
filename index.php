<?php 
require_once("dbConnect.php");

?>

<!doctype html>
<html class="no-js" lang="en">


<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Jahin Al mahmud - Personal Portfolio </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="website_asset/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="website_asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="website_asset/css/animate.min.css">
        <link rel="stylesheet" href="website_asset/css/magnific-popup.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="website_asset/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="website_asset/css/flaticon.css">
        <link rel="stylesheet" href="website_asset/css/slick.css">
        <link rel="stylesheet" href="website_asset/css/aos.css">
        <link rel="stylesheet" href="website_asset/css/default.css">
        <link rel="stylesheet" href="website_asset/css/style.css">
        <link rel="stylesheet" href="website_asset/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                            <?php 
                            $logo_img_query = "SELECT setting_value FROM setting WHERE setting_name ='logo_img'";
                            $logo_img_from_db = mysqli_query($conn, $logo_img_query);
                            $logo_img = mysqli_fetch_assoc($logo_img_from_db)['setting_value'];
                        
                            ?>
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.php" class="navbar-brand logo-sticky-none"><img src="upload/logo_img/<?php echo $logo_img?>" alt="Logo"></a>
                                    <a href="index.php" class="navbar-brand s-logo-none"><img src="upload/logo_img/<?php echo $logo_img?>" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
             
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="upload/logo_img/<?php echo $logo_img?>" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                        <!-- owner address  -->
                        <?php 
                        $office_address_query = "SELECT setting_value FROM setting WHERE setting_name ='office_address'";
                        $office_address_from_db = mysqli_query($conn, $office_address_query);
                        $office_address = mysqli_fetch_assoc($office_address_from_db)['setting_value'];
                    
                        ?>
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?php echo $office_address?></p>
                    </div>
                         <!-- owner phone  -->
                         <?php 
                            $owner_phone_query = "SELECT setting_value FROM setting WHERE setting_name ='owner_phone'";
                            $owner_phone_from_db = mysqli_query($conn, $owner_phone_query);
                            $owner_phone = mysqli_fetch_assoc($owner_phone_from_db)['setting_value'];
                        
                            ?>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?php echo $owner_phone?></p>
                    </div>
                    <!-- owner email  -->
                      <?php 
                        $owner_email_query = "SELECT setting_value FROM setting WHERE setting_name ='owner_email'";
                        $owner_email_from_db = mysqli_query($conn, $owner_email_query);
                        $owner_email = mysqli_fetch_assoc($owner_email_from_db)['setting_value'];
                    
                        ?>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?php echo $owner_email?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                        <!--facebook -->
                        <?php 
                        $facebook_query = "SELECT setting_value FROM setting WHERE setting_name ='facebook'";
                        $facebook_from_db = mysqli_query($conn, $facebook_query);
                        $facebook = mysqli_fetch_assoc($facebook_from_db)['setting_value'];
                    
                        ?>
                    <a href="<?=$facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                       <!--twitter -->
                       <?php 
                        $twitter_query = "SELECT setting_value FROM setting WHERE setting_name ='twitter'";
                        $twitter_from_db = mysqli_query($conn, $twitter_query);
                        $twitter = mysqli_fetch_assoc($twitter_from_db)['setting_value'];
                    
                        ?>
                    <a href="<?= $twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                     <!--instagram -->
                     <?php 
                        $instagram_query = "SELECT setting_value FROM setting WHERE setting_name ='instagram'";
                        $instagram_from_db = mysqli_query($conn, $instagram_query);
                        $instagram = mysqli_fetch_assoc($instagram_from_db)['setting_value'];
                    
                        ?>
                    <a href="<?=$instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                      <!--pinterest -->
                      <?php 
                        $pinterest_query = "SELECT setting_value FROM setting WHERE setting_name ='instagram'";
                        $pinterest_from_db = mysqli_query($conn, $pinterest_query);
                        $pinterest = mysqli_fetch_assoc($pinterest_from_db)['setting_value'];
                    
                        ?>
                    <a href="<?=$pinterest ?>" target="_blank"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                             <!-- owner name  -->
                                  <?php 
                                    $owner_name_query = "SELECT setting_value FROM setting WHERE setting_name ='Owner_name'";
                                    $owner_name_from_db = mysqli_query($conn, $owner_name_query);
                                    $owner_name = mysqli_fetch_assoc($owner_name_from_db)['setting_value'];
                                    
                                    ?>
                                    <?php 
                                        $about_description_query = "SELECT setting_value FROM setting WHERE setting_name ='about_description'";
                                        $about_description_from_db = mysqli_query($conn, $about_description_query);
                                        $about_description = mysqli_fetch_assoc($about_description_from_db)['setting_value'];
                                    
                                    ?>
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am  <?php echo $owner_name?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">​<?php echo $about_description?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                     
                                    <ul>
                                     
                                        <li><a href="<?=$facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?= $twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>    
                                        <li><a href="<?=$instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?=$pinterest ?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#portfolio" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>

                        <?php
                            $baner_img_query = "SELECT * FROM `baner_img`  where status = 'show' ";
                            $baner_img_from_db = mysqli_query($conn, $baner_img_query);
                            $baner_img =  mysqli_fetch_assoc($baner_img_from_db)['baner_img'];
                        ?>
                    
                
                       
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="upload/baner_img/<?php print_r($baner_img);?>" alt="not found">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="website_asset/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <?php
                                $baner_img_query = "SELECT * FROM `baner_img2`  where status = 'show' ";
                                $baner_img_from_db = mysqli_query($conn, $baner_img_query);
                                $baner_img2 =  mysqli_fetch_assoc($baner_img_from_db)['baner_img'];
                            ?>
                        
                
                                <img src="upload/baner_img2/<?php print_r($baner_img2);?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                            <?php 
                            $about_me_description_query = "SELECT setting_value FROM setting WHERE setting_name ='about_me_description'";
                            $about_me_description_from_db = mysqli_query($conn, $about_me_description_query);
                            $about_me_description = mysqli_fetch_assoc($about_me_description_from_db)['setting_value'];
                        
                            ?>
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?php echo $about_me_description?></p>
                                <h3>Education:</h3>
                            </div>
                            <?php
                            $skill_query = "SELECT * FROM `skill`  where status = 'show' ";
                            $skill_from_db = mysqli_query($conn, $skill_query);
                            
                            
                            ?>
                            <!-- Education Item -->
                            <?php  foreach($skill_from_db as $skill){?>
                            <div class="education">
                                <div class="year"><?php echo ($skill['skill_catagory']);?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?php echo ($skill['skill_details']);?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width:<?php  echo ($skill['skill_width'])?>" aria-valuenow="<?php echo ($skill['skill_value']);?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- End Education Item -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT i DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
                    <?php
                     $service_query = "SELECT * FROM `service`  ORDER BY ID DESC LIMIT 6 ";
                     $service_from_db = mysqli_query($conn, $service_query);
                     
                
                    ?>
					<div class="row">
                        <?php foreach($service_from_db as $service):?>

                         <?php if($service['status'] == 'show'):?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?php echo ($service['service_icon']);?>"></i>
								<h3><?php echo ($service['service_name']);?></h3>
								<p>
									<?php echo ($service['service_details']);?>
								</p>
							</div>
						</div>
                        <?php endif;?>
                        
                         <?php endforeach;?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                     $portfolio_query = "SELECT * FROM `portfolio`  where status = 'show' ";
                     $portfolio_from_db = mysqli_query($conn, $portfolio_query);
                         

                    ?>
                    
                   <?php foreach($portfolio_from_db as $portfolio):?>
                  
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="upload/portfolio_thumbnail/<?php echo ($portfolio['portfolio_thumbnail']);?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?php echo ($portfolio['portfolio_catagory']);?></span>
									<h4><a href="portfolio-single.php"><?php echo ($portfolio['portfolio_title']);?></a></h4>
									<a href="portfolio-single.php? portfolio_id= <?php echo ($portfolio['id']);?> " class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                    <?php endforeach;?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                    <?php
                     $fact_query = "SELECT * FROM `fact_area`  WHERE status = 'show' ";
                     $fact_from_db = mysqli_query($conn, $fact_query);
                     
                
                    ?>

                        <div class="row justify-content-between">
                        <?php foreach($fact_from_db as $fact):?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?php echo ($fact['fact_icon']);?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo ($fact['fact_count']);?></span></h2>
                                        <span><?php echo ($fact['fact_content']);?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    
                    <?php
                    $select_testimonial = "SELECT * FROM testimonial where status= 'show'";

                    $select_testimonial_from_db = mysqli_query($conn , $select_testimonial);
                  
            

                    ?>
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>TESTIMONIAL</span>
                                <h2>HAPPY CUSTOMER QUOTES</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">

                                <?php   foreach($select_testimonial_from_db as $testimonial ){?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img  style="height: 200px;" class="rounded-circle"  src="upload/testimonial_photos/<?php echo ($testimonial['section_title_img']);?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?php  echo ($testimonial['testi_details']);?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?php echo ($testimonial['testi_content_name']);?></h5>
                                            <span><?php echo ($testimonial['testi_content_h5']);?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php
                         $select_brand_query = "SELECT * FROM brand where status = 'show' ";
                         $select_brand_from_db = mysqli_query($conn, $select_brand_query);

                        ?>

                        <?php foreach($select_brand_from_db as $brand):?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img class="" src="upload/brand/<?php echo ($brand['brand_thumnail_1']);?>" alt="img">
                            </div>
                        </div>
                      <?php  endforeach;?>

                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                   <!-- contact Details-->
                                   <?php 
                                    $contact_details_query = "SELECT setting_value FROM setting WHERE setting_name ='contact_details'";
                                    $contact_details_from_db = mysqli_query($conn, $contact_details_query);
                                    $contact_details = mysqli_fetch_assoc($contact_details_from_db)['setting_value'];
                                
                                    ?>
                                <p><?php echo $contact_details?></p>
                                <?php 
                                    $office_in_query = "SELECT setting_value FROM setting WHERE setting_name ='office_in'";
                                    $office_in_from_db = mysqli_query($conn, $office_in_query);
                                    $office_in = mysqli_fetch_assoc($office_in_from_db)['setting_value'];
                                
                                    ?>
                                <h5>OFFICE IN <span><?php echo $office_in?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?php echo $office_address?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?php echo $owner_phone?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?php echo $owner_email?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <?php if(isset( $_SESSION["message-status"])):?>
                                <div class="alert alert-success"><?php echo  $_SESSION["message-status"];?></div>
                                
                                <?php endif; unset( $_SESSION["message-status"]);?>
                                <form action="sendmessage.php" method="POST">
                                    
                                    <?php if(isset( $_SESSION['w_name'] )):?>
                                         <div class="text-danger"><?php echo  $_SESSION['w_name'] ;?></div>
                                    <?php endif;?>  
                                    <input type="text" placeholder="your name "  name="name">

                                    <?php if(isset( $_SESSION['w_email'] )):?>
                                         <div class="text-danger"><?php echo  $_SESSION['w_email'] ;?></div>
                                    <?php endif;?>  
                                    <input type="email" style="text-transform: lowercase;" placeholder="your email" name="email">

                                    <?php if(isset( $_SESSION['message'] )):?>
                                         <div class="text-danger"><?php echo  $_SESSION['message'] ;?></div>
                                    <?php endif;?>  
                                    <textarea name="message" id="message" placeholder="your message" name="message"></textarea>
                                    <button class="btn" name="btn_messages">SEND</button>

                                    <?php 
                                    unset( $_SESSION['w_name']);
                                    unset( $_SESSION['w_email']);
                                    unset( $_SESSION['message']);
                                    
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>  All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="website_asset/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="website_asset/js/popper.min.js"></script>
        <script src="website_asset/js/bootstrap.min.js"></script>
        <script src="website_asset/js/isotope.pkgd.min.js"></script>
        <script src="website_asset/js/one-page-nav-min.js"></script>
        <script src="website_asset/js/slick.min.js"></script>
        <script src="website_asset/js/ajax-form.js"></script>
        <script src="website_asset/js/wow.min.js"></script>
        <script src="website_asset/js/aos.js"></script>
        <script src="website_asset/js/jquery.waypoints.min.js"></script>
        <script src="website_asset/js/jquery.counterup.min.js"></script>
        <script src="website_asset/js/jquery.scrollUp.min.js"></script>
        <script src="website_asset/js/imagesloaded.pkgd.min.js"></script>
        <script src="website_asset/js/jquery.magnific-popup.min.js"></script>
        <script src="website_asset/js/plugins.js"></script>
        <script src="website_asset/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>


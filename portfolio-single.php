<?php require_once('dbConnect.php');?>
<?php
 $portfolio_id = $_GET['portfolio_id'];
$portfolio_query = "SELECT * FROM `portfolio`  WHERE id = '$portfolio_id'";
$portfolio_from_db = mysqli_query($conn, $portfolio_query);
$portfolio = mysqli_fetch_assoc($portfolio_from_db);

 
 ?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="website_asset/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="website_asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="website_asset/css/animate.min.css">
        <link rel="stylesheet" href="website_asset/css/magnific-popup.css">
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
                                <nav class="navbar navbar-expand-lg">
                                <?php 
                                $logo_img_query = "SELECT setting_value FROM setting WHERE setting_name ='logo_img'";
                                $logo_img_from_db = mysqli_query($conn, $logo_img_query);
                                $logo_img = mysqli_fetch_assoc($logo_img_from_db)['setting_value'];
                            
                                ?>
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
                                            <li class="nav-item active"><a class="nav-link" href="index.php#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="index.php#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="index.php#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="index.php#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
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
                        <img src="website_asset/img/logo/logo.png" alt="" />
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
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
       
            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="upload/portfolio_thumbnail/<?=($portfolio)['portfolio_thumbnail'];?>" alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                   
                                    <p>
                                        <?php echo ($portfolio['portfolio_details']);?>
                                    </p>
                              
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap primary-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
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

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:14 GMT -->
</html>

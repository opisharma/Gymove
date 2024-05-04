
<?php 
require_once('header.php');






?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashborad.php">Dashboard</a></li>
						<li class="breadcrumb-item active"><a href="profile.php">Profile</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">

                                <?php
                                 // default cover photo 
                                    $email_address = $_SESSION['email'];
                                    $default_cover_photo_query = "SELECT default_cover_photo FROM users WHERE Email = '$email_address'";
                                    $default_cover_photo_from_db = mysqli_query($conn,  $default_cover_photo_query);
                                    $default_cover_photo = mysqli_fetch_assoc($default_cover_photo_from_db)['default_cover_photo'];
                                ?>
                                    <div class="cover" style="overflow: hidden;" >
                                    <img style="width: 1600px; height: 451px; " src="upload/cover_photos/<?php echo  $default_cover_photo?>" style="background-size: cover; background-position: center; max-height: 272px; width: 100%;" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img  src="upload/profile_photos/<?php echo $default_photo ;?>" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0"><?php echo $_SESSION['fullname'] ;?></h4>
											<p>UX / UI Designer</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0"><?= $_SESSION['email']?></h4>
											<p>Email</p>
										</div>
	
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                 <div class="col-xl-7">
                 <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Change your password</h4>
                        </div>
                        <div class="card-body">
                            




                       <!-- validation start -->

                            <?php
                                if(isset($_SESSION['current_pass'])):
                            ?>
                            <div class="alert alert-success">
                                <?php  echo $_SESSION['current_pass'];?>
                            </div>
                            <?php    
                            endif;
                            ?>
                            <?php
                                if(isset($_SESSION['new_pass'])):
                            ?>
                            <div class="alert alert-success">
                                <?php  echo $_SESSION['new_pass'];?>
                            </div>
                            <?php    
                            endif;
                            ?>
                            <?php
                                if(isset($_SESSION['re_pass'])):
                            ?>
                            <div class="alert alert-success">
                                <?php  echo $_SESSION['re_pass'];?>
                            </div>
                            <?php    
                            endif;
                            ?>
 <!-- validation end -->
                     <!-- db-pass -->
                            <?php
                                if(isset($_SESSION['db-pass'])):
                            ?>
                            <div class="alert alert-success">
                                <?php  echo $_SESSION['db-pass'];?>
                            </div>
                            <?php    
                            endif;
                            ?>
                        <!-- update-pass -->

                            <div class="basic-form">
                                <form action="change_pass.php" method="POST">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control border-info" name="current-password" placeholder="current password">
                                        </div>
                                        <div class="col-sm-4 mt-2 mt-sm-0">
                                            <input type="password" class="form-control border-info" name="New-password" placeholder="new password">
                                        </div>
                                        <div class="col-sm-4 mb-3 mt-2 mt-sm-0">
                                            <input type="password" class="form-control border-info" name="re-password" placeholder="confirm password">
                                        </div>
                                        <div class="col-sm-4 mt-2 mt-sm-0">
                                          <input class="btn btn-block btn-primary" value="Change Password" type="submit" >
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                 </div>
                 <div class="col-xl-5">
                     <div class="card">
                         <div class="card-header card-title">change Your Name</div>
                            <div class="card-body ">

                                    <?php
                                        if(isset($_SESSION['name_change_succ'])):
                                    ?>
                                    <div class="alert alert-success">
                                        <?php  echo $_SESSION['name_change_succ'];?>
                                    </div>
                                    <?php    
                                    endif;
                                    ?>
                                    <!-- match-pass -->
                                    <?php
                                        if(isset($_SESSION['match-pass'])):
                                    ?>
                                    <div class="alert alert-success">
                                        <?php  echo $_SESSION['match-pass'];?>
                                    </div>
                                    <?php    
                                    endif;
                                    ?>
                                    <div class="basic-form">
                                        <form action="changeName.php" method="POST">
                                            <div class="row">

                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control border-info" name="fullName_change" placeholder="Change name">
                                                    <?php if(isset($_SESSION['fullname_e'])):?>
                                                    <div class="text-danger"><?=$_SESSION['fullname_e']; ?> </div>
                                                    <?php endif;?>
                                                </div>
                                            
                                                <div class="col-sm-4 mt-2 mt-sm-0">
                                                <input class="btn  btn-primary" value="change name" type="submit" >
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                     </div>
                 </div>

                 <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6">
                        <div class="card">
                         <div class="card-header card-title">Change profile photo</div>
                         <div class="card-body">
                            <div class="basic-form">
                                    <form action="changeprofilephoto.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-8">
                                            <input class="form-control  border-info " id="formFileLg" name="profile_photo" type="file">
                                               
                                            </div>
                                        
                                            <div class="col-sm-4 mt-2 mt-sm-0">
                                            <input class="btn btn-block btn-primary" value="Update" type="submit" >
                                            </div>
                                        </div>
                                    </form>
                            </div>
                         </div>
                     </div>
                        </div>
                        <div class="col-xl-6">
                        <div class="card">
                         <div class="card-header card-title">Change cover photo</div>
                         <div class="card-body">
                            <div class="basic-form">
                                    <form action="changecoverphoto.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-8">
                                            <input class="form-control  border-info " id="formFileLg" name="cover_photo" type="file">
                                               
                                            </div>
                                        
                                            <div class="col-sm-4 mt-2 mt-sm-0">
                                            <input class="btn btn-block btn-primary" value="Update" type="submit" >
                                            </div>
                                        </div>
                                    </form>
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
            Content body end
        ***********************************-->


    <?php require_once('footer.php');
    unset($_SESSION['update-pass']);
    unset($_SESSION['db-pass']);
    unset($_SESSION['match-pass']);
    unset($_SESSION['current_pass']);
    unset($_SESSION['re_pass']);
    unset($_SESSION['new_pass']);
    unset($_SESSION['fullname_e']);
    unset($_SESSION['name_change_succ']);
    ?>
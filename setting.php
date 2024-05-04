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
						<li class="breadcrumb-item active"><a href="setting.php">Settings</a></li>
					</ol>
                </div>
          <div class="row">
   
              <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header card-title">logo list</div>
                            <div class="card-body">
                            <?php 
                                $logo_img_query = "SELECT setting_value FROM setting WHERE setting_name ='logo_img'";
                                $logo_img_from_db = mysqli_query($conn, $logo_img_query);
                                $logo_img = mysqli_fetch_assoc($logo_img_from_db)['setting_value'];
                        
                             
                            
                                ?>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered verticle-middle table-responsive-sm">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>logo</th>
                                                  
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><img width="100px" src="upload/logo_img/<?php echo $logo_img;?>" alt=""></td>
                                                        
                                                    
                                                        
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                                              
                            </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header card-title">logo form</div>
                   
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="settingpost.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group position-relative ">      
                                        <input  type="file" class="form-control  border-info"  name="logo_img">
                                        <button style=" position: absolute;top: 5px;right: 5px;" type="submit" class="btn btn-xl btn-primary">upload</button>
                                    </div> 
                                </form>                                             
                            </div>   
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header card-title">About Description form</div>
                        <?php 
                            $about_description_query = "SELECT setting_value FROM setting WHERE setting_name ='about_description'";
                            $about_description_from_db = mysqli_query($conn, $about_description_query);
                           $about_description = mysqli_fetch_assoc($about_description_from_db)['setting_value'];
                        
                            ?>
                        <div class="card-body">
                            <form action="settingpost.php" method="POST">
                              <textarea style="padding: 10px;"  class="border-info" cols="80" name="about_description" rows="5"><?php  echo  $about_description?></textarea>
                              <button class="btn btn-primary">change</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header card-title">About me Description form</div>
                        <?php 
                            $about_me_description_query = "SELECT setting_value FROM setting WHERE setting_name ='about_me_description'";
                            $about_me_description_from_db = mysqli_query($conn, $about_me_description_query);
                           $about_me_description = mysqli_fetch_assoc($about_me_description_from_db)['setting_value'];
                        
                            ?>
                        <div class="card-body">
                            <form action="settingpost.php" method="POST">
                              <textarea style="padding: 10px;"  class="border-info" cols="80" name="about_me_description" rows="5"><?php  echo  $about_me_description?></textarea>
                              <button class="btn btn-primary">change</button>
                            </form>
                        </div>
                    </div>
                </div>
          </div>
                <div class="col-xl-12  col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update setting form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="settingpost.php" method="POST" enctype="multipart/form-data">
                                      
                                         <div class="row">
                                             <!-- owner name  -->
                                             <?php 
                                             $owner_name_query = "SELECT setting_value FROM setting WHERE setting_name ='Owner_name'";
                                             $owner_name_from_db = mysqli_query($conn, $owner_name_query);
                                             $owner_name = mysqli_fetch_assoc($owner_name_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-4">
                                                <label class="font-weight-bold" for="">Owner Name:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?php echo $owner_name?>" name="owner_name">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                              <!-- owner phone  -->
                                              <?php 
                                             $owner_phone_query = "SELECT setting_value FROM setting WHERE setting_name ='owner_phone'";
                                             $owner_phone_from_db = mysqli_query($conn, $owner_phone_query);
                                             $owner_phone = mysqli_fetch_assoc($owner_phone_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-4">
                                                <label class="font-weight-bold" for="">Phone Number:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?php echo $owner_phone?>" name="owner_phone">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                              <!-- owner email  -->
                                              <?php 
                                             $owner_email_query = "SELECT setting_value FROM setting WHERE setting_name ='owner_email'";
                                             $owner_email_from_db = mysqli_query($conn, $owner_email_query);
                                             $owner_email = mysqli_fetch_assoc($owner_email_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-4">
                                                <label class="font-weight-bold" for="">Email:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?php echo $owner_email?>" name="owner_email">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                              <!-- owner office  -->
                                              <?php 
                                             $office_in_query = "SELECT setting_value FROM setting WHERE setting_name ='office_in'";
                                             $office_in_from_db = mysqli_query($conn, $office_in_query);
                                             $office_in = mysqli_fetch_assoc($office_in_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-3">
                                                <label class="font-weight-bold" for="">Office:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?php echo $office_in?>" name="office_in">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                              <!-- contact Details-->
                                              <?php 
                                             $contact_details_query = "SELECT setting_value FROM setting WHERE setting_name ='contact_details'";
                                             $contact_details_from_db = mysqli_query($conn, $contact_details_query);
                                             $contact_details = mysqli_fetch_assoc($contact_details_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-4">
                                                <label class="font-weight-bold" for="">contact Details:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?php echo $contact_details?>" name="contact_details">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                           
                                              <!-- owner address  -->
                                              <?php 
                                             $office_address_query = "SELECT setting_value FROM setting WHERE setting_name ='office_address'";
                                             $office_address_from_db = mysqli_query($conn, $office_address_query);
                                             $office_address = mysqli_fetch_assoc($office_address_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-5">
                                                <label class="font-weight-bold" for="">Address:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?php echo $office_address?>" name="office_address">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                           
                                          </div>
                                         
                                      
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header card-title">Social media link Add form</div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="settingpost.php" method="POST">
                                                <!--facebook -->
                                                <?php 
                                             $facebook_query = "SELECT setting_value FROM setting WHERE setting_name ='facebook'";
                                             $facebook_from_db = mysqli_query($conn, $facebook_query);
                                             $facebook = mysqli_fetch_assoc($facebook_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-10">
                                                <label class="font-weight-bold" for="">facebook:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?=$facebook ?>" name="facebook">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                                <!--twitter -->
                                                <?php 
                                             $twitter_query = "SELECT setting_value FROM setting WHERE setting_name ='twitter'";
                                             $twitter_from_db = mysqli_query($conn, $twitter_query);
                                             $twitter = mysqli_fetch_assoc($twitter_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-10">
                                                <label class="font-weight-bold" for="">Twitter:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?= $twitter ?>" name="twitter">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                                 <!--instagram -->
                                                 <?php 
                                             $instagram_query = "SELECT setting_value FROM setting WHERE setting_name ='instagram'";
                                             $instagram_from_db = mysqli_query($conn, $instagram_query);
                                             $instagram = mysqli_fetch_assoc($instagram_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-10">
                                                <label class="font-weight-bold" for="">Instagram:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?=$instagram ?>" name="instagram">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                                  <!--pinterest -->
                                                  <?php 
                                             $pinterest_query = "SELECT setting_value FROM setting WHERE setting_name ='instagram'";
                                             $pinterest_from_db = mysqli_query($conn, $pinterest_query);
                                             $pinterest = mysqli_fetch_assoc($pinterest_from_db)['setting_value'];
                                            
                                             ?>
                                            <div class="form-group position-relative   col-xl-10">
                                                <label class="font-weight-bold" for="">pinterest:</label>
                                                <input style=" padding-right: 56px;" type="text" class="form-control  border-info" value="<?=$pinterest ?>" name="pinterest">
                                                <button type="submit" style="position: absolute;top: 37px;right: 20px;" class="btn btn-xl  btn-primary button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            </div>
                                        </form>
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



                
<?php require_once('footer.php');?>
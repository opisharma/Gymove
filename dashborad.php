<?php require_once('header.php')?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
							<div class="col-sm-3">
								<div class="card avtivity-card">
									<div class="card-body">
										<div class="media align-items-center">
											<span class="activity-icon bgl-success mr-md-4 mr-3">
												<i class="mt-4 fa fa-2x fa-users"></i>	
											</span>
											
                                            <?Php
											  $total_users_query = " SELECT COUNT(*) AS total FROM `users`";
											  $total_users_from_db = mysqli_query($conn, $total_users_query);
											  $total_users= (mysqli_fetch_assoc($total_users_from_db)['total']);
											
											?>

											<div class="media-body">
												<p class="fs-14 mb-2">Total Users</p>
												<span class="title text-black font-w600"><?=$total_users?></span>
											</div>





										</div>
										<div class="progress" style="height:5px;">
											<div class="progress-bar bg-success" style="width: 42%; height:5px;" role="progressbar">
												<span class="sr-only">42% Complete</span>
											</div>
										</div>
									</div>
									<div class="effect bg-success"></div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card avtivity-card">
									<div class="card-body">
										<div class="media align-items-center">
											<span class="activity-icon bgl-secondary  mr-md-4 mr-3">
											<i class="fa fa-2x fa-user"></i>
											</span>
											<?Php
											  $total_guest_query = " SELECT COUNT(*) AS total FROM `messages`";
											  $total_guest_from_db = mysqli_query($conn, $total_guest_query);
											  $total_guest= (mysqli_fetch_assoc($total_guest_from_db)['total']);
											
											?>
											<div class="media-body">
												<p class="fs-14 mb-2">Total Guest</p>
												<span class="title text-black font-w600"><?php echo $total_guest?></span>
											</div>
										</div>
										<div class="progress" style="height:5px;">
											<div class="progress-bar bg-secondary" style="width: 82%; height:5px;" role="progressbar">
												<span class="sr-only">65%</span>
											</div>
										</div>
									</div>
									<div class="effect bg-secondary"></div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card avtivity-card">
									<div class="card-body">
										<div class="media align-items-center">
											<span class="activity-icon bgl-danger mr-md-4 mr-3">
											<i class="fab fa-2x fa-servicestack"></i>
											</span>
											<?Php
											  $total_service_query = "SELECT COUNT(*) AS total FROM `service`";
											  $total_service_from_db = mysqli_query($conn, $total_guest_query);
											  $total_service= (mysqli_fetch_assoc($total_service_from_db)['total']);
											
											?>
											<div class="media-body">
												<p class="fs-14 mb-2">Tota service</p>
												<span class="title text-black font-w600"><?php echo $total_service;?></span>
											</div>
										</div>
										<div class="progress" style="height:5px;">
											<div class="progress-bar bg-danger" style="width: 90%; height:5px;" role="progressbar">
												<span class="sr-only">42% Complete</span>
											</div>
										</div>
									</div>
									<div class="effect bg-danger"></div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card avtivity-card">
									<div class="card-body">
										<div class="media align-items-center">
											<span class="activity-icon bgl-warning  mr-md-4 mr-3">
												<i class="fas fa-2x fa-ring"></i>
											</span>
											<?php 
										   $select_brand_query = "SELECT COUNT(*) as total FROM brand ORDER BY ID DESC ";
                                           $select_brand_from_db = mysqli_query($conn, $select_brand_query);
										   $total_brand = mysqli_fetch_assoc($select_brand_from_db)['total'];
										   ?>
											<div class="media-body">
												<p class="fs-14 mb-2">Total Brand</p>
												<span class="title text-black font-w600"><?php echo $total_brand?></span>
											</div>
										</div>
										<div class="progress" style="height:5px;">
											<div class="progress-bar bg-warning" style="width: 42%; height:5px;" role="progressbar">
												<span class="sr-only">42% Complete</span>
											</div>
										</div>
									</div>
									<div class="effect bg-warning"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-12">	
								<div class="card">
									<div class="card-header d-sm-flex d-block pb-0 border-0">
										<div class="mr-auto pr-3">
											<h4 class="text-black font-w600 fs-20">All users  <span class="badge badge-danger"><?=$total_users?></span></h4>
											
										</div>
						
									</div>
									<div class="card-body pt-2">
										<div class="testimonial-one owl-carousel">
											<?php // all users 
												$all_users_query = "SELECT *FROM users";
												$all_users_from_db = mysqli_query($conn, $all_users_query);
											?>

										 <?php 
								         	foreach($all_users_from_db as $users):
										  ?> 
											<div class="items">
												<div class="card text-center">
													<div class="card-body">
														<img src="upload/profile_photos/<?=($users['default_photo']) ?>" alt="">
														<h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html" class="text-black"><?php  print_r($users['FullName'])?></a></h5>
														<p class="fs-14"><?php  print_r($users['Email'])?></p>
											
													</div>
												</div>
											</div>
                                         <?php 
										 endforeach;
										 ?>
										 
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card featuredMenu">
									<div class="card-header border-0">
										<h4 class="text-black font-w600 fs-20 mb-0">Messages <span class="badge badge-danger"><?php echo $total_guest?></span> <a class="badge badge-primary text-wrap" href="message.php" >See more</a></h4>
									</div>
									<div class="card-body loadmore-content height750 dz-scroll pt-0" id="FeaturedMenusContent">
										<?php 
										  $all_messges = "SELECT * FROM messages  ORDER BY ID DESC LIMIT 5 ";
										  $all_messges_from_db = mysqli_query($conn,$all_messges);
										?>
									<?php foreach($all_messges_from_db as $key=> $message):?>
										<div class="media mb-4">
											
											<div class="media-body">
												<h5 class="badge bg-info text-white"><?php echo $key+1;?></h5>
												<h5><a href="" class="text-black fs-16"><?php echo $message['message'];?></a></h5>
											    <h2 class="fs-14 text-primary font-w500"><i class="fa fa-user mr-2"></i><?php  echo $message['name'];?></h2>
											    <span class="fs-14 text-primary font-w500"><i class="fa fa-envelope mr-2"></i><?php echo $message['email'];?></span>
												
												
											</div>
										</div>
										<?php endforeach;?>		
													
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

?>
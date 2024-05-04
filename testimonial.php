
<?php 
require_once('header.php');
require_once "dbConnect.php";

?>
        <!-- **********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashborad.php">Dashboard</a></li>
						<li class="breadcrumb-item active"><a href="testimonial.php">Testimonial</a></li>
					</ol>
                </div>
                <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Testimonial Form</h4>
                            </div>
                            <div class="card-body">
                            <div class="basic-form">
                                    <form action="testimonialpost.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">                                               
                                            <div class="form-group col-xl-6 ">
                                                    <input type="file"  class="form-control border-info" name="section_title_img" >
                                            </div>
                                            <div class="form-group col-xl-6 ">
                                                    <input type="text"  class="form-control border-info" placeholder="Testimonial Details" name="testi_details" >
                                            </div>
                                            <div class="form-group col-xl-6 ">
                                                    <input type="text"  class="form-control border-info" placeholder="Name" name="testi_content_name" >
                                            </div>
                                            
                                            <div class="form-group col-xl-6 ">
                                                    <input type="text"  class="form-control border-info" placeholder="Designation" name="testi_content_h5" >
                                            </div>
                                            
   
                                            <div class="form-group  col-xl-4">
                                              <button type="submit" class=" btn btn-block btn-primary">Add Testimonial</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
                <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            <?php 
                            $select_show_testimonial = "SELECT COUNT(*) AS total  FROM testimonial WHERE status = 'show'";
                            $select_show_testimonial_from_db = mysqli_query($conn , $select_show_testimonial);
                            $total = mysqli_fetch_assoc($select_show_testimonial_from_db)['total'];
                        ?>
                                <h4 class="card-title">list Testimonial <span class="badge badge-primary">Total show <span class="badge badge-danger"><?php echo $total?></span></span></h4>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                    <table class="table header-border table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>IMG</th>
                                                <th>Details</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <?php 
										  $select_testimonial = "SELECT * FROM testimonial ORDER BY ID DESC";
                                          $select_testimonial_from_db = mysqli_query($conn , $select_testimonial);
										?>
									<?php   foreach($select_testimonial_from_db as $key=> $testimonial ):?>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0)"><?php echo $key+1;?></a>
                                                </td>
                                                <td><img style="height: 100px;" src="upload/testimonial_photos/<?php echo ($testimonial['section_title_img']);?>" alt=""></td>
                                                <td style="width: 500px;"><span class="text-muted"><?php  echo ($testimonial['testi_details']);?></span>
                                                </td>
                                                <td><?php echo ($testimonial['testi_content_name']);?></td>                                          
                                                <td><?php echo ($testimonial['testi_content_h5']);?></td> 

                                                <td>
                                                    <?php if($testimonial['status']== 'hide'):?>
                                                    <span class="badge badge-info"><?php echo ($testimonial['status']);?></span>
                                                    <?php else:?>
                                                    <span class="badge badge-primary"><?php echo ($testimonial['status']);?></span>
                                                    <?php endif;?>   
                                                </td> 

                                                <td>
                                                    <?php if($testimonial['status']== 'hide'):?>
                                                    <a href="testimonial_show.php?testimonial_id = <?php echo ($testimonial['ID']);?>"  class="btn btn-info btn-sm"> <i class="fa fa-eye"></i> </a>
                                                    <?php else:?>
                                                    <a href="testimonial_hide.php?testimonial_id = <?php echo ($testimonial['ID']);?>"  class="btn btn-primary btn-sm"> <i class="fa fa-eye-slash"></i> </a>
                                                    <?php endif;?>
                                                    <button value="testimonialdelete.php?testimonial_id = <?php echo ($testimonial['ID']);?>"  class="btn btn-danger btn-sm delete_btn"> <i class="fa fa-trash"></i></button>
                                                </td>
                                        
                                            </tr>
 
                                        </tbody>
                                        <?php endforeach;?>	
                                    </table>
                                </div>
                            </div>
                        </div>
					</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        *********************************** -->


<?php
    require_once('footer.php');
?>
<script>
    $(document).ready(function(){
        $('.delete_btn').click(function(){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
               var link = $(this).val();
               window.location.href = link;
            }
            })
        })
    })
</script>
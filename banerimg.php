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
						<li class="breadcrumb-item active"><a href="skill.php">Images</a></li>
					</ol>
                </div>
              <div class="row">
                  <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header card-title">List Baner images</div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Baner images</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    
                                    
                                    </tr>
                                </thead>

                                <?php
                                    $baner_img_query = "SELECT * FROM `baner_img` ";
                                    $baner_img_from_db = mysqli_query($conn, $baner_img_query);  
                                                                        
                                
                                ?>

                                <tbody>
                                <?php foreach($baner_img_from_db as $key =>$baner_img):?>
                                    <tr>
                                        <td><?php echo  $key+1?></td>
                                        <td><img width="100px" src="upload/baner_img/<?php echo $baner_img['baner_img'];?>" alt=""></td>
                                        <td>
                                            <?php if($baner_img['status']== 'hide'):?>
                                                <span class="badge badge-primary"><?php echo ($baner_img['status']);?></span>
                                                <?php else:?>
                                                <span class="badge badge-info"><?php echo ($baner_img['status']);?></span>
                                            <?php endif;?>
                                        </td>
                                        <td>  
                                            <?php if($baner_img['status']== 'hide'):?>
                                                    <a href="banerimgshow.php?baner_id = <?php echo ($baner_img['id']);?> "><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button></a>
                                            <?php endif;?>
                                            <button class="btn btn-primary btn-sm delete_btn" value="banerimgdelete.php?baner_id = <?php echo ($baner_img['id']);?> "><a ><i class="fa fa-trash"></i></a></button>
                                        </td>
                                        
                                        
                                    
                                        
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Baner Img form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="banerimgpost.php" method="POST" enctype="multipart/form-data">
                                      <div class="row">
                                            <div class="form-group col-xl-12">
                                                <input type="file" class="form-control border-info" name="baner_img" >
                                                <button style="position:absolute; top: 7px;right: 21px; " type="submit" class="btn btn-xl btn-primary"><i class="fa fa-upload" aria-hidden="true"></i></button>
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
        <!--**********************************
            Content body end
        ***********************************-->



                
<?php require_once('footer.php');?>
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
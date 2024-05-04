
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
						<li class="breadcrumb-item active"><a href="testimonial.php">Brand</a></li>
					</ol>
                </div>
                <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Brand</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

                                    <form action="brandpost.php" method="POST" enctype="multipart/form-data">
                                  
                                        <div class="form-group row"> 
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control border-info" name="brand_thumnail_1" placeholder="Brand Thumnail 1">
                                            </div>
                                        </div>
                                   
                                 
                                  
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add Brand</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
                <div class="col-xl-12 col-lg-12" id="brand">
                        <div class="card">
                            <div class="card-header">
                                        <?php
                                            $brand_show_count_query = "SELECT count(*) as total FROM `brand` where status = 'show' ";
                                            $brand_show_count_from_db = mysqli_query($conn, $brand_show_count_query);  
                                            $total = mysqli_fetch_assoc($brand_show_count_from_db)['total']                                         
                                        ?>
                                <h4 class="card-title">list Brand <span class="badge badge-primary">Total show <span class="badge badge-danger"><?php echo $total?></span></span></h4>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                    <table class="table header-border table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Brand Thumbnail</th>
                                                <th>View status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <?php 
										   $select_brand_query = "SELECT * FROM brand ORDER BY ID DESC ";
                                           $select_brand_from_db = mysqli_query($conn, $select_brand_query);
										?>
									<?php foreach($select_brand_from_db as $key=> $brand):?>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0)"><?php echo $key+1;?></a></td>
                                                <td><img style="height: 100px;"src="upload/brand/<?php echo ($brand['brand_thumnail_1']);?>" alt="not found"></td>

                                                <td>
                                                    <?php if($brand['status'] == 'hide'):?>
                                                    <span class="badge badge-info"><?php echo ($brand['status']);?></span>
                                                    <?php else:?>
                                                    <span class="badge badge-primary"><?php echo ($brand['status']);?></span>
                                                    <?php endif;?>
                                                </td>
                                                <td>
                                                   <?php if($brand['status'] == 'hide'):?>
                                                    <a id="" href="brand_show.php? brand_id = <?php echo ($brand['id']);?>" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i> </a>
                                                    <?php else:?>
                                                    <a id="" href="brand_hide.php? brand_id = <?php echo ($brand['id']);?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye-slash"></i> </a>
                                                    <?php endif;?>
                                                    
                                                    
  
                                                    <button class="btn btn-primary delete_btn btn-sm" value="branddelete.php? brand_id = <?php echo ($brand['id']);?> "><a ><i class="fa fa-trash"></i></a></button>
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
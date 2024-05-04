<?php
require_once('header.php');
require_once('dbConnect.php');
?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashborad.php">Dashboard</a></li>
						<li class="breadcrumb-item active"><a href="portfolio.php">Portfolio</a></li>
					</ol>
                </div>
                <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Portfolio form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="portfoliopost.php" method="POST" enctype="multipart/form-data">
                                      
                                       <div class="row">
                                       <div class="form-group col-xl-6">
                                                <input type="text" class="form-control border-info" name="portfolio_catagory" placeholder="portfolio catagory">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <input type="text" class="form-control border-info" name="portfolio_title" placeholder="portfolio Title">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <input type="file" class="form-control border-info" name="portfolio_thumbnail" placeholder="portfolio Thumbnail" >
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <input type="text" class="form-control border-info" name="portfolio_details" placeholder="portfolio Details" >
                                            </div>
                                
                                            <div class="form-group col-sm-6">
                                                <button type="submit" class="btn btn-block btn-primary">Add Service</button>
                                            </div>
                                       </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                        <?php
                                            $portfolio_count_query = "SELECT count(*) as total FROM `portfolio` where status = 'show' ";
                                            $portfolio_count_from_db = mysqli_query($conn, $portfolio_count_query);  
                                            $total = mysqli_fetch_assoc($portfolio_count_from_db)['total']                                         
                                        ?>
                                <h4 class="card-title">list Portfolio <span class="badge badge-primary">Total show  <span class="badge badge-danger"><?php echo $total?></span></span></h4>
                            </div>
                            <div class="card-body">
                            <?php if(isset($_SESSION['portfolio_show'])):?>
                              <div class="alert alert-danger"><?php echo  $_SESSION['portfolio_show'];?></div>
                              <?php endif;?>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Portfolio Catagory</th>
                                                <th>Portfolio Title</th>
                                                <th>Portfolio Thumbnail</th>
                                
                                                <th>status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $portfolio_query = "SELECT * FROM `portfolio` ";
                                            $portfolio_from_db = mysqli_query($conn, $portfolio_query);                                           
                                        ?>
                    
                                      <?php foreach($portfolio_from_db as $key =>$portfolio):?>
                                            <tr>
                                                <th><?php echo $key+1 ?></th>
                                                <td><?php echo ($portfolio['portfolio_catagory']);?></td>
                                                <td><?php echo ($portfolio['portfolio_title']);?></td>
                                                <td><img style="height: 100px;" src="upload/portfolio_thumbnail/<?php echo ($portfolio['portfolio_thumbnail']);?>" alt="img"></td>
        
                                                <td >
                                                <?php if($portfolio['status']== 'hide'):?>
                                                    <span class="badge badge-primary"><?php echo ($portfolio['status']);?></span>
                                                    <?php else:?>
                                                    <span class="badge badge-info"><?php echo ($portfolio['status']);?></span>
                                                    <?php endif;?>   
                                                </td>
                                                <td>
                                                    <?php if($portfolio['status']== 'hide'):?>
                                                    <a href="portfolio_show.php?portfolio_id = <?php echo ($portfolio['id']);?> "><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button></a>
                                                    <?php else:?>
                                                        <a href="portfolio_hide.php?portfolio_id = <?php echo ($portfolio['id']);?> "><button class="btn btn-info btn-sm"><i class="fa fa-eye-slash"></i></button></a>
                                                    <?php endif;?>
                                                    <button class="btn btn-danger delete_btn btn-sm" value="deleteportfolio.php?portfolio_id = <?php echo ($portfolio['id']);?>"><a ><i class="fa fa-trash"></i></a></button>
                                                </td>
                                                
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
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

unset($_SESSION['portfolio_show']);
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
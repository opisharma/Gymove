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
						<li class="breadcrumb-item active"><a href="skill.php">skill</a></li>
					</ol>
                </div>
                <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add skill form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="skillpost.php" method="POST" enctype="multipart/form-data">
                                      <div class="row">
                                            <div class="form-group col-xl-6">
                                                <input type="text" class="form-control border-info" name="skill_catagory" placeholder="Skill catagory">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <input type="text" class="form-control border-info" name="skill_details" placeholder="Skill Details">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <input type="text" class="form-control border-info" name="skill_width" placeholder="Skill Width">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <input type="text" class="form-control border-info" name="skill_aria_valuenow" placeholder="Skill aria value">
                                            </div>
                                         
                                
                                            <div class="form-group col-sm-6">
                                                <button type="submit" class="btn btn-block btn-primary">Add Skill</button>
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
                                            $skill_show_count_query = "SELECT count(*) as total FROM `skill` where status = 'show' ";
                                            $skill_show_count_from_db = mysqli_query($conn, $skill_show_count_query);  
                                            $total = mysqli_fetch_assoc($skill_show_count_from_db)['total']                                         
                                        ?>
                                <h4 class="card-title">list skill  <span class="badge badge-primary">Total show <span class="badge badge-danger"><?php echo $total?></span></span></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Skill Catagory</th>
                                                <th>Skill Details</th>
                                                <th>Skill width</th>
                                                <th>Skill value</th>                                                    
                                                <th>status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $skill_query = "SELECT * FROM `skill`";
                                            $skill_from_db = mysqli_query($conn, $skill_query);
                                            
                                        ?>
                  
                                        <?php  foreach($skill_from_db as $key => $skill):?>
                                            <tr>
                                                <th><?php echo $key+1 ?></th>
                                                <th><?php echo $skill['skill_catagory']?></th>
                                                <th><?php echo $skill['skill_details'] ?></th>
                                                <th><?php echo $skill['skill_width'] ?></th>
                                                <th><?php echo $skill['skill_value']?></th>
                                                <td >
                                                    <?php if($skill['status']== 'hide'):?>
                                                        <span class="badge badge-primary"><?php echo $skill['status']?></span>
                                                        <?php else:?>
                                                        <span class="badge badge-info"><?php echo $skill['status']?></span>

                                                    <?php endif;?>      
                                                </td>
                                                <td> 
                                                <?php if($skill['status']== 'hide'):?>
                                                    <a href="skill_show.php?skill_id = <?php echo $skill['id']?>"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></button></a>
                                                    <?php else:?>
                                                    <a href="skill_hide.php?skill_id = <?php echo $skill['id']?>"><button class="btn btn-info btn-sm"><i class="fa fa-eye-slash"></i></button></a>
                                                    <?php endif;?>   
                                                    <button class="btn btn-danger btn-sm delete_btn"  value="skill_delete.php?skill_id = <?php echo $skill['id']?>"><i class="fa fa-trash"></i></button>
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


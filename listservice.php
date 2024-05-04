<?php

require_once("header.php");
?>
       <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashborad.php">Dashboard</a></li>
						<li class="breadcrumb-item active"><a href="message.php">services</a></li>
					</ol>
                </div>
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                        <?php
                                            $service_show_count_query = "SELECT count(*) as total FROM `service` where status = 'show' ";
                                            $service_show_count_from_db = mysqli_query($conn, $service_show_count_query);  
                                            $total = mysqli_fetch_assoc($service_show_count_from_db)['total']                                         
                                        ?>
                                <h4 class="card-title">All services <span class="badge badge-primary">Total show <span class="badge badge-danger"><?php echo $total?></span></span></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table header-border table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>service Name</th>
                                                <th>service Details</th>
                                                <th>service Icon</th>
                                                <th>status</th>
                                                <th>action</th>
                                               
                                          
                                               
                                            </tr>
                                        </thead>
                                       
                                        <?php 
										  $all_service = "SELECT * FROM `service` ORDER BY id DESC  ";
										  $all_service_from_db = mysqli_query($conn,$all_service);
                                        //   print_r($all_service_from_db);
                                   
										?>
									<?php foreach($all_service_from_db as $key=> $service):?>
                                        <tbody >
                                            <tr >
                                                <td class="border"><?php echo $key+1 ?></td>
                                                <td class="border"><?php echo ($service['service_name'])?></td>
                                                <td class="border"><?php echo ($service['service_details'])?></td>                           
                                                <td class="border" ><i  class="fa fa-2x <?php echo ($service['service_icon'])?>"></i></td>                           
                                                 <td class="border">
                                                     <?php if($service['status']== 'hide'):?>
                                                     <span class="badge badge-danger"><?php echo ($service['status'])?></span>
                                                     <?php else:?>
                                                        <span class="badge badge-primary"><?php echo ($service['status'])?></span>
                                                     <?php endif;?>
                                                </td>
                                                <td >
                                                    <a href="service_status.php?service_id = <?php echo $service['id'] ?>">
                                                        <?php if($service['status']== 'hide'):?>
                                                        <button class="btn btn-danger btn-sm"> <i class="fa fa-eye"></i></button>
                                                        <?php else:?>
                                                            <button class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></button>
                                                       <?php endif;?>
                                                    </a>                           
                                                    <button class="btn btn-primary delete_btn btn-sm" value="servicedelete.php?service_id = <?php echo ($service['id']);?> "><a ><i class="fa fa-trash"></i></a></button>
                                                </td >
                                                
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<?php
require_once("footer.php");
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
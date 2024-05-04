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
						<li class="breadcrumb-item active"><a href="message.php">Messages</a></li>
					</ol>
                </div>
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Messages</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table header-border table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Guest Name</th>
                                                <th>Guest Email</th>
                                                <th>Guest Messages</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Delete</th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <?php 
										  $all_messges = "SELECT * FROM messages ORDER BY ID DESC ";
										  $all_messges_from_db = mysqli_query($conn,$all_messges);
										?>
									<?php foreach($all_messges_from_db as $key=> $message):?>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0)"><?php echo $key+1;?></a>
                                                </td>
                                                <td><?php echo $message['name'];?></td>
                                                <td><span class="text-muted"><?php echo $message['email'];?></span>
                                                </td>
                                                <td><?php echo $message['message'];?></td>
                                                <td>
                                                    <?php if($message['status'] == "unread"):?>
                                                    <span class="badge badge-primary"><?php echo $message['status'];?></span>
                                                    <?php else:?>
                                                        <span class="badge badge-success"><?php echo $message['status'];?></span>
                                                    <?php endif;?>
                                                </td>

                                                <td><a href="messageread.php?message_id = <?php echo $message['ID'];?>"><button class="btn btn-info btn-sm"> <i class="fa fa-check"></i></button></a></td>
                                                <td>
                                                    
                                                    <button class="btn btn-primary delete_btn btn-sm" value="deletemessage.php? message_id = <?php echo $message['ID'];?>"><a ><i class="fa fa-trash"></i></a></button>
                                            
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
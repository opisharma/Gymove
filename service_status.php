<?php
require_once "dbConnect.php";
$id = ($_GET['service_id_']);

$select_status_query = "SELECT status FROM  service WHERE id = $id ";
$status_from_db = mysqli_query($conn, $select_status_query);
$status = mysqli_fetch_assoc($status_from_db);


if($status['status'] == "hide"){
    $update_query = "UPDATE service SET status = 'show' WHERE id = $id";
    mysqli_query( $conn,$update_query);
}

if($status['status'] == "show"){
    $update_query = "UPDATE service SET status = 'hide' WHERE id = $id";
    mysqli_query( $conn,$update_query);
}
header("location: listservice.php")
?>
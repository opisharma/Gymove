<?php
require_once('dbConnect.php');
$service_name=($_POST['service_name']);
$service_details=($_POST['service_details']);
$service_icon=($_POST['service_icon']);

$insert_query = "INSERT INTO `service`( `service_name`, `service_details`, `service_icon`) VALUES ('$service_name','$service_details','$service_icon')";
mysqli_query($conn, $insert_query);
header("location: Addservice.php");

?>
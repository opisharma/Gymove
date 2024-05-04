<?php
require_once 'dbConnect.php';

$id = ($_GET['fact_id_']);

$total_show_service_query = "SELECT COUNT(*) AS total FROM fact_area WHERE status = 'show'";

$total_show_service_from_db = mysqli_query($conn, $total_show_service_query);
$total_show_service = mysqli_fetch_assoc($total_show_service_from_db)['total'];

if($total_show_service < 4){
$update_query = "UPDATE fact_area SET status = 'show' WHERE id = $id";
mysqli_query( $conn,$update_query);

header("location: addfactarea.php#lisfact");
}
else{
    $_SESSION['fact_show'] = "Already four show!";
    header("location: addfactarea.php#lisfact");
}




?>
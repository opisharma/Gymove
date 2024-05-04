<?php
require_once 'dbConnect.php';
$id = ($_GET['brand_id_']);

$total_show_brand_query = "SELECT COUNT(*) AS total FROM brand WHERE status = 'show'";

$total_show_brand_from_db = mysqli_query($conn, $total_show_brand_query);
$total_show_brand = mysqli_fetch_assoc($total_show_brand_from_db)['total'];

if($total_show_brand < 6){
$update_query = "UPDATE brand SET status = 'show' WHERE id = $id";
mysqli_query( $conn,$update_query);

header("location: brand.php#brand");
}
else{
    // $_SESSION['fact_show'] = "Already four show!";
    header("location: brand.php#brand");
}




?>
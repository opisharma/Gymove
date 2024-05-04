<?php
require_once 'dbConnect.php';
$brand_id= ($_GET['brand_id_']);

$delete_query = "DELETE FROM `brand` WHERE ID = $brand_id ";
mysqli_query($conn, $delete_query);
header('location: brand.php')
?>
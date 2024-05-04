<?php
require_once 'dbConnect.php';
$id = ($_GET['brand_id_']);
$update_query = "UPDATE brand SET status = 'hide' WHERE id = $id";
mysqli_query( $conn,$update_query);
header("location: brand.php#brand")
?>
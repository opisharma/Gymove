<?php
require_once 'dbConnect.php';
$id = ($_GET['portfolio_id_']);
$update_query = "UPDATE portfolio SET status = 'hide' WHERE id = $id";
mysqli_query( $conn,$update_query);
header("location: portfolio.php")
?>
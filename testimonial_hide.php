<?php
require_once "dbConnect.php";
$id = ($_GET['testimonial_id_']);

$update_query = "UPDATE testimonial SET status = 'hide' WHERE id = $id";
mysqli_query( $conn,$update_query);
header("location: testimonial.php")
?>
<?php
require_once "dbConnect.php";
$id = ($_GET['testimonial_id_']);

$delete_query = "DELETE FROM `testimonial` WHERE ID = $id";
mysqli_query($conn, $delete_query);
header("location: testimonial.php")
?>
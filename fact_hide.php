<?php
require_once 'dbConnect.php';
$id = ($_GET['fact_id_']);
$update_query = "UPDATE fact_area SET status = 'hide' WHERE id = $id";
mysqli_query( $conn,$update_query);
header("location: addfactarea.php#lisfact")
?>
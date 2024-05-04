<?php
require_once 'dbConnect.php';

$id = ($_GET['baner_id_']);


$update_query = "UPDATE baner_img SET status = 'hide' ";
mysqli_query( $conn,$update_query);

$update_query = "UPDATE baner_img SET status = 'show' WHERE id = $id";
mysqli_query( $conn,$update_query);
header("location: banerimg.php");



?>

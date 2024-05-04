<?php
require_once('dbConnect.php');

$baner_img = ($_GET['baner_id_']);
$delete_query = "DELETE FROM `baner_img2` WHERE ID = $baner_img ";
mysqli_query($conn, $delete_query);
header('location: banerimg2.php')
?>


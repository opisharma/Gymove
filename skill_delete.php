<?php
require_once "dbConnect.php";
$id = ($_GET['skill_id_']);

$delete_query = "DELETE FROM `skill` WHERE id = $id ";
mysqli_query($conn, $delete_query);
header('location: skill.php')
?>


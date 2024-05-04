<?php
require_once "dbConnect.php";
$id = ($_GET['skill_id_']);
$update_query = "UPDATE skill SET status = 'hide' WHERE id = $id";
mysqli_query( $conn,$update_query);
header("location: skill.php")
?>
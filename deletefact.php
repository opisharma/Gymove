<?php
require_once('dbConnect.php');

$fact_id = ($_GET['fact_id_']);
$delete_query = "DELETE FROM `fact_area` WHERE ID = $fact_id ";
mysqli_query($conn, $delete_query);
header('location: addfactarea.php')
?>


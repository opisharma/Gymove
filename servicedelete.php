<?php
require_once('dbConnect.php');
$id=($_GET)['service_id_'];
$delete_query = "DELETE FROM `service` WHERE ID = $id ";
mysqli_query($conn, $delete_query);
header('location: listservice.php')
?>
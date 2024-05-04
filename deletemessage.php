<?php
require_once('dbConnect.php');

$messages_id = ($_GET['message_id_']);
$delete_query = "DELETE FROM `messages` WHERE ID = $messages_id ";
mysqli_query($conn, $delete_query);
header('location: message.php')
?>



<?php
require_once('dbConnect.php');

$messages_id = ($_GET['message_id_']);


$select_status_query = "SELECT status FROM messages  WHERE ID = $messages_id";
$select_status_from_db = mysqli_query($conn, $select_status_query);
$status = mysqli_fetch_assoc($select_status_from_db)['status'];


if($status ==  "read"){
    $update_query = "UPDATE messages SET status = 'unread' WHERE id = $messages_id";
    mysqli_query($conn, $update_query); 
}
if($status ==  "unread"){
    $update_query = "UPDATE messages SET status = 'read' WHERE id = $messages_id";
    mysqli_query($conn, $update_query);
}
header("location: message.php");
?>
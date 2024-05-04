<?php
require_once 'dbConnect.php';
$baner_img = ($_FILES['baner_img']['name']);

$insert_query = "INSERT INTO `baner_img`( `baner_img`) VALUES ('$baner_img')";
mysqli_query($conn, $insert_query);
$id= mysqli_insert_id($conn);

if($_FILES['baner_img']['name']){

    $old_name = $_FILES['baner_img']['name'];
    $after_explode = explode('.',$old_name);
    $extension = end($after_explode);

    $baner_img_new_name = $id. ".$extension";
  
    
    $tmp_location =  $_FILES['baner_img']['tmp_name'];
    $new_location = "upload/baner_img/". $baner_img_new_name;
    move_uploaded_file($tmp_location, $new_location);
  
    $update_query = "UPDATE `baner_img` SET `baner_img`='$baner_img_new_name' WHERE id = $id";
    mysqli_query($conn, $update_query);
    header("location: banerimg.php");
    }
    

?>
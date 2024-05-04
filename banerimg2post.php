<?php
require_once 'dbConnect.php';
$baner_img2 = ($_FILES['baner_img2']['name']);

$insert_query = "INSERT INTO `baner_img2`( `baner_img`) VALUES ('$baner_img2')";
mysqli_query($conn, $insert_query);
$id= mysqli_insert_id($conn);

if($_FILES['baner_img2']['name']){

    $old_name = $_FILES['baner_img2']['name'];
    $after_explode = explode('.',$old_name);
    $extension = end($after_explode);

    $baner_img_new_name = $id. ".$extension";
  
    
    $tmp_location =  $_FILES['baner_img2']['tmp_name'];
    $new_location = "upload/baner_img2/". $baner_img_new_name;
    move_uploaded_file($tmp_location, $new_location);
  
    $update_query = "UPDATE `baner_img2` SET `baner_img`='$baner_img_new_name' WHERE id = $id";
    mysqli_query($conn, $update_query);
    header("location: banerimg2.php");
    }
    

?>
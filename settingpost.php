<?php
require_once 'dbConnect.php';
// print_r($_POST);
foreach($_POST as $setting_name => $setting_value){
    // echo $setting_name;
    // echo $setting_value;

   $update_query = "UPDATE setting set setting_value = '$setting_value' where setting_name = '$setting_name' ";
   mysqli_query($conn, $update_query);
   header("location: setting.php");
   
}

// print_r($_FILES);
foreach($_FILES as $setting_name => $setting_value){
// baner image update 
 $id_select_query = "SELECT `id` FROM `setting` WHERE setting_name = '$setting_name'";
 $id_from_db = mysqli_query($conn, $id_select_query);
 $id = mysqli_fetch_assoc($id_from_db)['id'];

 if($_FILES['logo_img']['name']){
$old_name = $_FILES['logo_img']['name'];
$after_explode = explode('.',$old_name);
$extension = end($after_explode);

$logo_img_new_name = time(). ".$extension";
$tmp_location =  $_FILES['logo_img']['tmp_name'];

$new_location = "upload/logo_img/". $logo_img_new_name;
move_uploaded_file($tmp_location, $new_location);

$update_query = "UPDATE `setting` SET `setting_value`='$logo_img_new_name' WHERE id = $id";
mysqli_query($conn, $update_query);
header("location: setting.php");
}

}


?>
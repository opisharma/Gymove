<?php
require_once('dbConnect.php');

$email_address = $_SESSION['email'];
 
if($_FILES['profile_photo']['name']){
    
    $id_query = "SELECT id, default_photo FROM users WHERE Email = '$email_address' ";
    $id_from_db = mysqli_query($conn, $id_query);
    $id_photo = mysqli_fetch_assoc($id_from_db);
    $user_id = $id_photo['id'];
    $current_photo = $id_photo['default_photo'];

    if($current_photo != "default_profile_photo.jpg"){
        unlink("upload/profile_photos/". $current_photo);

    }
  


    $old_name = ($_FILES['profile_photo']['name']);
    $after_explode = (explode(".",$old_name));
    $extension = end($after_explode);


    $profile_photo_new_name = $user_id. ".$extension";


     
     $tmp_lcoation = $_FILES['profile_photo']['tmp_name'];
     $new_location = "upload/profile_photos/".$profile_photo_new_name;
     move_uploaded_file($tmp_lcoation, $new_location);

     $profile_photo_query = "UPDATE users SET default_photo = '$profile_photo_new_name' WHERE Email = '$email_address'";
     $profile_photo_from_db = mysqli_query($conn, $profile_photo_query);
     header("location: profile.php");
     
}
else{
    header("location: profile.php");
}

?>
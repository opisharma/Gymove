<?Php 


require_once('dbConnect.php');

$email_address = $_SESSION['email'];

if($_FILES['cover_photo']['name']){

    $id_query = "SELECT id,default_cover_photo FROM users WHERE Email = '$email_address' ";
    $id_from_db = mysqli_query($conn, $id_query);
    $id_photo = mysqli_fetch_assoc($id_from_db);
 $user_id = $id_photo['id'];
     $current_photo = $id_photo['default_cover_photo'];

     if($current_photo != "default_cover_photo.jpg"){
         unlink("upload/cover_photos/". $current_photo);
 
     }
   

    $old_name = ($_FILES['cover_photo']['name']);
    $after_explode = (explode(".",$old_name));
     $extension = end($after_explode);


   
    $cover_photo_new_name = $user_id. ".$extension";


     
     $tmp_lcoation = $_FILES['cover_photo']['tmp_name'];
     $new_location = "upload/cover_photos/".$cover_photo_new_name;
     move_uploaded_file($tmp_lcoation, $new_location);

   $cover_photo_query = "UPDATE `users` SET `default_cover_photo`='$cover_photo_new_name' WHERE Email = '$email_address'";
     $cover_photo_from_db = mysqli_query($conn, $cover_photo_query);
     header("location: profile.php");
    
     
}
else{
    header("location: profile.php");
}










?>
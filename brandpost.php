<?php
require_once "dbConnect.php";
// print_r($_FILES);
$brand_thumnail_1 = "test.jpg";


$insert_query = "INSERT INTO brand (`brand_thumnail_1`) VALUES ('$brand_thumnail_1')";

mysqli_query($conn, $insert_query);

$id = mysqli_insert_id($conn);

if($_FILES['brand_thumnail_1']['name']){
   
    $old_name = $_FILES['brand_thumnail_1']['name'];
    $after_explode = explode('.', $old_name);
    $extension = end($after_explode);

   $brand_thumnail_1_new_name =  $id.".$extension";

   $tmp_location = $_FILES['brand_thumnail_1']['tmp_name'] ;
   $new_location = "upload/brand/".$brand_thumnail_1_new_name;
   move_uploaded_file($tmp_location, $new_location);

   $update_query = "UPDATE brand SET `brand_thumnail_1` = '$brand_thumnail_1_new_name' WHERE id = $id";
   mysqli_query($conn, $update_query);
   header("location: brand.php");

}





?>
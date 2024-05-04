<?php
require_once('dbConnect.php');

$section_title_img =  'jahin.jpg';
$testi_details =  ($_POST['testi_details']);
$testi_content_name =  ($_POST['testi_content_name']);
$testi_content_h5 =  ($_POST['testi_content_h5']);

$insert_query = "INSERT INTO `testimonial`( `section_title_img`, `testi_details`, `testi_content_name`, `testi_content_h5`) VALUES ('$section_title_img','$testi_details','$testi_content_name','$testi_content_h5')";
mysqli_query($conn, $insert_query);
$id = mysqli_insert_id($conn);




if($_FILES['section_title_img']['name']){

    // Getting extension of the upload file
        $old_name = ($_FILES['section_title_img']['name']);
        $after_explode = (explode(".",$old_name));
        $extension = end($after_explode);
    
    // Generating new name for the file 
    $testimonial_photo_new_name = $id. ".$extension"; 

    // upload file 
        $tmp_lcoation = $_FILES['section_title_img']['tmp_name'];
        $new_location = "upload/testimonial_photos/".$testimonial_photo_new_name;
        move_uploaded_file($tmp_lcoation, $new_location);

        
     $section_title_img_query = "UPDATE testimonial SET section_title_img = '$testimonial_photo_new_name' WHERE id = '$id'";

     $section_title_img_from_db = mysqli_query($conn, $section_title_img_query);
     header("location: testimonial.php");



}






?>
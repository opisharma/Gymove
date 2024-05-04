<?php
// print_r($_POST);
require_once "dbConnect.php";
$portfolio_catagory  = $_POST['portfolio_catagory'];
$portfolio_title  = $_POST['portfolio_title'];
$portfolio_details  = $_POST['portfolio_details'];
$portfolio_thumbnail  = "test.jpg";

$insert_query = "INSERT INTO portfolio (`portfolio_catagory`, `portfolio_title`, `portfolio_details`, `portfolio_thumbnail`) VALUES ('$portfolio_catagory','$portfolio_title','$portfolio_details','$portfolio_thumbnail')";
mysqli_query($conn, $insert_query);
$id = mysqli_insert_id($conn);

if($_FILES['portfolio_thumbnail']['name']){

$old_name = $_FILES['portfolio_thumbnail']['name'];
$after_explode = explode('.',$old_name);
$extension = end($after_explode);

$portfolio_new_name = $id. ".$extension";

$tmp_location =  $_FILES['portfolio_thumbnail']['tmp_name'];
$new_location = "upload/portfolio_thumbnail/". $portfolio_new_name;
move_uploaded_file($tmp_location, $new_location);

$update_query = "UPDATE `portfolio` SET `portfolio_thumbnail`='$portfolio_new_name' WHERE id = $id";
mysqli_query($conn, $update_query);
header("location: portfolio.php");
}

?>
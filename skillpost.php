<?php
require_once 'dbConnect.php';
// print_r($_POST);
$skill_catagory = ($_POST['skill_catagory']);
$skill_details = ($_POST['skill_details']);
$skill_width = ($_POST['skill_width']);
$skill_value = ($_POST['skill_aria_valuenow']);

$insert_query = "INSERT INTO `skill`( `skill_catagory`, `skill_details`,`skill_width`, `skill_value`) VALUES ('$skill_catagory','$skill_details','$skill_width ','$skill_value')";
mysqli_query($conn, $insert_query);
header("location: skill.php")
?>
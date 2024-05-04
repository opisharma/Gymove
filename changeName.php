<?php
require_once('dbConnect.php');
  $fullName = ($_POST['fullName_change']);
 $email_address = $_SESSION['email'];

if(!$fullName){
    $_SESSION['fullname_e']= "Enter name!";
    header('location: profile.php');
}
else{
  $_SESSION['name_change_succ'] = "Successfull!";
  $_SESSION['fullname'] = $fullName;
}


$name_update_query = "UPDATE `users` SET `FullName`='$fullName' WHERE Email= '$email_address'";

$name_update_from_db = mysqli_query($conn, $name_update_query);



header('location: profile.php');






?>
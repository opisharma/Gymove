<?php
require_once("dbConnect.php");

$cheker = true;
 

if(!$_POST["email"]){
  $cheker = false;
  $_SESSION['email_error']= "Enter your Email Address";
  header("location: login.php");
}
if(!$_POST["Password"]){
  $cheker = false;
  $_SESSION['password_error']= "Enter your password";
  header("location: login.php");
}


if($cheker == true){

 $email = $_POST['email'];
 $Password = $_POST['Password'];

  
// Generating the select query 
$count_query = "SELECT COUNT(*) AS total  FROM users WHERE Email = '$email ' AND password = '$Password'";

// inserting the  query into  the database 
$data_form_database = mysqli_query($conn,  $count_query);

if(mysqli_fetch_assoc($data_form_database)['total'] == 0){

    $_SESSION['login_error'] = "Your email address or password is wrong";
    header('location: login.php');
}
else{
    $_SESSION['email'] = $email;
    $name_query = "SELECT `FullName` FROM users WHERE `Email` = '$email'";
    $name_from_db = mysqli_query($conn, $name_query);
     $fullname = (mysqli_fetch_assoc($name_from_db)['FullName']);
    $_SESSION['fullname'] = $fullname;
     header('location: dashborad.php');
}





}

 
?>
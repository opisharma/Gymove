<?php
require_once("dbConnect.php");

$cheker = true;
 

if(!$_POST["FullName"]){
  $cheker = false;
  $_SESSION['FullName']= "Enter your full name";
  header("location: register.php");
}
if(!$_POST["UserName"]){
  $cheker = false;
  $_SESSION['UserName']= "Enter your user name";
  header("location: register.php");
}
if(!$_POST["Email"]){
  $cheker = false;
  $_SESSION['Email']= "Enter your Email Address";
  header("location: register.php");
}

if(!$_POST["Dob"]){
  $cheker = false;
  $_SESSION['Dob']= "Enter your date of birth";
  header("location: register.php");
}
if(!$_POST["password"]){
  $cheker = false;
  $_SESSION['password']= "Enter your password";
  header("location: register.php");
}
if($_POST["password"] != $_POST["re-password"]){
  $cheker = false;
  $_SESSION['con_password']= "your password and re-password does not match";
  header("location: register.php");
}

if($cheker == true){

 $FullName = $_POST['FullName'];
 $UserName = $_POST['UserName'];
 $Email = $_POST['Email'];
 $PhoneNumber = $_POST['PhoneNumber'];
 $Dob = $_POST['Dob'];
 $password = $_POST['password'];
  
// user count query 
 $email_count_query = "SELECT COUNT(*) AS total_users FROM users WHERE  `Email` = '$Email'";
 // inserting the  query into  the database 
 $data_from_database = mysqli_query($conn, $email_count_query);

 if(mysqli_fetch_assoc($data_from_database)['total_users'] == 1){
    $_SESSION['Email_error'] = "This email address  alredy exists!";
    header("location: register.php");
 }

 else{
  $userName_count_query = "SELECT COUNT(*) AS total FROM users WHERE `UserName` = '$UserName'";
  $data_from_database = mysqli_query($conn, $userName_count_query);

  if(mysqli_fetch_assoc($data_from_database)['total'] == 1){
    $_SESSION['user_error']= "This user name alredy exists!";
    header("location: register.php");
 }
 else{
      // Generating the insert query 
 $insert_query = "INSERT INTO `users`(`FullName`, `UserName`, `Email`, `PhoneNumber`, `Dob`, `password`)  VALUES ('$FullName','$UserName','$Email ','$PhoneNumber','$Dob','$password')";



 // inserting the  query into  the database 
 mysqli_query($conn,  $insert_query);
 
 $_SESSION['submit_succ'] = "your registration is Successful!";
 header("location: login.php");
 }

 }



}

 
?>
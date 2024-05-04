<?php
require_once('dbConnect.php');

$checker = true;
 if(!$_POST['name']){

    $_SESSION['w_name'] = "Enter your Name ";
    $checker = false;
    header('location: index.php');
  
 }
 if(!$_POST['email']){
    $_SESSION['w_email'] = "Enter your email ";
    $checker = false;
    header('location: index.php');
  
 }
 if(!$_POST['message']){
    $_SESSION['message'] = "Enter your message ";
     $checker = false;
     header('location: index.php');
   

 }
if(isset($_POST['btn_messages'])){

   header('location: index.php#contact');
}

 if($checker == true){

$name =  ($_POST)['name'];
$email =  ($_POST)['email'];
$message =  ($_POST)['message'];


 $insert_query = "INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('$name','$email','$message')";
 mysqli_query($conn,  $insert_query);
 $_SESSION['Guest_email'] = $email;
 $_SESSION["message-status"]= 'Successfull';
 header('location: index.php#contact');
    
 }
?>
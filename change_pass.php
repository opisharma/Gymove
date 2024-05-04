<?Php
require_once('dbConnect.php');
print_r($_POST);
$current_pass = $_POST['current-password'];
$new_password = $_POST['New-password'];
$re_password = $_POST['re-password'];

// validation 
if(!$current_pass){
    $_SESSION['current_pass']= "Enter your current password";
    header("location: profile.php");
}
if(!$new_password){
    $_SESSION['new_pass']= "Enter your current password";
    header("location: profile.php");
}
if(!$re_password){
    $_SESSION['re_pass']= "Enter your current password";
    header("location: profile.php");
}

$email_address = $_SESSION['email'];

$password_query = "SELECT password from users WHERE Email = '$email_address'";
$password_from_db = mysqli_query($conn, $password_query);
$db_pass = mysqli_fetch_assoc(mysqli_query($conn, $password_query))['password'];

if($db_pass == $current_pass){
   
    
    if($new_password == $re_password){
        $update_query = "UPDATE `users` SET `password`='$new_password' WHERE Email = '$email_address'";
        $update_pass_from_db = mysqli_query($conn, $update_query);
        $_SESSION['update-pass']= "Successfull!";
         header("location: profile.php");
    }
    else{
        $_SESSION['match-pass'] = "Your new password and confirmed password does not match!";
        header("location: profile.php");
    }

}
else{
    $_SESSION['db-pass'] = "Your  current password does not match!";
    header("location: profile.php");
}

?>
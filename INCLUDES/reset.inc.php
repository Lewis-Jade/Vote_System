<?php
  session_start();
if(isset($_POST['submit'])){
require_once('dbh.inc.php');


$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$email = $_SESSION['email'] ;
$hash;

$passwordPattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
 
if(!preg_match($passwordPattern,$password)){
    $_SESSION['message'] = "Password must be at least 8 characters long, include an uppercase letter, lowercase letter, a number, and a special character!";
    header("Location: ../VIEWS/reset.php");
    die();
}


if($password !== $confirm_password){
    $_SESSION['message'] = "passwords do not match ";
    header("Location: ../VIEWS/reset.php");
    die();
}
  
$hash = password_hash($password,PASSWORD_DEFAULT);

  $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");

  $stmt->bind_param('ss',$hash,$email);

  if($stmt->execute()){

    $_SESSION['success'] = "password reset successfully ";
    header("Location: ../VIEWS/login.php");
    die();
  }else{
    $_SESSION['message'] ="Error updating password!";
    header("Location:  ../VIEWS/reset.php");

     die();
  }

}








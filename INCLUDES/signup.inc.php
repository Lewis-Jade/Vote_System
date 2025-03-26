<?php
session_start();

if(isset($_POST['submit'])){
  require_once('../INCLUDES/dbh.inc.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

if($password !== $confirm_password){
  $_SESSION['message'] = "passwords do not match!";
  $_SESSION['flip_signup'] = true;

  header('Location: ../VIEWS/login.php');
  die();

} 


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

  $_SESSION['message'] = "incorrect email format!";
  $_SESSION['flip_signup'] = true;

  header('Location: ../VIEWS/login.php');
  die();
}
$stmt = $conn->prepare( "SELECT * FROM users WHERE  email= ?");

$stmt->bind_param('s',$email);

$stmt->execute();

$result=$stmt->store_result();




if($result->num_rows>0){

  
  $_SESSION['message'] = "User already exists!";
  $_SESSION['flip_signup'] = true;

  header('Location: ../VIEWS/login.php');
  die();
}

$hash = password_hash($password,PASSWORD_DEFAULT);
$stmt = $conn->prepare( "INSERT INTO users(firstname,lastname,email,password) VALUES(?,?,?,?)");

$stmt->bind_param('ssss',$firstname,$lastname,$email,$hash);



$result=$stmt->store_result();

if($stmt->execute()){
  $_SESSION['message'] = "Sign up success! please login.";

  header('Location: ../VIEWS/login.php');
  die();
}

}








<?php
session_start();

if(isset($_POST['submit'])){
 require_once('dbh.inc.php');

 $email = $_POST['email'];
 $password = $_POST['password'];


 $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");

 $stmt->bind_param('s',$email);

 $stmt->execute();

 $result=$stmt->get_result();


 if($result->num_rows > 0){
    $row = $result->fetch_assoc();

    if($password === $row['password']){
      $_SESSION['username']   = $row['firstname'];

      header("Location:  ../ADMIN/adminpanel.php");

      die();
   

    }else{
        $_SESSION['message'] = "incorrect username or password!";
        header("Location:  ../ADMIN/adminlogin.php");

        die();
    }
    
    
 }else{
    $_SESSION['message'] = "user not found!";
    header("Location:  ../ADMIN/adminlogin.php");

    die();

 }

 



}
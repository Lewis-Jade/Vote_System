<?php

session_start();



if(isset($_POST['submit'])){
  require_once('../INCLUDES/dbh.inc.php');

        $email = $_POST['email'];
        $password = $_POST['password'];



    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $_SESSION['message'] = "incorrect email format!";

      
        header('Location: ../VIEWS/login.php');
        die();
      }


      
    $stmt = $conn->prepare("SELECT  * FROM users  WHERE email = ?");

    $stmt->bind_param('s',$email);
    $stmt->execute();

    $result=$stmt->get_result();

    if($result->num_rows>0){

        $row = $result->fetch_assoc();

        if(password_verify($password,$row['password'])){
            $_SESSION['usernname'] = $row['firstname'];
            header('Location: ../VIEWS/dashboard.php');
            die();
        }else{
            $_SESSION['message'] = "Invalid email or password!";
            header('Location: ../VIEWS/login.php');
            die();
        }
    }else{
        $_SESSION['message'] = "User does not exist!";
        header('Location: ../VIEWS/login.php');
        die();
    }


}
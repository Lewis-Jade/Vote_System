<?php
  session_start();
  if(isset($_POST['submit'])){
     require_once('dbh.inc.php');
     $email = $_POST['email'];
     $stmt = $conn->prepare("SELECT * FROM users where email =?");
     $stmt->bind_param('s',$email);
     $stmt->execute();

      $result= $stmt->get_result();

     if($result->num_rows>0){
       $otp = rand(1000,9999);
       
       $_SESSION['otp'] = $otp;

       $_SESSION['email'] = $email;

       $_SESSION['otp_expiary'] = time()+300;


       $subject = "Password reset OTP";
       $body =  "Your OTP is: ".$otp;
       $headers = "FROM:  no-reply@email.com";

       if(mail($email,$subject,$body,$headers)){
            $_SESSION['message'] = "An email has been sent with an OTP"; 
            header("Location: ../VIEWS/verify_otp.php");
            die();

       }

       
        


        
      
     }else{
      $_SESSION['message'] = "email does not exist"; 
      header("Location: ../VIEWS/forgot_password.php");
      die();
     }
      




  }
<?php
  session_start();
   if(isset($_POST['submit'])){
    require_once('dbh.inc.php');

    $otp = $_POST['otp'];

     if(isset($_SESSION['otp']) && $_SESSION['otp']==$otp && time() <= isset( $_SESSION['otp_expiary'])  ){
       $_SESSION['verified'] = true;

          header("Location:  ../VIEWS/reset.php");

     }else{
              echo " Invalid or expired OTP";
     }

     


   }
  
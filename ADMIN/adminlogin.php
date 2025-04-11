<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="../CSS/adminlogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section>
        <div class="info">
        <i class="fas fa-vote-yea"></i>
          <h1>VoteExpress</h1>
        
        </div>
        <form action="../INCLUDES/adminlogin.inc.php"  method="POST">
    <h2>Login</h2>
            <div class="inputbox">
            <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="email"  name="email" required>
                <span></span>
            </div>
            <div class="inputbox">
                <img  id="eye-login"  src="../IMG/eyebrow.png">
                <input type="password" placeholder="password"  name="password"  id="login-password" autocomplete="new-password"  required>
                <span></span>
            </div>
           
          
            <input type="submit"  name="submit" value="Login">
                <?php
                
                 if(isset($_SESSION['message'])){
                      echo '<p class="error">'.$_SESSION['message'] .'</p>';
                      unset($_SESSION['message'] );
                    
                 }
                
                ?>






        </form>
    </section>
</body>
<script>

    
let loginPassword = document.getElementById('login-password');
let eyeLogin = document.getElementById('eye-login');

eyeLogin.onclick = function(){


if(loginPassword.type === "password"){
    loginPassword.type = "text";
   eyeLogin.src = "../IMG/eye.png";

 }
 else
 {
     loginPassword.type = 'password';
     eyeLogin.src = "../IMG/eyebrow.png";
 }
}


</script>
</html>



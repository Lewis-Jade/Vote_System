<?php

session_start();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <script src="../SCRIPTS/index.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<section    id="section">
<?php
             
             if(isset($_SESSION['message'] )){


                echo '<p  class="error  mngs ">'.$_SESSION['message']. '</p>';

                unset($_SESSION['message'] );
             }
               

             
             ?>
     
    <h1>VoteExpress</h1>
   <div class="container">
       <div class="box"  id="rotateCard">
       <div class="front">
        <form action="../INCLUDES/login.inc.php"  method="POST">
        <?php
             
             if(isset( $_SESSION['success'] )){


                echo '<p class="success">'. $_SESSION['success']. '</p>';

                unset( $_SESSION['success'] );
             }
               
             
             
             
          
             
             
             ?>
         
        <h2>Login</h2>
            <div class="inputbox">
                <input type="email" placeholder="email"  name="email" required>
                <i class="fa-solid fa-envelope"></i>
                <span></span>
            </div>
            <div class="inputbox">
                <img  id="eye-login"  src="../IMG/eyebrow.png">
                <input type="password" placeholder="password"  name="password"  id="login-password" autocomplete="new-password"  required>
                <span></span>
            </div>
            <div class="inputbox">
                <p>Don't have an Account?</p>   
                 <button  id="btn">Sign Up</button>
            </div>
             <a href="forgot_password.php">Forgot password?</a>
            <input type="submit"  name="submit" value="Login">
            
        </form>
       </div>
       <div class="back">
        
       <form action="../INCLUDES/signup.inc.php"  class="sign-up" method="POST">
          
        
        
        <h2>Sign Up</h2>
            <div class="inputbox">
                <input type="text"  name="firstname" placeholder="firstname" required>
                <span></span>
            </div>
            <div class="inputbox">
                <input type="text"  name="lastname" placeholder="lastname" required>
                <span></span>
            </div>
            <div class="inputbox">
                <input type="email" name="email" placeholder="email" required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="inputbox">
                <img  id="eye-icon"  src="../IMG/eyebrow.png">
                <input type="password" name="password" placeholder="password" id="current-password" autocomplete="new-password" autocomplete="new-password" required>
                <span></span>
            </div>
            <div class="inputbox">
            <img  id="eye-two"  src="../IMG/eyebrow.png">
                <input type="password" name="confirm-password"  autocomplete="new-password" id="confirm-password"  placeholder="confirm password" required>
                <span></span>
            </div>
            <div class="inputbox">
                <p>Already have an Account?</p>   
                <button  id="btn-signup">Login</button>
            </div>
            
            <input type="submit"   name="submit" value="Sign Up">
    
</form>
       </div>
       </div>
   </div>
   <div class="expree">
   <i class="fas fa-vote-yea"></i> <br>
      Welcome to VoteExpress
      Its now or never make a choice today
   </div>
</section>
    <script src="../SCRIPTS/main.js"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php if (isset($_SESSION['flip_signup'])): ?>
            document.querySelector('.box').classList.add('flipped');
            <?php unset($_SESSION['flip_signup']); ?>
        <?php endif; ?>
    });


</script>
 
</html>
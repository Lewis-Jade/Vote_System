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
</head>
<body>

<section    id="section">
    <h1>its now or never vote today</h1>
   <div class="container">
       <div class="box"  id="rotateCard">
       <div class="front">
        <form action="">
        <?php
             
             if(isset($_SESSION['message'] )){


                echo '<p  class="error">'.$_SESSION['message']. '</p>';

                unset($_SESSION['message'] );
             }
               
             
             ?>
        <h2>Login</h2>
            <div class="inputbox">
                <input type="email" placeholder="email" required>
                <span></span>
            </div>
            <div class="inputbox">
                <input type="password" placeholder="password" required>
                <span></span>
            </div>
            <div class="inputbox">
                <p>Don't have an Account?</p>   
                 <button  id="btn">Sign Up</button>
            </div>
            
            <input type="submit"  value="Login">
            
        </form>
       </div>
       <div class="back">
       <form action="../INCLUDES/signup.inc.php"  class="sign-up" method="POST">
             <?php
             
             if(isset($_SESSION['message'] )){


                echo '<p  class="error">'.$_SESSION['message']. '</p>';

                unset($_SESSION['message'] );
             }
               
             
             ?>
        
        
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
                <span></span>
            </div>
            <div class="inputbox">
                <input type="password" name="password" placeholder="password" required>
                <span></span>
            </div>
            <div class="inputbox">
                <input type="password" name="confirm-password" placeholder="confirm password" required>
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
</section>
    
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
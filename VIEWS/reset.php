<?php



session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify otp</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        *{
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            background: rgba(232, 234, 241, 0.94);
            height:100vh;
            flex-direction:column;
            gap:20px;
        }
        h1{
            color: rgba(12, 48, 206);
        }
        p{
            color:#ff0000;
            width: 90%;
            height:50px;
            background:#fff;
            display:flex;
            justify-content:center;
            align-items:center;
            box-shadow:2px 2px 12px rgba(0, 0, 0, 0.11),
            -2px -2px 12px rgba(0, 0, 0, 0.09);
            border-radius:10px;
        }
        form{
            height:350px;
            width: 400px;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            gap:30px;
            
            box-shadow:2px 2px 24px rgba(0, 0, 0, 0.36),
                        -2px -2px 24px rgba(0, 0, 0, 0.36);
            border-radius:10px;

        }
        .box{
            position: relative;
            width: 80%;
            height:40px;
            display:flex;
            justify-content:center;
            align-items:center

        }
        input{
            width: 100%;
            height:100%;
            padding:0 0 0 30px;
            border-radius:10px;
            border:2px solid  rgb(28, 91, 230);
            outline:none;
            transition: 0.5s ease-in-out;
        }
        input:focus{
            box-shadow:2px 2px 6px rgba(12, 48, 206, 0.62),
            -2px -2px 6px  rgba(12, 48, 206, 0.62);
        }
        input[type="submit"]{
            background:  rgb(28, 91, 230);
            color:#fff;
            font-size:20px;
            font-weight:500;
            transition: 0.5s ease-in-out;
            width: 60%;
            height:40px;
        }
        input[type="submit"]:hover{
            transform:translateY(-10px);
        }
        img{
            position: absolute;
            right: 10px;
            cursor: pointer;
            height: 20px;
            width: 20px;
        }
    </style>
</head>
<body>
    <form action="../INCLUDES/reset.inc.php" method="POST">
    <h1>Reset password</h1>
     <div class="box">
     <img  id="eye-icon"  src="../IMG/eyebrow.png">
     <input type="password" name="password" placeholder="password" id="current-password" autocomplete="new-password" autocomplete="new-password" required>
     </div>
     <div class="box">
     <img  id="eye-two"  src="../IMG/eyebrow.png">
     <input type="password" name="confirm-password"  autocomplete="new-password" id="confirm-password"  placeholder="confirm password" required>
     </div>
    <input type="submit"  name="submit"  value="reset password">
    </form>
    <?php
      if(isset( $_SESSION['message'])){

        echo '<p>'.  $_SESSION['message'].'</p>';
     
        unset($_SESSION['message']);
      }
    
    
    ?>
    
</body>
<script src="../SCRIPTS/main.js"></script>
</html>
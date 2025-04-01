
<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>forgot password</title>
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
            flex-direction:column;
            background: rgba(232, 234, 241, 0.94);
            height:100vh;
            gap: 20px;
        }
        p{
            color:red;
        }
        h1{
            text-transform:UPPERCASE;
            color: rgba(12, 48, 206);
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
        input{
            width: 80%;
            height:40px;
            padding:0 0 0 30px;
            border-radius:10px;
            border:2px solid  rgb(28, 91, 230);
            outline:none;
            transition: 0.5s ease-in-out;
        }
        input:focus{
            box-shadow:2px 2px 6px rgba(12, 145, 206, 0.67),
            -2px -2px 6px  rgba(12, 145, 206, 0.67);
        }
        input[type="submit"]{
            background:  rgb(28, 91, 230);
            color:#fff;
            font-size:20px;
            font-weight:500;
            transition: 0.5s ease-in-out;
        }
        input[type="submit"]:hover{
            transform:translateY(-10px);
        }
        div{
            position: absolute;
            height:70px;
            width:70px;
            top:20px;
            left:20px;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#fff;
            border-radius:50%;
            box-shadow:2px 2px 24px rgba(0, 0, 0, 0.36),
            -2px -2px 24px rgba(0, 0, 0, 0.36);
            transition:0.5s ease-in-out;
        }
        a{
            height:80%;
            width:80%;
            background:  rgb(28, 132, 230);
            display:flex;
            justify-content:center;
            align-items:center;
            text-decoration:none;
            border-radius:50%;
            color:#fff;
            font-size:20px;
            font-weight:500;
        }
        div:hover{
            transform:translateX(-10px);
        }
      
    </style>
</head>
<body>

  <div>
  <a href="login.php"><i class="fa fa-arrow-left"></i>
  </a>
  </div>
    <form action="../INCLUDES/verify_otp.inc.php" method="POST">
    <h1>verify  otp</h1>
    <input type="number" name="otp" placeholder="OTP goes here...." required>
    <input type="submit"  name="submit" value="Verify otp">
    
   
    </form>
    <?php
      if(isset( $_SESSION['message'])){

        echo '<p>'.  $_SESSION['message'].'</p>';
     
        unset($_SESSION['message']);
      }
    
    
    ?>
</body>




</body>
</html>
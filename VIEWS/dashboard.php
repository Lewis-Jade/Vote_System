<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashborad</title>
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
    <?php
    
    if(isset(    $_SESSION['usernname'] )){


        echo '<h3> Welcome '.    $_SESSION['usernname']. '</h3>';

  
     }
       
    
    ?>
  
<div class="status">
<i class="fas fa-circle text-success"></i>
<span>Voting status</span>


</div>
<form action="../INCLUDES/logout.inc.php" class="logout" method="POST">
    <button  type="submit"><i class="fa-solid fa-right-from-bracket"></i> Logoout</button>
</form>
</header>
    <div class="container">
        <div class="box">
            <div class="info  ballot">
                <div class="card">
                    <p>Availabe elections</p>
                    <a href="elections.php">
                <i class="fas fa-vote-yea"></i>
                  </a>

                </div>
                <div class="description">
                    More
                    <a href="elections.php">

                    <i class="fa-solid fa-arrow-right"></i>
                    </a>
            
                </div>
            </div>
            <div class="info vote">
            <div class="card ">
            <p>Vote now</p>
            <i class="fas fa-hand-point-up"></i> 
                     
                </div>
                <div class="description">
                More
                <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="box1">
        <div class="info results">
        <div class="card">

        <p>Results</p>
        <i class="fas fa-chart-bar"></i> 

            </div>
            <div class="description">
            More
            <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
        <div class="info  setting">
                <div class="card">
                    <p>Profile and settings</p>
                    <a href="profile_settings.php">
                    <i class="fas fa-cog"></i> 
                    </a>

        </div>
        <div class="description">
        More
        <a href="profile_settings.php">
        <i class="fa-solid fa-arrow-right"></i>
        </a>
        </div>
        </div>
        </div>
    </div>
</body>
</html>
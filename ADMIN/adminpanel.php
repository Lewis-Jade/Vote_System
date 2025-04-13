<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin panel</title>
      <link rel="stylesheet" href="../CSS/adminpanel.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="info">
        <?php
        session_start();
          if(isset( $_SESSION['username'] )){
            echo '<p> Welcome  '. $_SESSION['username'] .'</p>';
          }
        
        
        ?>   
        
        </div>
     
        <form action="../INCLUDES/adminlogout.inc.php" method="POST">
            <button  type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
    </header>
    <div class="links">
          <a href=""  class="candidates"><i class="fas fa-users"></i> <i class="fas fa-ballot-check"></i> 
          Total voters</a>
          <a href=""class="elections"> <i class="fas fa-vote-yea"></i> Elections</a>
          <a href=""  class="voters"><i class="fas fa-user-tie"></i> Candidates</a>
          <a href="" class="result"><i class="fas fa-chart-bar"></i>
          Results</a>
          </div>
        
    
</body>
</html>
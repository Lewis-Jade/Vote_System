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
        <div class="links">
          <a href="#voters"  class="candidates"><i class="fas fa-users"></i> <i class="fas fa-ballot-check"></i> 
          Total voters</a>
          <a href="#one"class="elections"> <i class="fas fa-vote-yea"></i> Elections</a>
          <a href="#candidates"  class="voters"><i class="fas fa-user-tie"></i> Candidates</a>
          <a href="" class="result"><i class="fas fa-chart-bar"></i>
          Results</a>
          </div>
     
        <form action="../INCLUDES/adminlogout.inc.php" method="POST">
            <button  type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
    </header>
    
    <div class="container">
      <section  id="voters">
      <div class="total-voters">
          <div class="display-card">
          <i class="fas fa-user-friends"></i>

          </div>
      </div>
      </section>
      <section  class="one" id="one">
          <form class="create-election" action="">
            <h2>Create Election</h2>
             <input type="text" placeholder="Election Title" required>
             <textarea name="" id="" placeholder="Description..."></textarea>
             <input type="datetime-local" placeholder="start date" required>
             <input type="datetime-local" placeholder="start date" required>
             <input type="text" placeholder="position" required>
            <select name="" id="">
              <option >Eligible voters</option>
              <?php
              
                 $voters = ['Students','Teachers','Parents'];

                 foreach($voters as $voter){

                  echo '<option>' .$voter.'</option>';
                 }
              
              ?>
            </select>

            <input type="submit" value="Create">

          </form>
      </section>
        
      <!-- input candidate -->

      <section  class="two"id="candidates">
           <div class="candidate-section">
               <form action=""    class="cdn-form">
               <h2  id="cdn">Add candidate</h2>
                     <div class="inputBox">
                        <input type="text"  placeholder="Firstname" required>
                        <input type="text"  placeholder="Lastname" required>
                        <input type="text"  placeholder="postion" required>
                        <input type="text" name="party"  placeholder="party" required>

                     </div>

                     <div class="inputBox">
                     <input type="file" name="profile_picture" accept="image/*">

                     <textarea name="" id="" placeholder="Manifesto..."></textarea>
                     <select name="status">
                        <option value="active">Status</option>
                      
                        <?php
                           
                           $status = ["Active","Inactive","Disqualified"];

                           foreach($status as $state){
                                echo '<option>'.$state.'</option>';


                           }
                            
                        
                        ?>


                      </select>

                     </div>
                     
            <input id="cdn-btn" type="submit" value="Add Candidate">
               </form>
           </div>
          
      </section>
      <section  class="three"></section>
    </div>
        
    
</body>
</html>
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
       <form action=""  class="sign-up">

        <h2>Sign Up</h2>
            <div class="inputbox">
                <input type="text" placeholder="firstname" required>
                <span></span>
            </div>
            <div class="inputbox">
                <input type="text" placeholder="lastname" required>
                <span></span>
            </div>
            <div class="inputbox">
                <input type="email" placeholder="email" required>
                <span></span>
            </div>
            <div class="inputbox">
                <input type="password" placeholder="password" required>
                <span></span>
            </div>
            <div class="inputbox">
                <input type="password" placeholder="confirm password" required>
                <span></span>
            </div>
            <div class="inputbox">
                <p>Already have an Account?</p>   
                <button  id="btn-signup">Login</button>
            </div>
            
            <input type="submit"  value="Sign Up">
    
</form>
       </div>
       </div>
   </div>
</section>
    
</body>

</html>
<!DOCTYPE html>
<html>
<head>
<?php
			include("header.php");
			?>
</head>


      <div class="sidenav">
         <div class="login-main-text">
            <h2>Book Worm</h2>
            <h3>Login Page</h3>
         </div>
      </div>
      <div class="main">
         <div class="col-lg-6 col-md-6">
            <div class="login-form">
            <form action = "loginverification.php" method = "post" >
                  <label>Email  :</label>
                  <input type = "text" name = "email" /></br>
                  <label>Password  :</label>
                  <input type = "password" name = "password" id ="textbox"/>
                  <button type = "submit" value = "Login" class="nav-link btn " name="login-btn" id="login-btn">Login</button>

                  <a class="nav-link btn" id="login-btn" href="register.php">Register</a>
               </form>
               
            </div>
         </div>
      </div>

</html>

<!DOCTYPE html>
<html>
<head>
<?php
			include("header.php");
			?>

<!-- function signIn(){
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    const promise = auth.signInWithEmailAndPassword(email.value, password.value);
    promise.catch(e => alert(e.message));
  } -->
</head>


      <div class="sidenav">
         <div class="login-main-text">
            <h2>Book Worm</h2>
            <h3>Login</h3>
         </div>
      </div>
      <div class="main">
         <div class="col-lg-6 col-md-6">
            <div class="login-form">
               <form action='loginverification.php'>
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" name= 'email' class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name='password' class="form-control" placeholder="Password">
                  </div>
                  <button onclick="signIn()" class="nav-link btn " id="login-btn">Login</button>
                  <a class="nav-link btn" id="login-btn" href="register.php">Register</a>
                  <a class="nav-link btn" id="login-btn" href="index.php">Home</a>
               </form>
            </div>
         </div>
      </div>

</html>

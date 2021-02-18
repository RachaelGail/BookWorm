<?php	
	include("server.php");

   // LOGIN
if (isset($_POST['login_user'])) {
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $password = mysqli_real_escape_string($db, $_POST['password']);
 
   if (empty($email)) {
      array_push($errors, "Email is required");
   }
   if (empty($password)) {
      array_push($errors, "Password is required");
   }
 
   if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM BW_Users WHERE email='$email' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      }else {
         array_push($errors, "Wrong email/password combination");
      }
   }
 }

?>


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
            <h3>Login</h3>
         </div>
      </div>
      <div class="main">
         <div class="col-lg-6 col-md-6">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="nav-link btn " id="login-btn">Login</button>
                  <a class="nav-link btn" id="login-btn" href="register.php">Register</a>
                  <a class="nav-link btn" id="login-btn" href="index.php">Home</a>
               </form>
            </div>
         </div>
      </div>

</html>
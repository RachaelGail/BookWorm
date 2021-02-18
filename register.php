<?php	
	include("conn.php");
   $email    = "";
   $errors = array(); 


   // REGISTER USER
if (isset($_POST['reg_user'])) {
   // receive all input values from the form
 
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
   $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
 
   // form validation: ensure that the form is correctly filled ...
   // by adding (array_push()) corresponding error unto $errors array
   if (empty($email)) { array_push($errors, "Email is required"); }
   if (empty($password_1)) { array_push($errors, "Password is required"); }
   if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
   }
 
   // first check the database to make sure 
   // an email does not already exist in database
   $email_check_query = "SELECT * FROM BW_Users WHERE email='$email' LIMIT 1";
   $result = mysqli_query($conn, $email_check_query);
   $email = mysqli_fetch_assoc($result);
   
   if ($email) { // if email exists
     if ($email['email'] === $email) {
       array_push($errors, "Email already exists");
     }
 
   }
 
   // Register email if there are no errors in the form
   if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
 
      $query = "INSERT INTO BW_Users (email, password) 
              VALUES('$email', '$password')";
      mysqli_query($conn, $query);
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
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
<body>



	<div class="sidenav">
         <div class="login-main-text">
            <h2>Book Worm</h2>
            <h3>Register</h3>
         </div>
      </div>
     
      <div class="main">
         <div class="col-lg-6 col-md-6">
            <div class="login-form">
                <form method="post" action="register.php">
        	      <?php include('errors.php'); ?>
                <div class="form-group">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Email">
                  </div>

                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name = "password_1" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <label>Confirm Password</label>
                     <input type="password" name = "password_2" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="nav-link btn " id="login-btn" href="index.php">Register</button>
                  <a class="nav-link btn" id="login-btn" href="index.php">Home</a>
               </form>
            </div>
          </div>
      </div>





            </div>
         </div>
      </div>






</body>
</html>
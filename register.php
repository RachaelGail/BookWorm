<?php	
	include("server.php");

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
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>BookWorm Registration</title>
   
   <!-- GoogleFonts -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
 
   <!-- CSS style sheets -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="css/styles.css">
 
   <!-- Font Awesome -->
   <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
 
   <!-- Bootstrap Scripts -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                  <button type="submit" class="nav-link btn "  id="login-btn">Register</button>
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
<?php
	include("conn.php");

?>


<!DOCTYPE html>
<html>
<head>
 <?php
			include("header.php");
			?>
</head>
<body>
	<div class='sidenav'>
         <div class='login-main-text'>
            <h2>Book Worm</h2>
            <h3>Register</h3>
         </div>
      </div>

      <div class='main'>
         <div class='col-lg-6 col-md-6'>
            <div class='login-form'>
                <form action='registerinsert.php' method='POST' enctype='multipart/form-data'>
                <div class='form-group'>
                     <label>Name</label>
                     <input type='text' name='name' class='form-control' placeholder='Name' required/>
                  </div>
                  <div class='form-group'>
                     <label>Email</label>
                     <input type='text' name='email' class='form-control' placeholder='Email' required/>
                  </div>
                  <div class='form-group'>
                     <label>Password</label>
                     <input type='password' name='password_1' class='form-control' placeholder='Password' required/>
                  </div>
                  <div class='form-group'>
                     <label>Confirm Password</label>
                     <input type='password' name='password_2' class='form-control' placeholder='Password' required/>
                  </div>
                  <input type='submit' class='nav-link btn' id='login-btn' value='Register' />
               </form>
            </div>
          </div>
      </div>
            </div>
         </div>
      </div>
</body>
</html>

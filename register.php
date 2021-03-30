<?php
	include("conn.php");
   include("registerinsert.php")
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
                <form name="registerform" action='register.php' method='POST' onSubmit="return validatePassword()" enctype='multipart/form-data'>
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
                     <input type='password' name='password_1' class='form-control' placeholder='Password' required/><br><span id="password_1" required></span>
                  </div>
                  <div class='form-group'>
                     <label>Confirm Password</label>
                     <input type='password' name='password_2' class='form-control' placeholder='Password' required/><br><span id="password_2" required></span>
                  </div>
                  <input type='submit' name='register' class='nav-link btn' id='login-btn' value='Register' />
               </form>
            </div>
          </div>
      </div>
            </div>
         </div>
      </div>
</body>
</html>

<script>
function validatePassword() {
var password_1,password_2,output = true;

password_1 = document.registerform.password_1;
password_2 = document.registerform.password_2;

if(password_1.value != password_2.value) {
   password_1.value="";
   password_2.value="";
   password_1.focus();
    document.getElementById("password_2").innerHTML = "Passwords Don't Match";
    output = false;
} 	
return output;
}
</script>




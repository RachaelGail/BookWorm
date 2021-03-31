<?php
include('conn.php'); 
session_start();
$userID = $_SESSION["userID"]; 
$sessionEmail= $_SESSION["email"]; 

?>

<DOCTYPE html>
<html lang="en">
   <head>
         <?php
			   include("header.php");
			?>
   </head>
   <body>
			<section class = "coloured-section" id="title">
            <?php
               include("navbar.php")
            ?>
          </section>


<section class = "white-section" id="features">
    <div class="container-fluid">
        <h2> Change Name </h2>
        <br>
        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
        <br>
      <div class="row">
     <!-- <?php  echo "$sessionPW"; ?>
     <br>
     <?php  echo "$userID"; ?>
     <br>
      -->

<form name="frmChange" method="POST" onSubmit="return validateEmail()" action="NameChangeCode.php" >
    <div style="width:500px;">
    
    <table cellpadding="10" cellspacing="0" width="500" class="tblSaveForm">
       
        <tr>
            <td width="40%"><label>Email</label></td>
            <td width="60%"><input type="text" name="email" class="txtField"/><br><span id="email" required></span></td>
        </tr>

        <tr>
            <td><label>New Name</label></td>
            <td><input type="text" name="newName" class="txtField"/><br><span id="newName" required></span></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Change Name" class='nav-link btn' id='login-btn'>
            <input type='hidden' name='sessionEmail' value='<?php $sessionEmail ?>'>
        </td>
        </tr>
    </table>
    </div>
</form>

</section> 



<!-- Footer -->
<footer class="footer navbar-fixed-bottom">
         <?php
			   include("footer.php");
			?>
   </footer>
   </body>
</html>

<script>

function validatePassword() {
var sessionEmail,email,output = true;

sessionEmail = document.frmChange.sessionEmail;
email = document.frmChange.email;


if(sessionEmail.value != email.value) {
    email.value="";
    sessionEmail.value="";
    email.focus();
    document.getElementById("newName").innerHTML = "Emails Don't Match";
    output = false;
} 	
return output;
}
</script>


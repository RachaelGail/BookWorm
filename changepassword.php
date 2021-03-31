<?php
include('conn.php'); 
session_start();
$userID = $_SESSION["userID"]; 
$sessionPW = $_SESSION["password"]; 

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
        <h2> Change Password </h2>
        <br>
        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
        <br>
      <div class="row">
     <!-- <?php  echo "$sessionPW"; ?>
     <br>
     <?php  echo "$userID"; ?>
     <br>
      -->

<form name="frmChange" method="POST" onSubmit="return validatePassword()" action="PWChangeCode.php" >
    <div style="width:500px;">
    
    <table cellpadding="10" cellspacing="0" width="500" class="tblSaveForm">
       
        <tr>
            <td width="40%"><label>Current Password</label></td>
            <td width="60%"><input type="text" name="currentPW" class="txtField"/><br><span id="currentPW" required></span></td>
        </tr>

        <tr>
            <td><label>New Password</label></td>
            <td><input type="text" name="newPW" class="txtField"/><br><span id="newPW" required></span></td>
        </tr>

        <tr>
            <td><label>Confirm Password</label></td>
            <td><input type="text" name="confirmPW" class="txtField"/><br><span id="confirmPW" required></span></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Change Password" class='nav-link btn' id='login-btn'>
            <input type='hidden' name='sessionPW' value='<?php $sessionPW ?>'>
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
var sessionPW,currentPW,newPW,confirmPW,output = true;

sessionPW = document.frmChange.sessionPW;
currentPW = document.frmChange.currentPW;
newPW = document.frmChange.newPW;
confirmPW = document.frmChange.confirmPW;

if(newPW.value != confirmPW.value) {
    newPW.value="";
    confirmPW.value="";
    newPW.focus();
    document.getElementById("confirmPW").innerHTML = "Passwords Don't Match";
    output = false;
} 	
return output;
}
</script>




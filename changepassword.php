<?php
include('conn.php'); 
session_start();
$userID = $_SESSION["userID"]; 
$currentPW = $_SESSION["password"]; 

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
     <?php  echo "$currentPW"; ?>
     <br>
     <?php  echo "$userID"; ?>
     <br>
     

<form name="frmChange" method="POST" onSubmit="return validatePassword()" action="PWChangeCode.php" >
    <div style="width:500px;">
    
    <table cellpadding="10" cellspacing="0" width="500" class="tblSaveForm">
       
        <tr>
            <td width="40%"><label>Current Password</label></td>
            <td width="60%"><input type="password" name="currentPW" class="txtField"/><br><span id="currentPW" required></span></td>
        </tr>

        <tr>
            <td><label>New Password</label></td>
            <td><input type="password" name="newPW" class="txtField"/><br><span id="newPW" required></span></td>
        </tr>

        <tr>
            <td><label>Confirm Password</label></td>
            <td><input type="password" name="confirmPW" class="txtField"/><br><span id="confirmPW" required></span></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Change Password" class='nav-link btn' id='login-btn'> </td>
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
var currentPW,newPW,confirmPW,output = true;

currentPW = document.frmChange.currentPW;
newPW = document.frmChange.newPW;
confirmPW = document.frmChange.confirmPW;

if(!currentPW.value) {
    currentPW.focus();
    document.getElementById("currentPW").innerHTML = "Required";
    output = false;
}
else if(!newPW.value) {
    newPW.focus();
    document.getElementById("newPW").innerHTML = "Required";
    output = false;
}
else if(!confirmPW.value) {
    confirmPW.focus();
    document.getElementById("confirmPW").innerHTML = "Required";
    output = false;
}
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




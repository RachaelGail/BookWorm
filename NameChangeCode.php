<?php
include('conn.php');
session_start();
$userID = $_SESSION["userID"]; 
$sessionEmail = $_SESSION["email"]; 
$currentName = $_SESSION["userName"]; 
$email= $_POST["email"]; 
$newName = $_POST["newName"]; 


    if ($email == $sessionEmail ) {

        $sql= "UPDATE bs_Users 
        SET name='$newName' 
        WHERE id='$userID'";
        $updatePW = mysqli_query($conn, $sql);
        
        header("Location: editpage.php"); 
        
    } else{
        $message = "Current Password is not correct";
        
}

    
?>

<DOCTYPE html>
<html lang="en">
   <head>
         <?php
			   include("header.php");
			?>
   </head>
   <body>
   USERID:  <?php  echo "$userID"; ?>
     <br>
     currentName:   <?php  echo "$currentName"; ?>
     <br>
   
     newName:  <?php  echo "$newName"; ?>


 </body>
</html>
<?php
include('conn.php');
session_start();
$userID = $_SESSION["userID"]; 
$sessionEmail = $_SESSION["email"]; 
$email= $_POST["email"]; 
$newName = $_POST["newName"]; 


    if ($email == $sessionEmail ) {

        $sql= "UPDATE bs_Users 
        SET name='$newName' 
        WHERE id='$userID'";
        $updatePW = mysqli_query($conn, $sql);
        
        header("Location: editpage.php"); 
        
    } else{
        $message = "Email is not correct";
        header("Location: changename.php"); 
        
}

    
?>

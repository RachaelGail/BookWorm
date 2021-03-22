<?php
session_start(); 
include "conn.php"; // Using database connection file here

$userID = $_SESSION["userID"]; 
$delLoveList = "DELETE FROM bs_LoveList WHERE bs_LoveList.Users_id = $userID"; 
$del1 = mysqli_query($conn,$delLoveList); 

$delUser = "DELETE FROM bs_Users WHERE bs_Users.id = $userID"; 
$del2 = mysqli_query($conn,$delUser); 

if($del2)
{
    mysqli_close($conn); // Close connection
    header("location:register.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting profile"; // display error message if not delete
}
?>
<?php
session_start(); 
include "conn.php"; // Using database connection file here

$bookid = $_GET['id']; // get id through query string
$userID = $_SESSION["userID"]; 
$del = mysqli_query($conn,"DELETE FROM bs_lovelist where BestSeller_id =$bookid AND Users_id=$userID"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:lovelist.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting book"; // display error message if not delete
}
?>
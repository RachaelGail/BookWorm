<?php

include "conn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM bs_lovelist where BestSeller_id =$id AND Users_id=1001"); // delete query

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
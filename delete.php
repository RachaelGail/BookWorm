<?php

include "conn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM bs_lovelist where id =$id"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:test_lovelist.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
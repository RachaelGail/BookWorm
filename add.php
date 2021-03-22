<?php
session_start(); 
include "conn.php"; 

$bookID = $conn->real_escape_string($_POST["findbookID"]);

$page = $_POST['page']; 

    if ($bookID==='') {
        echo("Error... can not add");
    }else{
        $insertquery = "INSERT INTO bs_LoveList (Users_id, BestSeller_id) VALUES ('$userID', '$bookID')";
        $result = $conn->query($insertquery);

        if(!$result){
        echo $conn->error;
        }else{
            header("Location: $page"); 
        }

}

?>
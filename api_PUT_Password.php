<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

session_start(); 
$userID = $_SESSION["userID"]; 

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        include('conn.php');
        // Get data from client
        $newPassword = isset($_POST['newPassword']) ? mysqli_real_escape_string($conn, $_POST['newPassword']) : "";
    
        // Insert data into database
        $sql = "UPDATE bs_Users set password=$newPassword WHERE userId=$userID";
        $post_data_query = mysqli_query($conn, $sql);
        if($post_data_query){
            $json = array("status" => 1, "Success" => "User has been added successfully!");
            $message = "Password Changed";
        }
        else{
            $json = array("status" => 0, "Error" => "Error adding User! Please try again!");
        }
    }
    else{
        $json = array("status" => 0, "Info" => "Request method not accepted!");
    }
    @mysqli_close($conn);
    echo json_encode($json);   
?>

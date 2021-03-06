<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        include('conn.php');
        // Get data from client
        $newPW = isset($_POST['newPW']) ? mysqli_real_escape_string($conn, $_POST['newPW']) : "";
        $userID = isset($_POST['userID']) ? mysqli_real_escape_string($conn, $_POST['userID']) : "";
    
        // Insert data into database
        $sql = "UPDATE bs_Users SET password='$newPW' WHERE id='$userID'";
        $post_data_query = mysqli_query($conn, $sql);
        if($post_data_query){
            $json = array("status" => 1, "Success" => "PW has been updated successfully!");
        }
        else{
            $json = array("status" => 0, "Error" => "PW can't be updated! Please try again!");           
        }
    }
    else{
        $json = array("status" => 0, "Info" => "Request method not accepted!");
    }
    @mysqli_close($conn);
    echo json_encode($json);   
?>

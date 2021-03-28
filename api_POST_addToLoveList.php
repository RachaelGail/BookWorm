<?php 
session_start(); 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
//$Users_id = $_SESSION["userID"];

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        include('conn.php');
        // Get data from client
        $BestSeller_id = isset($_POST['BestSeller_id']) ? mysqli_real_escape_string($conn, $_POST['BestSeller_id']) : "";
        $Users_id = isset($_POST['Users_id']) ? mysqli_real_escape_string($conn, $_POST['Users_id']) : "";


        // Insert data into database
        $sql = "INSERT INTO bs_LoveList (Users_id, BestSeller_id) VALUES ('$Users_id ', '$BestSeller_id')";

        $post_data_query = mysqli_query($conn, $sql);
        if($post_data_query){
            $json = array("status" => 1, "Success" => "Book has been added to LoveList!");
        }
        else{
            $json = array("status" => 0, "Error" => "Error adding book to LoveList! Please try again!");
        }
    }
    else{
        $json = array("status" => 0, "Info" => "Request method not accepted!");
    }
    @mysqli_close($conn);
    echo json_encode($json);   
?>
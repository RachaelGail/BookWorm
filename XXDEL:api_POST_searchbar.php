<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        include('conn.php');
        // Get data from client
        $search = isset($_POST['search']) ? mysqli_real_escape_string($conn, $_POST['search']) : "";

        // Insert data into database
        $sql = "SELECT * FROM bs_BestSellers WHERE name LIKE '%".$search."%' 
        OR author LIKE '%".$search."%'
        OR userRating ='".$search."'    ";
        $post_data_query = mysqli_query($conn, $sql);

        if($post_data_query){
            $json = array("status" => 1, "Success" => "search has been successful");
        }
        else{
            $json = array("status" => 0, "Error" => "Error with search! Please try again!");
        }
    }
    else{
        $json = array("status" => 0, "Info" => "Request method not accepted!");
    }
    @mysqli_close($conn);
    echo json_encode($json);   
?>
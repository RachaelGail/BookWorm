<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        include('conn.php');
        // Get data from client
        $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : "";
        $myemail = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
        $mypw = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : "";

        // Insert data into database
        $sql = "INSERT INTO bs_Users (name, email, password, adminRights) VALUES ('$name','$myemail', '$mypw','2')";
        $post_data_query = mysqli_query($conn, $sql);
        if($post_data_query){
            $json = array("status" => 1, "Success" => "User has been added successfully!");
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

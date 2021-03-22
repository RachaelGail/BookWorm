<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        include('conn.php');
        // Get data from client
        $myemail = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
        $mypw = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : "";

        // Insert data into database
        $sql = "INSERT INTO bs_Users (email, password, adminRights) VALUES ('$myemail', '$mypw','2')";
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

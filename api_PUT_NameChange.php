<?php 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    if($_SERVER['REQUEST_METHOD'] === "PUT"){

        include('conn.php');
        // Get data from client

        parse_str(file_get_contents("php://input"), $put_vars); 
        $userID = $put_vars['id']; 
        $newName = $put_vars['name']; 

        // Insert data into database
        $sql = "UPDATE bs_Users SET name='$newName' WHERE id='$userID'";
        $post_data_query = mysqli_query($conn, $sql);
        if($post_data_query){
            $json = array("status" => 1, "Success" => "Name has been updated successfully!");
        }
        else{
            $json = array("status" => 0, "Error" => "Name can't be updated! Please try again!");           
        }
    }
    else{
        $json = array("status" => 0, "Info" => "Request method not accepted!");
    }
    @mysqli_close($conn);
    echo json_encode($json);   

?>
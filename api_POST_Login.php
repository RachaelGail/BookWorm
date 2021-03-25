<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        include('conn.php');
        // Get data from client
        $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
        $password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : "";
        
        $sql = "SELECT id, name, adminRights FROM bs_Users WHERE email='$email' AND password='$password'";
        $exec_sql = $conn->query($sql); 
        $count = mysqli_num_rows($exec_sql);   

            if($count>0){
                $json = array("status" => 1, "Success" => "Login has been successful!");
                // Password is correct, so start a new session
                session_start();

                $row = $exec_sql->fetch_assoc();
                            
                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["userID"] = $row["id"];
                $_SESSION["userName"] = $row["name"];; 
                $_SESSION["adminRights"] = $row["adminRights"];; 
                
                // Redirect user to index page
                header("Location: index.php");
            }else{
            $json = array("status" => 0, "Error" => "Error logging in, Please try again!");
        }
    }
    else{
        $json = array("status" => 0, "Info" => "Request method not accepted!");
    }
    @mysqli_close($conn);
    echo json_encode($json);   
?>

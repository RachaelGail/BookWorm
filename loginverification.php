<?php
 
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: welcomepage.php");
        exit;
    }include("conn.php");

        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
    
        if ($email != "" && $password != ""){
    
            $sql = "SELECT id, name FROM bs_Users WHERE email='$email' AND password='$password'";
            $exec_sql = $conn->query($sql); 
            if(!$exec_sql){
              echo $conn->error; 
              die(); 
            }
            $count = mysqli_num_rows($exec_sql);   

    
            if($count > 0){
                 // Password is correct, so start a new session
                 session_start();

                 $row = $exec_sql->fetch_assoc();
                             
                 // Store data in session variables
                 $_SESSION["loggedin"] = true;
                 $_SESSION["userID"] = $row["id"];
                 $_SESSION["name"] = $row["name"];; 
                 
                 $userID =  $_SESSION["userID"] ;
                 $userName = $_SESSION["name"]; 
                 
                 // Redirect user to index page
                 header("Location: index.php");
            }else{
                $_SESSION['error']= 'email address or password is incorrect';
                header('location: login.php');
            }
    
        }
    else{
        $_SESSION['error']= 'email address or password is incorrect';
        header('location: login.php');
    }
    
    

?>

<?php
 
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: welcomepage.php");
        exit;
    }include("conn.php");
   $error='';

    if(isset($_POST['login-btn'])){
    
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $id=''; 
        $name=''; 
    
        if ($email != "" && $password != ""){
    
            $sql = "SELECT id, email, password AS User FROM bs_Users WHERE email=$email AND password=$password";
            $exec_sql = $conn->query($sql); 
            
    
            $count = count(['User']);
    
            if($count > 0){
                 // Password is correct, so start a new session
                 session_start();
                            
                 // Store data in session variables
                 $_SESSION["loggedin"] = true;
                 $_SESSION["id"] = $id;
                 $_SESSION["email"] = $email;   
                 $_SESSION["name"] = $name;                           
                 
                 // Redirect user to welcome page
                 header("location: welcomepage.php");
            }else{
               $error= "Invalid username and password";
            }
    
        }
    else{
      $error= "Invalid username and password, please try again <a href='login.php'> here</a>"; 
    }
    
    }

?>

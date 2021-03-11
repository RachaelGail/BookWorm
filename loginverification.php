<?php
	include("conn.php");
   $error='';

    if(isset($_POST['login-btn'])){
    
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
    
        if ($email != "" && $password != ""){
    
            $sql_query = "SELECT count(*) as User FROM BS_Users WHERE email='".$email."' AND password='".$password."'";
            $result = mysqli_query($conn,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['User'];
    
            if($count > 0){
                $_SESSION['email'] = $email;
                header("Location: userindex.php");
            }else{
               echo "Invalid username and password, please try again <a href='login.php'> here</a>";
            }
    
        }
    else{
      echo "Invalid username and password, please try again <a href='login.php'> here</a>"; 
    }
    
    }

?>
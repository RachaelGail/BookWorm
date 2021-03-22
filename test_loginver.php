<?php
session_start(); 

	 // Check if the user is already logged in, if yes then redirect him to welcome page
     if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }include("conn.php");

    if(isset($_POST['login-btn'])){
	
	$email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $UserID=''; 
    $userName=''; 
    $key = 'mypassw0rdk3y'; 
	
	$checkuser = "SELECT id, name as User FROM bs_Users WHERE email='$email' AND password=AES_DECRYPT('$password' ,'$key')";
	
	$resultquery = $conn->query($checkuser);
	
	
	if(!$resultquery){
		echo $conn->error;
	}else{


        $num = mysqli_num_rows ( $resultquery ) ;
		
		if ($num >0){
			
			
			while($row = $resultquery->fetch_assoc() ){
			$userId= $row['id'];
			
			}
			
			$_SESSION['userId']= $userId;
			
			header ('location: index.php');
			 
		}else if ($num==0){
			$_SESSION['loginError']= 'email address or password is incorrect';
			header('location: test_login.php');
			
		}else{
			echo"<h1> error<h1>";
		}
	}
}
?>
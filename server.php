<?php
session_start();

// initializing variables
$email    = "";
$errors = array(); 

// connect to the database
$host = "rdoherty48.lampt.eeecs.qub.ac.uk";
$username = "rdoherty48";
$passw = "Wvmqbr1KkwxTw636";
$db = "rdoherty48";
$conn = new mysqli($host, $username, $passw, $db);

if($conn->error){
  echo "not connected".$conn>error; 
}else{
  echo "connection to DB found"; 
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // an email does not already exist in database
  $email_check_query = "SELECT * FROM BW_Users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $email_check_query);
  $email = mysqli_fetch_assoc($result);
  
  if ($email) { // if email exists
    if ($email['email'] === $email) {
      array_push($errors, "Email already exists");
    }

  }

  // Register email if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO BW_Users (email, password) 
  			  VALUES('$email', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM BW_Users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

?>
<?php
	include("conn.php");

   // LOGIN
if (isset($_POST['submit'])) {
   $email = mysqli_real_escape_string($_POST['email']);
   $password = mysqli_real_escape_string($_POST['password']);
   $errors = array(); 

   if (empty($email)) {
      array_push($errors, "Email is required");
   }
   if (empty($password)) {
      array_push($errors, "Password is required");
   }

   if (count($errors) == 0) {
      $query = "SELECT * FROM bs_Users WHERE email='$email' AND password='$password'";
      $userID = "SELECT id FROM bs_Users WHERE email='$email' AND password='$password'";
      $results = mysqli_query($conn,$query);
      if (mysqli_num_rows($results) == 1) {
        // $_SESSION['email'] = $email;
        // $_SESSION['success'] = "You are now logged in";
        header("Location:index.php");
      }else {
         array_push($errors, "Wrong email/password combination");
      }
   }
 }

?>
<?php
include('conn.php');

if (isset($_POST['register'])){

// $mypw = $conn->real_escape_string($_POST["password_1"]);
// $confirmpw = $conn->real_escape_string($_POST["password_2"]);

      $name = $_POST['name']; 
      $myemail = $_POST['email'];
      $mypw = $_POST['password_1'];
      $url = 'http://localhost:8888/BookWorm/api_POST_Register.php';

      $data = array(
          'name' => $name,
          'email' => $myemail,
          'password' => $mypw,
          'adminRights' => '2'
      );

      $options = array(
          'http' => array(
                  'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                  'method' => 'POST',
                  'content' => http_build_query($data)
          )
      );
      $context = stream_context_create($options);
      $result = file_get_contents($url, false, $context);
      header('location: login.php');

    
  }else{

  }

?>




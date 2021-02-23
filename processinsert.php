<?php
include('conn.php');

$myemail = $conn->real_escape_string($_POST["email"]);
$mypw = $conn->real_escape_string($_POST["password_1"]);

$insertquery = "INSERT INTO BW_Users (UsersID, email, password) VALUES (null, '$myemail', '$mypw')";
$result = $conn->query($insertquery);

if(!$result){
  echo $conn->error;
}else{
  echo
  "<p>$myemail, $mypw has been added to your database</p>";
}

echo"<p>$myemail, $mypw captured</p>";

?>

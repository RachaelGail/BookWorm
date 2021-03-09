<?php
include('conn.php');

$myemail = $conn->real_escape_string($_POST["email"]);
$mypw = $conn->real_escape_string($_POST["password_1"]);
$confirmpw = $conn->real_escape_string($_POST["password_2"]);

if ($mypw != $confirmpw) {
echo("Error... Passwords do not match, click <a href='register.php'> here </a> to try again");
exit;
} else{
$insertquery = "INSERT INTO bs_Users (email, password, adminRights) VALUES ('$myemail', '$mypw', '2')";
$result = $conn->query($insertquery);

if(!$result){
  echo $conn->error;
}else{
  header('Location: login.php' );
}

}
?>

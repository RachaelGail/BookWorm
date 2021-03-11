<?php
include('conn.php');

$name = $conn->real_escape_string($_POST["name"]);
$myemail = $conn->real_escape_string($_POST["email"]);
$mypw = $conn->real_escape_string($_POST["password_1"]);
$confirmpw = $conn->real_escape_string($_POST["password_2"]);

if ($mypw != $confirmpw) {
    echo("Error... Passwords do not match, click <a href='register.php'> here </a> to try again");
    exit;
    } 

$sql = "SELECT * FROM bs_Users WHERE email='$myemail' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo("Error... Email already exists please login <a href='testfilehtml.php'> here </a> to try again");;
    }else{
        $insertquery = "INSERT INTO bs_Users (email, password, userName, adminRights) VALUES ('$myemail', '$mypw', '$name','2')";
$result = $conn->query($insertquery);

if(!$result){
  echo $conn->error;
}else{
  header("Location: login.php" );
}

}
?>

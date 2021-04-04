<?php
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

$passw = "root";
$username = "root";
$db = "RD02";
$host = "localhost";
$port = 8889;
$conn = new mysqli("$host:$port", $username, $passw, $db);


if($conn-> connect_error){
echo "Connection failed: " .$conn -> connect_error;
// }else{
//     echo "thankGod"; 
}

//    $passw = "Wvmqbr1KkwxTw636";
//    $username = "rdoherty48";
//    $db = "rdoherty48";
//    $host = "rdoherty48.lampt.eeecs.qub.ac.uk";
//    $conn = new mysqli($host, $username, $passw, $db);
//
//
//    if($conn-> connect_error){
//    Echo "Connection failed: " .$conn -> connect_error;
//    }


?>

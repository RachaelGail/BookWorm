<?php

$host = "rdoherty48.lampt.eeecs.qub.ac.uk";
$username = "rdoherty48";
$passw = "Wvmqbr1KkwxTw636";
$db = "rdoherty48";
$conn = new mysqli($host, $username, $passw, $db);

if($conn->error){
  echo "not connected".$conn->error; 
}


?>
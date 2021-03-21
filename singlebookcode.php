<?php

include "conn.php"; 

$id = $conn->real_escape_string($_POST["findID"]);
$genre = $_POST['genre']; 

    if ($id==='') {
        echo("Error... can not add");
    }else{
        $insertquery = "INSERT INTO bs_LoveList (Users_id, BestSeller_id) VALUES ('1001', '$id')";
        $result = $conn->query($insertquery);

        if(!$result){
        echo $conn->error;
        }else{
            header("Location: $page"); 
        }

}

?>
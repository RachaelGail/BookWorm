<?php
session_start(); 
include "conn.php"; 

$bookID = $conn->real_escape_string($_POST["BestSeller_id"]);
$userID = $_SESSION["userID"];
$page = $_POST['page']; 

    if ($bookID==='') {
        echo("Error... can not add");
    }else{
        $insertquery = "INSERT INTO bs_LoveList (Users_id, BestSeller_id) VALUES ('$userID', '$bookID')";
        $result = $conn->query($insertquery);

        if(!$result){
        echo $conn->error;
        }else{
            header("Location: $page"); 
        }

}


//if (isset($_POST['add'])){


    //     $BestSeller_id = $_POST["BestSeller_id"];
    //     $Users_id = $_POST["Users_id"];
    //     $url = 'http://localhost:8888/BookWorm/api_POST_addToLoveList.php';
        
    //           $data = array(
    //             'Users_id' => $Users_id,
    //             'BestSeller_id' => $BestSeller_id
    //           );
        
    //           $options = array(
    //               'http' => array(
    //                       'header' => "Content-type: application/x-www-form-urlencoded\r\n",
    //                       'method' => 'POST',
    //                       'content' => http_build_query($data)
    //               )
    //           );
    //           $context = stream_context_create($options);
    //           $result = file_get_contents($url, false, $context);
    //           //header('location: admin.php');
        
            
    //       }else{
        
    //       }
      

?>
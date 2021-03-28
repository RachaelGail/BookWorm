<?php
session_start(); 
 include "conn.php"; 

$bookid = $conn->real_escape_string($_POST["findbookID"]);
$userID = $_SESSION["userID"];
$page = $_POST['page']; 

    if ($bookid==='') {
        echo("Error... can not add");
    }else{

        //check if book exists in list
        $searchForBook = "SELECT * FROM bs_LoveList WHERE Users_id = $userID AND BestSeller_id = $bookid"; 
        $exist = $conn->query($searchForBook);
        $count = mysqli_num_rows($exist);

        //if doesn't exist insert query 
        if($count===0){
        $insertquery = "INSERT INTO bs_LoveList (Users_id, BestSeller_id) VALUES ('$userID', '$bookid')";
        $result = $conn->query($insertquery);

        if(!$result){
        echo $conn->error;
        }else{
            header("Location: $page"); 
        }
        } //else ignore and return to the page you were on 
            header("Location: $page"); 
        

}

//try to get POST api working 

// if (isset($_POST['add'])){


//         $BestSeller_id = $_POST["findbookID"];
//         $userID = $_SESSION["userID"];
//         $url = 'http://localhost:8888/BookWorm/api_POST_addToLoveList.php';
        
//               $data = array(
//                 'userID' => $userID,
//                 'BestSeller_id' => $BestSeller_id
//               );
        
//               $options = array(
//                   'http' => array(
//                           'header' => "Content-type: application/x-www-form-urlencoded\r\n",
//                           'method' => 'POST',
//                           'content' => http_build_query($data)
//                   )
//               );
//               $context = stream_context_create($options);
//               $result = file_get_contents($url, false, $context);
//               //header('location: admin.php');
        
            
//           }else{
        
//           }
      

?>
<?php
include('conn.php');
session_start();
$userID = $_SESSION["userID"]; 
$sessionPW = $_SESSION["password"]; 
$newPW = $_POST["newPW"]; 
$currentPW = $_POST["currentPW"]; 
$confirmPW = $_POST["confirmPW"]; 


    if ($currentPW == $sessionPW){

        $sql= "UPDATE bs_Users 
        SET password='$newPW' 
        WHERE id='$userID'";
        $updatePW = mysqli_query($conn, $sql);
        
        header("Location: login.php"); 
        
    } else{
        $message = "Current Password is not correct";
        header("Location: changepassword.php"); 
}

    
?>



<?php 
// if (isset($_POST['frmChange'])){

// $newPW = $conn->real_escape_string($_POST["newPW"]);
// $confirmPW = $conn->real_escape_string($_POST["confirmPW"]);

// if ($newPW != $confirmPW) {
//     $message = "Issue";;
//     exit;

//     } else {
//       $newPW = $_POST['newPW']; 
//       $url = 'http://localhost:8888/BookWorm/api_PUT_Password.php';

//       $data = array(
//           'newPW' => $newPW
//       );

//       $options = array(
//           'http' => array(
//                   'header' => "Content-type: application/x-www-form-urlencoded\r\n",
//                   'method' => 'POST',
//                   'content' => http_build_query($data)
//           )
//       );
//       $context = stream_context_create($options);
//       $result = file_get_contents($url, false, $context);
      
//     }
//   }else{

//   }

?>

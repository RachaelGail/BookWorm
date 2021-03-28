<?php
include('conn.php');
session_start();
$userID = $_SESSION["userID"]; 
$sessionPW = $_SESSION["password"]; 
$newPW = $_POST["newPW"]; 
$currentPW = $_POST["currentPW"]; 


    if ($currentPW == $sessionPW) {

        $sql= "UPDATE bs_Users 
        SET password='$newPW' 
        WHERE id='$userID'";
        $updatePW = mysqli_query($conn, $sql);
        
        header("Location: login.php"); 
        
    } else{
        $message = "Current Password is not correct";
        
}

    
?>

<DOCTYPE html>
<html lang="en">
   <head>
         <?php
			   include("header.php");
			?>
   </head>
   <body>
   USERID:  <?php  echo "$userID"; ?>
     <br>
   SessionPW:   <?php  echo "$sessionPW"; ?>
     <br>
   currentPW:   <?php  echo "$currentPW"; ?>
     <br>
   
    NEW:  <?php  echo "$newPW"; ?>


 </body>
</html>

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

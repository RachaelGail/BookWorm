<?php
session_start(); 
include "conn.php"; // Using database connection file here

$userID = $_SESSION["userID"]; 
$delLoveList = "DELETE FROM bs_LoveList WHERE bs_LoveList.Users_id = $userID"; 
$del1 = mysqli_query($conn,$delLoveList); 

$delUser = "DELETE FROM bs_Users WHERE bs_Users.id = $userID"; 
$del2 = mysqli_query($conn,$delUser); 

if($del2)
{
    mysqli_close($conn); // Close connection
    header("location:register.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting profile"; // display error message if not delete
}

if (isset($_POST['deleteID'])){

    $name = $_POST["name"];
    $author = $_POST["author"];
    $userRating = $_POST["userRating"];
    $reviews = $_POST["reviews"];
    $price = $_POST["price"];
    $year = $_POST["year"];
    $genre = $_POST["genre"];
    $blurb = $_POST["blurb"];
    $url = 'http://localhost:8888/BookWorm/api_POST_NewBook.php';
    
          $data = array(
            'name' => $name,
            'author' => $author,
            'userRating'=> $userRating,
            'reviews'=> $reviews,
            'price'=> $price,
            'year'=> $year,
            'genre'=> $genre,
            'blurb'=> $blurb 
          );
    
          $options = array(
              'http' => array(
                      'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                      'method' => 'POST',
                      'content' => http_build_query($data)
              )
          );
          $context = stream_context_create($options);
          $result = file_get_contents($url, false, $context);
          //header('location: admin.php');
    
        
      }else{
    
      }


?>
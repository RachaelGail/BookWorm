<?php
include('conn.php');

$BookTitle = $conn->real_escape_string($_POST["BookTitle"]);
$Author = $conn->real_escape_string($_POST["Author"]);
$avReviews = $conn->real_escape_string($_POST["avReviews"]);
$numOfReviews = $conn->real_escape_string($_POST["numOfReviews"]);
$price = $conn->real_escape_string($_POST["price"]);
$publishedyear = $conn->real_escape_string($_POST["publishedyear"]);
$genre = $conn->real_escape_string($_POST["genre"]);
$blurb = $conn->real_escape_string($_POST["blurb"]);


$insertquery = "INSERT INTO bs_BestSellers (name, author, userRating, reviews, price, year, genre, blurb) VALUES 
('$BookTitle', '$Author', '$avReviews', '$numOfReviews', '$price', '$publishedyear', '$genre', '$blurb')";


$result = $conn->query($insertquery);

if(!$result){
  echo $conn->error;
}else{
  header("Location: index.php" );
}

?>
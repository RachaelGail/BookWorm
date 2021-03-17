<?php

header("Content-Type:application/json");

if (isset($_GET['genre']) && $_GET['genre']!="") {
        include('conn.php');
        $genre= $_GET['genre'];
        $result = mysqli_query($conn,"SELECT * FROM bs_BestSellers WHERE genre=$genre");

        if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $author = $row['author']; 
        $userRating = $row['userRating']; 
        $reviews = $row['reviews']; 
        $price = $row['price']; 
        $year = $row['year']; 
        $genre = $row['genre']; 
        $blurb = $row['blurb']; 

        response($id, $name, $author, $userRating, $reviews, $price, $year, $genre, $blurb);
        mysqli_close($conn);
            }else{
        response(NULL, NULL, 200,"No Record Found");
            }
}else{ 
    response(NULL, NULL, 400,"Invalid Request");
    }
    
    
    function response($id, $name, $author, $userRating, $reviews, $price, $year, $genre, $blurb){
    $response['name'] = $name;
    $response['author'] = $author;
    $response['userRating'] = $userRating;
    $response['reviews'] = $reviews;
    $response['price'] = $price;
    $response['year'] = $year;
    $response['genre'] = $genre;
    $response['blurb'] = $blurb;
    
    $json_response = json_encode($response);
    echo $json_response;
    }





    
?>

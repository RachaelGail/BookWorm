<?php 

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        include('conn.php');
        // Get data from client
        $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : "";
        $author = isset($_POST['author']) ? mysqli_real_escape_string($conn, $_POST['author']) : "";
        $userRating = isset($_POST['userRating']) ? mysqli_real_escape_string($conn, $_POST['userRating']) : "";
        $reviews = isset($_POST['reviews']) ? mysqli_real_escape_string($conn, $_POST['reviews']) : "";
        $price = isset($_POST['price']) ? mysqli_real_escape_string($conn, $_POST['price']) : "";
        $year = isset($_POST['year']) ? mysqli_real_escape_string($conn, $_POST['year']) : "";
        $genre = isset($_POST['genre']) ? mysqli_real_escape_string($conn, $_POST['genre']) : "";
        $blurb = isset($_POST['blurb']) ? mysqli_real_escape_string($conn, $_POST['blurb']) : "";


        // Insert data into database
        $sql = "INSERT INTO bs_BestSellers (name, author, userRating, reviews, price, year, genre, blurb) VALUES 
        ('$name', '$author', '$userRating', '$reviews', '$price', '$year', '$genre', '$blurb')";

        $post_data_query = mysqli_query($conn, $sql);
        if($post_data_query){
            $json = array("status" => 1, "Success" => "Book has been added successfully!");
        }
        else{
            $json = array("status" => 0, "Error" => "Error adding book! Please try again!");
        }
    }
    else{
        $json = array("status" => 0, "Info" => "Request method not accepted!");
    }
    @mysqli_close($conn);
    echo json_encode($json);   
?>
<?php
include('conn.php');


if (isset($_POST['admin'])){


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
<?php
header("Content-Type:application/json");
include('conn.php');
// if (isset($_GET['id']) && $_GET['id']!="") {
//         $id= $_GET['id'];
//         $result = mysqli_query($conn,"SELECT * FROM bs_BestSellers WHERE id=$id");

//         if(mysqli_num_rows($result)>0){
//         $row = mysqli_fetch_array($result);
//         $name = $row['name'];
//         $author = $row['author']; 
//         $userRating = $row['userRating']; 
//         $reviews = $row['reviews']; 
//         $price = $row['price']; 
//         $year = $row['year']; 
//         $genre = $row['genre']; 
//         $blurb = $row['blurb']; 

//         response($id, $name, $author, $userRating, $reviews, $price, $year, $genre, $blurb);
//         mysqli_close($conn);
//             }else{
//         response(NULL, NULL, 200,"No Record Found");
//             }
// }else{ 
//     response(NULL, NULL, 400,"Invalid Request");
//     }


    if (isset($_GET['all'])) {
        $result = mysqli_query($conn,"SELECT * FROM bs_BestSellers ORDER BY author ASC");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }

  
        echo json_encode($dataarray); 
    }

    if (isset($_GET['genre'])) {
        $genre= $_GET['genre'];
        $result = mysqli_query($conn,"SELECT * FROM bs_BestSellers where genre='$genre'");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }

        echo json_encode($dataarray); 
    }

    if (isset($_GET['randomised'])) {
        $genre= $_GET['randomised'];
        $result = mysqli_query($conn,"SELECT id, name, author, userRating FROM bs_BestSellers WHERE userRating=4.9 ORDER BY rand() LIMIT 3");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }

        echo json_encode($dataarray); 
    }




    // }else{ 
    // response(NULL, NULL, 400,"Invalid Request");
    // }
    
    // function response($id, $name, $author, $userRating, $reviews, $price, $year, $genre, $blurb){
    // $response['name'] = $name;
    // $response['author'] = $author;
    // $response['userRating'] = $userRating;
    // $response['reviews'] = $reviews;
    // $response['price'] = $price;
    // $response['year'] = $year;
    // $response['genre'] = $genre;
    // $response['blurb'] = $blurb;
    
    // echo json_encode($response);
    
    //}
?>

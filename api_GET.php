<?php
header("Content-Type:application/json");
include('conn.php');

    //Return All from BestSellers for Author Page 
    if (isset($_GET['all'])) {
        $result = mysqli_query($conn,
        "SELECT * FROM bs_BestSellers 
        ORDER BY author ASC");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }
        echo json_encode($dataarray); 
    }
 
    //Fiction & Non Fiction Pages 
    if (isset($_GET['genre'])) {
        $genre= $_GET['genre'];
        $result = mysqli_query($conn,
        "SELECT * FROM bs_BestSellers 
        WHERE genre='$genre'");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }
        echo json_encode($dataarray); 
    }
    
    //IndexPage Staff Selection Code 
    if (isset($_GET['staffsection'])) {
        $staffsection= $_GET['staffsection'];
        $result = mysqli_query($conn,
        "SELECT * FROM bs_BestSellers 
        WHERE userRating=4.3 
        ORDER BY rand() 
        LIMIT 2");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }
        echo json_encode($dataarray); 
    }

    //IndexPage Top Rated Section 
    if (isset($_GET['rating'])) {
        $rating= $_GET['rating'];
        $result = mysqli_query($conn,
        "SELECT * FROM bs_BestSellers 
        WHERE userRating=4.9 
        ORDER BY rand() 
        LIMIT 3");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }
        echo json_encode($dataarray); 
    }

    //LoveList Code 
    if (isset($_GET['userID'])) {
        $userID= $_GET['userID'];
        $result = mysqli_query($conn,
        "SELECT BestSeller_id, bs_BestSellers.name, 
        bs_BestSellers.author, 
        bs_BestSellers.userRating, 
        bs_BestSellers.price
        FROM bs_LoveList 
        INNER JOIN bs_BestSellers ON BestSeller_id=bs_BestSellers.id
        WHERE bs_lovelist.Users_id= $userID");
        
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }
        echo json_encode($dataarray); 
    }

?>

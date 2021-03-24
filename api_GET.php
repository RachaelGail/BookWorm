<?php
header("Content-Type:application/json");
include('conn.php');

    //Return All from BestSellers for Author Page 
    if (isset($_GET['all'])) {
        $result = mysqli_query($conn,"SELECT * FROM bs_BestSellers ORDER BY author ASC");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }
        echo json_encode($dataarray); 
    }
 
    //Fiction & Non Fiction Pages 
    if (isset($_GET['genre'])) {
        $genre= $_GET['genre'];
        $result = mysqli_query($conn,"SELECT * FROM bs_BestSellers where genre='$genre'");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }
        echo json_encode($dataarray); 
    }
    
    //IndexPage Staff Selection Code 
    if (isset($_GET['staffsection'])) {
        $staffsection= $_GET['staffsection'];
        $result = mysqli_query($conn,"SELECT * FROM bs_BestSellers WHERE userRating=4.3 ORDER BY rand() LIMIT 2");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }
        echo json_encode($dataarray); 
    }

    //IndexPage Top Rated Section 
    if (isset($_GET['rating'])) {
        $rating= $_GET['rating'];
        $result = mysqli_query($conn,"SELECT * FROM bs_BestSellers WHERE userRating=4.9 ORDER BY rand() LIMIT 3");
        $datarray = array(); 
        while( $row = $result->fetch_assoc()){
            $dataarray[] = $row; 
        }
        echo json_encode($dataarray); 
    }

    //Lovelist Code 
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

    //undergoing testing for POST 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // Get data from client
        $name = $conn->real_escape_string($_POST["name"]);
        $myemail = $conn->real_escape_string($_POST["email"]);
        $mypw = $conn->real_escape_string($_POST["password_1"]);
        $confirmpw = $conn->real_escape_string($_POST["password_2"]);

        if ($mypw != $confirmpw) {
            echo("Error... Passwords do not match, click <a href='register.php'> here </a> to try again");
            exit;
            } 

            $sql = "SELECT * FROM bs_Users WHERE email='$myemail' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo("Error... Email already exists please login <a href='testfilehtml.php'> here </a> to try again");
            }else{
        $sql = "INSERT INTO bs_Users (email, password, adminRights) VALUES ('$myemail', '$mypw','2')";
        $post_data_query = mysqli_query($conn, $sql);
        if($post_data_query){
            $json = array("status" => 1, "Success" => "User has been added successfully!");
            header("Location: login.php" );
        }
        else{
            $json = array("status" => 0, "Error" => "Error adding User! Please try again!");
        }
        echo json_encode($json);   
    }
   
    }



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

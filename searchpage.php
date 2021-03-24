<?php
	
    session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include("conn.php");
    if(!isset($_POST['search'])){
        header("Location:index.php");
    }

    $search_sql="SELECT * FROM bs_BestSellers WHERE name LIKE '%".$_POST['search']."%' 
    OR author LIKE '%".$_POST['search']."%'
    OR userRating ='".$_POST['search']."'    "; 
    $search_query = $conn->query($search_sql); 


    if(mysqli_num_rows($search_query) !== 0 ){
       $search_rs=$search_query->fetch_assoc();
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


  <!-- Nav Bar -->
  <section class = "coloured-section" id="title">
   <?php
    include("navbar.php")
        ?>

  </section>

  <!-- Results -->

  <section class = 'white-section' id='rating'>
  <h2 class='section-heading'>Search List</h2>
  <div class='row'>
<?php

        if(mysqli_num_rows($search_query) !== 0){

            while($search_rs = mysqli_fetch_assoc($search_query)){
                $Book = $search_rs["name"];
                $Author = $search_rs["author"];
                $Rating = $search_rs["userRating"];
                    echo "
                        <div class='rating-col col-lg-4 col-md-6'>
                        <div class='card'>
                            <div class='card-header'>
                            <h3>$Author</h3>
                            </div>
                            <div class='card-body'>  
                            <h2 class='price-text'>$Book</h2>
                            <p>$Rating</p>
                            <button type='button' class='btn btn-lg btn-block btn-outline-dark'>Add to Love List</button>
                            </div>
                        </div>
                        </div>

                    ";
                

            }
        

            }else{
                
                //  echo "<div class='rating-col col-lg-4 col-md-6'>
                //  <div class='card'>
                //      <div class='card-body'>  
                //      <h2 class='price-text'>NO RESULTS FOUND</h2>
                //          </div>
                //  </div>
                //  </div>"; 
            //     //header("Location:index.php");
            echo "<div class='jumbotron jumbotron-fluid text-center'>
            <div class='container'>
            <h1 class='display-4'>Sorry...</h1>
            <p class='lead'>We don't seem to have what you are looking for...</p>
        
            </div>
            </div>"; 

             }

?>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer navbar-fixed-bottom">
  <?php
			include("footer.php");
			?>

  </footer>
</body>
</html>

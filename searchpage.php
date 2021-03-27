<?php
	
    session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
  $search = $_POST['search']; 
  $ep = "http://localhost:8888/BookWorm/api_GET.php?search=$search";
  $result = file_get_contents($ep); 
  $data = json_decode($result, true); 
  $count = count($data); 
    
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
        if( $count == 0 ){
            echo "<div class='jumbotron jumbotron-fluid text-center'>
            <div class='container'>
            <h1 class='display-4'>Sorry...</h1>
            <p class='lead'>We don't seem to have what you are looking for...</p>
        
            </div>
            </div>"; 
          } else{
  
            foreach($data as $book){
                  $Book = $book["name"]; 
                  $Author = $book["author"]; 
                  $Rating = $book["userRating"]; 
                 // $Price = $lovelist["price"]; 
                  $bookid= $book["id"]; 
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
                            <input type='hidden' name='findbookID' value=$bookid>
                            </div>
                        </div>
                        </div>";
            }
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

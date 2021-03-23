<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$name = $_SESSION["userName"];

//Staff Selection Connection 
$epSS = "http://localhost:8888/BookWorm/api_GET.php?staffsection";
   $resultforSS = file_get_contents($epSS); 
   $dataSS = json_decode($resultforSS, true); 
   
//Rating Section Connection 
$epRating = "http://localhost:8888/BookWorm/api_GET.php?rating";
   $resultRating = file_get_contents($epRating); 
   $dataRating = json_decode($resultRating, true); 



?>

 
<!DOCTYPE html>
<html lang="en">
<head>
<?php
			include('header.php');
			?>
</head>
</head>
<body>
<section class = 'coloured-section' id='title'>
  <?php
    include("navbar.php")
        ?>

      <!-- Title -->

      <div class='row'>
        <div class='col-lg-6'>
          <h1 class='big-heading'>Hi <?php echo  "$name" ?></h1>
        </div>

        <div class='col-lg-6'>
          <img class='title-image' src='images/bookworm_pic.png' alt='book'>
        </div>
      </div>

  </section>

  <!-- Staff Selection -->

  <?php foreach($dataSS as $book){
    $BookName = $book["name"]; 
    $Author = $book["author"]; 
    $Blurb = $book["blurb"]; 
    $BookID = $book["id"]; 
    $currentpage = "index.php"; 
  ?>
  <section class = 'coloured-section' id='description'>
  <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <p></p><h2 class="testimonial-text"><?php echo "$Blurb"  ?></h2>
          <em><?php echo"$BookName, $Author"?></em>
        </div>
   
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>
  <?php } ?>

  <!-- Logo Section -->

  <section class = 'coloured-section' id='selection'>

  
    <img class='selection-logo' src='images/amazon.png' alt='wob-logo'>
   
  </section>


  <!-- Rating Section -->

  <section class = 'white-section' id='rating'>
  <h2 class='section-heading'>Top Rated</h2>
  <div class='row'>
<?php
  foreach($dataRating as $book){
    $bookid = $book["id"]; 
    $BookName = $book["name"]; 
    $Author = $book["author"];
    $currentPage = "index.php"; 
    echo "
        <div class='rating-col col-lg-4 col-md-6'>
          <div class='card'>
            <div class='card-header'>
            <h3>$Author</h3>
            </div>
            <div class='card-body'>  
            <a href='singularbook.php?id=$bookid'><h2 class='price-text'>$BookName</h2></a>
              <p>4.9</p>
              <form action='add.php' method='POST'>
                              <input type='submit' class='btn btn-lg btn-block btn-outline-dark' value='Add to Love List'>
                              <input type='hidden' name='findbookID' value=$bookid>
                              <input type='hidden' name='page' value=$currentPage>
                              </form>
            </div>
          </div>
        </div> ";
  }
?>
    </div>
  </section>


  <!-- Footer -->
  <footer class='footer navbar-fixed-bottom'>
  <?php
			include('footer.php');
			?>

  </footer>
</body>
</html>
<?php
//   include("conn.php"); 
// //Rating
//   $read_sql_rating = "SELECT id, name, author, userRating FROM bs_BestSellers WHERE userRating=4.9 ORDER BY rand() LIMIT 3"; 
//     $exec_sql_rating = $conn->query($read_sql_rating); 
//     $rcount=1; 
//Staff Selection
  // $book1_sql_query = "SELECT id, name, author, blurb FROM bs_BestSellers WHERE userRating=4.0 ORDER BY rand()"; 
  //  $book1_sql_conn = $conn->query($book1_sql_query);
  //  $book1row = $book1_sql_conn->fetch_assoc();

  //  $book1values = array_values($book1row);
  //  $book1id = $book1values[0];
  //  $book1name = $book1values[1];
  //  $book1author = $book1values[2];
  //  $book1blurb = $book1values[3];

  //  $book2_sql_query = "SELECT id, name, author, blurb FROM bs_BestSellers WHERE userRating=4.1 ORDER BY rand()"; 
  //  $book2_sql_conn = $conn->query($book2_sql_query);
  //  $book2row = $book2_sql_conn->fetch_assoc();

  //  $book2values = array_values($book2row);
  //  $book2id = $book2values[0];
  //  $book2name = $book2values[1];
  //  $book2author = $book2values[2];
  //  $book2blurb = $book2values[3];


?>
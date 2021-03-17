<?php
	// session_start();
	include("conn.php");
//Rating
  $read_sql_rating = "SELECT id, name, author, userRating FROM bs_BestSellers WHERE userRating=4.9 ORDER BY rand()"; 
    $exec_sql_rating = $conn->query($read_sql_rating); 
    $rcount=1; 
//Staff Selection
  $read_sqlss = "SELECT id, name, author, blurb FROM bs_BestSellers WHERE userRating=4.0 ORDER BY rand()"; 
    $exec_sqlss = $conn->query($read_sqlss); 
    $sscount=1; 




?>

<!DOCTYPE html>
<html>

<head>
<?php
			include('header.php');
			?>
</head>

<body>

<!-- Nav Bar -->
  <section class = 'coloured-section' id='title'>
  <?php
    include("navbar.php")
        ?>

      <!-- Title -->

      <div class='row'>
        <div class='col-lg-6'>
          <h1 class='big-heading'>Top 50 Books from Amazon!</h1>
        </div>

        <div class='col-lg-6'>
          <img class='title-image' src='images/bookworm_pic.png' alt='book'>
        </div>
      </div>

  </section>





  <!-- Staff Selection -->

  <section class = 'coloured-section' id='description'>
    <div id='testimonial-carousel' class='carousel slide' data-ride='carousel' data-interval='false'>

        <h2 class='section-heading'>Staff Selection</h2>
          <div class='carousel-inner'>
            <div class='carousel-item active container-fluid'>
        
                    <?php 
                          while(($ssbook = $exec_sqlss->fetch_assoc()) !==FALSE){
                            $ssBook = $ssbook["name"]; 
                            $ssAuthor = $ssbook["author"]; 
                            $ssBlurb = $ssbook["blurb"]; 
                            $id = $ssbook["id"]; 
                            echo "
                                      <h3 class='section-heading'><a href='singularbook.php?id=$id'>$ssBlurb</a></h3>
                                      <i class='fas fa-book'></i><em>$ssBook&nbsp by $ssAuthor</em>
                            ";
                            if($sscount == 2){
                              break; 
                            }
                            $sscount++; 
                    }
                    ?>
            </div>
          </div>
      <a class='carousel-control-prev' href='#testimonial-carousel' role='button' data-slide='prev'>
        <span class='carousel-control-prev-icon' aria-hidden='true'></span>
        <span class='sr-only'>Previous</span>
      </a>
      <a class='carousel-control-next' href='#testimonial-carousel' role='button' data-slide='next'>
        <span class='carousel-control-next-icon' aria-hidden='true'></span>
        <span class='sr-only'>Next</span>
      </a>
    </div>
  </section>


  <!-- Logo Section -->

  <section class = 'coloured-section' id='selection'>

  
    <img class='selection-logo' src='images/amazon.png' alt='wob-logo'>
   
  </section>


  <!-- Rating Section -->

  <section class = 'white-section' id='rating'>
  <h2 class='section-heading'>Top Rated</h2>
  <div class='row'>
<?php
  while(($rating_book = $exec_sql_rating ->fetch_assoc()) !==FALSE){

$rBook = $rating_book["name"]; 
$rAuthor = $rating_book["author"]; 
$rRating = $rating_book["userRating"]; 
$id = $rating_book["id"]; 
$page = "index.php"; 
echo "
    <div class='rating-col col-lg-4 col-md-6'>
      <div class='card'>
        <div class='card-header'>
         <h3>$rAuthor</h3>
        </div>
        <div class='card-body'>  
          <h2 class='price-text'><a href='singularbook.php?id=$id'>$rBook</a></h2>
          <p>$rRating</p>
          <form action='add.php' method='POST'>
                          <input type='submit' class='btn btn-lg btn-block btn-outline-dark' value='Add to Love List'>
                          <input type='hidden' name='findID' value=$id>
                          <input type='hidden' name='page' value=$page>
                          </form>
        </div>
      </div>
    </div>

";
        if($rcount == 3){
            break; 
          }
      $rcount++; 

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

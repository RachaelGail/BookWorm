<?php
	// include("conn.php");
  //   $id = $_GET['id'];
  //   $exec_sql = mysqli_query($conn, "SELECT * FROM bs_BestSellers WHERE id=$id"); 
  //   $count =1; 

  $id = $_GET['id'];
   $ep = "http://localhost:8888/BookWorm/api_GET.php?id=$id";
   $result = file_get_contents($ep); 
   $data = json_decode($result, true); 
   $count =1; 

    ?>

<DOCTYPE html>
<html>

<head>
<?php
			include("header.php");
			?>
</head>

<body>
	<section class = "coloured-section" id="title">
  <?php
    include("navbar.php")
        ?>

  </section>

  <section class = "white-section" id="features">
  <div class="container">
        
                    <?php 

                    foreach($data as $book){
                            $bookid = $book['id']; 
                            $name = $book['name'];
                            $author = $book['author']; 
                            $userRating = $book['userRating']; 
                            $reviews = $book['reviews']; 
                            $price = $book['price']; 
                            $year = $book['year']; 
                            $genre = $book['genre']; 
                            $blurb = $book['blurb'];
                            $page = "singularbook.php?id=$bookid";
                        
                            echo "
                                      <h3 class='section-heading'>$blurb</h3>
                                      <h4><i class='fas fa-book'></i><em>$name by $author</em></h4>
                                      <h4>Price: £ $price</h4>
                                      <h4>$reviews reviews, Average User Rating: $userRating</h4>
                                      <h4>Genre: $genre, Published: $year</h4>

                                      <form action='add.php' method='POST'>
                                      <input type='submit' class='btn btn-lg btn-block btn-outline-dark' value='Add to Love List'>
                                      <input type='hidden' name='findbookID' value=$bookid>
                                      <input type='hidden' name='page' value=$page>
                                      </form>
                            ";
                            if($count ==1){
                                break; 
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
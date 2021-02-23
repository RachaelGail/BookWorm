<!DOCTYPE html>
<html>

<head>
<?php
			include("header.php");
			?>
</head>

<body>

<!-- Nav Bar --> 
  <section class = "coloured-section" id="title">
    <div class="container-fluid" id="nav-placeholder">

      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="webpages/index.php">BookWorm</a>
        <button class="navbar-toggler" type="btn" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar=toggler-icon"></span> -->
          <i class="fas fa-bars"></i>
    
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link"  href="webpages/login.php"> Log In</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="webpages/fiction.php"> Fiction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webpages/nonfiction.php"> Non-Fiction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webpages/author.php"> Author</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="webpages/lovelist.php"> Love List</a>
            </li>
            <form>
              <input type="text" name="search" placeholder="Search..">
            </form>
          </ul>
        </div>
      </nav>

  </div>  

      <!-- Title -->
 
      <div class="row">

        <div class="col-lg-6">
          <h1 class="big-heading">Top 50 Books from Amazon!</h1>
          
        </div>

        <div class="col-lg-6">
          <img class="title-image" src="images/bookworm_pic.png" alt="book">
        </div>
      </div>

    
  </section>


  


  <!-- description -->

  <section class = "coloured-section" id="description">

    <h2 class="section-heading">Staff Selection</h2>
    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">

        <div class="carousel-item active container-fluid">
          <h2 class="section-heading">Description of Book 1.</h2>
          <i class="fas fa-book"></i><em>BOOK1 NAME, AURTHOR</em>
        </div>

        <div class="carousel-item container-fluid">
          <h2 class="section-heading">Description of Book 2.</h2>
          <i class="fas fa-book"></i><em>BOOK2 NAME, AURTHOR</em>
        </div>

      </div>

      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



  </section>


  <!-- Selection -->

  <section class = "coloured-section" id="selection">

    <!-- <img class="selection-logo" src="images/waterstones.png" alt="ws-logo"> -->
    <img class="selection-logo" src="images/amazon.png" alt="wob-logo">
    <!-- <img class="selection-logo" src="images/wob.png" alt="amazon-logo"> -->

  </section>


  <!-- Rating -->

  <section class = "white-section" id="rating">

    <div class="row">

      <div class="rating-col col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Book1Name</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">RATING</h2>
           
            <p>w/ Aurthor</p>
          
            <button type="button" class="btn btn-lg btn-block btn-outline-dark">Add to Love List</button>
          </div>
        </div>
      </div>

      <div class="rating-col col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Book2Name</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">RATING</h2>
           
            <p>w/ Aurthor</p>
            <!-- inserting a blank line to ensure continuity  -->
            
            <button type="button" class="btn btn-lg btn-block btn-outline-dark">Add to Love List</button>
          </div>
        </div>
      </div>

      <div class="rating-col col-lg-4 col-md">
        <div class="card">
          <div class="card-header">
            <h3>Book3Name</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">RATING</h2>
            
            <p>w/ Aurthor</p>
            <button type="button" class="btn btn-lg btn-block btn-outline-dark">Add to Love List</button>
          </div>
        </div>
      </div>


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
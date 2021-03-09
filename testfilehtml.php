<?php
	// session_start();
	include("testfile.php");

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
                          echo $ss_html; 
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


  <!-- Selection -->

  <section class = 'coloured-section' id='selection'>

  
    <img class='selection-logo' src='images/amazon.png' alt='wob-logo'>
   
  </section>


  <!-- Rating Section -->

  <section class = 'white-section' id='rating'>
  <h2 class='section-heading'>Top Rated</h2>
  <div class='row'>
      <?php
      echo $r_html; 
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

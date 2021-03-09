<?php
	include("conn.php");
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

  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">
      <div class="row">

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-book fa-4x"></i>
          <h3 class="feature-title">Title#1</h3>
          <p>Author</p>
          <p>rating</p>
          <button type="button" class="btn btn-lg btn-block btn-outline-dark">Add to Love List</button>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-book fa-4x"></i>
          <h3 class="feature-title">Title#2</h3>
          <p>Author</p>
          <p>rating</p>
          <button type="button" class="btn btn-lg btn-block btn-outline-dark">Add to Love List</button>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-book fa-4x"></i>
          <h3 class="feature-title">Title#3</h3>
          <p>Author</p>
          <p>rating</p>
          <button type="button" class="btn btn-lg btn-block btn-outline-dark">Add to Love List</button>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-book fa-4x"></i>
          <h3 class="feature-title">Title#4</h3>
          <p>Author</p>
          <p>rating</p>
          <button type="button" class="btn btn-lg btn-block btn-outline-dark">Add to Love List</button>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-book fa-4x"></i>
          <h3 class="feature-title">Title#5</h3>
          <p>Author</p>
          <p>rating</p>
          <button type="button" class="btn btn-lg btn-block btn-outline-dark">Add to Love List</button>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-book fa-4x"></i>
          <h3 class="feature-title">Title#6</h3>
          <p>Author</p>
          <p>rating</p>
          <button type="button" class="btn btn-lg btn-block btn-outline-dark">Add to Love List</button>
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

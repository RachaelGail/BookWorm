<html lang="en">

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
        <a class="navbar-brand" href="index.php">BookWorm</a>
        <button class="navbar-toggler" type="btn" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar=toggler-icon"></span> -->
          <i class="fas fa-bars"></i>
    
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link"  href="login.php"> Log In</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="fiction.php"> Fiction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nonfiction.php"> Non-Fiction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="author.php"> Author</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lovelist.php"> Love List</a>
            </li>
            <form>
              <input type="text" name="search" placeholder="Search..">
            </form>
          </ul>
        </div>
      </nav>

  </div>  

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
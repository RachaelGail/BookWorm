<?php
   // Initialize the session
   session_start();

   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: login.php");
      exit;
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
			<section class = "coloured-section" id="title">
            <?php
               include("navbar.php")
            ?>
          </section>

<!-- Fiction Section -->
   <section class = "white-section" id="features">
    <div class="container-fluid">
      <div class="row">

                    <div class='feature-box col-lg-4'>
                        <i class='footer-icons fas fa-pencil-alt fa-3x'></i>
                        <a href='changename.php'><h3 class='feature-title'>Change your Name here! </h3></a>
                     </div>

                     <div class='feature-box col-lg-4'>
                        <i class='footer-icons fas fa-lock fa-3x'></i>
                        <a href='changepassword.php'><h3 class='feature-title'>Change your Password here! </h3></a>
                     </div>

                     <div class='feature-box col-lg-4'>
                        <i class='footer-icons fas fa-times fa-3x'></i>
                        <a href='delete_user.php'><h3 class='feature-title'>Delete your profile here :( </h3></a>
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

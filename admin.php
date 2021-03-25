<?php
   // Initialize the session
   include("uploadNewBook.php"); 
   session_start();

//   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }
   $adminrights = $_SESSION["adminRights"]; 

    //check if they have the right rights to be on this page 
   if ($adminrights !== '1'){
    //if not relocate them to front page 
    header("location: index.php");
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

<!-- Admin Section -->
   <section class = "white-section" id="features">
    <div class="container-fluid">
    <h1>Upload A New Book</h1>

<form action="admin.php" method="POST">

<label>Book Title </label><br>
<input type ='text' id="name" name="name" rows="4" cols="50" required/>
 
  <br>
    <br>
  <label >Author </label><br>
<input type ='text' id="author" name="author" rows="4" cols="50" required/>

  <br>
    <br>
  <label >Average User Reviews </label><br>
    <input type="numbers" id="userRating" name="userRating" required/> 
    <br>
  <br>

  <label >Number of Reviews </label><br>
    <input type="numbers" id="reviews" name="reviews" required/> 
    <br>
  <br>

  <label >Price </label><br>
  <select id="price" name="price" required>
    <option value="">Choose Price</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
  </select>
    <br>
  <br>

  <label>Published Year </label><br>
  <select id="year" name="year" required>
  <option value="">Choose Year</option>
    <option value="2000">2020</option>
    <option value="2000">2010</option>
    <option value="2000">2000</option>
    <option value="1990">1990</option>
    <option value="1980">1980</option>
    <option value="1970">1970</option>
  </select>
    <br>
  <br>

  <label >Genre </label><br>
  <select id="genre" name="genre" required>
  <option value="">Choose Genre</option>
    <option value="Fiction">Fiction</option>
    <option value="NonFiction">Non Fiction</option>
  </select>
    <br>
  <br>



<label >Blurb </label><br>
<textarea id="textbox" name="blurb" rows="4" cols="50" required>
 
  </textarea>
  <br>
  
  <br>
  <input type="submit" value="Submit" name="admin" class='nav-link btn' id='login-btn'>

</form>

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

<?php
   // Initialize the session
   session_start();
  //  $ep = "http://localhost:8888/BookWorm/api_GET.php?genre=Fiction";
  //  $result = file_get_contents($ep); 
  //  $data = json_decode($result, true); 

  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
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

<form action="uploadNewBook.php" method="POST">

<label for="w3review">Book Title </label><br>
<textarea id="BookTitle" name="BookTitle" rows="4" cols="50">
  Book Title
  </textarea>
  <br>
    <br>
  <label for="w3review">Author </label><br>
<textarea id="Author" name="Author" rows="4" cols="50">
  Authors Name
  </textarea>
  <br>
    <br>
  <label for="w3review">Average User Reviews </label><br>
    <input type="numbers" id="avReviews" name="avReviews"> 
    <br>
  <br>

  <label for="w3review">Number of Reviews </label><br>
    <input type="numbers" id="numOfReviews" name="numOfReviews"> 
    <br>
  <br>

  <label for="w3review">Price </label><br>
  <select id="price" name="price">
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
  </select>
    <br>
  <br>

  <label for="w3review">Published Year </label><br>
  <select id="publishedyear" name="publishedyear">
    <option value="2000">2020</option>
    <option value="2000">2010</option>
    <option value="2000">2000</option>
    <option value="1990">1990</option>
    <option value="1980">1980</option>
    <option value="1970">1970</option>
  </select>
    <br>
  <br>

  <label for="w3review">Genre </label><br>
  <select id="genre" name="genre">
    <option value="Fiction">Fiction</option>
    <option value="NonFiction">Non Fiction</option>
  </select>
    <br>
  <br>



<label for="w3review">Blurb </label><br>
<textarea id="textbox" name="blurb" rows="4" cols="50">
  Enter blurb for the book here.
  </textarea>
  <br>
  
  <br>
  <input type="submit" value="Submit">

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

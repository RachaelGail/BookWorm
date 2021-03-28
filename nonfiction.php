<?php
   // Initialize the session
   session_start();
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: login.php");
      exit;
  }
   $ep = "http://localhost:8888/BookWorm/api_GET.php?genre=NonFiction";
   $result = file_get_contents($ep); 
   $data = json_decode($result, true); 

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

<!-- Non Fiction Section -->
   <section class = "white-section" id="features">
    <div class="container-fluid">
      <div class="row">

      <?php
         foreach($data as $book){
            $BookName = $book["name"]; 
            $Author = $book["author"]; 
            $Rating = $book["userRating"]; 
            $bookid = $book["id"]; 
            $currentpage = "nonfiction.php"; 
            echo "
                  <div class='feature-box col-lg-4'>
                     <i class='icon fas fa-book fa-4x'></i>
                     <a href='singularbook.php?id=$bookid'><h3 class='feature-title'>$BookName</h3></a>
                           <p>$Author</p>
                           <p>$Rating</p>
                           <form action='add.php' method='POST'>
                           <input type='submit' class='btn btn-lg btn-block btn-outline-dark' value='Add to Love List'>
                           <input type='hidden' name='findbookID' value=$bookid>
                           <input type='hidden' name='page' value=$currentpage>
                           </form>
                  </div>";
                  
               }
      ?>
         </div>
    </div>
<!-- 
         <div class="container-fluid">
   
            <ul class="pagination">
               <li><a href="?page_number=1"> First </a></li>
               <li class="<?php if($page_number <= 1){ echo 'disabled'; } ?>">
                  <a href="<?php if($page_number <= 1){ echo '#'; } else { echo "?page_number=".($page_number - 1); } ?>"> Prev </a>
               </li>
               <li class="<?php if($page_number >= $total_pages){ echo 'disabled'; } ?>">
                  <a href="<?php if($page_number >= $total_pages){ echo '#'; } else { echo "?page_number=".($page_number + 1); } ?>"> Next </a>
               </li>
               <li><a href="?page_number=<?php echo $total_pages; ?>"> Last </a></li>
            </ul>
         </div> -->
   </section>

<!-- Footer -->
   <footer class="footer navbar-fixed-bottom">
         <?php
			   include("footer.php");
			?>
   </footer>
</body>
</html>

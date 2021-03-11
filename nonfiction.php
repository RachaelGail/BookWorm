<?php
	include("conn.php");
   


   if (isset($_GET['page_number'])) {
      $page_number = $_GET['page_number'];
  } else {
      $page_number = 1;
  }

   $no_of_records_per_page = 9;
   $offset = ($page_number-1) * $no_of_records_per_page; 
   $count= "SELECT COUNT(*) FROM bs_BestSellers"; 
   $result = $conn->query($count);
   $total_rows = mysqli_fetch_array($result)[0];
   $total_pages = ceil($total_rows / $no_of_records_per_page);
   $sql = "SELECT name, author, userRating FROM bs_BestSellers WHERE genre='Non Fiction' ORDER BY userRating DESC LIMIT $offset, $no_of_records_per_page"; 
    $exec_sql = $conn->query($sql); 
   if(!$exec_sql){
      echo $conn->error; 
      die(); 
  }
  $resultcount=1; 
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
         while(($nonfiction_book = $exec_sql ->fetch_assoc()) !==FALSE){

         $fBook = $nonfiction_book["name"]; 
         $fAuthor = $nonfiction_book["author"]; 
         $fRating = $nonfiction_book["userRating"]; 
         echo "
               <div class='feature-box col-lg-4'>
               <i class='icon fas fa-book fa-4x'></i>
                     <h3 class='feature-title'>$fBook</h3>
                        <p>$fAuthor</p>
                        <p>$fRating</p>
                  <button type='button' class='btn btn-lg btn-block btn-outline-dark'>Add to Love List</button>
               </div>";
               if($resultcount == 9){
                  break; 
                }
                $resultcount++; 
         }




         
      ?>
</div>
    </div>
   </section>
   <section class = "white-section" id="features">
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

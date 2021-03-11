<?php
	include("conn.php");
   $sql_query = "SELECT name, author, userRating FROM bs_BestSellers WHERE genre='Non Fiction' ORDER BY userRating DESC LIMIT 50"; 
   $exec_sql = $conn->query($sql_query); 
   $sql_count = "SELECT COUNT(*) FROM bs_BestSellers WHERE genre='Fiction' ORDER BY userRating DESC"; 

   if (isset($_GET['pageno'])) {
      $pageno = $_GET['pageno'];
  } else {
      $pageno = 1;
  }

   $no_of_records_per_page = 10;
   $offset = ($pageno-1) * $no_of_records_per_page; 
   $result = mysqli_query($conn,$sql_count);
   $total_rows = mysqli_fetch_array($result)[0];
   $total_pages = ceil($total_rows / $no_of_records_per_page);
   $sql = "SELECT * FROM table LIMIT $offset, $no_of_records_per_page"; 

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

      <?php
         while(($fiction_book = $exec_sql ->fetch_assoc()) !==FALSE){

         $fBook = $fiction_book["name"]; 
         $fAuthor = $fiction_book["author"]; 
         $fRating = $fiction_book["userRating"]; 
         echo "
               <div class='feature-box col-lg-4'>
                  <i class='icon fas fa-hand-spock fa-4x'></i>
                     <h3 class='feature-title'>$fBook</h3>
                        <p>$fAuthor</p>
                        <p>$fRating</p>
                  <button type='button' class='btn btn-lg btn-block btn-outline-dark'>Add to Love List</button>
               </div>";
         }


         
      ?>

            <ul class="pagination">
               <li><a href="?pageno=1">First</a></li>
               <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                  <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
               </li>
               <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                  <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
               </li>
               <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
            </ul>

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

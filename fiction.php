<?php
   // Initialize the session
   session_start();
	include("conn.php");
   
   if (isset($_GET['page_number'])) {
      $page_number = $_GET['page_number'];
      } else {
            $page_number = 1;
      }

   $no_of_records_per_page = 9;
   $offset = ($page_number-1) * $no_of_records_per_page; 
   $count= "SELECT COUNT(*) FROM bs_BestSellers WHERE genre='Fiction'"; 
   $result = $conn->query($count);
   $total_rows = mysqli_fetch_array($result)[0];
   $total_pages = ceil($total_rows / $no_of_records_per_page);
   $sql = "SELECT id, name, author, userRating FROM bs_BestSellers WHERE genre='Fiction' ORDER BY userRating DESC LIMIT $offset, $no_of_records_per_page"; 
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

<!-- Fiction Section -->
   <section class = "white-section" id="features">
    <div class="container-fluid">
      <div class="row">
         <?php
            while(($fiction_book = $exec_sql ->fetch_assoc()) !==FALSE){

            $fBook = $fiction_book["name"]; 
            $fAuthor = $fiction_book["author"]; 
            $fRating = $fiction_book["userRating"]; 
            $bookid = $fiction_book["id"]; 
            $page = "fiction.php"; 
            echo "
                  <div class='feature-box col-lg-4'>
                     <i class='icon fas fa-hand-spock fa-4x'></i>
                     <a href='singularbook.php?id=$bookid'><h3 class='feature-title'>$fBook</h3></a>
                           <p>$fAuthor</p>
                           <p>$fRating</p>
                           <form action='add.php' method='POST'>
                           <input type='submit' class='btn btn-lg btn-block btn-outline-dark' value='Add to Love List'>
                           <input type='hidden' name='findbookID' value=$bookid>
                           <input type='hidden' name='page' value=$page>
                           </form>
                  </div>";
                  if($resultcount == 9){
                     break; 
                  }
                  $resultcount++; 
            }
            ?>
      </div>
   </div>

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

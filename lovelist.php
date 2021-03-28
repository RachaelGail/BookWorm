<?php
  // Initialize the session
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

  include("conn.php");
  $userID = $_SESSION["userID"]; 
  $ep = "http://localhost:8888/BookWorm/api_GET.php?userID=$userID";
  $result = file_get_contents($ep); 
  $data = json_decode($result, true); 
  $count = count($data); 

  ?>


<DOCTYPE html>
<html>

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


  <!-- Shopping cart table -->
  <section class="table-responsive" id="lovelisttable">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">
            <div class="p-2 px-3 text-uppercase">Book</div>
          </th>
          <th scope="col">
            <div class="py-2 text-uppercase">Price</div>
          </th>
          <th scope="col">
            <div class="py-2 text-uppercase">Rating</div>
          </th>
          <th scope="col">
            <div class="py-2 text-uppercase">Remove</div>
          </th>
        </tr>
      </thead>
      <tbody>
       
        <?php

        if( $count == 0 ){
          echo "<h2>Nothing loved yet!</2>";
        } else{

          foreach($data as $lovelist){
                $Book = $lovelist["name"]; 
                $Author = $lovelist["author"]; 
                $Rating = $lovelist["userRating"]; 
                $Price = $lovelist["price"]; 
                $bookid= $lovelist["BestSeller_id"]; 
            

                echo "
                <tr>
                <th scope='row' class='border-0'>
                  <div class='p-2'>
                    <div class='ml-3 d-inline-block align-middle'>
                      <h5 class='mb-0'> <a href='singularbook.php?id=$bookid' class='text-dark d-inline-block align-middle'>$Book</a></h5>
                      <span class='text-muted font-weight-normal font-italic d-block'>$Author</span>
                    </div>
                  </div>
                </th>
                <td class='border-0 align-middle'><strong>£ $Price</strong></td>
                <td class='border-0 align-middle'><strong>$Rating</strong></td>
                <td class='border-0 align-middle'>
                <a href='delete.php?id=$bookid' class='text-dark'><i class='footer-icons fas fa-trash fa-2x'></i></a></td>
              </tr>";
              
              }
            }
              ?>
          </div>
        </div>
      </tbody>
    </table>
  </section>


  <!-- Footer -->
  <footer class="footer navbar-fixed-bottom">
  <?php
			include("footer.php");
			?>

  </footer>
</body>
</html>
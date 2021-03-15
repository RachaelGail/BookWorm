
<?php
	include("conn.php");

$sql = "SELECT BestSeller_id, bs_BestSellers.name, 
              bs_BestSellers.author, 
              bs_BestSellers.userRating, 
              bs_BestSellers.price
        FROM bs_LoveList 
        INNER JOIN bs_BestSellers ON BestSeller_id=bs_BestSellers.id
        WHERE bs_lovelist.Users_id=1001";
$row=0; 

$exec_sql = $conn->query($sql); 
if(!$exec_sql){
  echo $conn->error; 
  die(); 
}

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

                while(($lovelist = $exec_sql ->fetch_assoc()) !==FALSE){
                $Book = $lovelist["name"]; 
                $Author = $lovelist["author"]; 
                $Rating = $lovelist["userRating"]; 
                $Price = $lovelist["price"]; 
                $id= $lovelist["BestSeller_id"]; 
                $count = COUNT($lovelist); 
                echo "
                <tr>
                <th scope='row' class='border-0'>
                  <div class='p-2'>
                    <div class='ml-3 d-inline-block align-middle'>
                      <h5 class='mb-0'> <a href='#' class='text-dark d-inline-block align-middle'>$Book</a></h5>
                      <span class='text-muted font-weight-normal font-italic d-block'>$Author</span>
                    </div>
                  </div>
                </th>
                <td class='border-0 align-middle'><strong>£ $Price</strong></td>
                <td class='border-0 align-middle'><strong>$Rating</strong></td>
                <td class='border-0 align-middle'>
                <a href='delete.php?id=$id' class='text-dark'><i class='footer-icons fas fa-trash fa-2x'></i></a></td>
              </tr>";

              if($row == ($count+1)){
                break; 
              }
              $row++; 
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
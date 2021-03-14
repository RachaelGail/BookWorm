<?php 
//limit results per page 
   if (isset($_GET['page_number'])) {
      $page_number = $_GET['page_number'];
  } else {
      $page_number = 1;
  }

   $no_of_records_per_page = 9;
   $offset = ($page_number-1) * $no_of_records_per_page; 
   $count= "SELECT COUNT(*) FROM bs_BestSellers WHERE genre='Non Fiction'"; 
   $result = $conn->query($count);
   $total_rows = mysqli_fetch_array($result)[0];
   $total_pages = ceil($total_rows / $no_of_records_per_page);
   $sql = "SELECT * FROM bs_BestSellers LIMIT 4"; 
    $exec_sql = $conn->query($sql); 
   if(!$exec_sql){
      echo $conn->error; 
      die(); 
  }
  $resultcount=1; 



   ?>
<?php

	include("conn.php");


    //Staff Section 
    $read_sqlss = "SELECT name, author, blurb FROM bs_BestSellers WHERE userRating=4.0 ORDER BY rand()"; 
    $exec_sqlss = $conn->query($read_sqlss); 
    $sscount=1; 
    $ss_html=''; 

    while(($ssbook = $exec_sqlss->fetch_assoc()) !==FALSE){
        $ssBook = $ssbook["name"]; 
        $ssAuthor = $ssbook["author"]; 
        $ssBlurb = $ssbook["blurb"]; 
        $ss_html.= "<h3 class='section-heading'>$ssBlurb</h3>";
        $ss_html.= "<i class='fas fa-book'></i><em>$ssBook&nbsp by $ssAuthor</em>";
        if($sscount == 2){
          break; 
        }
        $sscount++; 
}




    //Rating Section 
    $read_sql_rating = "SELECT name, author, userRating FROM bs_BestSellers WHERE userRating=4.9 ORDER BY rand()"; 
    $exec_sql_rating = $conn->query($read_sql_rating); 
    $rcount=1; 
    $r_html='';
    while(($rating_book = $exec_sql_rating ->fetch_assoc()) !==FALSE){

        $rBook = $rating_book["name"]; 
        $rAuthor = $rating_book["author"]; 
        $rRating = $rating_book["userRating"]; 

        $r_html .= "<div class='rating-col col-lg-4 col-md-6'>";
        $r_html .= "      <div class='card'>";
        $r_html .= "       <div class='card-header'>";
        $r_html .= "        <h3>$rAuthor</h3>";
        $r_html .= "        </div>";
        $r_html .= "        <div class='card-body'>  ";
        $r_html .= "          <h2 class='price-text'>$rBook</h2>";
        $r_html .= "          <p>$rRating</p>";
        $r_html .= "          <button type='button' class='btn btn-lg btn-block btn-outline-dark'>Add to Love List</button>";
        $r_html .= "        </div>";
        $r_html .= "      </div>";
        $r_html .= "    </div>";
                if($rcount == 3){
                    break; 
                  }
              $rcount++; 
        
        }




?>


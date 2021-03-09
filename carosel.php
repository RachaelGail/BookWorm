<div id='testimonial-carousel' class='carousel slide' data-ride='false'>

        <h2 class='section-heading'>Staff Selection</h2>
          <div class='carousel-inner'>
            <div class='carousel-item active container-fluid'>
        
                    <?php 
                          while(($ssbook = $exec_sqlss->fetch_assoc()) !==FALSE){
                            $ssBook = $ssbook["name"]; 
                            $ssAuthor = $ssbook["author"]; 
                            $ssBlurb = $ssbook["blurb"]; 
                            echo "
                                      <h3 class='section-heading'>$ssBlurb</h3>
                                      <i class='fas fa-book'></i><em>$ssBook&nbsp by $ssAuthor</em>
                            ";
                            if($sscount == 2){
                              break; 
                            }
                            $sscount++; 
                    }
                    ?>
            </div>
          </div>
      <a class='carousel-control-prev' href='#testimonial-carousel' role='button' data-slide='prev'>
        <span class='carousel-control-prev-icon' aria-hidden='true'></span>
        <span class='sr-only'>Previous</span>
      </a>
      <a class='carousel-control-next' href='#testimonial-carousel' role='button' data-slide='next'>
        <span class='carousel-control-next-icon' aria-hidden='true'></span>
        <span class='sr-only'>Next</span>
      </a>
    </div>

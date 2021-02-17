<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>BookWorm - Love List</title>
  <!-- GoogleFonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;900&family=Ubuntu:wght@300;400&display=swap"
    rel="stylesheet">

  <!-- CSS style sheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</head>

<body>
<section class = "coloured-section" id="title">
    <div class="container-fluid" id="nav-placeholder">

      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php">BookWorm</a>
        <button class="navbar-toggler" type="btn" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar=toggler-icon"></span> -->
          <i class="fas fa-bars"></i>
    
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link"  href="login.php"> Log In</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="fiction.php"> Fiction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nonfiction.php"> Non-Fiction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="author.php"> Author</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lovelist.php"> Love List</a>
            </li>
            <form>
              <input type="text" name="search" placeholder="Search..">
            </form>
          </ul>
        </div>
      </nav>

  </div>  

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
        <tr>
          <th scope="row" class="border-0">
            <div class="p-2">
              <div class="ml-3 d-inline-block align-middle">
                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Book1</a></h5><span
                  class="text-muted font-weight-normal font-italic d-block">Author</span>
              </div>
            </div>
          </th>
          <td class="border-0 align-middle"><strong>£ XXX</strong></td>
          <td class="border-0 align-middle"><strong>1</strong></td>
          <td class="border-0 align-middle"><a href="#" class="text-dark"><i
                class="footer-icons fas fa-trash fa-2x"></i></a></td>
        </tr>
        <tr>
          <th scope="row" class="border-0">
            <div class="p-2">
              <div class="ml-3 d-inline-block align-middle">
                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Book2</a></h5><span
                  class="text-muted font-weight-normal font-italic d-block">Author</span>
              </div>
            </div>
          </th>
          <td class="border-0 align-middle"><strong>£ XXX</strong></td>
          <td class="border-0 align-middle"><strong>1</strong></td>
          <td class="border-0 align-middle"><a href="#" class="text-dark"><i
                class="footer-icons fas fa-trash fa-2x"></i></a></td>
        </tr>
        <tr>
          <th scope="row" class="border-0">
            <div class="p-2">
              <div class="ml-3 d-inline-block align-middle">
                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Book3</a></h5><span
                  class="text-muted font-weight-normal font-italic d-block">Author</span>
              </div>
            </div>
          </th>
          <td class="border-0 align-middle"><strong>£ XXX</strong></td>
          <td class="border-0 align-middle"><strong>1</strong></td>
          <td class="border-0 align-middle"><i class="footer-icons fas fa-trash fa-2x"></i></a></td>
        </tr>
      </tbody>
    </table>
  </section>


  <!-- Footer -->

  <footer class="footer navbar-fixed-bottom">
    <a href="https://www.facebook.com/books" add target="_blank"> <i
        class="footer-icons fab fa-facebook-f fa-3x"></i></a>
    <a href="https://twitter.com/books" add target="_blank"> <i class="footer-icons fab fa-twitter fa-3x"></i></a>
    <a href="https://www.instagram.com/books" add target="_blank"> <i
        class="footer-icons fab fa-instagram fa-3x"></i></a>
    <a href="mailto:BookWorm@example.com" add target="_blank"><i class="footer-icons fas fa-envelope fa-3x"></i></a>
    <p>© Copyright 2021 BookWorm</p>

  </footer>


</body>

</html>
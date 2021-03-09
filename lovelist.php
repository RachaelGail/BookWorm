<?php
	include("conn.php");


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
  <?php
			include("footer.php");
			?>

  </footer>
</body>
</html>

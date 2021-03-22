<?php

echo"
<div class='container-fluid' id='nav-placeholder'>

<nav class='navbar navbar-expand-lg navbar-dark'>
  <a class='navbar-brand' href='index.php'>BookWorm</a>
  <button class='navbar-toggler' type='btn' data-toggle='collapse' data-target='#navbarTogglerDemo02' aria-controls='navbarTogglerDemo02' aria-expanded='false' aria-label='Toggle navigation'>
    <!-- <span class='navbar=toggler-icon'></span> -->
    <i class='fas fa-bars'></i>

  </button>

  <div class='collapse navbar-collapse' id='navbarTogglerDemo02'>
    <ul class='navbar-nav ml-auto'>
      <li class='nav-item'>
        <a class='nav-link'  href='logout.php'> Log Out</a>
        </li>
      <li class='nav-item'>
        <a class='nav-link' href='fiction.php'> Fiction</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='nonfiction.php'> Non-Fiction</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='author.php'> Author</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='lovelist.php'> Love List</a>
      </li>
      <form name='form1' method='post' action ='searchpage.php'>
        <input type='text' name='search'  placeholder='Search..'>
        <input type='submit' name='submit' value='Search'>
      </form>
    </ul>
  </div>
</nav>

</div>
";

?>
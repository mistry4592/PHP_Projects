<?php
include 'inc/head.php';
?>


<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search" action = "code.php"  method = "POST">
      <input class="form-control me-2" name="search_in" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" name="search" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container mt-5">
<div class="card-header">
    Featured
  </div>
<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>
</div>
<?php
include 'inc/foot.php';
?>
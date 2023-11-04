<?php
  include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biss Clothing Line</title>
    <!--bootstrap 5 cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--fontawesome 6 cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--custom css link-->
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid px-0 pb-3" >
        <nav class="navbar navbar-expand-lg bg-light mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Biss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li><li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li><li class="nav-item">
          <a class="nav-link" href="#">Cart</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            Categories
        </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn search-btn" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--offcanvas nav-->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <?php
  $sql = "select * from categories";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    ?>
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">CATEGORIES</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <ul class="list-group list-group-flush">

    <?php
    if($res){
      while ($row = mysqli_fetch_assoc($res)) {
  
          $name = $row["name"];
          $id = $row["id"];
      
      ?>
  <li class="list-group-item"><?php echo $name ?></li>
<?php
    }
  }else{
    
  }
    ?>
    <br>
    <?php echo $count?> Categories
      </ul>
  </div>
</div>
<!--end-->
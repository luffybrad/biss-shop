<?php include "header.php"?>
<!--product display-->
<div class="container p-0">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php
    $sql = "select * from products order by rand()";
    $res = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($res)){
      $id = $row["id"];
      $name = $row["name"];
      $desc = $row["description"];
      $image1 = $row["image1"];
      $image2 = $row["image2"];
      $price = $row["price"];

  ?>
  <div class="col">
    <div class="card h-200">
          <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/<?php echo $image1?>" class="d-block w-100  card-img-top" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/<?php echo $image2?>" class="d-block w-100  card-img-top" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $name?></h5>
        <p class="card-text"><?php echo $desc ?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">
          <div class="row">
            <div class="col">
                  $<span class="price"><?php echo $price?>
                </span>
            </div>
          </div>
        </small>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</div>
</div>
<?php include "footer.php"?>
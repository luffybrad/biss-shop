<?php
include "header.php";
?>
<div class="container">
    <div class="header">
        <h1>MANAGE</h1>
    </div>


    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-products-tab" data-bs-toggle="pill" data-bs-target="#pills-products" type="button" role="tab" aria-controls="pills-products" aria-selected="false">Products</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-categories-tab" data-bs-toggle="pill" data-bs-target="#pills-categories" type="button" role="tab" aria-controls="pills-categories" aria-selected="false">Categories</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-brands-tab" data-bs-toggle="pill" data-bs-target="#pills-brands" type="button" role="tab" aria-controls="pills-brands" aria-selected="false">Brands</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-orders-tab" data-bs-toggle="pill" data-bs-target="#pills-orders" type="button" role="tab" aria-controls="pills-orders" aria-selected="false">Orders</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-payments-tab" data-bs-toggle="pill" data-bs-target="#pills-payments" type="button" role="tab" aria-controls="pills-payments" aria-selected="false">Payments</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-users-tab" data-bs-toggle="pill" data-bs-target="#pills-users" type="button" role="tab" aria-controls="pills-users" aria-selected="false">Users</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade" id="pills-products" role="tabpanel" aria-labelledby="pills-products-tab" tabindex="0">
    <div class="row">
        <div class="col">
            <button class="btn btn-primary opt-btn"><a class="options" href="">View</a></button>
        </div>
        <div class="col">
        <button class="btn btn-primary"><a class="options" href="">Add</a></button>
        </div>
    </div>
  </div>

  <div class="tab-pane fade" id="pills-categories" role="tabpanel" aria-labelledby="pills-categories-tab" tabindex="0">
  <div class="row mb-3">
        <div class="col">
                                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categories">
                      View
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="categories" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">All Categories</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <?php
                            include "categories.php";
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
    
        <div class="col">
              <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_categories">
                      Add
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="add_categories" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Category</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <?php
                            include "add_categories.php";
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
    </div>
 
  </div>

  <div class="tab-pane fade" id="pills-brands" role="tabpanel" aria-labelledby="pills-brands-tab" tabindex="0">
  <div class="row">
        <div class="col">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#brands">
                      View
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="brands" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">All Brands</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <?php
                            include "brands.php";
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
        <div class="col">
         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_brands">
                      Add
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="add_brands" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Brand</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <?php
                            include "add_brands.php";
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
    </div>
  </div>

  <div class="tab-pane fade" id="pills-orders" role="tabpanel" aria-labelledby="pills-orders-tab" tabindex="0">
    <div class="row ">
        <div class="col">
            <button class="btn btn-primary opt-btn">
                <a href="" class="options">View All orders</a>
            </button>
        </div>
    </div>

  </div>


<div class="tab-pane fade" id="pills-payments" role="tabpanel" aria-labelledby="pills-payments-tab" tabindex="0">
    <div class="row ">
        <div class="col">
            <button class="btn btn-primary opt-btn">
                <a href="" class="options">View All Payments</a>
            </button>
        </div>
    </div>
  </div>


<div class="tab-pane fade" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab" tabindex="0">
    <div class="row ">
        <div class="col">
            <button class="btn btn-primary opt-btn">
                <a href="" class="options">View All Users</a>
            </button>
        </div>
    </div>
  </div>

<br>

</div>

<?php
include "footer.php";
?>
<?php
    include "../connect.php";
    $sql = "select * from brands";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Brands</th>
      <th scope="col-2" colspan="2">Actions</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
  if($res){
    while ($row = mysqli_fetch_assoc($res)) {

        $name = $row["name"];
        $id = $row["id"];
         ?>
    <tr>
      <td><?php echo $name ?></td>
      <td>
                              <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editBrand<?php echo $id?>">
                  Edit
                </button>
                <!-- Modal -->
                <div class="modal fade" id="editBrand<?php echo $id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Brand: <?php echo $name?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <?php
                        include "edit_brand.php";
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
      </td>
      <td>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteBrand<?php echo $id?>">
                  Delete
                </button>
                <!-- Modal -->
                <div class="modal fade" id="deleteBrand<?php echo $id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Brand</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h4>
                        ARE YOU SURE YOU WANT TO DELETE BRAND: "<?php echo $name?>"
                        </h4>
                        <br>
                      <?php 
                include "delete_brand.php";
            ?>
                      </div>
                    </div>
                  </div>
                </div>
          
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<?php
    }else{
        ?>
            <h1>Error</h1>

        <?php
        
    }

?>
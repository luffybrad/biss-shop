<?php
    include "../connect.php";
    $sql = "select * from categories";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Categories</th>
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
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editCategory<?php echo $id?>">
                  Edit
                </button>
                <!-- Modal -->
                <div class="modal fade" id="editCategory<?php echo $id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit category: <?php echo $name?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <?php
                        include "edit_category.php";
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
      </td>
      <td>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCategory<?php echo $id?>">
                  Delete
                </button>
                <!-- Modal -->
                <div class="modal fade" id="deleteCategory<?php echo $id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h4>
                        ARE YOU SURE YOU WANT TO DELETE CATEGORY: "<?php echo $name?>"
                        </h4>
                        <br>
                      <?php 
                include "delete_category.php";
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
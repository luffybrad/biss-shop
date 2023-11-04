<?php
    include "../connect.php";
    $sql = "select * from categories";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if($res){
    while ($row = mysqli_fetch_assoc($res)) {
        $name = $row["name"];
        $id = $row["id"];
        $count = 1;

         ?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Brand</th>
      <th scope="col-2">Actions</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $count = $count++?></th>
      <td><?php echo $name ?></td>
      <td>
        <button name="edit_brand">
            <?php 
                include "edit_category.php";
            ?>
        </button>
      </td>
      <td>
      <button name="delete_brand">
            <?php 
                include "delete_category.php";
            ?>
        </button>
      </td>
    </tr>
  </tbody>
</table>
<?php
}
    }else{
        ?>
            <h1>Error</h1>

        <?php
        
    }

?>
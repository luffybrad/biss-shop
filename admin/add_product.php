<div>
<form action="../forms.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Insert product.....">
    </div>
    <div class="mb-3">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Description.....">
    </div>
    <div class="mb-3">
        <label for="category">Category</label>
        <select class="form-select" aria-label="Default select example" id="category" name="category">
            <?php
                include "../connect.php";
                $sql= "select * from categories";
                $res = mysqli_query($conn,$sql);
                if($res){
                    while($row=mysqli_fetch_assoc($res)){
                        $id = $row["id"];
                        $name = $row["name"];
            ?>
            <option value="<?php echo $id?>"><?php echo $name ?></option>
        <?php
         }
        }
        ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="brand">Brand</label>
        <select class="form-select" aria-label="Default select example" id="brand" name="brand">
            <?php
                include "../connect.php";
                $sql= "select * from brands";
                $res = mysqli_query($conn,$sql);
                if($res){
                    while($row=mysqli_fetch_assoc($res)){
                        $id = $row["id"];
                        $name = $row["name"];
            ?>
            <option value="<?php echo $id?>"><?php echo $name ?></option>
        <?php
         }
        }
        ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="image1" class="form-label">Product Image 1</label>
        <input type="file" name="image1" id="image1" class="form-control">
    </div>
    <div class="mb-3">
        <label for="image2" class="form-label">Product Image 2</label>
        <input type="file" name="image2" id="image2" class="form-control">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" id="price" min="0" class="form-control" placeholder="Set price....">
    </div>
    <button type="submit" class="btn btn-primary" name="add_product">Add Product</button>
</form>
</div>
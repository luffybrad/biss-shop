<form action="../forms.php" method="post">
    <input type="hidden" name="brand_id" value="<?php echo $id?>">
    <input type="hidden" name="brand_name" value="<?php echo $name?>">
    <button type="submit" name="delete_brand" class="btn btn-danger">Delete</button>
</form>
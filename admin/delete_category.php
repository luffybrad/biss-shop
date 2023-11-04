<form action="../forms.php" method="post">
    <input type="hidden" name="category_id" value="<?php echo $id?>">
    <input type="hidden" name="category_name" value="<?php echo $name?>">
    <button type="submit" name="delete_category" class="btn btn-danger">Delete</button>
</form>
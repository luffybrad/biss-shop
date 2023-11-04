<form action="../forms.php" method="post">
    <input type="hidden" name="category_id" value="<?php echo $id?>" class="form-control">
    <div class="mb-3">
        <label for="" class="form-label">Category name</label>
    <input type="text" name="category_name" value="<?php echo $name?>" class="form-control">
    </div>
    <button type="submit" name="edit_category" class="btn btn-warning">Edit</button>
</form>
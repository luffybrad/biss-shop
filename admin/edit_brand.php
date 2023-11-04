<form action="../forms.php" method="post">
    <input type="hidden" name="brand_id" value="<?php echo $id?>" class="form-control">
    <div class="mb-3">
        <label for="" class="form-label">Brand name</label>
    <input type="text" name="brand_name" value="<?php echo $name?>" class="form-control">
    </div>
    <button type="submit" name="edit_brand" class="btn btn-warning">Edit</button>
</form>
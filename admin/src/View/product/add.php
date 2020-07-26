<a href="index.php?page=list-product" class="btn btn-primary mt-3 mb-3">Cancel</a>
<form action="" method="post" enctype="multipart/form-data" class="form-control mt-3 mb-3" >
    <input type="file" name="my-file">
    <br>
    <input type="text" name="name" placeholder="Name" class="form-control">
    <br>
    <input type="text" name="price" placeholder="Price" class="form-control">
    <br>
    <input type="text" name="quantity" placeholder="Quantity" class="form-control">
    <br>
    <input type="text" name="description" placeholder="Description" class="form-control">
    <br>
    <select name="category_id" id=""  class="user-select-all">
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category->getId() ?>"><?php echo $category->getName() ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="ADD" class="btn btn-primary">
</form>


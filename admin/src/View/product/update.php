<form action="" method="post"  enctype="multipart/form-data" class="form-group">
    <input type="text" name="id" value="<?php echo $product['id'] ?>" hidden>
    <br>
    <input type="file" name="my-file">
    <br>
    <input type="text" name="name" placeholder="Name" value="<?php echo $product['name'] ?>" class="form-control">
    <br>
    <input type="text" name="price" placeholder="Price" value="<?php echo $product['price'] ?>" class="form-control">
    <br>
    <input type="text" name="quantity" placeholder="Quantity" value="<?php echo $product['quantity'] ?>" class="form-control">
    <br>
    <input type="text" name="description" placeholder="Description" value="<?php echo $product['description'] ?>" class="form-control">
    <br>
    <input type="text" name="category_id" placeholder="Category" value="<?php echo $product['category_id'] ?>" class="form-control">
    <br>
    <input type="submit" value="Update" class="btn btn-primary">
</form>
<a href="index.php?page=list-product" class="btn btn-primary">Cancel</a>


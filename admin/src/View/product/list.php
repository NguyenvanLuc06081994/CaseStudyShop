<a href="index.php?page=add-product" class="btn btn-primary mt-3 mb-3">ADD NEW PRODUCT</a>
<a href="index.php?page=list-product" class="btn btn-primary">CanCle</a>
<form action="index.php?page=search-product" method="post" class=" mt-3 mb-3">
    <input type="text" name="keyword" placeholder="Search By Name" class="form-group">
    <input type="submit" value="SEARCH" class="btn btn-primary">
</form>
<table class="table table-hover">
<tr>
    <th>STT</th>
    <th>Image</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Description</th>
    <th>Category</th>
    <th colspan="2">Action</th>
</tr>
    <?php if (empty($products)) : ?>
    <tr>
        <td>No Data</td>
    </tr>
        <?php else: ?>
        <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><img src="<?php echo $product->getImg()?>" alt="" style="width: 75px; height: 75px"></td>
            <td><?php echo $product->getName() ?></td>
            <td><?php echo $product->getPrice()?></td>
            <td><?php echo $product->getQuantity() ?></td>
            <td><?php echo $product->getDescription()?></td>
            <td><?php echo $categories[$product->getCategoryId()-1]->getName()?></td>
            <td><a href="index.php?page=update-product&id=<?php echo $product->getId()?>" class="btn btn-primary">Update</a></td>
            <td><a href="index.php?page=delete-product&id=<?php echo $product->getId()?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>
<style>
    table{
        text-align: center;
    }
    .table td, .table th {
        vertical-align: middle;
        padding: 0.75rem;
        vertical-align: middle;
        border-top: 1px solid #dee2e6;
</style>
<div class="container">
    <div class="pt-3">
        <a href="index.php?page=add-product" class="btn btn-primary mt-3 mb-3">ADD NEW PRODUCT</a>
        <form action="index.php?page=search-product" method="post" class="form-inline  mt-3 mb-3">
            <input type="text" name="keyword" placeholder="search product" class="form-control mr-sm-2">
            <input type="submit"  class="btn btn-primary" value="Search">
        </form>
        <table border="0" class="table table-hover">
            <thead class="badge-dark">
            <tr>
                <th>STT</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Category</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <?php if (empty($products)): ?>
                <tr>
                    <td>No data</td>
                </tr>
            <?php else: ?>
                <?php foreach ($products as $key => $product) : ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><img src="<?php echo $product->getImg() ?>" alt="" width="100px" height="100px"></td>
                        <td><?php echo $product->getName() ?></td>
                        <td><?php echo number_format($product->getPrice())." VND"  ?></td>
                        <td><?php echo $product->getQuantity() ?></td>
                        <td><?php echo $product->getDescription() ?></td>
                        <td><?php echo $product->getCategoryId ?></td>
                        <td><a href="index.php?page=update-product&id=<?php echo $product->getId() ?>"
                               class="btn btn-primary"><i class="fas fa-user-edit"></i></a></td>
                        <td><a onclick="return confirm('Are You Sure?')" href="index.php?page=delete-product&id=<?php echo $product->getId() ?>"
                               class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>

    </div>
</div>


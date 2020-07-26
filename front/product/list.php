<div class="row">
    <h3 class="w-100">All Product</h3>
    <?php foreach ($products as $key => $product) : ?>
        <div class="col-md-3 text-center all-product">
            <a><img src="admin/<?php echo $product->getImg() ?>" alt="" style="width: 300px; height: 300px;"></a>
            <h3><?php echo $product->getName() ?></h3>
            <p><?php echo number_format($product->getPrice()) . " VND" ?></p>
            <p><a class="btn btn-primary " href="index.php?page=detail-product&id=<?php echo $product->getId() ?>">Detail</a>
                <a href="index.php?page=list-cart&id=<?php echo $product->getId() ?>" class="btn btn-primary">Add To Cart</a>
            </p>

        </div>
    <?php endforeach; ?>
</div>

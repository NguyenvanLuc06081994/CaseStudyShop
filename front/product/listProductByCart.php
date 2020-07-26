<div class="row">
    <h3 class="w-100">All Product</h3>
    <?php foreach ($products as $key => $product) : ?>
        <div class="col-md-3 text-center all-product">
            <div class="box-product">
                <a><img src="admin/<?php echo $product->getImg() ?>" alt=""/></a>
                <h3><?php echo $product->getName() ?></h3>
                <p><?php echo number_format($product->getPrice()) . " VND" ?></p>
                <div class="box-btn"><a class="btn btn-primary " href="index.php?page=detail-product&id=<?php echo $product->getId() ?>">Detail</a>
                    <a href="index.php?page=list-cart&id=<?php echo $product->getId() ?>" class="btn btn-primary">Add To Cart</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
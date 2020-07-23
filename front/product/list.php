<div class="row">
<h3 class="w-100">Các sản phẩm mới nhất</h3>
    <?php foreach($products as $key=>$product ) : ?> 
        <div class="col-md-3 text-center">
            <div class="box-phone">
                <a href="index.php?page=detail-product&id=<?php echo $product->getId() ?>"><img src="admin/<?php echo $product->getImg() ?>" alt="" /></a>
                <h3><?php echo $product->getName() ?></h3>
                <p>Gía bán: <?php echo $product->getPrice() . " VNĐ"; ?></p>
                <p>
                    <a class="btn btn-primary" href="index.php?page=detail-product&id=<?php echo $product->getId() ?>">Chi tiết</a> 
                    <a class="btn btn-secondary" href="index.php?page=detail-product&id=<?php echo $product->getId() ?>">Mua ngay</a> 
                </p>
               
            </div>
        </div>             
    <?php endforeach;?> 



</div>



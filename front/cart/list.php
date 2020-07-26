<div class="col-md-12">
    <table class="table table-hover">
        <tr>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
        </tr>
        <?php
        foreach ($cartCurrent->items as $key => $product): ?>
            <tr>
                <td><?php echo $product ['item']['name'] ?></td>
                <td><img src="admin/<?php echo $product['item']['img'] ?>" alt="" style="width: 75px; height: 75px;"></td>
                <td><?php echo number_format($product['item']['price'])." VND" ?></td>
                <td><?php echo $product['totalQty'] ?></td>
                <td><?php echo number_format($product['totalPrice'])." VND" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="total-price flex-row-reverse text-right">
        <h3>SubTotal : <?php echo number_format($cartCurrent->totalPrice); ?> VNĐ</h3>
        <a href="index.php?page=cart-detail" class="btn btn-primary">Check Out</a>
    </div>

</div>
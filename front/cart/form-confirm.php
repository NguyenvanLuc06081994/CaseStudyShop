<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="info-customer">

                <h4>Contact Information</h4>
                <form action="" method="post" class="">
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Your Phone" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" placeholder="Your Email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="address" placeholder="Your Address" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="date" name="date" value="<?php echo date("d-m-yy")?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="status" value="Handling" class="form-control" placeholder="Status" readonly>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Payment" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table table-hover">
                <tr>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
                <?php foreach ($cartCurrent->items as $key => $product): ?>
                    <tr>
                        <td><?php echo $product ['item']['name'] ?></td>
                        <td><img src="admin/<?php echo $product['item']['img'] ?>" alt="" style="width: 75px; height: 75px;"></td>
                        <td><?php echo $product['item']['price'] ?></td>
                        <td><?php echo $product['totalQty'] ?></td>
                        <td><?php echo $product['totalPrice'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <h3>SubTotal : <?php echo $cartCurrent->totalPrice; ?></h3>
        </div>
    </div>
</div>

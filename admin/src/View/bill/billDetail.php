<style>
    table {
        width: 50%;
    }

</style>
<h3>Customer Info</h3>
<form action="index.php?page=update-bill&id=<?php echo $billDetails[0]['id']?>" method="post">
    <table class="table table-hover mt-3">
        <tr>
            <th>Name</th>
            <td><?php echo $billDetails[0]['name'] ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?php echo  $billDetails[0]['phone'] ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $billDetails[0]['email'] ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $billDetails[0]['address'] ?></td>
        </tr>
        <tr>
            <th>Total Price</th>
            <td><?php echo number_format($billDetails[0]['totalPrice'])." VND"  ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><select name="status" id="">
                    <option value="Handling" <?php if ($billDetails[0]['status'] == 'Handling'): ?> selected <?php endif; ?>>
                        Handling
                    </option>
                    <option value="Shipping" <?php if ($billDetails[0]['status'] == 'Shipping'): ?> selected <?php endif; ?>>
                        Shipping
                    </option>
                    <option value="Done" <?php if ($billDetails[0]['status'] == 'Done'): ?> selected <?php endif; ?>>
                        Done
                    </option>
                </select></td>
        </tr>
        <tr>
            <th>Action</th>
            <td><button type="submit"  class="btn btn-primary">Update</button></td>
        </tr>
    </table>
</form>
<h3>Bill Info</h3>
<table class="table table-hover">
    <tr>
        <th>STT</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Product Price</th>
    </tr>

    <?php if (empty($billDetails)): ?>
        <tr>
            <td>
                No Data
            </td>
        </tr>
    <?php else: ?>
        <?php foreach ($billDetails as $key => $bills): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $bills[1] ?></td>
                <td><?php echo $bills[0] ?></td>
                <td><?php echo $bills['quantity'] ?></td>
                <td><?php echo number_format($bills['price'])." VND"  ?></td>


            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
<?php

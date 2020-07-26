<table class="table table-hover mt-3 mb-3">
    <thead class="badge-info">
    <tr>
        <th>Bill_ID</th>
        <th>Customer Name</th>
        <th>Status</th>
    </tr>
    </thead>
    <?php if (empty($bills)): ?>
        <tr>
            <td>
                No Data
            </td>
        </tr>
    <?php else: ?>
        <?php foreach ($bills as $key => $bill): ?>
            <tr>
                <td>
                    <a href="index.php?page=bill-detail&id=<?php echo $bill->getId() ?>"><?php echo $bill->getId() ?></a>
                </td>
                <td><?php echo $customers[$key]->getName() ?></td>
                <td><?php echo $bill->getStatus() ?></td>

            </tr>
        <?php endforeach; ?>
    <?php endif; ?>

</table>


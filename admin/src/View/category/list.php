<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Country</th>
        <th colspan="2">Action</th>
    </tr>
    <?php if (empty($categories)): ?>
        <tr>
            <td>No Data</td>
        </tr>
        <?php else: ?>
        <?php foreach ($categories as $key => $category): ?>
            <tr>
                <td><?php echo ++$key?></td>
                <td><?php echo $category->getName()?></td>
                <td><?php echo $category->getCountry()?></td>
                <td><a href="">Update</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
</table>

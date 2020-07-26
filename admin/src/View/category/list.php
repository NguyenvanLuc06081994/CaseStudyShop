<style>
    th, td{
        text-align: center;
    }
</style>

<a href="index.php?page=add-category" class="btn btn-primary mt-3 mb-3" >ADD NEW CATEGORY</a>
<table class="table table-hover">
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
                <td><a href="index.php?page=update-category&id=<?php echo $category->getId() ?>" class="btn btn-primary"><i class="fas fa-user-edit"></i></a></td>
                <td><a href="index.php?page=delete-category&id=<?php echo $category->getId() ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </a></td>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
</table>

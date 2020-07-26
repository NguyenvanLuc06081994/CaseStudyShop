<form action="" method="post" class="form-group">
    <input type="text" name="id" placeholder="id" class="form-control" value="<?php echo $category['id']?>" hidden>
    <input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo $category['name']?>">
    <input type="text" name="country" placeholder="Country" class="form-control" value="<?php echo $category['country']?>">
    <input type="submit" value="UPDATE" class="btn btn-primary">
</form>
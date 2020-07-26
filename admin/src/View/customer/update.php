 <a href="index.php?page=list-customer" class="btn btn-primary">Cancel</a>
<form action="" method="post" class="form-control">
    <input type="text" name="id" placeholder="Name" value="<?php echo $customer['id'] ?>"  class="form-control" hidden>
    <br>
    <input type="text" name="name" placeholder="Name" value="<?php echo $customer['name'] ?>" class="form-control">
    <br>
    <input type="text" name="phone" placeholder="Phone Number" value="<?php echo $customer['phone'] ?>" class="form-control">
    <br>
    <input type="text" name="email" placeholder="Email" value="<?php echo $customer['email'] ?>" class="form-control">
    <br>
    <input type="text" name="address" placeholder="Address" value="<?php echo $customer['address'] ?>" class="form-control">
    <br>
    <input type="submit" value="UPDATE" class="btn btn-primary">
</form>




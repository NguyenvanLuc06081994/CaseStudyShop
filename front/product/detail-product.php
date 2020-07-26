
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div class="container">
      <div class="row box-detail">
   
                <div class="col-md-6">
                  <img src="admin/<?php echo $product['img'] ?>" alt="">
                </div>
                <div class="col-md-6">
                    <h1><?php echo $product['name'] ?></h1> 
                    <p>Giá bán: <?php echo number_format($product['price']) ." VNĐ"; ?></p>
                    <a href="index.php?page=list-cart&id=<?php echo $product['id']?>">Add To Cart</a>
                </div>
      
      </div>
  </div>

</body>
</html>

<?php
require  __DIR__ . '/admin/vendor/autoload.php';

use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\CartController;

$products = new ProductController();
?>

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
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <?php include_once('front/menu/navbar.php');

    if(isset($_GET['page']) != "detail-product") {
         include_once('front/slider/slide.php');
    }
    ?> 
    <div id="main-content">
        <div class="container">  
            <div id="all-product">
                           
                    <?php
                        if(isset($_GET['page'])) {
                            switch ($_GET['page']) {
                                case 'detail-product':
                                    $products->detailProduct();
                                    break;
                                default:
                                    $products->getAllProductFront();
                                    break;
                            } 
                        } else {
                            $products->getAllProductFront();
                        }
                    ?>             
            </div>
        </div>
    
    </div>


</body>
</html>
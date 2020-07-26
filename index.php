<?php
session_start();
require __DIR__ . '/admin/vendor/autoload.php';

use App\Controller\CartController;
use App\Controller\CategoryController;
use App\Controller\ProductController;

$products = new ProductController();
$carts = new CartController();
$categories = new CategoryController();
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include_once('front/menu/navbar.php');
if (isset($_GET['page']) != 'detail-product') {
    include_once('front/slide/slide.php');
}
?>

<div id="main-content">
    <div class="container">
        <div id="all-product">
            <div class="row">
                <?php
                if (isset($_GET['page'])) {
                    switch ($_GET['page']) {
                        case 'detail-product':
                            $products->detailProduct();
                            break;
                        case 'list-cart':
                            $carts->addToCart();
                            break;
                        case 'cart-detail':
                            $carts->payment();
                            break;
                        case 'search-product':
                            $id = $_REQUEST['id'];
                            $products->searchProductById($id);
                            break;
                        default:
                            $products->getAllProductFront();
                    }
                } else {
                    $products->getAllProductFront();
                }
                ?>
            </div>
        </div>
    </div>

</div>

<?php include_once('front/footer/footer.php'); ?>

</body>
</html>
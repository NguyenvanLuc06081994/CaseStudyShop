<?php


namespace App\Controller;


use App\Model\BillManager;
use App\Model\Cart;
use App\Model\CustomerManager;
use App\Model\DetailManager;
use App\Model\ProductManager;

class CartController
{
    protected $productManager;
    protected $billManager;
    protected $detailManager;
    protected $customerManager;

    public function __construct()
    {
        $this->productManager = new ProductManager();
        $this->billManager = new BillManager();
        $this->detailManager = new DetailManager();
        $this->customerManager = new CustomerManager();
    }

    public function addToCart()
    {

        $idProduct = $_REQUEST['id'];
        $product = $this->productManager->getProductId($idProduct);
        if (isset($_SESSION['cart'])) {
            $oldCart = unserialize($_SESSION['cart']);
        } else {
            $_SESSION['cart'] = [];
            $oldCart = $_SESSION['cart'];
        }
        $newCart = new Cart($oldCart);
        $newCart->add($product);
        $_SESSION['cart'] = serialize($newCart);
        $cartCurrent = unserialize($_SESSION['cart']);
        include('front/cart/list.php');
    }
}
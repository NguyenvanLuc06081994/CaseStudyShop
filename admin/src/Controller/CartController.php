<?php


namespace App\Controller;


use App\Model\Bill;
use App\Model\BillManager;
use App\Model\Cart;
use App\Model\Customer;
use App\Model\CustomerManager;
use App\Model\Detail;
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
            $oldCart = $_SESSION['cart'];
        }
        $newCart = new Cart($oldCart);
        $newCart->add($product);
        $_SESSION['cart'] = serialize($newCart);
        $cartCurrent = unserialize($_SESSION['cart']);
        include('front/cart/list.php');
    }

    public function payment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $cartCurrent = unserialize($_SESSION['cart']);
            include('front/cart/form-confirm.php');
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $date = $_POST['date'];
            $status = $_POST['status'];
            $customer = new Customer($name, $phone, $email, $address);
            $this->customerManager->addCustomer($customer);
            $customers = $this->customerManager->getAllCustomer();
            $cartCurrent = unserialize($_SESSION['cart']);
            $customer_id = $customers[count($customers) - 1]->getId();
            $totalPrice = $cartCurrent->totalPrice;
            $bill = new Bill($date, $status, $totalPrice, $customer_id);
            $this->billManager->addBill($bill);
            $bills = $this->billManager->getAllBill();
            $bill_id = $bills[count($bills) - 1]->getId();
            foreach ($cartCurrent->items as $key => $product) :
                $product_id = $key;
                $quantity = $product['totalQty'];
                $detail = new Detail($bill_id, $product_id, $quantity);
                $this->detailManager->addDetail($detail);
            endforeach;
            $_SESSION['cart'] = [];
            header('location:front/cart/success.php');
        }
    }
}
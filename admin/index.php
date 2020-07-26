<?php
session_start();

use App\Controller\BillController;
use App\Controller\CategoryController;
use App\Controller\CustomerController;
use App\Controller\ProductController;

require __DIR__ . "/vendor/autoload.php";
$products = new ProductController();
$customers = new CustomerController();
$bills = new BillController();
$categories = new CategoryController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

if (isset($_SESSION['username'])  && $_SESSION['password']){
    include ('admin.php');
}else{
    include ('src/View/login.php');
}
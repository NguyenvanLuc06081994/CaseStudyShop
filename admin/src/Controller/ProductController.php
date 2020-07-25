<?php


namespace App\Controller;


use App\Model\ProductManager;

class ProductController
{
    protected $productController;

    public function __construct()
    {
        $this->productController = new ProductManager();
    }

    public function getAllProduct()
    {
       $products = $this->productController->getAllProduct();
       include ('../src/View/product/list.php');
    }
}
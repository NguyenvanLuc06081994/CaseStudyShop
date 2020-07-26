<?php


namespace App\Controller;


use App\Model\CategoryManager;
use App\Model\Product;
use App\Model\ProductManager;

class ProductController
{
    protected $productController;
    protected $categoryManager;

    public function __construct()
    {
        $this->productController = new ProductManager();
        $this->categoryManager = new CategoryManager();
    }

    public function getAllProduct()
    {
        $categories = $this->categoryManager->getAllCategory();
        $products = $this->productController->getAllProduct();
        include('../src/View/product/list.php');
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categories = $this->categoryManager->getAllCategory();
            include('../src/View/product/add.php');
        } else {
            $file = $_FILES['my-file']['tmp_name'];
            $path = "uploads/" . $_FILES['my-file']['name'];
            if (move_uploaded_file($file, $path)) {
                echo "Tải tập tin thành công";
            } else {
                echo "Tải tập tin thất bại";
            }
            $name = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $description = $_REQUEST['description'];
            $category_id = $_REQUEST['category_id'];
            $product = new Product($path, $name, $price, $quantity, $description, $category_id);
            $this->productController->addProduct($product);
            header('location:index.php');
        }
    }

}
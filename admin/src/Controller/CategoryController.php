<?php

namespace App\Controller;

use App\Model\Category;
use App\Model\CategoryManager;

class CategoryController
{
    protected $categoryController;

    public function __construct()
    {
        $this->categoryController = new CategoryManager();
    }

    public function getAllCategory()
    {
        $categories = $this->categoryController->getAllCategory();
        include('../src/View/category/list.php');
    }

    public function addCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include('../src/View/category/add.php');
        } else {
            $name = $_REQUEST['name'];
            $country = $_REQUEST['country'];
            $category = new Category($name, $country);
            $this->categoryController->addCategory($category);
            header('location:index.php');
        }
    }
}
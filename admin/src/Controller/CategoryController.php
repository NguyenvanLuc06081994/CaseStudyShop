<?php
namespace App\Controller;

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
            include ('src/View/category/list.php');
    }
}
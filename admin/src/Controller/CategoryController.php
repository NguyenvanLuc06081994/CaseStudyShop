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
}
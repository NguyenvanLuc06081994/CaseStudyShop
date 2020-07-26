<?php


namespace App\Controller;


use App\Model\CustomerManager;

class CustomerController
{
    protected $customerController;

    public function __construct()
    {
        $this->customerController = new CustomerManager();
    }

    public function getAllCustomer()
    {
        $customers = $this->customerController->getAllCustomer();
        include ('src/View/customer/list.php');
    }
}
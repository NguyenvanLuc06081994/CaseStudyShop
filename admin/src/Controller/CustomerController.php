<?php


namespace App\Controller;


use App\Model\Customer;
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
        include('src/View/customer/list.php');
    }

    public function addCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include("src/View/customer/add.php");
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $customer = new Customer($name, $phone, $email, $address);
            $this->customerController->addCustomer($customer);
            header('location:index.php?page=list-customer');
        }
    }
}
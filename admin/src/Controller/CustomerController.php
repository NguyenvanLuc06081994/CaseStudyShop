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

    public function updateCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $customer = $this->customerController->getCustomerId($id);
            include("src/View/customer/update.php");
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $phone = $_REQUEST['phone'];
            $email = $_REQUEST['email'];
            $address = $_REQUEST['address'];
            $customer = new Customer($name, $phone, $email, $address);
            $customer->setId($id);
            $this->customerController->updateCustomer($customer);
            header("location:index.php?page=list-customer");
        }
    }

    public function deleteCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $this->customerController->deleteCustomer($id);
            header("location:index.php?page=list-customer");
        }
    }

    public function searchCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $keyword = $_REQUEST['keyword'];
            $customers = $this->customerController->searchCustomer($keyword);
            include('src/View/customer/list.php');
        }

    }

}
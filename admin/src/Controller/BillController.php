<?php


namespace App\Controller;


use App\Model\BillManager;
use App\Model\CustomerManager;

class BillController
{
    protected $billController;
    protected $customerManager;

    public function __construct()
    {
        $this->billController = new BillManager();
        $this->customerManager = new CustomerManager();
    }

    public function getAllBill()
    {
        $bills = $this->billController->getAllBill();
        $customers = $this->customerManager->getAllCustomer();
        include ('src/View/bill/list.php');
    }

    public function getBillDetail()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_REQUEST['id'];
            $bills = $this->billController->getAllBill();
            $billDetails = $this->billController->getBillDetail($id);
            include ('src/View/bill/billDetail.php');
        }
    }
}
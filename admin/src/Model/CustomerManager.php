<?php


namespace App\Model;


class CustomerManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCustomer()
    {
        $sql = "SELECT * FROM tbl_customers";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $customers = [];
        foreach ($data as $key => $item){
            $customer = new Customer($item['name'],$item['phone'],$item['email'],$item['address']);
            $customer->setId($item['id']);
            array_push($customers,$customer);
        }
        return $customers;
    }
}
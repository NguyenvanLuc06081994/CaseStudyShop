<?php


namespace App\Model;


class BillManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllBill()
    {
        $sql = "SELECT * FROM tbl_bills";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $bills = [];
        foreach ($data as $key => $item){
            $bill = new Bill($item['date'], $item['status'], $item['totalPrice'], $item['customer_id']);
            $bill->setId($item['id']);
            array_push($bills, $bill);
        }
        return $bills;
    }
}
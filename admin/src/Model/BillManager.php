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
        foreach ($data as $key => $item) {
            $bill = new Bill($item['date'], $item['status'], $item['totalPrice'], $item['customer_id']);
            $bill->setId($item['id']);
            array_push($bills, $bill);
        }
        return $bills;
    }

    public function getBillDetail($id)
    {
        $sql = "SELECT tbl_categories.name,tbl_products.name,tbl_products.price,tbl_details.quantity,tbl_bills.totalPrice,tbl_bills.status,tbl_customers.name,tbl_customers.phone,tbl_customers.email,tbl_customers.address,tbl_bills.id FROM tbl_categories INNER JOIN tbl_products on tbl_categories.id = tbl_products.category_id
INNER Join tbl_details on tbl_products.id = tbl_details.product_id
INNER JOIN 	tbl_bills on tbl_details.bill_id = tbl_bills.id
INNER JOIN tbl_customers on tbl_bills.customer_id = tbl_customers.id Where tbl_bills.id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateBillStatus($id,$status)
    {
        $sql = "UPDATE tbl_bills SET status =:status WHERE id =:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
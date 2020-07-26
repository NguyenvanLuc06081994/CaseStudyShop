<?php


namespace App\Model;


class DetailManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllDetail()
    {
        $sql = "SELECT * FROM tbl_details";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $details = [];
        foreach ($data as $key => $item) {
            $detail = new Detail($item['bill_id'], $item['product_id'], $item['quantity']);
            $detail->setId($item['id']);
            array_push($details, $detail);
        }
        return $details;
    }

    public function addDetail($detail)
    {
        $sql = 'INSERT INTO `tbl_details`( `bill_id`, `product_id`, `quantity`) VALUES (:bill_id, :product_id, :quantity)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':bill_id', $detail->getBillId());
        $stmt->bindParam(':product_id', $detail->getProductId());
        $stmt->bindParam(':quantity', $detail->getQuantity());
        $stmt->execute();
    }
}
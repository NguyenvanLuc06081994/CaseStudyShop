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
}
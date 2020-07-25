<?php


namespace App\Model;


class CategoryManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM  tbl_categories";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $categories = [];
        foreach ($data as $key => $item){
            $category = new Category($item['name'],$item['country']);
            $category->setId($item['id']);
            array_push($categories,$category);
        }
        return $categories;
    }

}
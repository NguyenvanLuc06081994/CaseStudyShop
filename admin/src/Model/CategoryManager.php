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

    public function addCategory($category)
    {
        $sql = "INSERT INTO `tbl_categories`( `name`, `country`) VALUES (:name,:country)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name',$category->getName());
        $stmt->bindParam(':country',$category->getCountry());
        $stmt->execute();
    }

    public function getCategoryId($id)
    {
        $sql = "SELECT * FROM `tbl_categories` WHERE id =:id";
        $stmt= $this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateCategory($category)
    {
        $sql = "UPDATE `tbl_categories` SET `name`=:name,`country`=:country WHERE id =:id ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$category->getId());
        $stmt->bindParam(':name',$category->getName());
        $stmt->bindParam(':country',$category->getCountry());
        $stmt->execute();
    }

}
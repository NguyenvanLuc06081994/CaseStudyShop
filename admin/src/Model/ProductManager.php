<?php


namespace App\Model;


class ProductManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM tbl_products";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $products = [];
        foreach ($data as $key => $item){
            $product = new Product($item['img'],$item['name'],$item['price'],$item['quantity'],$item['description'],$item['category_id']);
            $product->setId($item['id']);
            array_push($products,$product);
        }
        return $products;
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO `tbl_products`(`img`, `name`, `price`, `quantity`, `description`, `category_id`) VALUES (:img, :name, :price,:quantity,:description,:category_id)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':img',$product->getImg());
        $stmt->bindParam(':name',$product->getName());
        $stmt->bindParam(':price',$product->getPrice());
        $stmt->bindParam(':quantity',$product->getQuantity());
        $stmt->bindParam(':description',$product->getDescription());
        $stmt->bindParam(':category_id',$product->getCategoryId());
        $stmt->execute();
    }
}
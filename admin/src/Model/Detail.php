<?php


namespace App\Model;


class Detail
{
    protected $id;
    protected $bill_id;
    protected $product_id;
    protected $quantity;

    public function __construct($bill_id,$product_id,$quantity)
    {
        $this->quantity = $quantity;
        $this->product_id = $product_id;
        $this->bill_id = $bill_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getBillId()
    {
        return $this->bill_id;
    }


    public function setBillId($bill_id): void
    {
        $this->bill_id = $bill_id;
    }


    public function getProductId()
    {
        return $this->product_id;
    }

    public function setProductId($product_id): void
    {
        $this->product_id = $product_id;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }
}
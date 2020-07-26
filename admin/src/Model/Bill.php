<?php


namespace App\Model;


class Bill
{
    protected $id;
    protected $date;
    protected $status;
    protected $totalPrice;
    protected $customer_id;

    public function __construct($date, $status, $totalPrice, $customer_id)
    {
        $this->status = $status;
        $this->date = $date;
        $this->totalPrice = $totalPrice;
        $this->customer_id = $customer_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date): void
    {
        $this->date = $date;
    }


    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status): void
    {
        $this->status = $status;
    }


    public function getTotalPrice()
    {
        return $this->totalPrice;
    }


    public function setTotalPrice($totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }


    public function getCustomerId()
    {
        return $this->customer_id;
    }


    public function setCustomerId($customer_id): void
    {
        $this->customer_id = $customer_id;
    }

}
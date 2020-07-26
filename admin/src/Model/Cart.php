<?php

namespace App\Model;

class Cart
{
    public $items = [];
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    public function add($product)
    {
        $productId = $product['id'];
        $productStore = [
            "item" => $product,
            "totalQty" => 0,
            "totalPrice" => 0
        ];

        if ($this->items) {
            if (array_key_exists($productId, $this->items)) {
                $productStore = $this->items[$productId];
            }
        }

        $productStore['totalQty']++;
        $productStore['totalPrice'] += $product['price'];
        $this->items[$productId] = $productStore;
        $this->totalQty++;
        $this->totalPrice += $product['price'];
    }
}
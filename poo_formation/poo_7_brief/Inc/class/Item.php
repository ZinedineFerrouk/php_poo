<?php

namespace Inc\class;

// ITEM
class Item
{
    protected $name;
    protected $price;
    const TVA = 20;

    public function showPriceATI($price)
    {
        return $price * (1 + self::TVA / 100);
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
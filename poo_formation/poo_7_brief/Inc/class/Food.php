<?php

namespace Inc\class;

// Food en vente
class Food extends Item
{
    protected $brand;
    protected $type; 
    protected $expiry; // Date de peremption

    public function __construct($brand, $type, $expiry)
    {
        $this->brand = $brand;
        $this->type = $type;
        $this->expiry = $expiry;
    }

    public function showExpiry()
    {
        $date = date_create($this->expiry);
        return date_format($date, 'd/m/Y');
    }

    // /**
    //  * Get the value of expiry
    //  */ 
    // public function getExpiry()
    // {
    //     return $this->expiry;
    // }

    // /**
    //  * Get the value of type
    //  */ 
    // public function getType()
    // {
    //     return $this->type;
    // }

    // /**
    //  * Get the value of brand
    //  */ 
    // public function getBrand()
    // {
    //     return $this->brand;
    // }
}
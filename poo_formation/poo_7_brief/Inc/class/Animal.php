<?php

namespace Inc\class;

// Animal en vente
class Animal extends Item
{
    protected $birth;
    protected $weight;
    
    public function __construct($name, $price, $weight, $birth)
    {
        $this->birth = $birth;
        $this->weight = $weight;
        $this->name = $name;
        $this->price = $price;
    }

    public function showAge()
    {
        $age = date('Y') - date('Y', strtotime($this->birth));
        return $age;
        // on peut aussi utiliser date_diff()
    }

    // /**
    //  * Get the value of birth
    //  */ 
    // public function getBirth()
    // {
    //     return $this->birth;
    // }

    // /**
    //  * Get the value of weight
    //  */ 
    // public function getWeight()
    // {
    //     return $this->weight;
    // }
}
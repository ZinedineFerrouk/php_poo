<?php

namespace Inc\class;

class Cart
{
    protected $items; // Array
    protected $total_price;

    // Ajouter un item au panier
    public function addItem($item)
    {
        $this->items[] = $item;
        $this->total_price += $item->getPrice();
    }

    // Afficher les items au panier
    public function displayArray()
    {
        echo '<pre>';
        print_r($this->items);
        echo '</pre>';
    }

    // Montre le contenu de tous le panier
    public function showAll()
    {
        foreach ($this->item as $key => $value) {
            echo '<h3>' . $item->getName() . '</h3>';
        }
    }
}

<?php

namespace Inc;

class Cart
{
    protected $items = array();
    protected $total_price = 0;

    public function addItem($item)
    {
        $this->items[] = $item;
        $this->total_price += $item->getPrice();
    }

    public function debugItems()
    {
        echo '<pre>';
        print_r($this->items);
        echo '</pre>';
    }

    public function showAll()
    {
        foreach ($this->items as $item) {
            echo '<h3>'.$item->getName().'</h3>';
        }
        echo '<p>Total: '.$this->total_price.'</p>';
    }

}
<?php
spl_autoload_register();

use \Inc\class\Item;
use \Inc\class\Animal;
use \Inc\class\Food;
use \Inc\class\Cart;

$animal_1 = new Animal('Pele', 1000, 28, '1998-08-22');

echo '<pre>';
print_r($animal_1);
echo '</pre>';

echo $animal_1->showPriceATI(1000);
echo '<br>';
echo $animal_1->showAge();

$food_1 = new Food('Frolic', 'Croquettes', '26-06-2012');

echo '<br>';

echo $food_1->showExpiry();

echo '<pre>';
print_r($food_1);
echo '</pre>';

echo '<br>';

$cart = new Cart();

echo '<pre>';
print_r($cart);
echo '</pre>';

$cart->addItem($animal_1);
$cart->addItem($food_1);

echo $cart->displayArray();
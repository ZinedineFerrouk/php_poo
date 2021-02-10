<?php
spl_autoload_register();

use \Inc\Animal;
use \Inc\Food;
use \Inc\Cart;

$animal = new Animal('Gribouille',400);
$animal->setBirthday('2017-02-12');
$animal->setWeight(3);

//$animal->setName('Gribouille');
echo '<pre>';
print_r($animal);
echo '</pre>';
echo $animal->showPriceATI();
echo '<br>';
echo $animal->showAge();

$food = new Food('Croquette chat difficile',24);
$food->setBrand('frolic');
$food->setType('croquette');
$food->setExpiry('2021-08-12');

echo '<pre>';
print_r($food);
echo '</pre>';
echo $food->showPriceATI();
echo $food->showExpiry();

$cart = new Cart();

$cart->addItem($animal);
$cart->addItem($food);

//$cart->debugItems();
$cart->showAll();

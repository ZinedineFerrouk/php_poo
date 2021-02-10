<?php
require('class/Commande.php');

$client1 = new Commande('Michel');
$client1->addCafe(3);
$client1->addCafe(2);
$client1->addMenuEnfant(2);
$client1->addMenuJour(3);
$client1->addPizza('fromage', 2);
$client1->addPizza('calzone', 3);
$client1->addPizza('orientale', 4);

$client1->facture();


$client2 = new Commande('Bernard');
$client2->addCafe(1);
$client2->addCafe(2);
$client2->addMenuEnfant(2);
$client2->addPizza('calzone', 4);

$client2->facture();

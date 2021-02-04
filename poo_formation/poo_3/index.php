<?php
require('class/Commande.php');

$client1 = new Commande('Michel');
$client1->addCafe(3);
$client1->addMenuEnfant(2);
$client1->addMenuDuJour(3);
// $client1->addPizza('savoyarde');
$client1->addPizza('calzone', 5);
// $client1->addPizza('savoyarde');
// $client1->addPizza('oriental');
$client1->getPizzaPrice();



$client1->facture();
// $client2 = new Commande('Bernard');

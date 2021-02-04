<?php

class User {
    // Propriété
    public $name;
    public $email;
    public $password;
}

// INSTANCIATION DE LA CLASS USER
$user = new User();
// Hydrater l'objet
$user->name = "Michou";
$user->email = "Michou27@gmail.com";
$user->password = "Michou27";

$user2 = new User();
// Hydrater l'objet
$user2->name = "Nono";
$user2->email = "Nono27@gmail.com";
$user2->password = "Nono27";

echo '<pre>';
print_r($user);
print_r($user2);
echo '</pre>';

echo $user2->name;


class Voiture {
    // Propriété
    const ROUES = 4;
    public $color = "Rouge";
    private $puissance;
    public $vitesse = 10;
    private $nbrPlace = 5;
    private $marque;

    // CONSTRUCTOR
    public function __construct($ma = 'BMW', $puiss = 120) {
        $this->marque = $ma;
        $this->puissance = $puiss;
        $this->accelerer(100);
    }

    public function generateHtml(){
        $html = '';

        $html.= '<div>'.
            '<h1>'. $this->getMarque().'</h1>'.
            '<h1>'. $this->getColor().'</h1>'.
            '<h1>'. $this->getPuissance().'</h1>'.
        '</div>';

        return $html;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getPuissance(){
        return $this->puissance;
    }

    // METHOD
    // GETTER
    public function getColor(){
        // This represente l'objet courant c-a-d l'objet Voiture
        return $this->color;
    }

    // METHOD
    // SETTER
    public function setColor($color){
        $this->color = $color;
    }

    public function accelerer($vitesse){
        $this->vitesse += $vitesse;
    }

    public function ralentir($vitesse){
        $this->vitesse -= $vitesse;
    }
    
    // PLACE
    public function getPlace(){
        return $this->nbrPlace;
    }

    public function setPlace($place){
        $this->nbrPlace = $place;
    }
}

$car = new Voiture();
echo $car->getColor();
echo $car->setColor("Violet");

echo $car->accelerer(120);
echo $car->ralentir(65);
// echo $car->nbrPlace; ERROR PRIVATE PROPRIETE

echo $car->getPlace();
echo $car->setPlace(7);

echo '<pre>';
var_dump($car);
echo '</pre>';

$renault = new Voiture('Renault', 40);
echo $renault->setColor("Verte");

echo '<pre>';
var_dump($renault);
echo '</pre>';

echo $renault->generateHtml();




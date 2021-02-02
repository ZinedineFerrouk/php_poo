<?php

// Création d'une class
class Voiture
{
    // Attribus de notre classe
    // Encapsulation = la manière de choisir la visibilité des membres d'une classe
    // Il est mieux de déclarer nos attributs de classe en priver et 
    // de gérer leur modification depuis l'intérieur de la classe

    // private --> visibilité = Accessible seulement dans l'objet Voiture
    private $name;

    // public --> visibilité = Accessible dans l'objet Voiture et en dehors
    public $puissance;
    private $couleur = "rouge";
    private $vitesse = 0;

    // Methode pour gérer la modification de nos attributs
    public function afficherCouleur(){
        return $this->couleur;
    }

    public function repeindre($co){
        $this->couleur=$co;
    }

    public function accelerer(){
        $this->vitesse++;
    }

    public function afficherVitesse(){
        return $this->vitesse;
    }
}

// Instance de la classe Voiture
$berline = new Voiture();
$berline->repeindre("Violet");
echo $berline->afficherCouleur();

echo '<br>';

$berline->accelerer();
echo $berline->afficherVitesse();

echo '<br>';

$suv = new Voiture();
echo $suv->afficherCouleur();

$limousine = new Voiture();

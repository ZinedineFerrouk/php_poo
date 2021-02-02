<?php

// Création d'une class
class Voiture
{
    private $couleur = "rouge";
    private $vitesse = 0;
    // Généralement la visibilité du constructor sera public
    // Lorsqu'on fait une instanciation de class le constructor sera toujours appeler et on aura donc accès a celui-ci
    // Les arguments du constructor peuvent avoir des valeurs par default
    public function __construct($color="Noir", $speed)
    {
        $this->couleur = $color;
        $this->vitesse = $speed;
    }

    // Le destructor est une méthode qui est appelé lorsqu'il n'y a plus aucune réferrence à une instance de la classe
    // Le destructor est en quelque sorte le nettoyeur de notre classe avec 
    // par exemple la suppression des variables de session, la sauvegarde de données ou encore la fermeture d'un fichier ouvert
    public function __destruct()
    {
        echo 'Destructeur appeler !';
    }

    public function accelerer(){
        $this->vitesse++;
    }

    public function afficherVitesse(){
        return $this->vitesse;
    }

    public function afficherCouleur(){
        return $this->couleur;
    }
}

// Instance de la classe Voiture
// Une fois nos paramètres entrer dans notre constructor nous allons pouvoir leur donner des valeurs lors de leur instanciation
$berline = new Voiture("Bleu ", 25);
echo 'Berline : ' . $berline->afficherCouleur(); 
echo $berline->afficherVitesse();

echo '<br>';

$limousine = new Voiture("Rouge ", 50);
echo 'Limousine : ' . $limousine->afficherCouleur();
echo $limousine->afficherVitesse();
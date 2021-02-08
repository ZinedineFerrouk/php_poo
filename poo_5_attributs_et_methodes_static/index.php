<?php
// STATIC
class Facture
{
    const TVA = 20;

    private static $var;   
    
    public function __construct(){
        self::$var = "POO";
    }
    // Méthode qui calcule le montant TTC
    // On la déclare en static pour ne pas avoir a instancié la classe afin d'y accèder
    public static function calculTTC($montantHT)
    {
        return $montantHT * (1 + self::TVA / 100);
    }

    public function display(){
        return self::$var;
    }

    public function displayModif($val){
        return self::$var = $val;
    }
}

// L'attribut static n'appartiens pas a l'instance de classe mais a la classe elle même
// Toute modifications de cet attributs s'appliquera sur tous les objets qui seront d'instance de cette classe
$obj = new Facture;
$obj2 = new Facture;

echo $obj->display();
echo '<br>';
echo $obj->displayModif("POO en PHP");
echo '<br>';
echo $obj->display();

// Le fait de déclarer des propriétés ou des méthodes comme statiques vous permet d'y accéder sans avoir besoin d'instancier la classe.
// On ne peut accéder à une propriété déclarée comme statique avec l'objet instancié d'une classe (bien que ce soit possible pour une méthode statique).
echo Facture::calculTTC(1000);
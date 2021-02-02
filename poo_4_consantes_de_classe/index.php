<?php
// CONSTANTES DE CLASSES
// Une constante en php et pareil qu'une constante en JS
const Constante = 3;

class Facture{

    const TVA = 20;
    // Méthode qui calcule le monatnt TTC
    public function calculTTC($montantHT){
        return $montantHT * (1 + self::TVA / 100);
    }
}
$facture = new Facture;
echo $facture->calculTTC(150);

echo '<br>';

// Si on veut acceder a une constante déclarer dans une classe on va devoir obligatoirement accèder a sa classe avant
echo Facture::TVA;

// self fait réference a la classe
// $this fais réference a l'instance de classe
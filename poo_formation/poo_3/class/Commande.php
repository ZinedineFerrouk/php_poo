<?php

class Commande
{
    private $menuDuJour = 12;
    private $menuEnfant = 8;
    private $cafe = 1.8;
    private $pizza = [
        'calzone' => 9,
        'oriental' => 10,
        'savoyarde' => 12
    ];
    private $nom = 'no name';
    private $nbrCouvert = 0;
    private $liste;


    public function __construct($name)
    {
        $this->nom = $name;
        $this->liste = [
            'menuDuJour' => 0,
            'menuEnfant' => 0,
            'cafe' => 0,

            'pizza' => [
                'calzone' => 0,
                'oriental' => 0,
                'savoyarde' => 0
            ]
        ];
    }

    ////////////////////////////////// GET KEY FROM ARRAY //////////////////////
    public function getKeyFromArray($tabName)
    {
        $tableau = [];
        foreach ($tabName as $key => $value) {
            $tableau[] = $key;
        }
        return $tableau;
    }
    ///////////////////////////// FIN ////////////////////////////////////////

    public function getName()
    {
        return $this->nom;
    }

    public function addCafe($cafe)
    {
        $this->liste['cafe'] += $cafe;
    }

    public function addMenuEnfant($menuEnfant)
    {
        $this->liste['menuEnfant'] += $menuEnfant;
        $this->nbrCouvert += 1;
    }

    public function addMenuDuJour($menuDuJour)
    {
        $this->liste['menuDuJour'] += $menuDuJour;
        $this->nbrCouvert += 1;
    }

    public function addPizza($pizza, $qt)
    {
        $this->liste['pizza'][$pizza] += $qt;
        $this->nbrCouvert += 1;
    }

    public function getPizzaPrice()
    {
        // Variable total qui va contenir notre prix total
        $total = 0;

        // Tableau dans lequel on va stocker nos clé du tableau pizza qui contient les prix
        // $tableau = [];

        // foreach ($this->pizza as $key => $value) {
        //     $tableau[] = $key;
        // }

        $tableau = $this->getKeyFromArray($this->pizza);

        // On boucle sur le tableau qui contient les clé afin de récupérer les valeur donc les prix
        foreach ($tableau as $value) {
            $total += $this->liste['pizza'][$value] * $this->pizza[$value];
        }

        return $total;
    }


    public function facture()
    {
        $quantite = $this->getKeyFromArray($this->liste);

        foreach ($quantite as $value) {
            echo '<br>';
            echo $this->liste[$value] * $this->$value;
            echo '<br>';
        }

        // return '<pre>' . var_dump($this->liste) . '</pre>';
        $cafePrice = $this->liste['cafe'] * $this->cafe;
        $menuEnfantPrice = $this->liste['menuEnfant'] * $this->menuEnfant;

        echo $cafePrice + $this->getPizzaPrice() + $menuEnfantPrice;
    }
}

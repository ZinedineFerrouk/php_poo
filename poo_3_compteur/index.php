<?php

class Compteur{
    private $file;
    private $nbr;

    // Initialisation des attributs avec le constructor
    public function __construct()
    {
        $this->file = fopen("index.txt", 'r+');
        $this->nbr = fgets($this->file);
    }

    // Création de la méthode pour incrémenter
    public function incremente(){
        $this->nbr++;
        fseek($this->file, 0);
        fputs($this->file, $this->nbr);
    }

    // Méthode qui affiche le compteur
    public function displayCount(){
        return $this->nbr;
    }
     
}

$var = new Compteur();
$var->incremente();

echo $var->displayCount();
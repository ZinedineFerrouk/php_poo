<?php

class Commande
{
  private $menudujour = 12;
  private $menuenfant = 8;
  private $cafe = 1.8;
  private $pizza = array(
    'calzone'   => 9,
    'orientale' => 10,
    'fromage'   => 11
  );
  private $nom;
  private $nbrecouvert = 0;
  private $liste;

  public function __construct(string $name = 'no name')
  {
    $this->nom = $name;
    $this->liste = array(
      'menujour'   => 0,
      'menuenfant' => 0,
      'cafe'       => 0,
      'pizza' => array(
        'calzone'   => 0,
        'orientale' => 0,
        'fromage'   => 0
      )
    );
  }

  private function addCouvert($nbre = 1)
  {
    $this->nbrecouvert += $nbre;
  }



  public function addCafe($nbre = 1)
  {
    $this->liste['cafe'] += $nbre;
  }

  public function addMenuEnfant($nbre = 1)
  {
    $this->liste['menuenfant'] += $nbre;
    $this->addCouvert($nbre);
  }

  public function addMenuJour($nbre = 1)
  {
    $this->liste['menujour'] += $nbre;
    $this->addCouvert($nbre);
  }

  public function addPizza($type = 'fromage', $nbre = 1)
  {
    if(in_array($type,$this->getAllKeyPizza())) {
      $this->liste['pizza'][$type] += $nbre;
      $this->addCouvert($nbre);
    }
  }

  private function getAllKeyPizza()
  {
    $tab = [];
    foreach($this->liste['pizza'] as $key => $value){
      $tab[] = $key;
    }
    return $tab;
  }

  private function totalCommande()
  {
    $total =  0;
    $total += $this->menudujour * $this->liste['menujour'];
    $total += $this->menuenfant * $this->liste['menuenfant'];
    $total += $this->cafe * $this->liste['cafe'];
    foreach($this->getAllKeyPizza() as $keypizza) {
      $total += $this->pizza[$keypizza] * $this->liste['pizza'][$keypizza];
    }
    return $total;
  }

  public function facture()
  {
    echo '<h3>Facture de ' . $this->nom . '</h3>';
    if($this->liste['menujour'] != 0) {
      echo '<p>Menu du jour : '.$this->liste['menujour'].' => ' . $this->liste['menujour']*$this->menudujour . ' euros</p>';
    }
    if($this->liste['menuenfant'] != 0) {
      echo '<p>Menu enfant : '.$this->liste['menuenfant'].' => ' . $this->liste['menuenfant']*$this->menuenfant . ' euros</p>';
    }
    if($this->liste['cafe'] != 0) {
      echo '<p>cafe: '.$this->liste['cafe'].' => ' . $this->liste['cafe']*$this->cafe . ' euros</p>';
    }
    foreach($this->getAllKeyPizza() as $keypizza) {
      if($this->liste['pizza'][$keypizza] != 0) {
        echo '<p>Pizza '.ucfirst($keypizza).': '.$this->liste['pizza'][$keypizza].' => ' . $this->liste['pizza'][$keypizza]*$this->pizza[$keypizza] . ' euros</p>';
      }
    }
    echo '<p>Nombre de couvert: ' . $this->nbrecouvert . '</p>';
    echo '<p>Total: ' . $this->totalCommande() . '</p>';
  }

}

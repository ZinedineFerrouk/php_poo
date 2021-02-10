<?php

class User {
  // propriétés
  public $name;
  public $email;
  public $password;
}
// Instancier un objet
$user1 = new User();
// Hydrater notre objet
$user1->name = 'Michel';
$user1->email = 'quidelantoine@gmail.com';
$user1->password  = "jhkhjhsdk6876j";

$user2 = new User();
$user2->name = 'Dede';
$user2->email = 'michel@gmail.com';
$user2->password  = "jh233444jhsdk6876j";
echo '<pre>';
print_r($user1);
echo '</pre>';
echo '<pre>';
print_r($user2);
echo '</pre>';
echo $user2->name;

class Voiture
{
  const ROUES = 4;
  public $couleur = 'red';
  public $puissance;
  public $vitesse = 10;
  private $place = 5;
  private $marque;

  public function __construct($ma = 'BMW',$puiss = 120)
  {
    $this->marque = $ma;
    $this->puissance = $puiss;
    $this->accelerer(100);
  }
  // methods
  public function getCouleur() // Getter
  {
    return $this->couleur;
  }
  public function setCouleur($color) // Setter
  {
    $this->couleur = $color;
  }
  public function getPlace()
  {
    return $this->place;
  }
  public function setPlace($nbre)
  {
    $this->place = $nbre;
  }
  public function getMarque()
  {
    return $this->marque;
  }
  public function accelerer($data = 10)
  {
    $this->vitesse += $data;
  }
  public function freiner($data = 10)
  {
    $this->vitesse -= $data;
  }

  public function generateHtml()
  {
    $html = '';
    $html .= '<div class="voiture">';
    $html .= '<p>Marque: ' . $this->marque . ' de couleur ' . $this->couleur . '</p>';
    $html .= '<p>Vitesse: ' . $this->vitesse . ' km/h avec puissance de ' . $this->puissance . '</p>';
    $html .= '<p>'  .$this::ROUES . ' Roues pour ' . $this->place . ' places</p>';
    $html .= '</div>';
    return $html;
  }
}
$voiture1 = new Voiture('Fuego');
echo $voiture1->getCouleur();
$voiture1->setCouleur('blue');
$voiture1->accelerer(40);
$voiture1->freiner(20);
echo $voiture1->getPlace();
echo $voiture1::ROUES;

echo '<pre>';
print_r($voiture1);
echo '</pre>';
echo $voiture1->generateHtml();

// nouvelle voiture => Renault , 40 puissance , couleur verte
// Html => resume de cette voiture
$renault = new Voiture('Renault', 40);
$renault->setCouleur('Green');

echo $renault->generateHtml();
?>
<div class="voiture">
  <p>Marque: <?php echo $renault->getMarque(); ?> de couleur <?= $renault->couleur; ?></p>
  <p>Vitesse: <?php echo $renault->vitesse ?> km/h avec puissance de <?= $renault->puissance; ?></p>
  <p><?= $renault::ROUES; ?> Roues pour <?php $renault->getPlace(); ?> places</p>
</div>








//

<?php
// Héritage

class Mere{
  protected $attribut = 'Bonjour';
  // private $attribut = 'Bonjour';
  public function method1()
  {
    $str = $this->attribut;
    $str .= 'Je suis la class maman';
    return $str;
  }
}
// $maman = new Mere();
// echo $maman->method1();
class Fille extends Mere {

  // Surcharger la method 1
  public function method1()
  {
    $str = $this->attribut;
    $str .= 'Je suis la class maman 2';
    return $str;
  }
  public function method2()
  {
    return $this->attribut . ' Je suis la classe Fille';
  }
}
$fille = new Fille();
echo $fille->method2();
echo $fille->method1();

interface renderInterface
{
  public function render($tag);
}
interface renderInterface2
{
  public function render2($tag);
  public function render3($tag);
}

class Dede implements renderInterface,renderInterface2
{
  public function render($tag){

  }
  public function render2($tag){

  }
  public function render3($tag){

  }
}


// static
class Maison {
  public static $espaceTerrain = '500';
  public $couleur = 'blanc';
  const HAUTEUR = 10;
  private $nbPorte = 10;
  private static $nbPiece = 4;

  public function getNbPorte()
  {
    return $this->nbPorte;
  }
  public static function getNbPiece()
  {
    return self::$nbPiece;
  }
}

echo '<p> Espace terrain: '. Maison::$espaceTerrain .'</p>';
echo '<p> Nbre de pieces: '. Maison::getNbPiece() .'</p>';
echo '<p> Hauteur: '. Maison::HAUTEUR .'</p>';
// echo '<p> Couleur: '. Maison::$couleur .'</p>';
$maison = new Maison();
echo '<p>Couleur: ' . $maison->couleur . '</p>';
echo '<p>Porte: ' . $maison->getNbPorte() . '</p>';
// echo '<p>Porte: ' . $maison->espaceTerrain . '</p>';

class Debuger {
  public static function debug($array)
  {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
  }
}
$tableau = array('Kiwi');
Debuger::debug($tableau);

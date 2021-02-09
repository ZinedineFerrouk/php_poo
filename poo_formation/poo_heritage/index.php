<?php
// HERITAGE

class Mere
{
    protected $attribut = 'Bonjour';

    public function displayMaman()
    {
        $str = $this->attribut;
        $str .= 'Je suis la classe Maman';
        return $str;
    }
}

$maman = new Mere();
echo $maman->displayMaman();

class Fille extends Mere
{

    // On modifie la méthode de la classe Mere simplement car elle a le même nom
    public function displayMaman()
    {
        echo 'Bonjour';
    }

    public function displayFille()
    {
        return 'Je suis la classe Fille';
    }
}


interface renderInterface
{
    public function render($tag);
    
}

interface renderInterface2
{
    public function render2($tag);
    public function render3($tag);

}

// class Dede implements renderInterface, renderInterface2
// {
//     public function render($tag){};
//     public function render2($tag){};
//     public function render3($tag){};
// }

echo '<br>';

class Maison 
{
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

// $instance = new Maison();
echo Maison::getNbPiece();

class Debug
{
    public static function debug($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}

$tableau = ['1', '2', '3'];
echo Debug::debug($tableau);
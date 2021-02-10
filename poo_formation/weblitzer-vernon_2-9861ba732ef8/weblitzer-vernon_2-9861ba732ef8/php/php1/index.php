<?php
echo 'Hello World!';
echo '<h1>titre</h1>';
?>
<h2>Autre titre</h2>
<?php
// phpinfo();
echo phpversion();
// VARIABLES
$message_Accueil = 'Bonjour à tous';
echo $message_Accueil;
// STRING
$title = 'Agence immobilières';
?>
<h1><?php echo $title; ?></h1>
<?php
// INT
$annee = 2021;
$age = 43;
// FLOAT
$pourcentage = 19.6;
// BOOLEAN
$jesuisleformateur = true; // 1
$isNewGoodYear = false;  //
// NULL
$pasdeValeur = NULL; // ne contient rien
// TABLEAU => array
$tableau = array('Beau loft plein sud', 'menagerie','Maison');
echo '<pre>';
print_r($tableau);
echo '</pre>';

echo $tableau[0];
echo $tableau[1];
echo $tableau[2];

echo '<pre>';
print_r($GLOBALS);
echo '</pre>';

echo 'ici une instruction' ?>

<?php echo 'ici une autre instruction'; ?>
<?= 'ici une autre instruction' ?>
<?php
// Commentaires
/*
commentaire
sur plusieurs
lignes
*/
// Debogage
// NOTICE => Warning => script
// FATAL
//die('ok formulaires soumis');
// print_r
var_dump($tableau);

// CONCATENATION  => .
$chaine = 'Salut';
$chaine2 = 'Buzz';
echo '<p>' . $chaine . ' ' . $chaine2 . '!</p>';

$a = 'Bonjour';
$a .= ' le monde !';
echo $a;

$url = 'https://www.php.net/';
$image = 'https://codedesign.fr/wp-content/uploads/2018/08/php-leader1.png';
$text = 'image elephant php';
$width = 100;

?>

<a href="<?php echo $url; ?>" target="_blank">
  <img src="<?php echo $image; ?>" alt="<?= $text; ?>" width="<?php echo $width; ?>px">
</a>
<?php
echo '<a href="' . $url . '" target="_blank"><img src="' . $image . '" alt="'.$text.'" width="'.$width.'px" /></a>';

$html = '';
$html .= '<a href="' . $url . '" target="_blank">';
$html .= '<img src="' . $image . '" alt="'.$text.'" width="'.$width.'px" />';
$html .= '</a>';
echo $html;

// echapement
echo 'Arnold a dit i\'ll be back';
echo "<p class=\"dede\">Arnold a dit \"i'll be back\"</p>";

$traitees = 'lu';
$la = 'ici';
echo 'Les variables ne sont pas $traitees $la'; // Les variables ne sont pas $traitees $la
echo "Les variables ne sont pas $traitees $la"; // Les variables ne sont pas lu ici

// Conditions if elseif else
// SI / SINON SI / SINON
$mot1 = 'musique';
$mot2 = 'sport';
$mot3 = 'musique';
if($mot1 != $mot2) {
  echo 'Les mots sont differents';
} else {
  echo 'les mots sont identiques';
}

$age = 43;
if($age >= 18) {
  $majeur = true;
} else {
  $majeur = false;
}
// conditions ternaire
$majeur = ($age>=18) ? true : false;
// SI majeur est vrai => je suis majeur
// sinon je suis mineur
if($majeur) {
  echo 'je suis majeur';
} else {
  echo 'je suis mineur';
}

// if age inf 18 => echo je suis mineur
  // sinon si age > 65 => vous etes à la retraite
  // sinon 'vous etes ni mineur ni a la retraite'

if($age < 18) {
  echo 'je suis mineur';
} elseif($age >= 65) {
  echo 'Vous etes à la retraite';
} else {
  echo 'Vous etes ni mineur ni a la retraite';
}

$expression = true;

if($expression == true): ?>
  <p>expression est vraie</p>
<?php else: ?>
  <p>expression est fausse</p>
<?php endif;

// switch (variable)
// https://www.php.net/manual/fr/control-structures.switch.php
$beer = 'leffe';
switch($beer)
{
    case 'leffe';
    case 'grimbergen';
    case 'guinness';
        echo 'Bon choix';
    break;
    default;
        echo 'Merci de faire un choix...';
    break;
}

// Operateurs de comparaison
// ==  => ===
//if(12 === '12') // false
//if(12 == '12') // true
// != => differents
// >= ,> , <= ,<

// Operateurs logique
  // &&  AND  =>  ET
  // ||  OR   =>  ou
$homme = true;
if($homme == true && $age >= 18 && $majeur) {
  echo 'acces au site ok';
} else {
  echo 'interdit';
}

// Arithmétiques
// negation =>  -$a
// addition =>  $a + $b
// soustraction => $a - $b
// division => $a / $b
// multiplication => $a * $b
// exponentielle => $a ** $b
// Modulo =>  $a % $b
echo 3%2; // 1
echo 9%3; // 0
echo 14%5;  // 4
$x = 13;
if($x % 2 == 0) {
  echo 'pair';
} else {
  echo 'impair';
}
// priorité à la multiplication
$calcul = 4 + 6 * 3; // 22
echo $calcul;
// Incrémentation // décrementation
$x = 3;
$x++;
echo $x; // 4

echo 'x avec post incrementation est egale à ' . $x++; // 4
echo $x; // 5
echo 'x avec pre incrementation est egale à ' . ++$x; // 6
echo --$x; // 5
echo $x--; // 5
echo $x; // 4

// Opérateurs combinés
$x = $x + 3; // 7
$x+=3; // 10

// $x = $x - 7    =>     $x-=7
// $x = $x * 3    =>     $x*=3
// $x = $x / 2    =>     $x/=2
// $x = $x % 4    =>     $x%=4
$html = '';
$html = $html . '<p>';
$html .= 'Hello';
$html .= '</p>';


//

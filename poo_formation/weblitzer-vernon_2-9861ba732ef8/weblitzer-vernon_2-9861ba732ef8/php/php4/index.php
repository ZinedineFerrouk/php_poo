<?php
/////////////////////////////
// FONCTION UTILISATEUR
////////////////////////////
// Ne pas faire confiance à l'utilisateur
// DON'T REPEAT YOURSELF

function maPremiereFonction()
{
  echo '<p>Bravo, votre premiere fonction est magnifique</p>';
}
maPremiereFonction();

function maDeuxiemeFonction()
{
  return '<p>super ma deuxieme fonction</p>';
}

echo maDeuxiemeFonction();
$data = maDeuxiemeFonction();
echo $data;

function br(){
  echo '<br>';
}

// comprendre le concept d'arguments
// LES VARIABLES SONT LOCALES A LA FONCTION
function division($nbr1,$nbr2 = 2)
{
  $resultat = $nbr1 / $nbr2;
  return $resultat;
}
echo division(12,45);
echo division(12222,43455);
echo division(12);

function debug($array)
{
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
$fruits = array('Banane','Kiwi','Papaye');
$musiques = array('Batterie','Basse','Guitare','Piano','Percu','Chant','Flute');
debug($fruits);
debug($musiques);

// Portée des variables

$variable = 12;
function testvariable()
{
  global $variable;
  echo $variable;
}
testvariable();

function testvariable2($a)
{
  echo $a;
}
testvariable2($variable); // 12

// EXO
// creez une fonction maj => string
  // minuscule, et la premiere lettre la phrase en majuscule
function maj(string $str) : string
{
  $x = mb_strtolower($str);
  return ucfirst($x);
  // return ucfirst(mb_strtolower($str));
}

echo maj('HJHKFljFGghfhMLKMLKFDTyMLMLFC');

// creez une fonction minus
  // tous le monde en majuscule
  // premiere en minuscule
function minus(string $str) : string
{
  return lcfirst(mb_strtoupper($str));
}
echo minus('sdfsfHGJGJHjhkjhkjddyMLMLFC');

// function heure()
  // p => il est actuellement x heures et y minutes
function heure()
{
  echo '<p>il est actuellement '.date('G').' heures et '. date('i').' minutes</p>';
}
heure();

//
// créez un tableau contenir 10 defauts
$defaults = array( 'avare', 'paresseux', 'ennuyant', 'borné','cruel', 'distrait', 'médiocre', 'ringard', 'stupide', 'superficiel');
// créez un tableau meals , 10 plats français
$meals = array('cuisses de grenouilles', 'pot au feu', 'blanquette de veau', 'quiche lorraine', 'couscous', 'bouillabaisse','Tartiflette','raclette','fondue savoyarde','Mousse au chocolat');
// créez une fonction "generateGroupName" permettant d'afficher une combinaisson au hasard d'un plat suivi d'un defaut => exemple: "Tartiflette frustrée"
// affichage dans une div, de couleur rose, et tous les mots doivent commencer par une majuscule

function generateGroupName($tableau1,$tableau2,$color = 'pink',$html = 'div')
{
  $str = ucwords($tableau1[array_rand($tableau1)] . ' ' . $tableau2[array_rand($tableau2)]);
  return '<'.$html.' style="color:'.$color.';">'.$str.'</'.$html.'>';
}
echo generateGroupName($meals,$defaults);
echo generateGroupName($fruits,$musiques,'blue','h2');






//

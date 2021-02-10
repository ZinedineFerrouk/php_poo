<?php
// echo "<br />";  // pour un retour à la ligne
//Manuel seulement ! Internet interdit !
// ne pas réinventer la roue, fonction existe surement deja !!!
$fable = "Maître corbeau sur son arbre perché tenait en son bec un fromage";

//calculez le nombre de caractères dans la chaîne ci-dessus, et stockez-la dans une variable nommée "myStringLength" :
$myStringLength = mb_strlen($fable);
//affichez la variable myStringLength
echo $myStringLength;
echo '<br>';

//calculez le nombre de mots dans la phrase précédente, et affichez le
function str_word_count_utf8($str) {
  return count(preg_split('~[^\p{L}\p{N}\']+~u',$str));
}
echo str_word_count_utf8($fable);
echo '<br>';
//affichez la chaîne toute en majuscule
echo mb_strtoupper($fable);
echo '<br>';
//affichez la chaîne avec seulement la première lettre de la phrase en majuscule
echo ucfirst($fable);
echo '<br>';
//affichez la chaîne avec la première lettre de chaque mot en majuscule
echo ucwords($fable);
echo '<br>';
//affichez les 10 premiers caractères de la chaîne
echo mb_substr($fable,0,10);
echo '<br>';
//affichez la chaîne à l'envers (le dernier caractère en premier)
function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
echo mb_strrev($fable);
echo '<br>';
//remplacez tous les "a" par des "?"
echo strtr($fable,'a','?');
echo '<br>';
//affichez la valeur de pi (π) à l'écran (une fonction existe)
$pi = pi();
echo $pi;
echo '<br>';
//arrondissez la valeur de pi à 2 décimale, et affichez la
echo round($pi,2);
echo '<br>';
//générez un nombre aléatoire entre 10 et 20, et affichez le
echo rand(10,20);
echo '<br>';
//stockez tous les mots de la chaîne $fable dans un array nommé "words"
$words = explode(' ',$fable);
//affichez le premier mot de votre array
echo $words[0];
//affichez le deuxième mot de votre array
echo $words[1];
//affichez le dernier mot de votre array, sans compter le nombre d'élément (une fonction spécifique existe)
echo end($words);
//essayez la fonction suivante : print_r($words);
echo '<pre>';
print_r($words);
echo '</pre>';
//reformez une chaîne à partir de votre array. Chaque mot doit être recollés avec un "<br />". Stockez cette chaîne dans une variable nommée "fable2"
$fable2 = implode('<br>',$words);
echo $fable2;
//Affichez l'année actuelle
echo date('Y',time());
//Affichez la date au format suivant : jj/mm/yyyy
echo date('d/m/Y');


echo date('l jS \of F Y h:i:s A');
//affichez tous les paramètres de configuration de PHP dans votre page (une fonction existe pour ça)
// phpinfo();

// nombre de secondes depuis 1 janvier 1970 ( Temps UNIX )
echo time();
echo '<br>';

// nombre de seconde entre 1 janvier 1970 et ici le 6 fevrier 1978 à 15h15 et 10 secondes
$dateNaissance = strtotime('1978-02-06 15:15:10');
echo $dateNaissance;
echo '<br>';
// 06 02 1978
echo date('d m Y',$dateNaissance);
echo date('d m Y',strtotime('1978-02-06 15:15:10'));

$tomorrow = strtotime('tomorrow');
$twoMonth = strtotime('+2months');
echo strtotime("+1 week 2 days 4 hours 2 seconds");

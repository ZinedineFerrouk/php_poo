<?php
//////////////////////////////////////
// BOUCLES
//////////////////////////////////////
// WHILE
$i = 0;
$num = 50;
while ($i < 10) {
  $num--;
  $i++;
}
echo $num; // 40
echo '<br>';
// DO WHILE
do {
  $i++;
} while ($i < 20);
echo $i; // 20

// FOR
echo '<br>';
for ($i=0; $i < 10; $i++) {
  echo $i;
}
echo '<br>';
// afficher les nombres de 1 à 100
for ($i=1; $i <= 100 ; $i++) {
  echo $i;
}
echo '<br>';
// afficher les nombres de 5 à 25, séparé par des virgules
for ($i=5; $i <= 25 ; $i++) {
  if($i != 25) {
    echo $i . ',';
  } else {
    echo $i;
  }
}
echo '<br>';
// affichez les multiples de 5 entre 0 et 100
for ($i=0; $i <= 100 ; $i+=5) {
  echo $i . ',';
}
echo '<br>';
// affichez les nombres pairs de 39 à 81 séparé par balise br
for ($i=39; $i <=81 ; $i++) {
  if($i % 2 == 0) {
    echo $i . '<br>';
  }
}
echo '<br>';
// affichez toutes les années de votre année de naissance à année en cours, chaque année dans un <p> avec la class => "birth_date"
$current_year = date('Y');
for ($i=1978; $i <= $current_year ; $i++) {
  echo '<p class="birth_date">'.$i.'</p>';
}
echo '<br>';
// affichez les nombres de 50 à 25, en ordre decroissant sauf 40 et 30
for ($i=50; $i >= 25 ; $i--) {
  if($i != 30 && $i != 40) {
    echo $i;
  }
}
echo '<br>';
// affichez , en html , les nombres de 1 à 50 , les nombres 36 à 46 en red
for ($i=1; $i <= 50 ; $i++) {
  $color = ($i >= 36 && $i <= 46) ? 'red' : 'black';
  echo '<span class="number" style="color:'.$color.';">'.$i.'</span>';
}
//$musiques = [];
// tableau simple
$musiques = array('Batterie','Basse','Guitare','Piano','Percu','Chant','Flute');
echo '<pre>';
print_r($musiques);
echo '</pre>';
// for
for ($i=0; $i < count($musiques) ; $i++) {
  echo $musiques[$i] . ',';
}
// foreach
foreach ($musiques as $instrument) {
  echo $instrument . ',';
}
$fruits = array('banane','kiwi','fraise','papaye','orange');
// jolie print_r
echo '<pre>';
print_r($fruits);
echo '</pre>';
// ul li avec for
echo '<ul>';
for ($i=0; $i < count($fruits) ; $i++) {
  echo '<li>'.$fruits[$i].'</li>';
}
echo '</ul>';
// ul li avec foreach
echo '<ol>';
foreach ($fruits as $fruit) {
  echo '<li>' . $fruit . '</li>';
}
echo '</ol>';
// tableau simple
$etudiants = array(
  'Killian','Irina','Laurent','Raynald'
);
echo '<pre>';
print_r($etudiants);
echo '</pre>';
// affichez le troisieme etudiants
echo $etudiants[2];
// ajoutez un etudiant
$etudiants[] = 'Zinedine';
echo '<pre>';
print_r($etudiants);
echo '</pre>';
// affichez le dernier => zinedine
echo $etudiants[4];
// modifiez un à un, chaque etudiants pour avoir son prenom et son nom
$etudiants[0] .= ' jhhjkfsd';
$etudiants[1] .= ' michel';
$etudiants[2] .= ' bernard';
$etudiants[3] .= ' jacky';
$etudiants[4] .= ' zidane';
echo '<pre>';
print_r($etudiants);
echo '</pre>';
// affichez chaque etudiant dans un p => class="student"
foreach ($etudiants as $etudiant) { ?>
  <p class="student"><?php echo $etudiant; ?></p>
<?php }
for ($i=0; $i < count($etudiants); $i++) { ?>
  <p class="student"><?php echo $etudiants[$i]; ?></p>
<?php }



// construisez un array nommé 'nums' contenant les nombres de 10 à 20
  // ceci avec une boucle for
$nums = array();
for ($i=10; $i <= 20 ; $i++) {
  $nums[] = $i;
}
echo '<pre>';
print_r($nums);
echo '</pre>';

// array associatif
$livre = array(
  'titre' => 'le rouge et le noir',
  'annee' => 1830,
  'pages' => 640,
  'auteur'=> 'Stendal'
);
// affichez le titre dans un h2
echo '<h2>'. $livre['titre'] .'</h2>';
// Stendhal
$livre['auteur'] = 'Stendhal';
// ajoutez le code ISBN 2083898793
$livre['isbn'] = 2083898793;
// ajoutez un prix (5,98)
$livre['price'] = 5.98;
// enlever l'année
unset($livre['annee']);
echo '<pre>';
print_r($livre);
echo '</pre>';
foreach ($livre as $key => $value) {
  echo '<p>'.$key.' : '.$value.'</p>';
}

// tableau $me
$me = array();
// age, nom , prenom
$me = array(
  'age'    => 43,
  'nom'    => 'Quidel',
  'prenom' => 'Antoine'
);
echo '<pre>';
print_r($me);
echo '</pre>';
// affichez votre age
echo '<p>'.$me['age'].'</p>';
// Faites-vous viellir de 5 ans
$me['age'] += 5;
// $me['age'] = $me['age'] + 5;
echo '<pre>';
print_r($me);
echo '</pre>';
$mess = array();
$mess[] = 45;
$mess[] = $etudiants;
$mess['me'] = $me;
echo '<pre>';
print_r($mess);
echo '</pre>';
// affichez votre age à partir de ce tableau $mess
echo $mess['me']['age'];
// affichez deuxieme etudiants à partir de $mess
echo $mess[1][1];

// Tableau multidimentionnels
$lettres = array();
$lettres[] = array('A','C','O');
$lettres[] = array('L','B','Z');
$lettres[] = array('I','R','K');
echo '<pre>';
print_r($lettres);
echo '</pre>';
// COBRA KAI
echo $lettres[0][1].$lettres[0][2].$lettres[1][1].$lettres[2][1].$lettres[0][0] . ' ' . $lettres[2][2].$lettres[0][0].$lettres[2][0];


$tiroirs = array('clef','monnaie','facture','facture2');
echo '<ul>';
foreach ($tiroirs as $element) { ?>
  <li><?= $element; ?></li>
<?php }
echo '</ul>';

// $paiements
$paiements = array(
  array(
    'montant' => 12.55,
    'date'    => '12/02/2020'
  ),
  array(
    'montant' => 22.55,
    'date'    => '13/02/2020'
  ),
  array(
    'montant' => 72,
    'date'    => '14/02/2020'
  ),
);
// affichez montant du deuxieme paiements
echo $paiements[1]['montant'];
// affichez la date du dernier paiements
echo $paiements[2]['date'];
// ajoutez un paiement au tableau $paiements
$paiements[] = array(
  'montant' => 142,
  'date'    => '15/02/2020'
);
// modifiez ce montant => 132
$paiements[3]['montant'] = 132;

echo '<pre>';
print_r($paiements);
echo '</pre>';
foreach ($paiements as $paiement) {
  echo '<p>Le montant est de ' . $paiement['montant'] . ' à la date du ' . $paiement['date']. '</p>';
}

for ($i=0; $i < count($paiements); $i++) {
  echo '<p>Le montant est de ' . $paiements[$i]['montant'] . ' à la date du ' . $paiements[$i]['date']. '</p>';
}

$arrayDeOuf = array(
  0 => "fdjsa",
  1 => 2332,
  2 => array(
      0 => "dsajf",
      "sdfsd" => array(
          0 => 9034,
          "kkk" => "vvv",
          2390 => array(
            'dede'  => 'drd'
          )
      ),
      array(
          0 => 1,
          1 => 2,
          3,
          "k"
      )
  )
);

echo '<pre>';
print_r($arrayDeOuf);
echo '</pre>';

echo $arrayDeOuf[2]['sdfsd'][2390]['dede'];

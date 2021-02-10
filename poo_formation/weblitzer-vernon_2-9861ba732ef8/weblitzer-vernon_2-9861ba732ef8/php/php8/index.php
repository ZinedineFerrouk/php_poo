<?php
require('vendor/autoload.php');
require('inc/pdo.php');
require('inc/function.php');

use JasonGrimes\Paginator;

$currentPage = 1;
$itemsPerPage = 100;
$offset = 0;
if(!empty($_GET['page'])) {
  $currentPage = $_GET['page'];
  $offset = ($currentPage - 1) * $itemsPerPage;
}
$urlPattern = '?page=(:num)';

// ecrire la request
$sql = "SELECT * FROM city ORDER BY Name ASC LIMIT $itemsPerPage OFFSET $offset";
// preparer notre request
$query = $pdo->prepare($sql);
// execute notre request
$query->execute();
// recuperer nos résultats
$villes = $query->fetchAll();
//debug($villes);
// count le nombre total de villes
$sql = "SELECT COUNT(ID) FROM city";
$query = $pdo->prepare($sql);
$query->execute();
$totalItems = $query->fetchColumn();

$paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);

include('inc/header.php');

  echo $paginator;

  echo '<p>Nombre total de villes : '.$totalItems.'</p>';
  echo '<hr>';
  foreach ($villes as $ville) {
    echo '<p>'.$ville['Name'].'</p>';
    echo '<ul>';
      echo '<a href="detail.php?id='.$ville['ID'].'">Voir plus</a>';
    echo '</ul>';
  }
include('inc/footer.php');

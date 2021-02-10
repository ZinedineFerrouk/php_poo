<?php
require('inc/pdo.php');
require('inc/function.php');
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM city WHERE ID = :id";
  $query = $pdo->prepare($sql);
  $query->bindValue(':id',$id,PDO::PARAM_INT);
  $query->execute();
  $ville = $query->fetch();
  //debug($ville);
  if(empty($ville)) {
    die('404');
  }
} else {
  die('404');
}
include('inc/header.php'); ?>
  <div class="one_city">
    <h1><?= $ville['Name']; ?></h1>
    <div class="wrap">
      <p>CountryCode : <?= $ville['CountryCode']; ?></p>
      <p>District : <?= $ville['District']; ?></p>
      <p>Population : <?= $ville['Population']; ?></p>
    </div>
  </div>
<?php include('inc/footer.php');

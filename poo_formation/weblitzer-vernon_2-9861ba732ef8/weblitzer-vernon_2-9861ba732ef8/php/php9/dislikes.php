<?php
require('inc/pdo.php');
require('inc/function.php');
// verifier que le get id existe bien et est numeric
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];
  // SELECT request à la bdd pour verifier si ce reves existe dans bdd
  $sql = "SELECT * FROM reves WHERE id = :id";
  $query = $pdo->prepare($sql);
  $query->bindValue(':id',$id,PDO::PARAM_INT);
  $query->execute();
  $dream = $query->fetch();
  // si ce reve existe
  if(!empty($dream)) {
      $sql = "UPDATE reves SET dislikes = dislikes + 1 WHERE id = :id";
      $query = $pdo->prepare($sql);
      $query->bindValue(':id',$id,PDO::PARAM_INT);
      $query->execute();
  }
}
header('Location: index.php');
die();

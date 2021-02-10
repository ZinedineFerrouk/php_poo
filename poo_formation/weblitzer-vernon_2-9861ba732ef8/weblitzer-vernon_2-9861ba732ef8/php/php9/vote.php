<?php
require('inc/pdo.php');
require('inc/function.php');
// verifier que le get id existe bien et est numeric
if(!empty($_GET['id']) && !empty($_GET['type']) && is_numeric($_GET['id'])) {
  if($_GET['type'] == 'like' || $_GET['type'] == 'dislike') {
    $id = $_GET['id'];
    $type = $_GET['type'];
    // SELECT request à la bdd pour verifier si ce reves existe dans bdd
    $sql = "SELECT * FROM reves WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
    $dream = $query->fetch();

    if(!empty($dream)) {
      if($type == 'like') {
        $sql = "UPDATE reves SET likes = likes + 1 WHERE id = :id";
      } else {
        $sql = "UPDATE reves SET dislikes = dislikes + 1 WHERE id = :id";
      }
      $query = $pdo->prepare($sql);
      $query->bindValue(':id',$id,PDO::PARAM_INT);
      $query->execute();

    }
  }
}

header('Location: index.php');
die();

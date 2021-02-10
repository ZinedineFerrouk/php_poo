<?php
require('inc/pdo.php');
require('inc/function.php');
$errors = array();
// si form est soumis
if(!empty($_POST['submitted'])) {
  // Faille XSS
  $author = trim(strip_tags($_POST['author']));
  $reve   = trim(strip_tags($_POST['reve']));
  // validation
  $errors = validText($errors,$author,'author',3,50);
  $errors = validText($errors,$reve,'reve',3,250);
  if(count($errors) == 0) {
      // insert into
      $sql = "INSERT INTO reves (author,reve,created_at)
              VALUES (:author,:reve,NOW())";
      $query = $pdo->prepare($sql);
      $query->bindValue(':author',$author,PDO::PARAM_STR);
      $query->bindValue(':reve',$reve,PDO::PARAM_STR);
      $query->execute();
      // redirection
      header('Location: index.php');
  }
}
include('inc/header.php'); ?>
<div class="wrap">
  <form action="" method="post">
    <label for="author">Auteur *</label>
    <input type="text" id="author" name="author" value="<?php if(!empty($_POST['author'])) { echo $_POST['author']; } ?>">
    <span class="error"><?php if(!empty($errors['author'])) {echo $errors['author']; } ?></span>

    <label for="reve">Votre rêve *</label>
    <input type="text" id="reve" name="reve" value="<?php if(!empty($_POST['reve'])) { echo $_POST['reve']; } ?>">
    <span class="error"><?php if(!empty($errors['reve'])) {echo $errors['reve']; } ?></span>

    <input type="submit" name="submitted" value="Ajouter">
  </form>
</div>
<?php include('inc/footer.php');

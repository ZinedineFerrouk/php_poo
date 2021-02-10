<?php
require('inc/pdo.php');
require('inc/function.php');
$errors = array();
$success = false;
// si form soumis
if(!empty($_POST['submitted'])) {
  // faille xss
  $nom      = trim(strip_tags($_POST['nom']));
  $district = trim(strip_tags($_POST['district']));
  $code     = trim(strip_tags($_POST['code']));
  $pop      = trim(strip_tags($_POST['pop']));
  // Validation de chacun des champs
  // name => obligatoire, min 2, max 35
  $errors = validText($errors,$nom,'nom',2,35);
  // country code => obligatore , exactement 3 caracteres
  if(!empty($code)) {
    if(mb_strlen($code) != 3) {
      $errors['code'] = 'Mettre 3 caractères exactement';
    }
  } else {
    $errors['code'] = 'Veuillez renseigner ce champ';
  }
  // district => obligatoire ,min 2, max 20
  $errors = validText($errors,$district,'district',2,20);
  // population => obligatoire , entier positif
  if(!empty($pop)) {
    if(!filter_var($pop,FILTER_VALIDATE_INT)) {
      $errors['pop'] = 'Veuillez renseigner un nombre entier';
    } elseif($pop <= 0) {
      $errors['pop'] = 'Veuillez renseigner un nombre positif';
    } elseif(mb_strlen($pop) > 11) {
      $errors['pop'] = 'Population trop grande';
    }
  } else {
    $errors['pop'] = 'Veuillez renseigner ce champ';
  }

  // si pas d'error
  if(count($errors) == 0) {
    // INSERT INTO
    $sql = "INSERT INTO city (Name,CountryCode,District,Population)
            VALUES (:name,:code,:district,:pop)";
    $query = $pdo->prepare($sql);
    $query->bindValue(':name',$nom,PDO::PARAM_STR);
    $query->bindValue(':code',$code,PDO::PARAM_STR);
    $query->bindValue(':district',$district,PDO::PARAM_STR);
    $query->bindValue(':pop',$pop,PDO::PARAM_INT);
    $query->execute();
    $success = true;
    $last_id = $pdo->lastInsertId();
    header('Location: detail.php?id='.$last_id);
    die();
  }
}
debug($_POST);
debug($errors);
include('inc/header.php'); ?>
<h1>Ajouter une ville</h1>

<div class="wrap">

  <form action="" method="post">
    <label for="nom">Nom de la ville</label>
    <input type="text" id="nom" name="nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
    <span class="error"><?php if(!empty($errors['nom'])) { echo $errors['nom']; } ?></span>

    <label for="district">District</label>
    <input type="text" id="district" name="district" value="<?php if(!empty($_POST['district'])) { echo $_POST['district']; } ?>">
    <span class="error"><?php if(!empty($errors['district'])) { echo $errors['district']; } ?></span>

    <label for="code">Country code</label>
    <input type="text" id="code" name="code" value="<?php if(!empty($_POST['code'])) { echo $_POST['code']; } ?>">
    <span class="error"><?php if(!empty($errors['code'])) { echo $errors['code']; } ?></span>

    <label for="pop">Population</label>
    <input type="number" id="pop" name="pop" value="<?php if(!empty($_POST['pop'])) { echo $_POST['pop']; } ?>">
    <span class="error"><?php if(!empty($errors['pop'])) { echo $errors['pop']; } ?></span>

    <input type="submit" name="submitted" value="Ajouter une ville">

  </form>

</div>
<?php include('inc/footer.php');

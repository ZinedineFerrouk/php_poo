<?php
require('class/Form.php');
require('class/Validation.php');
$errors = array();
if(!empty($_POST['submitted'])) {
  $validation = new Validation();
  $nom     = trim(strip_tags($_POST['nom']));
  $prenom  = trim(strip_tags($_POST['prenom']));
  $message = trim(strip_tags($_POST['message']));
  $errors = $validation->validText($errors,$nom,'nom', 3, 60);
  $errors = $validation->validText($errors,$prenom,'prenom', 3, 60);
  $errors = $validation->validText($errors,$message,'message', 8, 1000);
  if(count($errors) == 0) {
    // Action
  }
}
$form = new Form($errors,'POST');
?>

<form action="" method="post">
  <?= $form->label('nom'); ?>
  <?= $form->input('nom'); ?>
  <?= $form->error('nom'); ?>

  <?= $form->label('prenom', 'Prénom *'); ?>
  <?= $form->input('prenom'); ?>
  <?= $form->error('prenom'); ?>

  <?= $form->label('message'); ?>
  <?= $form->textarea('message'); ?>
  <?= $form->error('message'); ?>

  <?= $form->submit('Envoyer','submitted'); ?>
</form>

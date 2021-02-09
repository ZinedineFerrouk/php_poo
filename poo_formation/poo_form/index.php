<?php
require('class/Form.php');
require('class/Validation.php');

$errors = [];



if (!empty($_POST['submitted'])) {
    // die('ici');
    $valide = new Validation();
    $errors = $valide->validateInput($errors, $_POST['nom'], 'nom');
}

$form = new Form($errors, 'POST');
?>

<form action="" method="post">

    <!-- NOM -->
    <?= $form->label('nom'); ?>
    <?= $form->input('nom'); ?>
    <?= $form->error('nom'); ?>

    <!-- PRENOM -->
    <?= $form->label('prenom'); ?>
    <?= $form->input('prenom'); ?>
    <?= $form->error('prenom'); ?>

    <!-- MESSAGE -->
    <?= $form->label('message'); ?>
    <?= $form->textarea('message'); ?>
    <?= $form->error('message'); ?>

    <?= $form->submit('Envoyer'); ?>

</form>
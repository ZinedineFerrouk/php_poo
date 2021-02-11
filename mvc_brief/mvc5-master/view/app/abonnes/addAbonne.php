<h1>Ajouter un abonne</h1>

<form action="" method="post">
    <?= $form->label('nom') ?>
    <?= $form->input('nom') ?>
    <?= $form->error('nom') ?>
    
    <?= $form->label('prenom') ?>
    <?= $form->input('prenom') ?>
    <?= $form->error('prenom') ?>

    <?= $form->label('email') ?>
    <?= $form->input('email') ?>
    <?= $form->error('email') ?>

    <?= $form->label('age') ?>
    <?= $form->inputNum('age') ?>
    <?= $form->error('age') ?>

    <?= $form->submit('submitted') ?>
</form>
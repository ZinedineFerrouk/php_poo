<h1>Modifier un Abonne</h1>

<form action="" method="post">
    <?= $form->label('nom') ?>
    <?= $form->input('nom', $abonne->nom) ?>
    <?= $form->error('nom') ?>
    
    <?= $form->label('prenom') ?>
    <?= $form->input('prenom', $abonne->prenom) ?>
    <?= $form->error('prenom') ?>

    <?= $form->label('email') ?>
    <?= $form->input('email', $abonne->email) ?>
    <?= $form->error('email') ?>

    <?= $form->label('age') ?>
    <?= $form->inputNum('age', $abonne->age) ?>
    <?= $form->error('age') ?>

    <?= $form->submit('submitted') ?>
</form>
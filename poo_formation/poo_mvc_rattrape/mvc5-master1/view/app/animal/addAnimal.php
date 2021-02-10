<br>

<h1>Ajouter un animal</h1>

<br>

<form action="" method="post">
    <?= $form->label('title') ?>
    <?= $form->input('title') ?>
    <?= $form->error('title') ?>
    
    <?= $form->label('description') ?>
    <?= $form->textarea('description') ?>
    <?= $form->error('description') ?>

    <?= $form->submit('submitted') ?>
</form>
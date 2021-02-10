<h1>Modifier un Animal</h1>

<form action="" method="post">
    <?= $form->label('title') ?>
    <?= $form->input('title', $animal->title) ?>
    <?= $form->error('title') ?>
    
    <?= $form->label('description') ?>
    <?= $form->textarea('description', $animal->description) ?>
    <?= $form->error('description') ?>

    <?= $form->submit('submitted') ?>
</form>
<h1>Ajouter un produit</h1>

<form class="" action="" method="post">
    <div class="m-3">
        <?= $form->label('titre') ?>
        <?= $form->input('titre') ?>
        <?= $form->error('titre') ?>
    </div>

    <div class="m-3">
        <?= $form->label('reference') ?>
        <?= $form->input('reference') ?>
        <?= $form->error('reference') ?>
    </div>

    <div class="m-3">
        <?= $form->label('description') ?>
        <?= $form->textarea('description') ?>
        <?= $form->error('description') ?>
    </div>

    <div class="m-3 pt-5">
        <?= $form->submit('submitted') ?>
    </div>
</form>
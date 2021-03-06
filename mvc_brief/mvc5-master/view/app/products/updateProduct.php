<h1>Modifier un produit</h1>

<form class="" action="" method="post">
    <div class="m-3">
        <?= $form->label('titre') ?>
        <?= $form->input('titre', $product->titre) ?>
        <?= $form->error('titre') ?>
    </div>

    <div class="m-3">
        <?= $form->label('reference') ?>
        <?= $form->input('reference', $product->reference) ?>
        <?= $form->error('reference') ?>
    </div>

    <div class="m-3">
        <?= $form->label('description') ?>
        <?= $form->textarea('description', $product->description) ?>
        <?= $form->error('description') ?>
    </div>

    <div class="m-3 pt-5">
        <?= $form->submit('submitted') ?>
    </div>
</form>
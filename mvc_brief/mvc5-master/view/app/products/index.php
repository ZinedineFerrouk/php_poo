<h1> <?= $message ?> </h1>
<a href="<?= $view->path('addProduct'); ?>">Ajouter un Produit</a>

<div id="products">
    <p>Total : <?= $total; ?></p>
    <?php foreach ($products as $product) { ?>
        <div class="m-4 w-50 mx-auto product">
            <p>id: <?= $product->id; ?></p>
            <h2 class="m-1"><strong>Titre :</strong> <?= $product->titre; ?></h2>
            <h3 class="m-1"><strong>Reference :</strong> <?= $product->reference; ?></h3>
            <p class="m-1"><strong>Description :</strong> <?= $product->description; ?></p>
            
            <a class="m-1" href="<?= $view->path('showProduct', array($product->id)); ?>">Voir plus</a>
            <a class="m-1" href="<?= $view->path('updateProduct', array($product->id)); ?>">Modifier</a>
            <a class="m-1" href="<?= $view->path('deleteProduct', array($product->id)); ?>">Supprimer</a>
        </div>
    <?php } ?>
</div>
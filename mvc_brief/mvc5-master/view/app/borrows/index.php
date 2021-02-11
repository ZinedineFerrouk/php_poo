<h1>Ajouter un emprunt :</h1>

<!-- FORMULAIRE -->
<div class="m-4 w-75 mx-auto">
    <form action="" method="post">
        <?= $form->label('Abonné : ') ?>
        <?= $form->select('nom', $abonnes, 'nom', 'prenom') ?>

        <?= $form->label('Produits : ') ?>
        <?= $form->select('titre', $products, 'id', 'titre') ?>

        <?= $form->submit('submitted') ?>
    </form>
</div>

<!-- EMPRUNTS EN COURS -->
<div id="borrows">
    <p class="font-weight-bold">Emprunts en cours : <?= $total; ?></p>
    <h2> <?= $message ?> </h2>
    <?php foreach ($borrowsNonRendu as $borrow) { ?>
        <div class="m-4 w-50 mx-auto borrow">
            <p><span class="m-1 font-weight-bold">Id :</span><?= $borrow->id; ?></p>
            <h2 class="m-1"><span class="font-weight-bold">Id_Abonne :</span> <?= $borrow->id_abonne; ?></h2>
            <h3 class="m-1"><span class="font-weight-bold">Id_Product :</span> <?= $borrow->id_product; ?></h3>
            <p class="m-1"><span class="font-weight-bold">Date d'emprunt :</span> <?= $borrow->date_start; ?></p>
            <p class="m-1"><span class="font-weight-bold">Date de fin d'emprunt :</span> Non rendu</p>
            <button onclick="return confirm('Voulez vous vraiment rendre ce livre')">Rendre le produit</button>
        </div>
    <?php } ?>
</div>

<!-- EMPRUNTS TERMINEES -->
<div id="borrows">
    <p class="font-weight-bold">Emprunt terminés : </p>
    <?php foreach ($borrowsRendu as $borrow) { ?>
        <div class="m-4 w-50 mx-auto borrow">
            <p><span class="m-1 font-weight-bold">Id :</span><?= $borrow->id; ?></p>
            <h2 class="m-1"><span class="font-weight-bold">Id_Abonne :</span> <?= $borrow->id_abonne; ?></h2>
            <h3 class="m-1"><span class="font-weight-bold">Id_Product :</span> <?= $borrow->id_product; ?></h3>
            <p class="m-1"><span class="font-weight-bold">Date d'emprunt :</span> <?= $borrow->date_start; ?></p>
            <p class="m-1"><span class="font-weight-bold">Date de fin d'emprunt :</span> <?= $borrow->date_start; ?></p>
        </div>
    <?php } ?>
</div>

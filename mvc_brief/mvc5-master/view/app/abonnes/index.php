<h1> <?= $message ?> </h1>
<a href="<?= $view->path('addAbonne'); ?>">Ajouter un Abonne</a>

<div id="abonnes">
    <p>Total : <?= $total; ?></p>
    <?php foreach ($abonnes as $abonne) { ?>
        <div class="abonne">
            <p>id: <?= $abonne->id; ?></p>
            <h2 class="m-1"><strong>Nom :</strong> <?= $abonne->nom; ?></h2>
            <h3 class="m-1"><strong>Prenom :</strong> <?= $abonne->prenom; ?></h3>
            <p class="m-1"><strong>Email :</strong> <?= $abonne->email; ?></p>
            <p class="m-1"><strong>Age :</strong> <?= $abonne->age; ?></p>
            <p class="m-1"><strong>Crée le :</strong> <?= $abonne->created_at; ?></p>
            <a class="m-1" href="<?= $view->path('showAbonne', array($abonne->id)); ?>">Voir plus</a>
            <a class="m-1" href="<?= $view->path('updateAbonne', array($abonne->id)); ?>">Modifier</a>
            <a class="m-1" href="<?= $view->path('deleteAbonne', array($abonne->id)); ?>">Supprimer</a>
        </div>
    <?php } ?>
</div>
<h2 style="text-align: center;font-size:33px;margin-top: 30px;">Listing des animaux</h2>
<a href="<?= $view->path('addAnimal'); ?>">Ajouter un Animal</a>

<br>
<br>

<div id="animaux">
    <p>Total : <?= $total; ?></p>
<?php foreach ($animaux as $animal) { ?>
    <div class="animal">
        <p>id: <?= $animal->id; ?></p>
        <h2 style="font-weight: bold;font-size: 2em;"><?= $animal->title; ?></h2>
        <p><?= nl2br($animal->description); ?></p>
        <a href="<?= $view->path('one-animal',array($animal->id)); ?>">Voir plus</a>
        <a href="<?= $view->path('updateAnimal',array($animal->id)); ?>">Modifier</a>
        <a onclick="return confirm('Voulez vous effacez cet animal')" href="<?= $view->path('deleteAnimal',array($animal->id)); ?>">Supprimer</a>
    </div>
<?php } ?>
</div>
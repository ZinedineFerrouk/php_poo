<h2 style="text-align: center;font-size:33px;margin-top: 30px;">Listing des animaux</h2>
<div id="animaux">
    <p>Total : <?= $total; ?></p>
<?php foreach ($animaux as $animal) { ?>
    <div class="animal">
        <p>id: <?= $animal->id; ?></p>
        <h2 style="font-weight: bold;font-size: 2em;"><?= $animal->title; ?></h2>
        <p><?= nl2br($animal->description); ?></p>
        <a href="<?= $view->path('one-animal',array($animal->id)); ?>">Voir plus</a>
    </div>
<?php } ?>
</div>
<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>
    <p>Nom : <?= $name; ?></p>
    <ul>
    <?php foreach($legumes as $fruit) {
        echo '<li>'.$fruit.'</li>';
    } ?>
    </ul>



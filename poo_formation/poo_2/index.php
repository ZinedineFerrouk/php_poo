<?php

require('class/ChaineMaster.php');

$chaine = new ChaineMaster(525252);

echo $chaine->gras();
echo $chaine->italique();
echo $chaine->souligne();
echo $chaine->majuscule();
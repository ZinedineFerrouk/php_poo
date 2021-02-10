<?php

require('class/ChaineMaster.php');

$chaine = new ChaineMaster('Programmation orientée objet en PHP');
// chaine de caractere en gras
echo $chaine->gras();
// chaine de caractere en italic
echo $chaine->italic();
// chaine de caractere souligné
echo $chaine->souligne();
// chaine de caractere en majuscules
echo $chaine->majuscules();

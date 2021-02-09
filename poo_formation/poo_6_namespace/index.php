<?php
// NAMESPACE
spl_autoload_register();
// require('Ink/Repository/ArticleRepository.php');
// require('Ink/Service/Tools.php');

use \Ink\Repository\ArticleRepository;
use \Ink\Repository\Tools as Toto;
use \Ink\Service\Tools;

$a = new Tools();
$a->strlen();

echo '<br>';

$b = new ArticleRepository();
echo $b->hello();

echo '<br>';

$c = new Toto();
echo $c->bonjour();
<?php
// namespace
spl_autoload_register();
// require('Inc/Repository/ArticleRepository.php');
// require('Inc/Service/Tools.php');

use \Inc\Repository\ArticleRepository;
use \Inc\Repository\Tools as Toto;
use \Inc\Service\Tools;

$repo = new ArticleRepository();
echo $repo->gogo();

$tools = new Tools();
echo $tools->strlen();

$toolrepo = new Toto();
echo $toolrepo->debug();

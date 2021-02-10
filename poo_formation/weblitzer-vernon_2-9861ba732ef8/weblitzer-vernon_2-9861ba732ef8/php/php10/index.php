<?php

require('vendor/autoload.php');


use Carbon\Carbon;
use Cocur\Slugify\Slugify;




printf("Now: %s", Carbon::now());


$slugify = new Slugify();
echo $slugify->slugify('Hel2KHJhk éhiuiu iu logffd dfsg df World!'); // hello-world

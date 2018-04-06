<?php
require 'vendor/autoload.php';

use App\Replacers\Linio;
use App\Replacers\It;
use App\Replacers\Linianos;
use App\Replacer;

$replacers = [
    new Linianos(),
    new Linio(),
    new It(),
];

$replacer = new Replacer($replacers);
$replacer->print(1, 100);
<?php

use TarsisioXavier\Sprompt\Sprompt;

require __DIR__ . '/../vendor/autoload.php';

$continued = Sprompt::pause();

var_dump($continued);

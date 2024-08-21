<?php

use TarsisioXavier\Sprompt\Sprompt;

require __DIR__ . '/../vendor/autoload.php';

$story = Sprompt::textarea(
    label: 'Tell me a story',
    placeholder: 'Weave me a tale',
);

var_dump($story);

echo str_repeat(PHP_EOL, 5);

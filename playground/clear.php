<?php

use TarsisioXavier\Sprompt\Sprompt;

require __DIR__ . '/../vendor/autoload.php';

Sprompt::note('This will disappear.');

Sprompt::pause('Press [Enter] to continue.');

Sprompt::clear();

Sprompt::note('This will also disappear.');

Sprompt::pause('Press [Enter] to continue.');

Sprompt::clear();

<?php

use TarsisioXavier\Sprompt\Sprompt;

require __DIR__ . '/../vendor/autoload.php';

Sprompt::intro('Intro');
Sprompt::note('Note');
Sprompt::info('Info');
Sprompt::warning('Warning');
Sprompt::error('Error');
Sprompt::alert('Alert');
Sprompt::outro('Outro');

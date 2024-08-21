<?php

use TarsisioXavier\Sprompt\Sprompt;

require __DIR__ . '/../vendor/autoload.php';

Sprompt::intro('Welcome to Laravel');

$name = Sprompt::suggest(
    label: 'What is your name?',
    placeholder: 'E.g. Taylor Otwell',
    options: [
        'Dries Vints',
        'Guus Leeuw',
        'James Brooks',
        'Jess Archer',
        'Joe Dixon',
        'Mior Muhammad Zaki Mior Khairuddin',
        'Nuno Maduro',
        'Taylor Otwell',
        'Tim MacDonald',
    ],
    validate: fn($value) => match (true) {
        ! $value => 'Please enter your name.',
        default => null,
    },
);

$path = Sprompt::text(
    label: 'Where should we create your project?',
    placeholder: 'E.g. ./laravel',
    validate: fn($value) => match (true) {
        ! $value => 'Please enter a path',
        $value[0] !== '.' => 'Please enter a relative path',
        default => null,
    },
);

$password = Sprompt::password(
    label: 'Provide a password',
    validate: fn($value) => match (true) {
        ! $value => 'Please enter a password.',
        strlen($value) < 5 => 'Password should have at least 5 characters.',
        default => null,
    },
);

$type = Sprompt::select(
    label: 'Pick a project type',
    default: 'ts',
    options: [
        'ts' => 'TypeScript',
        'js' => 'JavaScript',
    ],
);

$tools = Sprompt::multiselect(
    label: 'Select additional tools.',
    default: ['pint', 'eslint'],
    options: [
        'pint' => 'Pint',
        'eslint' => 'ESLint',
        'prettier' => 'Prettier',
    ],
    validate: function ($values) {
        if (count($values) === 0) {
            return 'Please select at least one tool.';
        }
    }
);

$install = Sprompt::confirm(
    label: 'Install dependencies?',
);

if ($install) {
    Sprompt::spin(fn() => sleep(3), 'Installing dependencies...');
}

Sprompt::error('Error');
Sprompt::warning('Warning');
Sprompt::alert('Alert');

Sprompt::note(<<<EOT
    Installation complete!

    To get started, run:

        cd {$path}
        php artisan serve
    EOT);

Sprompt::outro('Happy coding!');

var_dump(compact('name', 'path', 'password', 'type', 'tools', 'install'));

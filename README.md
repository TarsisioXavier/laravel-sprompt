# Sprompt stands for Simple Prompt

It's a small class to be used as a facade for accessing the Laravel Prompts' functions so you don't need to import every function in your PHP file to use them.

## Installation
Install it using composer like:
```shell
composer require tarsisio-xavier/sprompt
```

## Usage
```php
<?php

use TarsisioXavier\Sprompt\Sprompt;

require __DIR__ . '/../vendor/autoload.php';

$name = Sprompt::text('What is your name?');

// Input the name... e.g. Maeve Millay

Sprompt::info("You said that your name is {$name}");

// Output: You said that your name is Maeve Millay
```

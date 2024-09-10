<?php

use BadMethodCallException;
use Laravel\Prompts\Prompt;
use TarsisioXavier\Sprompt\Sprompt;

it('Redirects to the real function.', function () {
    Prompt::fake();

    Sprompt::note('Dummy text');

    Prompt::assertOutputContains('Dummy text');
});

it('Throws BadMethodCallException when calling invalid function.', function () {
    Sprompt::notAFunction();
})->throws(BadMethodCallException::class, 'Call to undefined method ' . Sprompt::class . '::notAFunction()');

it('Can be instantiated and call functions.', function () {
    Prompt::fake();
    $prompt = new Sprompt();

    $prompt->note('Dummy text');

    Prompt::assertOutputContains('Dummy text');
});

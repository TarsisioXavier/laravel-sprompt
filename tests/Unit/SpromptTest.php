<?php

namespace TarsisioXavier\Sprompt\Tests\Unit;

use Laravel\Prompts\Key;
use Laravel\Prompts\Prompt;
use TarsisioXavier\Sprompt\Sprompt;
use TarsisioXavier\Sprompt\Tests\TestCase;

class SpromptTest extends TestCase
{
    public function test_if_ok()
    {
        Prompt::fake([Key::ENTER]);

        $result = Sprompt::confirm('Is this working?');

        $this->assertTrue($result);
    }
}

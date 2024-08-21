<?php

namespace TarsisioXavier\Sprompt;

use BadMethodCallException;

class Sprompt
{
    static array $FUNCTIONS = [
        'text',
        'textarea',
        'password',
        'select',
        'multiselect',
        'confirm',
        'pause',
        'suggest',
        'search',
        'multisearch',
        'spin',
        'table',
        'note',
        'error',
        'warning',
        'info',
        'alert',
        'intro',
        'outro',
        'progress',
        'form'
    ];

    public static function __callStatic($name, $arguments)
    {
        if (!in_array($name, static::$FUNCTIONS)) {
            throw new BadMethodCallException(
                sprintf(
                    'Call to undefined method %s::%s()',
                    static::class,
                    $name
                )
            );
        }

        $function = '\\Laravel\\Prompts\\' . $name;

        return $function(...$arguments);
    }
}

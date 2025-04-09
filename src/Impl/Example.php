<?php

namespace App\Impl;

use App\ExampleInterface;

class Example implements ExampleInterface
{
    public function greet(string $name): string
    {
        return 'Ol�, ' . htmlspecialchars($name) . ' do Example Class';

    }
}

<?php

namespace Khanguyennfq\Unlock\Solid\OpenClosed;

class Deer implements Animals
{
    public string $food;
    public function __construct(string $food)
    {
        $this->food = $food;
    }

    public function eat()
    {
        // TODO: Implement eat() method.
        return "Deer only eats " . $this->food;
    }
}

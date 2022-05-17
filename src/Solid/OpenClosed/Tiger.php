<?php

namespace Khanguyennfq\Unlock\Solid\OpenClosed;

class Tiger implements Animals
{
    public string $food;
    public function __construct(string $food)
    {
        $this->food = $food;
    }

    public function eat(): string
    {
       // TODO: Implement eat() method.
        return "Tiger only eats " . $this->food;
    }
}

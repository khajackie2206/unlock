<?php

namespace Khanguyennfq\Unlock\Solid\Single;

class Car
{
    public string $sound;
    public function getSound(): string
    {
        return "the car goes " . $this->sound;
    }
}

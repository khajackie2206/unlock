<?php

namespace Khanguyennfq\Unlock\Solid\ISP;

class Farmer implements IHuman, IFarmer
{
    public function eat(): string
    {
        // TODO: Implement eat() method.
        return "Eat food!";
    }
    public function sleep(): string
    {
        // TODO: Implement sleep() method.
        return "Go to sleep!";
    }
    public function run(): string
    {
        // TODO: Implement run() method.
        return "Let's run!";
    }
    public function workOnField(): string
    {
        // TODO: Implement workOnField() method.
        return "Farmer work on the field";
    }
}

<?php

namespace Khanguyennfq\Unlock\Solid\ISP;

class Farmer implements HumanInterface, FarmerInterface
{
    public function eat(): string
    {
        return "Eat food!";
    }
    public function sleep(): string
    {
        return "Go to sleep!";
    }
    public function run(): string
    {
        return "Let's run!";
    }
    public function workOnField(): string
    {
        return "Farmer work on the field";
    }
}

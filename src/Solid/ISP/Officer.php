<?php

namespace Khanguyennfq\Unlock\Solid\ISP;

class Officer implements IHuman, IOfficer
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
        return "Let's run";
    }
    public function workOnOffice(): string
    {
        // TODO: Implement workOnOffice() method.
        return "Officer work in the office";
    }
}

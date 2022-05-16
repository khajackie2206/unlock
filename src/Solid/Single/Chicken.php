<?php

class Chicken
{
    public string $voice;
    public function getVoice(): string
    {
           return " a chicken goes " . $this->voice;
    }
}

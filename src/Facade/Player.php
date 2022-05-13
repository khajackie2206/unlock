<?php

namespace Khanguyennfq\Unlock\Facade;

class Player
{
    public string $movie;
    public function playMovie(string $movie): string
    {
        $this->movie = $movie;
        return "you are watching: " . $this->movie;
    }
    public function stopMovie(string $movie): string
    {
        $this->movie = $movie;
        return "You stopped to watch: " . $this->movie;
    }
}

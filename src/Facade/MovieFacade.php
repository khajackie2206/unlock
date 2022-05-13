<?php

namespace Khanguyennfq\Unlock\Facade;

use Khanguyennfq\Unlock\Facade\Player;
use Khanguyennfq\Unlock\Facade\Light;
use Khanguyennfq\Unlock\Facade\Screen;

class MovieFacade
{
    public string $movie = '';
    /**
     * @var Player
     */
    protected Player $player;
    /**
     * @var Light
     */
    protected Light $light;

    /**
     * @var Screen
     */
    protected Screen $screen;


    public function __construct(string $movie)
    {
        $this->movie = $movie;
        $this->player = new Player();
        $this->light = new Light();
        $this->screen = new Screen();
    }

    public function watchMovie(): void
    {
        echo "-----GET READY TO WATCH A MOVIE-----" . '<br>';
        echo $this->player->playMovie($this->movie) . '<br>';
        echo $this->screen->turnOn() . '<br>';
        echo $this->light->turnOff() . '<br>';
    }

    public function stopMovie(): void
    {
        echo "----DONT WANT TO WATCH THIS MOVIE ANYMORE---" . '<br>';
        echo $this->player->stopMovie($this->movie) . '<br>';
        echo $this->screen->turnOff() . '<br>';
        echo $this->light->turnOn() . '<br>';
    }
}

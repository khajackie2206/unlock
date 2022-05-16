<?php

declare(strict_types=1);

namespace Khanguyennfq\Unlock\tests\Facade;
use Khanguyennfq\Unlock\Facade\Player;
use Khanguyennfq\Unlock\Facade\MovieFacade;
use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    public function testGetMovies()
    {
        $getMovie = new Player();
        $result = $getMovie->playMovie('Doctor Strange 2');
        $this->assertEquals('you are watching: Doctor Strange 2', $result);
    }
}

<?php

require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Khanguyennfq\Unlock\Facade\MovieFacade;

/*
 * Client want to watch a movie
 */
$movieFacade = new MovieFacade('Doctor Strange 2');

$movieFacade->watchMovie();
$movieFacade->stopMovie();

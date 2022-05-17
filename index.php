<?php

require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Khanguyennfq\Unlock\Facade\MovieFacade;
use Khanguyennfq\Unlock\Solid\OpenClosed\Deer;
use Khanguyennfq\Unlock\Solid\OpenClosed\Tiger;
use Khanguyennfq\Unlock\Solid\OpenClosed\DashBoard;
use Khanguyennfq\Unlock\Solid\ISP\Farmer;
use Khanguyennfq\Unlock\Solid\ISP\Officer;
use Khanguyennfq\Unlock\Singleton\DBConnect;
use Khanguyennfq\Unlock\Factory\South;
use Khanguyennfq\Unlock\Factory\North;

/*
 * Client want to watch a movie with Facade
 */
$movieFacade = new MovieFacade('Doctor Strange 2');

$movieFacade->watchMovie();
$movieFacade->stopMovie();

/*
 * Open/Closed principle
 */

$deer = new Deer('glass');
$tiger = new Tiger('meat');
$arr = array($deer, $tiger);
$dashboard = new DashBoard();
echo $dashboard->eatList($arr);

/*
 * Interface Segregation Principle
 */

$farmer = new Farmer();
$officer = new Officer();
echo $farmer->workOnField() . "<br>";
echo $officer->workOnOffice()."<br>";

/*
 * Singleton
 */

$con1 = DBConnect::getConn();
$con2 = DBConnect::getConn();

if ($con1 === $con2)
{
    echo "They are completely similar to each other!!!";
}

/*
 * Factory
 */

$southTree = new South();
echo $southTree->getTreeName();
$nouthTree = new North();
echo $nouthTree->getTreeName();

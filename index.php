<?php
require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use Khanguyennfq\Unlock\Application;
use Khanguyennfq\Unlock\Controller\HomeController;
use Khanguyennfq\Unlock\Controller\MainController;
use Khanguyennfq\Unlock\Controller\CalController;


$application = new Application(
    new HomeController(),
    new MainController(),
    new CalController()
);

$application->start();
echo "<br>";
echo $application->get(4,3);

































































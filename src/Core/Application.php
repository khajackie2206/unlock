<?php

namespace Khanguyennfq\Unlock\Core;

use Khanguyennfq\Unlock\Controller\MainController;
use Khanguyennfq\Unlock\Controller\HomeController;
use Khanguyennfq\Unlock\Controller\CalController;
use Khanguyennfq\Unlock\Helper\UseTrait;
use Khanguyennfq\Unlock\Helper\Cat;
use Khanguyennfq\Unlock\Helper\Car;
use Khanguyennfq\Unlock\Helper\Dog;

class Application
{
    /**
     * @var HomeController
     */
    protected HomeController $homeController;

    /**
     * @var MainController
     */
    protected MainController $mainController;

    /**
     * @var CalController
     */
    protected CalController $calController;

    /**
     * @var string
     */
    protected string $requestMethod;

    /**
     * @var string
     */
    protected string $requestUri;

    /**
     * @param HomeController $homeController
     * @param MainController $mainController
     * @param CalController $calController
     */
    public function __construct(HomeController $homeController, MainController $mainController, CalController $calController)
    {
        $this->homeController = $homeController;
        $this->mainController = $mainController;
        $this->calController = $calController;
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestUri = $_SERVER['REQUEST_URI'];
    }
    /**
     * return void
     */
    public function start()
    {
        $request = $this->requestMethod . ':' . $this->requestUri;
        switch ($request) {
            case 'GET:/':
                $response = $this->homeController->index();
                break;
            default:
                $response = $this->calController->calSum(5, 4);
        }
        echo $response;
    }

    public static function get(int $a, int $b): int
    {
        $result = new UseTrait();
        return $result->getSum($a, $b);
    }

    public function getAnimal(): string
    {
        $callCat = new Cat();
        return $callCat->animalEat();
    }

    public function getRun(): string
    {
        $callDog = new Dog();
        return $callDog->run();
    }
}

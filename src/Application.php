<?php

namespace Khanguyennfq\Unlock;

use Khanguyennfq\Unlock\Controller\MainController;
use Khanguyennfq\Unlock\Controller\HomeController;
use Khanguyennfq\Unlock\Controller\CalController;

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
    protected $requestMethod;
    /**
     * @var string
     */
    protected $requestUri;

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
            case 'GET:/unlock/unlock/':
                $response = $this->homeController->index();
                break;
            default:
                $response = $this->calController->calSum(5, 4);
        }
        echo $response;
    }
    public function get($a, $b)
    {
        $result = new TestTrait\UseTrait();
        return $result->getSum($a, $b);
    }
}

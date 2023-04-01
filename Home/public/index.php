<?php

    require_once __DIR__.'/../../vendor/autoload.php';

use Phpcourse\Myproject\Classes\Controllers\Categories\Students\PortfolioController;
use Phpcourse\Myproject\Classes\Controllers\HomeController;
    use Phpcourse\Myproject\Classes\Controllers\AboutController;
    use Phpcourse\Myproject\Classes\Controllers\Contacts;
    use Phpcourse\Myproject\Classes\Controllers\NewsController;
    use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
    use Phpcourse\Myproject\Classes\Controllers\StudentsParliamentController;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\StartApplication;

    $router = new Router();


    ///sp
    ///contacts
    ///passport
    ///students/portfolios - тот что ты сделала

    $router->addRoute('/', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/home', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/about', AboutController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/contacts', Contacts::class,ControllerMethodName::METHOD_NAME);
    $router->addRoute('/news',NewsController::class, ControllerMethodName::METHOD_NAME);

    $router->addRoute('/sp',StudentsParliamentController::class,ControllerMethodName::METHOD_NAME);
    $router->addRoute('/portfolios',PortfolioController::class,ControllerMethodName::METHOD_NAME);

    $app = new StartApplication($router, $_SERVER['REQUEST_URI'] ?? '/');
    try {
        $app->run();
    } catch (SmartyException $e) {
        echo $e->getMessage();
        exit();
    }

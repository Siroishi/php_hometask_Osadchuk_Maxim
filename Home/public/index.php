<?php

    require_once __DIR__.'/../../vendor/autoload.php';

    use Phpcourse\Myproject\Classes\Controllers\HomeController;
    use Phpcourse\Myproject\Classes\Controllers\AboutController;
    use Phpcourse\Myproject\Classes\Controllers\CabinetController;
    use Phpcourse\Myproject\Classes\Controllers\NewsController;
    use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
    use Phpcourse\Myproject\Classes\Controllers\PhotoController;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\StartApplication;

    $router = new Router();

    $router->addRoute('/', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/about', AboutController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/cabinet', CabinetController::class,ControllerMethodName::METHOD_NAME);
    $router->addRoute('/news',NewsController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/home', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/photo',PhotoController::class,ControllerMethodName::METHOD_NAME);

    $app = new StartApplication($router, $_SERVER['REQUEST_URI'] ?? '/');
    try {
        $app->run();
    } catch (SmartyException $e) {
        echo $e->getMessage();
    }


$var = 1;
    $text = "text$var";

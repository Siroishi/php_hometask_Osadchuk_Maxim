<?php
    require_once __DIR__.'/../../vendor/autoload.php'; // Autoload files using Composer autoload

    use Phpcourse\Myproject\Classes\Controllers\MainController;
use Phpcourse\Myproject\Classes\Controllers\AboutController;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\StartApplication; // Use the namespace of the class you want to use

    $router = new Router();

    $router->addRoute(['/', MainController::class, 'index']);
    $router->addRoute(['/about', AboutController::class, 'index']);

    $app = new StartApplication($router, $_SERVER['REQUEST_URI'] ?? '/');

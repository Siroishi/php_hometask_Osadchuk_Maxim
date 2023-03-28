<?php
    // Autoload Classes using Composer autoload
    require_once __DIR__.'/../../vendor/autoload.php';

    // Using the namespaces of the Classes we want to use
    // "use" - keyword to get path to necessary Class
    use Phpcourse\Myproject\Classes\Controllers\MainController;
    use Phpcourse\Myproject\Classes\Controllers\AboutController;
    use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\StartApplication;

    // Create object of Class Router
    $router = new Router();

    // And save all routes in it. Now we have 2 pages (main, about)
    $router->addRoute('/', MainController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/about', AboutController::class, ControllerMethodName::METHOD_NAME);

    // Start our application.
    $app = new StartApplication($router, $_SERVER['REQUEST_URI'] ?? '/');

    $app->run();

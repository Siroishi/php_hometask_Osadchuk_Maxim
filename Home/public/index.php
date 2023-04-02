<?php
    require_once __DIR__.'/../../vendor/autoload.php';

    use Phpcourse\Myproject\Classes\Controllers\Categories\Auth\AuthController;
    use Phpcourse\Myproject\Classes\Controllers\Categories\Students\PortfolioController;
    use Phpcourse\Myproject\Classes\Controllers\MainPages\AboutController;
    use Phpcourse\Myproject\Classes\Controllers\MainPages\ContactsController;
    use Phpcourse\Myproject\Classes\Controllers\MainPages\HomeController;
    use Phpcourse\Myproject\Classes\Controllers\MainPages\NewsController;
    use Phpcourse\Myproject\Classes\Controllers\MainPages\PassportController;
    use Phpcourse\Myproject\Classes\Controllers\MainPages\StudentsParliamentController;
    use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
    use Phpcourse\Myproject\Classes\Router\Router;
    use Phpcourse\Myproject\Classes\StartApplication;

    $router = new Router();

    $router->addRoute('/', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/home', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/about', AboutController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/contacts', ContactsController::class,ControllerMethodName::METHOD_NAME);
    $router->addRoute('/news',NewsController::class, ControllerMethodName::METHOD_NAME);

    $router->addRoute('/sp',StudentsParliamentController::class,ControllerMethodName::METHOD_NAME);
    $router->addRoute('/portfolios',PortfolioController::class,ControllerMethodName::METHOD_NAME);

    $router->addRoute('/passport', PassportController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/login', AuthController::class, 'login');
    $router->addRoute('/logout', AuthController::class, 'logout');

    $app = new StartApplication($router, $_SERVER['REQUEST_URI'] ?? '/');
    try {
        $app->run();
    } catch (SmartyException $e) {
        exit($e->getMessage());
    }

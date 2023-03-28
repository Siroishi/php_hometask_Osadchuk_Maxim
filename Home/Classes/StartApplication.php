<?php

namespace Phpcourse\Myproject\Classes;

use Phpcourse\Myproject\Classes\Router\Router;

class StartApplication
{
    private string $URI;

    public function __construct(Router $router, string $URI)
    {
        echo 'application created<br>';
        $this->URI = $URI;
        $this->run($router);
    }

    public function run($router): void
    {
        // $this->URI
        // $router[0][0]
        $arr = $router->getRoutes();

        foreach ($arr as $route){
            if($route[0] === $this->URI){
                $x = $route[2];
                (new $route[1])->$x();
            }
        }
    }
}

<?php

namespace Phpcourse\Myproject\Classes\Router;

class Router
{
    protected array $routes = [];

    function addRoute($route): void
    {
        $this->routes[] = $route;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}

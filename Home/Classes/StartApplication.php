<?php

namespace Phpcourse\Myproject\Classes;

use Phpcourse\Myproject\Classes\Controllers\NotFoundController;
use Phpcourse\Myproject\Classes\Router\Router;

class StartApplication
{
    // $URI - те що ми пишемо в браузер:
    // 127.0.0.1 - перекине нас на сторінку Home
    // 127.0.0.1/about - перекине нас на сторінку About
    // 127.0.0.1/adasdasd - перекине нас на сторінку 404, бо такого роута не існує
    private string $URI;
    // об'єкт класу Router буде записаний в цю змінну
    private object $routerData;
    // просто константи
    const CONTROLLER = 1;
    const ACTION = 2;

    public function __construct(readonly Router $router, string $URI)
    {
        $this->URI = $URI;
        $this->routerData = $router;
    }

    public function run(): void
    {
        try{ // спробуємо знайти збіг нашого URI з патерном роутера
            $match = $this->routerData->findRoute($this->URI);
            $controller = $match[self::CONTROLLER];
            $action = $match[self::ACTION];
            (new $controller)->$action();
        }catch(\Throwable $e){
            (new NotFoundController)->showErrorPage($e->getMessage(),$e->getCode());
        }
    }
}

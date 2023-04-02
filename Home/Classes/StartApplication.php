<?php

namespace Phpcourse\Myproject\Classes;

use Phpcourse\Myproject\Classes\Controllers\MainPages\NotFoundController;
use Phpcourse\Myproject\Classes\Router\Router;
use SmartyException;

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

    /**
     * @throws SmartyException
     */
    public function run(): void{
        $this->checkRequest();
        try{ // спробуємо знайти збіг нашого URI з патерном роутера
            $match = $this->routerData->findRoute($this->URI);
            // $match[3]
            // pattern ControllerName Action=index
            $controller = $match[self::CONTROLLER];
            $action = $match[self::ACTION];
            (new $controller)->$action();
        }catch(\Throwable $e){
            (new NotFoundController)->showErrorPage(
                $e->getMessage(),
                $e->getCode(),
            );
        }
    }

    public function checkRequest(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['login']) && isset($_POST['password'])) {
                session_start();
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['password'] = $_POST['password'];
                header('Location: /');
            }
        }
    }
}

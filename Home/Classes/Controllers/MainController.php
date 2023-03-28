<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;

class MainController implements ControllerMethodName
{
    public function index() : void{
        include_once $_SERVER['DOCUMENT_ROOT'].'/pages/main.php';
    }
}

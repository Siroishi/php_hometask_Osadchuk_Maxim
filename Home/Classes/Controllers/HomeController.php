<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;

class HomeController implements ControllerMethodName
{
    public function index() : void{
        include_once $_SERVER['DOCUMENT_ROOT'].'/pages/home.php';
    }
}

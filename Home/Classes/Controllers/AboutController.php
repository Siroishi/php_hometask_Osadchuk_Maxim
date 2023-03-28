<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;

class AboutController implements ControllerMethodName
{
    public function index() : void{
        include_once $_SERVER['DOCUMENT_ROOT'].'/pages/about.php';
    }
}

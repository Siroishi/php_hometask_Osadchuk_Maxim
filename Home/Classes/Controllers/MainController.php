<?php

namespace Phpcourse\Myproject\Classes\Controllers;

class MainController
{
    public function index (): void
    {
        include_once $_SERVER['DOCUMENT_ROOT'].'/pages/main.php';
    }
}

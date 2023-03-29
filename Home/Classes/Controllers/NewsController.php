<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;

class NewsController implements ControllerMethodName
{

    /**
     * @return void
     */
    public function index(): void
    {
        include_once $_SERVER['DOCUMENT_ROOT'].'/pages/news.php';
    }
}

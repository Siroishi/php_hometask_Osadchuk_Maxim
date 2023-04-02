<?php

namespace Phpcourse\Myproject\Classes\Controllers\MainPages;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class HomeController implements ControllerMethodName
{
    /**
     * @throws SmartyException
     */
    public function index() : void{
        $data = ['title' => 'Home', 'content' => 'main_pages/home'];
        new SmartyRendering($data);
    }
}

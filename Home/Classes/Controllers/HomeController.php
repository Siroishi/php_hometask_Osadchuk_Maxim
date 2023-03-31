<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class HomeController implements ControllerMethodName
{
    /**
     * @throws SmartyException
     */
    public function index() : void{
        $data = ['title' => 'Home'];
        new SmartyRendering('templates/default/home.tpl', $data);
    }
}

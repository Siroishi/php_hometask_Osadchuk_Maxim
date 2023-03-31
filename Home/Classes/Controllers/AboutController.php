<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;

class AboutController implements ControllerMethodName
{
    /**
     * @throws \SmartyException
     */
    public function index() : void{
        $data = ['title' => 'About'];
        new SmartyRendering('templates/default/about.tpl', $data);
    }
}

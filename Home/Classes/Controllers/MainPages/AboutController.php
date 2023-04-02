<?php

namespace Phpcourse\Myproject\Classes\Controllers\MainPages;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class AboutController implements ControllerMethodName
{
    /**
     * @throws SmartyException
     */
    public function index() : void{
        $data = ['title' => 'About', 'content' => 'content/about'];
        new SmartyRendering($data);
    }
}

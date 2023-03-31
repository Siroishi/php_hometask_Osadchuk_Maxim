<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class CabinetController implements ControllerMethodName
{
    /**
     * @throws SmartyException
     */
    public function index(): void
    {
        $data = ['title' => 'Cabinet'];
        new SmartyRendering('templates/default/cabinet.tpl', $data);
    }
}

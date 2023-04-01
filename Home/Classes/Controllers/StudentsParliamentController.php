<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class StudentsParliamentController implements ControllerMethodName
{

    /**
     * @throws SmartyException
     */
    public function index(): void
    {
        $data = ['title' => 'Students Parliament'];
        new SmartyRendering('templates/default/sp.tpl', $data);
    }
}

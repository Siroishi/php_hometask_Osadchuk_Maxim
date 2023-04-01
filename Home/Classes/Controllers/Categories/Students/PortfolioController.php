<?php

namespace Phpcourse\Myproject\Classes\Controllers\Categories\Students;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class PortfolioController implements ControllerMethodName
{

    /**
     * @return void
     * @throws SmartyException
     */
    public function index(): void
    {
        $data = ['title' => 'Portfolios'];
        new SmartyRendering('templates/default/categories/students/portfolios.tpl', $data);
    }
}

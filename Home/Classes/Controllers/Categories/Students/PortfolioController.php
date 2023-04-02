<?php

namespace Phpcourse\Myproject\Classes\Controllers\Categories\Students;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class PortfolioController implements ControllerMethodName
{
    /**
     * @throws SmartyException
     */
    public function index(): void
    {
        $data = ['title' => 'Portfolios', 'content' => 'categories/students/portfolios'];
        new SmartyRendering($data);
    }
}

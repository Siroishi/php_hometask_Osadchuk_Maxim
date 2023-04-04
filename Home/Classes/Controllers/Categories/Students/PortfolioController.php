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
        $data = ['title' => 'Portfolios', 'content' => 'additional_pages/portfolios'];
        new SmartyRendering($data);
    }
}

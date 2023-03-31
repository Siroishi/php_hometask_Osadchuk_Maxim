<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class NewsController implements ControllerMethodName
{
    /**
     * @throws SmartyException
     */
    public function index(): void
    {
        $data = ['title' => 'News'];
        new SmartyRendering('templates/default/news.tpl', $data);
    }
}

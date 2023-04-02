<?php

namespace Phpcourse\Myproject\Classes\Controllers\MainPages;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class PassportController implements ControllerMethodName
{
    /**
     * @throws SmartyException
     */
    public function index(): void
    {
        $data = ['title' => 'Passport', 'content' => 'additional_pages/passport'];
        new SmartyRendering($data);
    }
}

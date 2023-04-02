<?php

namespace Phpcourse\Myproject\Classes\Controllers\MainPages;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use Phpcourse\Myproject\Classes\Traits\TraitAuth;
use SmartyException;

class PassportController implements ControllerMethodName
{
    use TraitAuth;
    /**
     * @throws SmartyException
     */
    public function index(): void
    {
        $data = ['title' => 'Passport', 'content' => 'categories/services/passport', 'auth' => $this->startLogin()];
        new SmartyRendering($data);
    }
}

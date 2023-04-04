<?php

namespace Phpcourse\Myproject\Classes\Controllers\Categories\Auth;

use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use Phpcourse\Myproject\Classes\Traits\AuthTrait;
use SmartyException;

class AuthController
{
    use AuthTrait;
    /**
     * @throws SmartyException
     */
    public function login(): void
    {
        $data = ['title' => 'Login', 'content' => 'auth/login'];
        new SmartyRendering($data);
    }
    public function logout(): void
    {
        $this->startLogout();
    }
}

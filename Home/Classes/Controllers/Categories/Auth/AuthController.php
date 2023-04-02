<?php

namespace Phpcourse\Myproject\Classes\Controllers\Categories\Auth;

use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use Phpcourse\Myproject\Classes\Traits\TraitAuth;
use SmartyException;

class AuthController
{
    use TraitAuth;
    /**
     * @throws SmartyException
     */
    public function login(): void
    {
        $data = ['title' => 'Login', 'content' => 'categories/services/auth/login', 'auth' => $this->startLogin()];
        new SmartyRendering($data);
    }
    public function logout(): void
    {
        $this->startLogout();
    }
}

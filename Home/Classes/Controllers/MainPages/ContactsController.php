<?php

namespace Phpcourse\Myproject\Classes\Controllers\MainPages;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use Phpcourse\Myproject\Classes\Traits\TraitAuth;
use SmartyException;

class ContactsController implements ControllerMethodName
{
    use TraitAuth;
    /**
     * @throws SmartyException
     */
    public function index(): void
    {
        $data = ['title' => 'Contacts', 'content' => 'content/contacts', 'auth' => $this->startLogin()];
        new SmartyRendering($data);
    }
}

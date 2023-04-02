<?php

namespace Phpcourse\Myproject\Classes\Controllers\MainPages;

use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use Phpcourse\Myproject\Classes\Traits\TraitAuth;
use SmartyException;

class NotFoundController
{
    use TraitAuth;
    /**
     * @throws SmartyException
     */
    public function showErrorPage(
        string $message,
        string $code,
    ): void
    {
        $data = ['title' => $code, 'message' => $message, 'code' => $code, 'content' => 'content/404'];
        new SmartyRendering($data);
    }
}

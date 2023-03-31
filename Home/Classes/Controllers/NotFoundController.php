<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use SmartyException;

class NotFoundController
{
    /**
     * @throws SmartyException
     */
    public function showErrorPage(
        string $message,
        string $code,
    ): void
    {
        $data = ['title' => $code, 'message' => $message, 'code' => $code];
        new SmartyRendering('templates/default/404.tpl', $data);
    }
}

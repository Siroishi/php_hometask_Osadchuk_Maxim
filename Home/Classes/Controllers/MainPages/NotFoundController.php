<?php

namespace Phpcourse\Myproject\Classes\Controllers\MainPages;

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
        new SmartyRendering($data);
    }
}

<?php

namespace Phpcourse\Myproject\Classes\Controllers\MainPages;

use Phpcourse\Myproject\Classes\Rendering\SmartyRendering;
use Phpcourse\Myproject\Classes\Traits\DebugTrait;
use SmartyException;

class NotFoundController
{
    use DebugTrait;
    /**
     * @throws SmartyException
     */
    public function showErrorPage(
        string $message,
        string $code,
    ): void
    {
        self::debugConsole('Not found');
        $data = ['title' => $code, 'message' => $message, 'code' => $code, 'content' => 'error_pages/404'];
        new SmartyRendering($data);
    }
}

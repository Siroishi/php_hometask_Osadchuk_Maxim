<?php

namespace Phpcourse\Myproject\Classes\Controllers;

class NotFoundController
{

    public function showErrorPage(string $message, string $code): void
    {
        extract(['message' => $message, 'code' => $code]);
        ob_start();
        include $_SERVER['DOCUMENT_ROOT'].'/pages/404.php';
        echo ob_get_clean();
    }
}

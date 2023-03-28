<?php

namespace Phpcourse\Myproject\Classes\Controllers;

class AboutController
{
    function index(){
        include_once $_SERVER['DOCUMENT_ROOT'].'/pages/about.php';
    }
}

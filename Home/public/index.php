<?php
    require_once '../../vendor/autoload.php';
    use Phpcourse\Myproject\Classes\MyMainClass;
    $myMainClass = new MyMainClass();
    echo $myMainClass::MY_CONST;

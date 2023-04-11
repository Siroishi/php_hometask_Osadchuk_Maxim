<?php

namespace Phpcourse\Myproject\Classes\Rendering;

use Phpcourse\Myproject\Classes\Traits\DebugTrait;
use Smarty;

class Rendering{
    use DebugTrait;

    /**
     * @throws \SmartyException
     */
    public function __construct(array $data){
        foreach ($data as $key => $value){
            echo $key . ' = ' . $value . '<br>';
            self::debugConsole($key . ' = ' . $value . '<br>');
        }
        $smarty = new Smarty();
        $smarty->setTemplateDir('templates/one');
        $smarty->setConfigDir('templates/config');
        $smarty->setCompileDir('templates/compile');
        $smarty->setCacheDir('templates/cache');
        $smarty->assign($data);

        $smarty->display('index.tpl');
    }
}

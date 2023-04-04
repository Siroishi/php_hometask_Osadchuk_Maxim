<?php

namespace Phpcourse\Myproject\Classes\Rendering;
use Phpcourse\Myproject\Classes\Traits\AuthTrait;
use Smarty;
use SmartyException;

class SmartyRendering extends Smarty {
    use AuthTrait;

    /**
     * @throws SmartyException
     */
    public function __construct(array $data, string $template = 'index.tpl'){
        parent::__construct();

        $smarty = new Smarty();
        $smarty->setTemplateDir('templates/default/tpl');
        $smarty->setCompileDir('templates/default/smarty/compile');
        $smarty->setConfigDir('templates/default/smarty/config');
        $smarty->setCacheDir('templates/default/smarty/cache');
        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;

        $smarty->assign('auth',$this->startLogin());

        foreach ($data as $key => $param){
            $smarty->assign($key,$param);
        }

        $smarty->display("templates/default/$template");
    }
}

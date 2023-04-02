<?php

namespace Phpcourse\Myproject\Classes\Rendering;
use Phpcourse\Myproject\Classes\Traits\TraitAuth;
use Smarty;
use SmartyException;

class SmartyRendering extends Smarty {
    use TraitAuth;

    /**
     * @throws SmartyException
     */
    public function __construct(array $data){
                parent::__construct();

        $smarty = new Smarty();
        $smarty->setTemplateDir('templates/default');
        $smarty->setCompileDir('templates/default/compile');
        $smarty->setConfigDir('templates/default/config');
        $smarty->setCacheDir('templates/default/cache');
        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;

        $smarty->assign('auth',$this->startLogin());

        extract($data);

        foreach ($data as $key => $param){
            global $$key;
            $smarty->assign($key,$param);
        }

        $smarty->display('templates/default/index.tpl');
    }
}

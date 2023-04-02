<?php

namespace Phpcourse\Myproject\Classes\Traits;

trait TraitAuth{
    private function checkAuth(): bool
    {
        if(!isset($_SESSION['login']) || !isset($_SESSION['password'])){
            return false;
        }
        // TODO: зробити нормальну авторизацію
        if($_SESSION['login'] === 'admin' && $_SESSION['password'] === 'admin') {
            return true;
        }
        return false;
    }
    function startLogout(): void
    {
        session_start();
        if(session_destroy()){
            header('Location: /');
        }
    }
    function startLogin(): string|bool
    {
        session_start();
        if($this->checkAuth()){
            return $_SESSION['login'];
        }
        else{
            return false;
        }
    }
}

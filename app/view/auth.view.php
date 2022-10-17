<?php

// Mac OS
require_once 'libs/Smarty.class.php';

// Windows OS

class AuthView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function formLogin($error){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates\forms\login-form.tpl');
    }

    function test(){
        $this->smarty->display('templates\test.tpl');
    }
}

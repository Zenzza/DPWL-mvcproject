<?php
class Config {
    public function CtrlDinamis() {
        return[
            'default_controller' => 'LoginController',
            'default_method' => 'index'
        ];
    }
}

function base_url($path= ''){
    return 'http://localhost/mvcproject/' .ltrim($path,'/');
}

function redirect($path) {
    header("Location: " . base_url($path));
    exit;
}

?>
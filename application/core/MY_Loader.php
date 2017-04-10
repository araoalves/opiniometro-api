<?php

class MY_Loader extends CI_Loader{
    public function __construct() {
        parent::__construct();
    }
    
    public function interfaces($interfaceNome) {
        require_once APPPATH.'/interfaces/'.$interfaceNome.'.php';
    }
    
    public function dominio($dominioNome) {
        require_once APPPATH.'/dominio/'.$dominioNome.'.php';
    }
    
    public function dao($daoNome) {
        require_once APPPATH.'/dao/'.$daoNome.'.php';
    }
    
}

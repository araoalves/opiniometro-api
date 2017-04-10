<?php

ini_set('allow_url_fopen',1);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct()
	{
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
                die();
        }

		parent::__construct();
        $this->load->model('login_model','login');
	}

    public function logar() {

        $inputs = $this->input->get();

        $usuario = $this->login->recuperarUsuario($inputs['matricula']);
            
        echo json_encode($usuario);        
    }
        

}


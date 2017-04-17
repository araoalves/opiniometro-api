<?php

ini_set('allow_url_fopen',1);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $token = "e10adc3949ba59abbe56e057f20f883e";
        $inputs = $this->input->get();

        if($token == $inputs['token']){            
            $usuario = $this->login->recuperarUsuario($inputs['usuario']);            
            echo json_encode($usuario);
        }else{
            $retorno = array(
                'erro' => "800",
                'mensagem' => "O token não confere."
            );
            echo json_encode($retorno);
        }        
    }
        

}


<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include_once APPPATH.'/models/Dominio/Usuario.php';

class Login extends CI_Controller {

    public function __construct()
	{
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-XSRF-TOKEN, X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
                die();
        }

		parent::__construct();
        $this->load->model('login_model','login');
        $this->usuario = new Dominio\Usuario();
	}

    public function logar() {
        $token = "e10adc3949ba59abbe56e057f20f883e";
        $inputs = $this->input->post();

        if($token == $inputs['token']){            
            $user = $this->login->recuperarUsuario($inputs['user']);   
            echo json_encode((object) $user);
        }else{
            $retorno = array(
                'erro' => "800",
                'mensagem' => "O token não confere."
            );
            echo json_encode($retorno);
        }        
    }
        

}


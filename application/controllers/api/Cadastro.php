<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

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
        $this->load->model('cadastro_model','cadastro');
	}

    public function cadastrarOpiniao() {
        $token = "e10adc3949ba59abbe56e057f20f883e";
        $inputs = $this->input->post();

        $data_atual = date ("Y-m-d");

        if($token == $inputs['token']){ 

             $opiniao = array(
                'opiniao_data' => $data_atual,
                'opiniao_usuario' => $inputs['opiniao_usuario'],
                'opiniao_tipo' => $inputs['opiniao_tipo'],
                'opiniao_empresa' => $inputs['opiniao_empresa']                
             );

             $status = $this->cadastro->cadastrarOpiniao($opiniao);

              echo json_encode((object) $status);
            
        }else{
             $retorno = array(
                'erro' => "800",
                'mensagem' => "O token não confere."
            );
            echo json_encode($retorno);
        }
       
    }
        

}


<?php

ini_set('allow_url_fopen',1);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresa extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('empresa_model','empresa');
	}

    public function index() {
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = array(
			'titulo' => 'Cadastro de Empresas',
            'listEmpresas' => $this->empresa->recuperarEmpresas()
		);

        $this->template->show_admin('admin/empresas', $dados);

    }

}


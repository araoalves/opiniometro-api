<?php

ini_set('allow_url_fopen',1);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class OpiniaoEmpresa extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('opiniao_empresa_model','opiniao_empresa');
	}

    public function index() {
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = array(
			'titulo' => 'Relatório de Opiniões Visão Empresarial',
			'listOpiniaoEmpresa' =>  $this->opiniao_empresa->recuperarOpinioesEmpresa()
		);

        $this->template->show_admin('admin/opiniao_empresa', $dados);

    }

}


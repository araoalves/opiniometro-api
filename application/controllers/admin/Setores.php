<?php

ini_set('allow_url_fopen',1);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setores extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('setores_model','setores');
	}

    public function index() {
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = array(
			'titulo' => 'Cadastro de Setores',
			'listSetores' =>  $this->setores->recuperarSetores(),
            'listEmpresas' => $this->setores->recuperarEmpresas()
		);

        $this->template->show_admin('admin/setores', $dados);

    }

       function cadastrarSetor(){
         if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }
        
            $inputs = $this->input->post();

            $setor = array(
                'setor_descricao' => $inputs['descricao_setor'],
                'setor_empresa' => $inputs['select_cod_empresa']
            );                           

            $status = $this->setores->Inserir($setor);

            if($status){
                $this->session->set_flashdata('cadastro_sucesso', 'Setor cadastrado com sucesso.');
                redirect('admin/setores');
            }else{
                $this->session->set_flashdata('error', 'Não foi possível inserir o setor.');
                redirect('admin/setores');
            }             
    }

    function removerSetor(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

         $id = $this->input->post();

         if(is_null($id))
			redirect('admin/home');
        
        $status = $this->setores->Excluir($id['id']);
		// Checa o status da operação gravando a mensagem na seção
		if($status){
			$this->session->set_flashdata('exclusao_sucesso', 'Setor excluido com sucesso.');
            redirect('admin/setores');
		}else{
			$this->session->set_flashdata('exclusao_error', 'Não foi possível excluir o setor.');
             redirect('admin/setores');
		}
    }

    function editarSetor(){
         if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = $this->input->post();

        $id = $dados['id_setor_modal_hidden'];

       $setor = array(
                'setor_descricao' => $dados['descricao_setor_modal'],
                'setor_empresa' => $dados['select_cod_empresa_modal']
        ); 

        $status = $this->setores->Atualizar($id,$setor);

        if($status){
             $this->session->set_flashdata('exclusao_sucesso', 'Setor editado com sucesso.');
              redirect('admin/setores');
        }else{
              $this->session->set_flashdata('exclusao_error', 'Não foi possível editar o setor.');
              redirect('admin/setores');
        }
         
    }

}
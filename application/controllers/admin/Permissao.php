<?php

ini_set('allow_url_fopen',1);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Permissao extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('permissao_model','permissao');
	}

    public function index() {
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = array(
			'titulo' => 'Cadastro de Permissões',
			'listPermissoes' =>  $this->permissao->recuperarPermissoes()
		);

        $this->template->show_admin('admin/permissao', $dados);

    }

    function cadastrarPermissao(){
         if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }
        
            $inputs = $this->input->post();
            $permissao = array(
                'permissao_descricao' => $inputs['descricao']
            );                           

            $status = $this->permissao->Inserir($permissao);
            if($status){
                $this->session->set_flashdata('cadastro_sucesso', 'Permissão cadastrada com sucesso.');
                redirect('admin/permissao');
            }else{
                $this->session->set_flashdata('error', 'Não foi possível inserir o permissão.');
                redirect('admin/permissao');
            }             
    }

    function removerPermissao(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

         $id = $this->input->post();

         if(is_null($id))
			redirect('admin/home');
        
        $status = $this->permissao->Excluir($id['id']);
		// Checa o status da operação gravando a mensagem na seção
		if($status){
			$this->session->set_flashdata('exclusao_sucesso', 'Permissão excluida com sucesso.');
            redirect('admin/permissao');
		}else{
			$this->session->set_flashdata('exclusao_error', 'Não foi possível excluir a permissão.');
            redirect('admin/permissao');
		}
    }

    function editarPermissao(){
         if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = $this->input->post();

        $id = $dados['id_permissao_hidden'];

        $permissao = array(
            'permissao_descricao' => $dados['descricao_permissao']
        );

        $status = $this->permissao->Atualizar($id,$permissao);

        if($status){
             $this->session->set_flashdata('exclusao_sucesso', 'Financiamento editado com sucesso.');
             redirect('admin/permissao');
        }else{
              $this->session->set_flashdata('exclusao_error', 'Não foi possível editar o financiamento.');
              redirect('admin/permissao');
        }
         
    }
        

}


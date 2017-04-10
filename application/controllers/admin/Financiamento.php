<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financiamento extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
        $this->load->model('financiamentos_model','financiamento');
	}

    function index(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = array(
			'titulo' => 'Financiamentos',
			'listFinanciamentos' => $this->recuperarListFinanciamentos()
		);
        
        $this->template->show_admin('admin/financiamento', $dados);
    }

    function cadastrarFinanciamento(){
         if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }
        
        $financiamentos = $this->input->post();               

        if($financiamentos['vt52perdsc'] != is_numeric($financiamentos['vt52perdsc'])){
           $this->session->set_flashdata('error', 'Favor, colocar na porcentagem apenas números.');
           redirect('admin/financiamento');
        }else{

            $status = $this->financiamento->Inserir($financiamentos);
            if($status){
                $this->session->set_flashdata('cadastro_sucesso', 'Financiamento cadastrado com sucesso.');
                redirect('admin/financiamento');
            }else{
                $this->session->set_flashdata('error', 'Não foi possível inserir o financiamento.');
                redirect('admin/financiamento');
            }
        }                 
    }

    function removerFinanciamento(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

         $id = $this->input->post();

         if(is_null($id))
			redirect('admin/home');
        
        $status = $this->financiamento->Excluir($id['id']);
		// Checa o status da operação gravando a mensagem na seção
		if($status){
			$this->session->set_flashdata('exclusao_sucesso', 'Financiamento excluido com sucesso.');
            redirect('admin/financiamento');
		}else{
			$this->session->set_flashdata('exclusao_error', 'Não foi possível excluir o financiamento.');
            redirect('admin/financiamento');
		}
    }

    function editarFinanciamento(){
         if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

         $dados = $this->input->post();

         if(!($dados['vt52desfin'] != $dados['descricao_hidden'] || $dados['vt52perdsc'] != $dados['percentual_hidden'])){
            $this->session->set_flashdata('exclusao_error', 'Você não alterou as informações.');
            redirect('admin/financiamento/financiamentos');
         }else{
            $id = $dados['id_hidden'];
            $financiamento = array(
                'vt52desfin' => $dados['vt52desfin'],
                'vt52perdsc' => $dados['vt52perdsc']
            );

             $status = $this->financiamento->Atualizar($id,$financiamento);

           if($status){
                $this->session->set_flashdata('exclusao_sucesso', 'Financiamento editado com sucesso.');
                redirect('admin/financiamento');
            }else{
                $this->session->set_flashdata('exclusao_error', 'Não foi possível editar o financiamento.');
                redirect('admin/financiamento');
            }

         }
    }

     private function recuperarListFinanciamentos(){        
        $listFinanciamentos = $this->financiamento->recuperarFinanciamentos();
        return $listFinanciamentos;
    }

}
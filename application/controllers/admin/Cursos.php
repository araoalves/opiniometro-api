<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();   
         $this->load->model('cursos_model','cursos');     
	}

    function index(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = array(
			'titulo' => 'Cursos',
			'list_vestibular' => $this->cursos->recuperarListaVestibular(),
            'list_financiamento' =>$this->cursos->recuperarListaFinanciamentos(),
            'list_cursos' =>$this->cursos->recuperarListaCursos()
		);       

       // var_dump($dados);

        $this->template->show_admin('admin/cursos', $dados);
    }

    function recuperarDadosVestibular(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = $this->input->post();

        echo json_encode ($this->cursos->recuperarDadosVestibular($dados['ano'], $dados['codVestibular'])) ; 
    }

    function cadastrarCursos(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = $this->input->post();

        $date = date('Y-m-d');

         $curso = array(
                'FK5304CODIGO' => $dados['codigo_hidden'],
                'FK5304TURNO' => $dados['turno_hidden'],
                'FK5304ANOVES' => $dados['ano_vest_hidden'],
                'FK5304CODVES' => $dados['cod_vest_hidden'],
                'FK5304CODCAM' => $dados['codCampus_hidden'],
                'FK5304CODCRS' => $dados['codCurso_hidden'],
                'FK5352CODIGO' => $dados['select_financiamento_vestibular'],
                'VT53VALCRS' => $dados['valor'],
                'VT53DATINI' => $date,
                'VT53DATFIM' => $date,
                'VT53INDATI' => $dados['select_status_vestibular']
         );

         if($dados['valor'] != is_numeric($dados['valor'])){
               $this->session->set_flashdata('cadastro_error', 'Favor, colocar no valor apenas números.');
           redirect('admin/cursos');
          }else{

            $status = $this->cursos->cadastrarCurso($curso);

            if($status){
                    $this->session->set_flashdata('cadastro_sucesso', 'Curso cadastrado com sucesso.');
                    redirect('admin/cursos');
                }else{
                    $this->session->set_flashdata('cadastro_error', 'Não foi possível cadastrar o curso.');
                    redirect('admin/cursos');
                }
          }
    }

       function removerCurso(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

         $id = $this->input->post();

         if(is_null($id))
			redirect('admin/home');
        
        $status = $this->cursos->Excluir($id['id']);
		// Checa o status da operação gravando a mensagem na seção
		if($status){
			$this->session->set_flashdata('exclusao_sucesso', 'Curso excluido com sucesso.');
           redirect('admin/cursos');
		}else{
			$this->session->set_flashdata('exclusao_error', 'Não foi possível excluir o Curso.');
            redirect('admin/cursos'); 
		}
    }

        function editarCurso(){
         if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

         $dados = $this->input->post();

          if($dados['valor_modal'] != is_numeric($dados['valor_modal'])){
               $this->session->set_flashdata('exclusao_error', 'Favor, colocar no valor apenas números.');
           redirect('admin/cursos');
          }else{

              $curso = array(
                'FK5304CODIGO' => $dados['codigo_modal_hidden'],
                'FK5304TURNO' => $dados['turno_modal_hidden'],
                'FK5304ANOVES' => $dados['ano_vest_hidden_modal'],
                'FK5304CODVES' => $dados['cod_vest_hidden_modal'],
                'FK5304CODCAM' => $dados['cod_campus_modal_hidden'],
                'FK5304CODCRS' => $dados['codigo_curso_modal_hidden'],
                'FK5352CODIGO' => $dados['select_financiamento_modal'],
                'VT53VALCRS' => $dados['valor_modal'],
                'VT53INDATI' => $dados['select_status_modal']
                );

                $status = $this->cursos->Atualizar($dados['cod_vt_53'],$curso);

                if($status){
                $this->session->set_flashdata('exclusao_sucesso', 'Curso Editado com sucesso.');
                redirect('admin/cursos');
                }else{
                    $this->session->set_flashdata('exclusao_error', 'Não foi possível Editar o Curso.');
                    redirect('admin/cursos');
                }
          }
          return false;
    }

}
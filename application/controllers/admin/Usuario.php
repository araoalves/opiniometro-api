<?php
ini_set('allow_url_fopen', 1);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model', 'usuario');
    }

    public function index()
    {
        if (!$this->session->userdata('usuario')) {
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = array(
            'titulo' => 'Cadastro de Usuários',
            'listUsuarios' => $this->usuario->recuperarUsuarios(),
            'listPermissoes' => $this->usuario->recuperarListPermissoes(),
            'listSetorEmpresa' => $this->usuario->recuperarListSetorEmpresa(),
            'listAllSetorEmpresa' => $this->usuario->recuperarListAllSetorEmpresa(),
            'listEmpresas' => $this->usuario->recuperarListEmpresas()
        );

        $this->template->show_admin('admin/usuario', $dados);

    }

    function cadastrarUsuario()
    {
        if (!$this->session->userdata('usuario')) {
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $inputs = $this->input->post();

        if (!$inputs['empresa']) {
            $inputs['empresa'] = $this->session->empresa;
        }

        $usuario = array(
            'usuario' => $inputs['usuario'],
            'usuario_senha' => md5($inputs['senha']),
            'usuario_nome' => $inputs['nome'],
            'usuario_cpf' => $inputs['cpf'],
            'usuario_email' => $inputs['email'],
            'usuario_telefone' => $inputs['telefone'],
            'usuario_dt_nasc' => $inputs['data_nascimento'],
            'usuario_permissao' => $inputs['select_permissao'],
            'usuario_empresa' => $inputs['empresa'],
            'usuario_setor' => $inputs['select_setor']
        );

        $status = $this->usuario->Inserir($usuario);
        if ($status) {
            $this->session->set_flashdata('cadastro_sucesso', 'Usuário cadastrado com sucesso.');
            redirect('admin/usuario');
        }
        else {
            $this->session->set_flashdata('error', 'Não foi possível inserir o usuário.');
            redirect('admin/usuario');
        }
    }

    function recuperarSetoresEmpresa()
    {
        if (!$this->session->userdata('usuario')) {
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = $this->input->post();

        echo json_encode($this->usuario->recuperarSetoresPorEmpresa($dados['codEmpresa']));
    }

    function removerUsuario()
    {
        if (!$this->session->userdata('usuario')) {
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $id = $this->input->post();

        if (is_null($id))
            redirect('admin/home');

        $status = $this->usuario->Excluir($id['id']);
		// Checa o status da operação gravando a mensagem na seção
        if ($status) {
            $this->session->set_flashdata('exclusao_sucesso', 'Usuário Removido com sucesso.');
            redirect('admin/usuario');
        }
        else {
            $this->session->set_flashdata('exclusao_error', 'Não foi possível excluir o Usuário.');
            redirect('admin/usuario');
        }
    }

    function editarSenhaUsuario()
    {
        if (!$this->session->userdata('usuario')) {
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = $this->input->post();

        $usuario = array(
            'usuario_senha' => md5($dados['senha_edit'])
        );

        $status = $this->usuario->Atualizar($dados['hidden_edit_senha'], $usuario);

        if ($status) {
            $this->session->set_flashdata('exclusao_sucesso', 'Senha alterada com sucesso.');
            redirect('admin/usuario');
        }
        else {
            $this->session->set_flashdata('exclusao_error', 'Não foi possível alterar a senha.');
            redirect('admin/usuario');
        }
    }

    function editarUsuario()
    {
        if (!$this->session->userdata('usuario')) {
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

        $dados = $this->input->post();

        $usuario = array(
            'usuario' => $dados['usuario_edit'],
            'usuario_nome' => $dados['nome_edit'],
            'usuario_cpf' => $dados['cpf_edit'],
            'usuario_email' => $dados['email_edit'],
            'usuario_telefone' => $dados['telefone_edit'],
            'usuario_dt_nasc' => $dados['data_nascimento_edit'],
            'usuario_permissao' => $dados['select_permissao_edit'],
            'usuario_setor' => $dados['select_setor_edit']
        );

        $status = $this->usuario->Atualizar($dados['id_usuario_hidden'], $usuario);

        if ($status) {
            $this->session->set_flashdata('exclusao_sucesso', 'Dados alterados com sucesso.');
            redirect('admin/usuario');
        }
        else {
            $this->session->set_flashdata('exclusao_error', 'Não foi possível alterar os dados.');
            redirect('admin/usuario');
        }
    }

}


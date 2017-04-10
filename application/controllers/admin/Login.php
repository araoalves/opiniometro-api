<?php

ini_set('allow_url_fopen',1);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('login_model','login');
	}

    public function index() {

        $inputs = $this->input->post();

        $usuario = $this->login->recuperarUsuario($inputs['matricula']);
     
        if(!empty($usuario)){

            if(md5($inputs['senha']) == $usuario[0]->usuario_senha){
                
                if($usuario[0]->usuario_permissao == "1" || $usuario[0]->usuario_permissao == "2"){

                    if($usuario[0]->empresa_status == "1"){                    
                        $user = array(
                            'usuario_codigo'=> $usuario[0]->usuario_id,
                            'usuario_nome'=> $usuario[0]->usuario_nome,
                            'usuario'=> $usuario[0]->usuario,
                            'empresa'=> $usuario[0]->usuario_empresa,
                            'empresa_descricao'=> $usuario[0]->empresa_descricao,
                            'logado'=>TRUE,
                            'permissao'=> $usuario[0]->usuario_permissao
                        );

                        $this->session->set_userdata($user);
                        redirect('admin/home/homeAdmin');   
                    }else{
                        $this->session->set_flashdata('error', 'A licença de sua empresa para acesso a Área Administrativa esta expirada.');
                        redirect('admin/home');
                    }             
                }else{
                    $this->session->set_flashdata('error', 'Este usuário não tem permissão para acessar a área administrativa.');
                    redirect('admin/home');
                }
              
            }else{
                $this->session->set_flashdata('error', 'A senha está incorreta.');
                redirect('admin/home');
            }
            
        }else{
            $this->session->set_flashdata('error', 'Usuário não encontrado.');
            redirect('admin/home');
        }
        


    }
        
    function _criaSessao($permissao) {
        $permitido = json_decode($permissao);
        if (isset($permitido->{'codigo'})){
            return false;
        }else{
            // criar a sessão do usuário
            $dados = array(
                'usuario'=>$permitido->{'nome'},
                'logado'=>TRUE,
                'permissao'=>'master'
            );
            $this->session->set_userdata($dados);
            return true;
        }
        
    }

    function _verificaPermissao($matricula,$senha) {
        $url = URL_WEB_SERVICE.'='.$matricula.'&password='.$senha.TOKEN_WEB_SERVICE;
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        $contents = curl_exec($ch);
        if (curl_errno($ch)) {
          echo curl_error($ch);
          echo "\n<br />";
          $contents = '';
        } else {
          curl_close($ch);
        }

        if (!is_string($contents) || !strlen($contents)) {
            $contents = 'Falha ao carregar conteudo';
        }
        return $contents;
        //return file_get_contents(URL_WEB_SERVICE.'='.$matricula.'&password='.$senha.TOKEN_WEB_SERVICE);
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/home');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/login.php */
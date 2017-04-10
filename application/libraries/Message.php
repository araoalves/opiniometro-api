<?php if(!defined('BASEPATH')) exit(ACESSO_BLOQUEADO);

/**
*  Biblioteca criada para carregamento automático do cabeçalho e rodapé
*/
class Message{

/* Agora veremos se não há algum tipo de retorno de flashdata */
    public function showMessage(){
        # Pega a instância do CI
        $CI = & get_instance();
        $CI->load->library('session');
        if($CI->session->flashdata("success")){
            $data['msg'] = $CI->session->flashdata("success");
            $data['type'] = 'alert alert-success';
        }else if($CI->session->flashdata("error")){
            $data['msg'] = $CI->session->flashdata("error");
            $data['type'] = 'alert alert-danger';
        }else{
            $data = null;
        }
        return $data;
    }
}
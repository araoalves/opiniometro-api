<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function index(){
        $this->template->show_login('admin/login');
    }

    function homeAdmin(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }

         $dados = array(
			'titulo' => 'Home'
		);

        $this->template->show_admin('admin/home',$dados);
    }
}
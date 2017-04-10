<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    private $token = '25231f2bd30c3c3d490e1e9a03729f94';
    
    /*function index(){
        //$data['isPositionAbsolute'] = FALSE;
		/* Chamando webservice para retornar os vestibulares abertos atualmente
		echo ("Chegamos aqui ");
		$this->template->show('home');
    }*/

    function index(){
        if($this->session->flashdata('error')){
            $data['error'] = $this->session->flashdata("error");
        }else{
            $data['error'] = "";
        }
        $this->template->show_login('admin/login', $data);
    }

    function homeAdmin(){
        if(!$this->session->userdata('usuario')){
            $this->session->set_flashdata('error', 'Você precisa estar logado para acessar a área administrativa.');
            redirect('admin/home');
        }
        $this->template->show_admin('admin/home');
    }
}

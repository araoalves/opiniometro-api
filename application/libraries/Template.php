<?php if(!defined('BASEPATH')) exit(ACESSO_BLOQUEADO);

/**
*  Biblioteca criada para carregamento automático do cabeçalho e rodapé
*/
class Template{
	
	/* Template */
	function show($view, $data = array())
	{
		# Pega a instância do CI
		$CI = & get_instance();

		// Carrega template views
		$CI->load->view('templates/header',$data);
		$CI->load->view($view,$data);
		$CI->load->view('templates/footer',$data);
	}
	
	/* Template da área Administrativa */
	function show_admin($view, $data = array())
	{
		# Pega a instância do CI
		$CI = & get_instance();

		// Carrega template views
		$CI->load->view('templates/header_admin',$data);
		$CI->load->view($view,$data);
		$CI->load->view('templates/footer_admin',$data);
	}

	function show_login($view, $data = array()){
		# Pega a instância do CI
		$CI = & get_instance();

		// Carrega template views
		$CI->load->view('templates/header_login',$data);
		$CI->load->view($view,$data);
		$CI->load->view('templates/footer_login',$data);
	}
}
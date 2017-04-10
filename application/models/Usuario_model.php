<?php

/**
*
*/
class Usuario_model extends CI_Model
{

  private $table = "";

  public function __construct()
	{
		parent::__construct();
	}

	public function recuperarUsuarios(){

		if($this->session->permissao == "1"){
			$sql = "SELECT *, obter_nome_permissao(usuario_permissao) as permissao_descricao,
			obter_nome_empresa(usuario_empresa) as empresa_descricao,
			obter_nome_setor(usuario_setor) as setor_descricao
			FROM usuario";
		}else{
			$sql = "SELECT *, obter_nome_permissao(usuario_permissao) as permissao_descricao,
			obter_nome_empresa(usuario_empresa) as empresa_descricao,
			obter_nome_setor(usuario_setor) as setor_descricao
			FROM usuario WHERE usuario_empresa = ".$this->session->empresa;
		}

		$consulta = $this->db->query($sql);
		return $consulta->result();
	}


}

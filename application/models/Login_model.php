<?php

/**
*
*/
class Login_model extends CI_Model
{

  private $table = "";

  public function __construct()
	{
		parent::__construct();
	}

	public function recuperarUsuario($usuario){
		$sql = "SELECT *, obter_nome_permissao(usuario_permissao) as permissao_descricao,
				obter_nome_empresa(usuario_empresa) as empresa_descricao,
				obter_nome_setor(usuario_setor) as setor_descricao
				FROM usuario u
				INNER JOIN empresa e on e.empresa_id = u.usuario_empresa 
				WHERE usuario = '".$usuario."'";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}


}

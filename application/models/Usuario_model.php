<?php

/**
*
*/
class Usuario_model extends CI_Model
{

  private $table = "usuario";

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

	public function recuperarListPermissoes(){
		$sql = "SELECT * FROM permissao WHERE permissao_id != 1";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	public function recuperarListSetorEmpresa(){
		$sql = "SELECT * FROM setor WHERE setor_empresa = ".$this->session->empresa;
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	public function recuperarListAllSetorEmpresa(){
		$sql = "SELECT * FROM setor";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	public function recuperarListEmpresas(){
		$sql = "SELECT * FROM empresa";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	public function Inserir($data) {
		if(!isset($data))
			return false;
		return $this->db->insert($this->table, $data);
  	}

	public function recuperarSetoresPorEmpresa($idEmpresa){
		$sql = "SELECT * FROM setor WHERE setor_empresa = ".$idEmpresa;
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	function Excluir($id) {
		if(is_null($id))
		return false;

		$this->db->where('usuario_id', $id);
		return $this->db->delete($this->table);
    }

	function Atualizar($id, $data) {
		if(is_null($id) || !isset($data))
			return false;
		$this->db->where('usuario_id', $id);
		return $this->db->update($this->table, $data);
   }

}

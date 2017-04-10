<?php

/**
*
*/
class Setores_model extends CI_Model
{

  private $table = "setor";

  public function __construct()
	{
		parent::__construct();
	}

	public function recuperarSetores(){
		
        if($this->session->permissao == "1"){
			$sql = "SELECT *, obter_nome_empresa(setor_empresa) as empresa_descricao FROM setor";
		}else{
			$sql = "SELECT *, obter_nome_empresa(setor_empresa) as empresa_descricao 
					FROM setor WHERE setor_empresa = ".$this->session->empresa;
		}

		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	public function recuperarEmpresas(){
		$sql = "SELECT * from empresa";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	public function Inserir($data) {
		if(!isset($data))
			return false;
		return $this->db->insert($this->table, $data);
  	}

	function Excluir($id) {
		if(is_null($id))
			return false;
		$this->db->where('setor_id', $id);
		return $this->db->delete($this->table);
 	}

	function Atualizar($id, $data) {
		if(is_null($id) || !isset($data))
			return false;
		$this->db->where('setor_id', $id);
		return $this->db->update($this->table, $data);
   }

}

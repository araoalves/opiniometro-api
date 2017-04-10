<?php

/**
*
*/
class Permissao_model extends CI_Model
{

  private $table = "permissao";

  public function __construct()
	{
		parent::__construct();
	}

	public function recuperarPermissoes(){
		$sql = "SELECT * FROM permissao";
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
		$this->db->where('permissao_id', $id);
		return $this->db->delete($this->table);
 	}

	function Atualizar($id, $data) {
		if(is_null($id) || !isset($data))
			return false;
		$this->db->where('permissao_id', $id);
		return $this->db->update($this->table, $data);
   }


}

<?php

/**
*
*/
class Financiamentos_model extends CI_Model
{

  private $table = "VT52FINVES";

  public function __construct()
	{
		parent::__construct();
	}

	public function recuperarFinanciamentos(){
		$sql = "SELECT * FROM VT52FINVES";
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

		$this->db->where('VT52CODIGO', $id);
		return $this->db->delete($this->table);
  }

  function Atualizar($id, $data) {
    if(is_null($id) || !isset($data))
      return false;
   	 $this->db->where('VT52CODIGO', $id);
   	 return $this->db->update($this->table, $data);
  }

}

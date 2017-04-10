<?php

/**
*
*/
class Cursos_model extends CI_Model
{

  private $table = "VT53CRSVAL";

  public function __construct()
	{
		parent::__construct();
	}

	public function recuperarListaVestibular(){
		$sql = "SELECT TOP 20 VT06ANOVES, VT06CODVES, VT06DESCRI FROM VT06VESTIT ORDER BY VT06ANOREF DESC;";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	public function recuperarListaFinanciamentos(){
		$sql = "SELECT * FROM VT52FINVES";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	public function recuperarListaCursos(){
		$sql = "SELECT * 
				FROM VT53CRSVAL CURVAL
				INNER JOIN VT03CURSOT CURSO ON CURSO.VT03CODCRS = CURVAL.FK5304CODCRS";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

	public function recuperarDadosVestibular($anoVes, $codVes){
		$sql = "SELECT VT05DESCAM, VT04TURNO, VT03DESCRI, VT04CODIGO, FK0403CODCRS, FK0405CODCAM
					FROM 
						BDVESTIBULARP.dbo.VT04CAMCUT 
					INNER JOIN 
						BDVESTIBULARP.dbo.VT06VESTIT ON FK0406CODVES = VT06CODVES 
						AND FK0406ANOVES = VT06ANOVES
					INNER JOIN
						BDVESTIBULARP.dbo.VT03CURSOT ON FK0403CODCRS = VT03CODCRS
					INNER JOIN
						BDVESTIBULARP.dbo.VT05CAMPUT ON FK0405CODCAM = VT05CODCAM
					WHERE 
						FK0406ANOVES = '".$anoVes."' and FK0406CODVES = '".$codVes."' 
					ORDER BY VT03DESCRI, FK0403CODCRS;";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}

		public function cadastrarCurso($data) {
		if(!isset($data))
		return false;

		return $this->db->insert($this->table, $data);
  	}

	function Excluir($id) {
		if(is_null($id))
		return false;

		$this->db->where('VT53CODIGO', $id);
		return $this->db->delete($this->table);
    }

	function Atualizar($id, $data) {
		if(is_null($id) || !isset($data))
		return false;
		$this->db->where('VT53CODIGO', $id);
		return $this->db->update($this->table, $data);
  	}

}

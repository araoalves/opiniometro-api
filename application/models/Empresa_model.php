<?php

/**
*
*/
class Empresa_model extends CI_Model
{

  private $table = "empresa";

  public function __construct()
	{
		parent::__construct();
	}

	public function recuperarEmpresas(){
        $sql = "SELECT * FROM empresa";
		$consulta = $this->db->query($sql);
		return $consulta->result();
	}
}

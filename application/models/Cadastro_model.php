<?php

/**
*
*/
class Cadastro_model extends CI_Model
{

  private $table = "opiniao";

  public function __construct()
	{
		parent::__construct();
	}

	public function cadastrarOpiniao($data) {
		if(!isset($data))
		return false;
        
		return $this->db->insert($this->table, $data);
  	}

}

<?php

/**
*
*/
class Opiniao_usuario_model extends CI_Model
{

  private $table = "opiniao";

  public function __construct()
	{
		parent::__construct();
	}

    public function recuperarOpinioesUsuario(){

        $data_atual = date ("Y-m-d");
		if($this->session->permissao == "1"){        
            $sql = "SELECT * FROM opinioes_usuario
					ORDER BY opiniao_data DESC
					LIMIT 100";
		}else{
            $sql = "SELECT * FROM opinioes_usuario
                    WHERE opiniao_empresa = ".$this->session->empresa." ORDER BY opiniao_data DESC LIMIT 100";                                                       
		}

		$consulta = $this->db->query($sql);
		return $consulta->result();
	}


}

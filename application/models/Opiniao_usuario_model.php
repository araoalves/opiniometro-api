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
         
			$sql = "SELECT opiniao_data, 
                    opiniao_usuario,
                    obter_nome_usuario(opiniao_usuario) AS usuario_descricao,
                    opiniao_empresa,
                    obter_nome_empresa(opiniao_empresa) AS empresa_descricao,
                    obter_qtd_opiniao_usuario(1,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_otimo,
                    obter_qtd_opiniao_usuario(2,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_bom,
                    obter_qtd_opiniao_usuario(3,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_regular,
                    obter_qtd_opiniao_usuario(4,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_ruim,
                    obter_qtd_opiniao_usuario(5,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_pessimo
                    FROM opiniao
                    WHERE opiniao_data = '".$data_atual."'
                    GROUP BY opiniao_data, opiniao_usuario, opiniao_empresa";
		}else{
			$sql = "SELECT opiniao_data, 
                    opiniao_usuario,
                    obter_nome_usuario(opiniao_usuario) AS usuario_descricao,
                    opiniao_empresa,
                    obter_nome_empresa(opiniao_empresa) AS empresa_descricao,
                    obter_qtd_opiniao_usuario(1,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_otimo,
                    obter_qtd_opiniao_usuario(2,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_bom,
                    obter_qtd_opiniao_usuario(3,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_regular,
                    obter_qtd_opiniao_usuario(4,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_ruim,
                    obter_qtd_opiniao_usuario(5,opiniao_usuario,opiniao_data,opiniao_empresa) AS opiniao_pessimo
                    FROM opiniao
                    WHERE opiniao_data = '".$data_atual."'
                    AND opiniao_empresa = ".$this->session->empresa."
                    GROUP BY opiniao_data, opiniao_usuario, opiniao_empresa";                                                       
		}

		$consulta = $this->db->query($sql);
		return $consulta->result();
	}


}

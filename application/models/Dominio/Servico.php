<?php namespace Dominio;

class Servico {
    private $codigo;
	private $descricao;
    private $valorTotal;
                
	function __construct($codigo, $descricao, $valorTotal){
		$this->codigo = $codigo;
		$this->descricao = $descricao;
        $this->valorTotal = $valorTotal;
	}
	//Getters
	function getCod(){
		return $this->codigo;
	}
	
	function getDescricao(){
		return $this->descricao;
	}
	
        function getValorTotal(){
		return $this->valorTotal;
	}
	        
	function serialize(){
		return get_object_vars($this);
	}
}
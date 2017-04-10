<?php namespace Dominio;

class Sistema {

    private $codigoSistema;
	private $servico;

    function __construct($codigoSistema, $servico){
		$this->codigoSistema = $codigoSistema;
		$this->servico = $servico;
	}
        
	function getCodigoSistema() {
            return $this->codigoSistema;
        }

        function getServico() {
            return $this->servico;
        }

        function serialize(){
		return get_object_vars($this);
	}
}
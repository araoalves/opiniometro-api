<?php namespace Dominio;
//Classe responsável por preparar os dados para chamar o serviço da RedeCard
class Transaction{
	private $dadosPessoais;
	private $sistema;
	// URL de envio do serviço da RedeCard
	
	// Construtor da classe Transaction
	function __construct($dadosPessoais, $sistema){
		$this->dadosPessoais = $dadosPessoais;
		$this->sistema = $sistema;
	}
	
	// Getters
	function getDadosPessoais(){
		return $this->dadosPessoais;
	}
	
	function getSistema(){
		return $this->sistema;
	}
	
	
	function serialize(){
		return get_object_vars($this);
	}
	
}
<?php namespace Dominio;

class DadosPessoais {
    private $cpd;
	private $cpf;
	private $numInscricao;
	private $nome;

	function __construct($cpd, $cpf, $numInscricao, $nome){
		$this->cpd = $cpd;
		$this->cpf = $cpf;
		$this->numInscricao = $numInscricao;
		$this->nome = $nome;
	}
	
	//Getters
	function getCpd(){
		return $this->cpd;
	}
	
	function getCpf(){
		return $this->cpf;
	}
	
	function getNumInscricao(){
		$this->numInscricao;
	}
	
	function getNome(){
		return $this->nome;
	}
	
	function serialize(){
		return get_object_vars($this);
	}
}
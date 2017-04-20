<?php namespace Dominio;

class Usuario {

    private $usuario_id;
	private $usuario;
	private $usuario_senha;

    function getUsuarioId(){
		return $this->usuario_id;
	}

    function setUsuarioID($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    function getUsuario(){
		return $this->usuario;
	}

      function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    function getUsuarioSenha(){
		return $this->usuario_senha;
	}

    function setUsuarioSenha($usuario_senha){
        $this->usuario_senha = $usuario_senha;
    }

    function serialize(){
		return get_object_vars($this);
	}
	
}
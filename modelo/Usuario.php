<?php namespace Modelo;

class Usuario
{
	private $Nombre;
	private $Email;
	private $Password;
	private $FotoPerfil;
	private $Mensajes;

	function getNombre(){
		return $this->Nombre;
	}
	function getPassword(){
		return $this->Password;
	}
	function getEmail(){
		return $this->Email;
	}
	function getFotoPerfil(){
		return $this->FotoPerfil;
	}
	function getMensajes(){
		return $this->Mensajes;
	}

	function __construct($nomb,$ema,$pass,$fotope)
	{
		$this->Nombre = $nomb;
		$this->Email = $ema;
		$this->Password= $pass;
		$this->FotoPerfil = $fotope;
		$this->Mensajes = array();
	}

	function setMensaje($mensajito){
		array_push($this->Mensajes, $mensajito);
	}
}

?>
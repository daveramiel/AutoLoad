<?php namespace Modelo;

class Mensaje 
{
	private $Titulo;
	private $Texto;

	function getTitulo(){
		return $this->Titulo;
	}

	function getTexto(){
		return $this->Texto;
	}
	
	function __construct($titulin,$textin)
	{
		$this->Titulo = $titulin;
		$this->Texto = $textin;
	}
}
?>
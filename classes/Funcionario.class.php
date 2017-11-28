<?php
include_once 'classes/Pessoa.class.php';

class Funcinario extends Pessoa{
	private $codigo;
	
	function setCodigo($codigo){
		$this->codigo = $codigo;
	}
	
	function getCodigo(){
		return $this->codigo;
	}
}
?>
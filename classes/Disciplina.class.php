<?php
class Disciplina{
	private $codigo;
	private $nome;
	
	function setCodigo($codigo){
		$this->codigo = $codigo;
	}
	
	function getCodigo(){
		return $this->codigo;
	}
	function setNome($nome){
		$this->nome = $nome;
	}
	
	function getNome(){
		return $this->nome;
	}	
}
?>
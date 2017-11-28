<?php
class Turma{
	private $nome;
	private $ano;

	function setNome($nome){
		$this->nome = $nome;
	}
	
	function getNome(){
		return $this->nome;
	}	
	function setAno($ano){
		$this->ano = $ano;
	}
	
	function getAno(){
		return $this->ano;
	}	
}
?>
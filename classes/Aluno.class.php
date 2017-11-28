<?php
include_once 'classes/Pessoa.class.php';

class Aluno extends Pessoa{
	private $matricula;
	
	function setMatricula($matricula){
		$this->matricula = $matricula;
	}
	function getMatricula(){
		return $this->matricula;
	}
}
?>
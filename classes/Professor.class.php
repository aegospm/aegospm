<?php
include_once 'classes/Pessoa.class.php';

class Professor extends Pessoa{
	private $matricula;
	private $escolaridade;
	private $formacao;
	private $a_1_ano;
	private $a_2_ano;
	private $a_3_ano;	
	
	function setMatricula($matricula){
		$this->matricula = $matricula;
	}
	function setEscolaridade($escolaridade){
		$this->escolaridade = $escolaridade;
	}
	function setFormacao($formacao){
		$this->formacao = $formacao;
	}
	function setA_1_ano($a_1_ano){
		$this->a_1_ano = $a_1_ano;
	}
	function setA_2_ano($a_2_ano){
		$this->a_2_ano = $a_2_ano;
	}
	function setA_3_ano($a_3_ano){
		$this->a_3_ano = $a_3_ano;
	}	
	
	function getMatricula(){
		return $this->matricula;
	}
	function getEscolaridade(){
		return $this->escolaridade;
	}
	function getFormacao(){
		return $this->formacao;
	}
	function getA_1_ano(){
		return $this->a_1_ano;
	}
	function getA_2_ano(){
		return $this->a_2_ano;
	}
	function getA_3_ano(){
		return $this->a_3_ano;
	}		
	
}
?>
<?php
class Dadosescolares{
	private $cpf;
	private $matricula;
	private $serie;
	private $turma;
	private $turno;
	
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}
	public function setSerie($serie){
		$this->serie = $serie;
	}
	public function setTurma($turma){
		$this->turma = $turma;
	}
	public function setTurno($turno){
		$this->turno = $turno;
	}
	
	public function getCpf(){
		return $this->cpf;
	}
	public function getMatricula(){
		return $this->matricula;
	}
	public function getSerie(){
		return $this->serie;
	}
	public function getTurma(){
		return $this->turma;
	}
	public function getTurno(){
		return $this->turno;
	}
}
?>
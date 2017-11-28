<?php
class Pessoa{
	private $cpf;
	private $nome;
	private $sobrenome;
	private $genero;
	private $data_de_nascimento;
	private $uf_nascimento;
	private $nacionalidade;
	private $rg;
	private $orgao_emissor;
	private $etnia;
	private $email;
	private $celular;
	private $atendimento_espeial;
	
		function setCpf($cpf){
			$this->cpf = $cpf;
		}
		function setNome($nome){
			$this->nome=$nome;
		}
		function setSobrenome($sobrenome){
			$this->sobrenome=$sobrenome;
		}
		function setGenero($genero){
			$this->genero=$genero;
		}
		function setData_de_nascimento($data_de_nascimento){
			$this->data_de_nascimento=$data_de_nascimento;
		}	
		function setUf_nascimento($uf_nascimento){
			$this->uf_nascimento=$uf_nascimento;
		}
		function setNacionalidade($nacionalidade){
			$this->nacionalidade=$nacionalidade;
		}
		function setRg($rg){
			$this->rg=$rg;
		}
		function setOrgao_emissor($orgao_emissor){
			$this->orgao_emissor=$orgao_emissor;
		}
		function setEtnia($etnia){
			$this->etnia=$etnia;
		}
		function setEmail($email){
			$this->email=$email;
		}
		function setCelular($celular){
			$this->celular=$celular;
		}
		function setAtendimento_especial($atendimento_especial){
			$this->atendimento_especial=$atendimento_especial;
		}

		function getCpf(){
			return $this->cpf;
		}
		function getNome(){
			return $this->nome;
		}
		function getSobrenome(){
			return $this->sobrenome;
		}
	
		function getGenero(){
			return $this->genero;
		}
		function getData_de_nascimento(){
			return $this->data_de_nascimento;
		}
		function getUf_nascimento(){
			return $this->uf_nascimento;
		}
		function getNacionalidade(){
			return $this->nacionalidade;
		}
		function getRg(){
			return $this->rg;
		}
		function getOrgao_emissor(){
			return $this->orgao_emissor;
		}
		function getEtnia(){
			return $this->etnia;
		}
		function getEmail(){
			return $this->email;
		}
		function getCelular(){
			return $this->celular;
		}
		function getAtendimento_especial(){
			return $this->atendimento_especial;
		}
	
}
?>
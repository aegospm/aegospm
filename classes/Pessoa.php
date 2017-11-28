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
	private $celular
	private $atendimento_espeial;
	
	function __construct(cpf = null, nome = null, sobrenome = null, genero = null, data_de_nascimento = null, uf_nascimento = null, nacionalidade = null, rg = null, orgao_emissor = null, etnia = null, email = null, celular = null, atendimento_espeial = null){
		$this->cpf = $cpf;
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->genero = $genero;
		$this->data_de_nascimento = $data_de_nascimento;
		$this->uf_nascimento = $uf_nascimento;
		$this->nacionalidade = $nacionalidade;
		$this->rg = $rg;
		$this->orgao_emissor = $orgao_emissor;
		$this->etnia = $etnia;
		$this->email = $email;
		$this->celular = $celular
		$this->atendimento_especial = $atendimento_espeial;		
	}
	
}
?>
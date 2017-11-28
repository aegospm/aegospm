<?php
	include_once 'classes/DadosSgts.class.php';


	$mat = $_REQUEST['mat'];
	$unidade = $_REQUEST['unidade'];
	$nome = $_REQUEST['nome'];
	$nomeDoPai = $_REQUEST['nomeDoPai'];
	$NomeDaMae = $_REQUEST['NomeDaMae'];
	$naturalidade = $_REQUEST['naturalidade'];
	$dataNascimento = $_REQUEST['dataNascimento'];
	$cpf = $_REQUEST['cpf'];
	$PosGrad = $_REQUEST['PosGrad'];
	$qpmp = $_REQUEST['Qualificacao'];
	$numero = $_REQUEST['numero'];
		
	echo "<br />$mat<br />$unidade<br />$unidade<br />$nomeDoPai<br />$NomeDaMae<br />$naturalidade<br />$dataNascimento<br />$cpf<br />$PosGrad<br />$qpmp<br />$numero<br />data inicial na atividade operacinal: $txtDataInicialAtividadeOperacional<br />data final da atividade operacinal: $txtDataFinalAtividadeOperacional<br /><br /><br />";
	
		$matricula = $_REQUEST['mat'];
		
//		header('fichadepreenchimentodossargentosdapmrn2.php?mat=' . $matricula);
		$matricula = $_REQUEST['mat'];
	
		
		echo "&txtDataInicialAtividadeOperacional=".$_REQUEST['txtDataInicialAtividadeOperacional']."&txtDataFinalAtividadeOperacional=".$_REQUEST['txtDataFinalAtividadeOperacional'];
		$Calcular = new DadosSgts;
		

		//operacinal
		$txtDataInicialAtividadeOperacional = $_REQUEST['txtDataInicialAtividadeOperacional'];
		$txtDataFinalAtividadeOperacional = $_REQUEST['txtDataFinalAtividadeOperacional'];
		
		//chamando classe que retorna a quantidade de tempo da atividade operacional
		$qtd_meses_op = $Calcular->CalcularTempo($txtDataInicialAtividadeOperacional, $txtDataFinalAtividadeOperacional);
		
		//administrativa
		$txtDataInicialAtividadeAdm = $_REQUEST['txtDataInicialAtividadeAdm'];
		$txtDataFinalAtividadeAdm = $_REQUEST['txtDataFinalAtividadeAdm'];

		//chamando classe que retorna a quantidade de tempo da atividade operacional
		$qtd_meses_adm = $Calcular->CalcularTempo($txtDataInicialAtividadeAdm, $txtDataFinalAtividadeAdm);
		
		

		header('location:fichadepreenchimentodossargentosdapmrn2.php?mat=' . $matricula.'&txtDataInicialAtividadeOperacional='.$_REQUEST['txtDataInicialAtividadeOperacional'].'&txtDataFinalAtividadeOperacional='.$_REQUEST['txtDataFinalAtividadeOperacional'].'&qtd_meses_op='.$qtd_meses_op.'&qtd_meses_adm='.$qtd_meses_adm);	

?>


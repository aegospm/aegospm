<?php
//borges.bs2007
class DadosSgts
{	

function CalcularTempo($txtDataInicialAtividadeOperacional, $txtDataFinalAtividadeOperacional){
	//anos bissetos
	$anosBissestos = array("2000", "2004", "2008", "2012", "2016", "2020", "2024", "2028", "2032", "2036", "2040", "2044", "2048", "2052", "2056", "2060");
	
	//var_dump($anosBissestos);
	echo "<br >";
	
	//vetores que armazenam os meses onde o mes de fevereior muda de acordo com o ano
	$mesesNaoBissetos = array(
		"01" => "31",
		"02" => "28",
		"03" => "31",
		"04" => "30",
		"05" => "31",
		"06" => "30",
		"07" => "31",
		"08" => "31",
		"09" => "30",
		"10" => "31",
		"11" => "30",
		"12" => "31",
	);
	//var_dump($mesesNaoBissetos);
	//echo "<br >";
	
	$mesesBissetos = array(
		"01" => "31",
		"02" => "29",
		"03" => "31",
		"04" => "30",
		"05" => "31",
		"06" => "30",
		"07" => "31",
		"08" => "31",
		"09" => "30",
		"10" => "31",
		"11" => "30",
		"12" => "31",
	);
	//var_dump($mesesBissetos);
//	echo "<br >";
	
	//pegando cada ano (inicial e final) separadamente
		$ano_inicial = substr($txtDataInicialAtividadeOperacional, 0, 4);
		$ano_final = substr($txtDataFinalAtividadeOperacional, 0, 4); 
		
		//pegando o ultimo e primeiro mes do ultimo ano na atividade operacional para ver quantos dias foi trabalhado neste mês
		$ultimo_mes_op =  substr($txtDataFinalAtividadeOperacional,5,2); 
		$primeiro_mes_op =  substr($txtDataInicialAtividadeOperacional,5,2); 
		
		//pegando a quantidade de dias no último mes na atividade operacional
		$qtd_dias_ultimo_mes = substr($txtDataFinalAtividadeOperacional,8,2); 
		$qtd_dias_primeiro_mes = substr($txtDataInicialAtividadeOperacional,8,2); 
		
		
		$qtd_meses_op = 0;
		
		/*echo "ano inicial: $ano_inicial<br />";
		echo "ano final: $ano_final <br />";
		echo "último mes trabalhado na atividade operacional: $ultimo_mes_op";
		echo "<br /> quantidade de dias do u´ltimo mes: " . $qtd_dias_ultimo_mes;
		echo "<br /> quantidade de dias do primeiro mes: " . $qtd_dias_primeiro_mes;
		echo "<br /> primeor mes " . $primeiro_mes_op;
		echo "<br /> ultimo mes " . $ultimo_mes_op ;*/
		
		$q_m = 0;
		$q_m = ($ano_final - $ano_inicial)*12 + ($ultimo_mes_op - $primeiro_mes_op);
		
		if($qtd_dias_ultimo_mes - $qtd_dias_primeiro_mes > 15){
			$q_m = $q_m + 1;
		}

	/*	for($i=$ano_inicial; $i<=$ano_final; $i++){
			//verifique se o valor $i está dentro do vetor anosBissestos
			if (in_array($i, $anosBissestos)) { 
				$cont_dias = 0;
				//while($cont_dias<=16){
				//}
				
				
			}else{
			
			}
		
			
				
			if($i==$ano_final){//tinha entrado num loop infinito, por isso dei um break
				break;
			}	
		}*/
		
/*		$primeiro_ano = $ano_inicial;
		if($ano_final - $primeiro_ano!=0){//para eu verificar o loop abaixo, os anos não podem ser iguais
			while($ano_final - $primeiro_ano!=1){
				$qtd_meses_op = $qtd_meses_op + 12;
				$primeiro_ano = $primeiro_ano + 1;
				echo "<br />1- somei 12 para o ano $primeiro_ano= quantidade de meses = $qtd_meses_op <br />";
			}
		}
		
		if($ano_final - $primeiro_ano==1){
			$cont_mes_a_mes=$primeiro_mes_op;//começa do primeiro mês
			while($cont_mes_a_mes<12){
				echo "<br />2- somei 1 para o mês $cont_mes_a_mes do primeiro mês= quantidade de meses = $qtd_meses_op<br />";
				$qtd_meses_op = $qtd_meses_op + 1;
				$cont_mes_a_mes = $cont_mes_a_mes +1;
			}
			
			$cont_mes_a_mes = 1;
			while($cont_mes_a_mes<=$ultimo_mes_op){//tem que ir até o último mês
				$qtd_meses_op = $qtd_meses_op + 1;
				$cont_mes_a_mes = $cont_mes_a_mes +1;
				echo "<br />3- somei 1 para o mês $cont_mes_a_mes do último mês= quantidade de meses = $qtd_meses_op<br />";
			}
			
			echo "<br />é número: " . is_numeric($qtd_dias_ultimo_mes) . "<br />";
			$dezesseis = 16;
			if($qtd_dias_ultimo_mes >= $dezesseis){
				$qtd_meses_op = $qtd_meses_op + 1;
				echo "<br /4- >somei 1 pois é > que 16= quantidade de meses = $qtd_meses_op<br />";
			}

			
		}else{//a diferença de ano aqui é iqual a 0 (zero)
			$cont_mes_a_mes=$primeiro_mes_op;//começa do primeiro mês
			while($cont_mes_a_mes<$ultimo_mes_op){
				echo "<br />7- somei 1 para o mês $cont_mes_a_mes do primeiro mês= quantidade de meses = $qtd_meses_op<br />";
				$qtd_meses_op = $qtd_meses_op + 1;
				$cont_mes_a_mes = $cont_mes_a_mes +1;
			}
			
			
			
			
			/*$cont_mes_a_mes = 1;
			while($cont_mes_a_mes<$ultimo_mes_op){//tem que ir até o último mês
				$qtd_meses_op = $qtd_meses_op + 1;
				$cont_mes_a_mes = $cont_mes_a_mes +1;
				echo "<br />3- somei 1 para o mês $cont_mes_a_mes do último mês= quantidade de meses = $qtd_meses_op<br />";
			}
			*/
		/*	echo "<br />é número: " . is_numeric($qtd_dias_ultimo_mes) . "<br />";
			$dezesseis = 16;
			if($qtd_dias_ultimo_mes >= $dezesseis){
				$qtd_meses_op = $qtd_meses_op + 1;
				echo "<br /8- >somei 1 pois é > que 16= quantidade de meses = $qtd_meses_op<br />";
			}

		}
		*/
		
		/*
		if($primeiro_ano == $ano_final){//se o ano for igual, eu conto a quantidade de meses
			echo "valor lógico da igualdade: " . $primeiro_ano == $ano_final;
			$cont=0;
			while($cont<$qtd_dias_ultimo_mes-1){
				$qtd_meses_op = $qtd_meses_op + 1;
				$cont  = $cont + 1;
			}	
			if(qtd_dias_ultimo_mes>15)
				$qtd_meses_op = $qtd_meses_op + 1;
		}
		
		
	*/	
		
		
		
		
		
	/*	if(strcmp($primeiro_ano, $ano_final) == 0){
	
			$cont=0;
			while($cont<$ultimo_mes_op-1){
				$qtd_meses_op = $qtd_meses_op + 1;
				echo "<br /> mes: $cont";
				$cont  = $cont + 1;
			}	
			
			if(qtd_dias_ultimo_mes>15){
				$qtd_meses_op = $qtd_meses_op + 1;
			}
		}*/
	
		//	echo "A quantidade de mese trabalhodos na atividade operacional é $q_m<br />";
			return $q_m;
	}
	
function CalcularApenasOsDias($txtDataInicialAtividadeOperacional, $txtDataFinalAtividadeOperacional){
	//anos bissetos
	$anosBissestos = array("2000", "2004", "2008", "2012", "2016", "2020", "2024", "2028", "2032", "2036", "2040", "2044", "2048", "2052", "2056", "2060");
	
	//var_dump($anosBissestos);
	//echo "<br >";
	
	//vetores que armazenam os meses onde o mes de fevereior muda de acordo com o ano
	$mesesNaoBissetos = array(
		"01" => "31",
		"02" => "28",
		"03" => "31",
		"04" => "30",
		"05" => "31",
		"06" => "30",
		"07" => "31",
		"08" => "31",
		"09" => "30",
		"10" => "31",
		"11" => "30",
		"12" => "31",
	);
//	var_dump($mesesNaoBissetos);
//	echo "<br >";
	
	$mesesBissetos = array(
		"01" => "31",
		"02" => "29",
		"03" => "31",
		"04" => "30",
		"05" => "31",
		"06" => "30",
		"07" => "31",
		"08" => "31",
		"09" => "30",
		"10" => "31",
		"11" => "30",
		"12" => "31",
	);

	//
	
		$flagDoacao =false;
		$info = "";
		$dias = 0;
	//pegando cada ano (inicial e final) separadamente
		$ano_inicial = substr($txtDataInicialAtividadeOperacional, 0, 4);
		$ano_final = substr($txtDataFinalAtividadeOperacional, 0, 4); 
		
		//pegando o ultimo e primeiro mes do ultimo ano na atividade operacional para ver quantos dias foi trabalhado neste mês
		$ultimo_mes_op =  substr($txtDataFinalAtividadeOperacional,5,2); 
		$primeiro_mes_op =  substr($txtDataInicialAtividadeOperacional,5,2); 
		
		//pegando a quantidade de dias no último mes na atividade operacional
		$qtd_dias_ultimo_mes = substr($txtDataFinalAtividadeOperacional,8,2); 
		$qtd_dias_primeiro_mes = substr($txtDataInicialAtividadeOperacional,8,2); 
		
			//para a promoção de abril
			$promocaoAbril = ($ano_final-1) . "-12-31";
			// Usa a função strtotime() e pega o timestamp das duas datas:
			$time_inicial = strtotime($txtDataInicialAtividadeOperacional);
			$time_final = strtotime($promocaoAbril);
			// Calcula a diferença de segundos entre as duas datas:
			$diferenca = $time_final - $time_inicial; // 19522800 segundos
			// Calcula a diferença de dias
			$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias
			if(($dias>0)&&($dias<=120)){
				return "abril";
				$flagDoacao = true;
			}else{
				$info = "<br />Não entra na promoção de abril $txtDataInicialAtividadeOperacional e $promocaoAbril (" . $dias . "). Tem que ser de até 120 da data de publicação.";
			}
			//para a promoção de agosto
			$promocaoAgosto =  $ano_final . "-04-30";
			// Usa a função strtotime() e pega o timestamp das duas datas:
			$time_inicial = strtotime($txtDataInicialAtividadeOperacional);
			$time_final = strtotime($promocaoAgosto);
			// Calcula a diferença de segundos entre as duas datas:
			$diferenca = $time_final - $time_inicial; // 19522800 segundos
			// Calcula a diferença de dias
			$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias

			if($dias>0 && $dias<=120){
				return "agosto";
				$flagDoacao = true;
			}else{
				$info = "<br />Não entra na promoção de agosto $txtDataInicialAtividadeOperacional e $promocaoAgosto (" . $dias . "). Tem que ser de até 120 da data de publicação.";
			}

			//para a promoção de desembro
			$promocaoDezembro = $ano_final . "-08-31";
			// Usa a função strtotime() e pega o timestamp das duas datas:
			$time_inicial = strtotime($txtDataInicialAtividadeOperacional);
			$time_final = strtotime($promocaoDezembro);
			// Calcula a diferença de segundos entre as duas datas:
			$diferenca = $time_final - $time_inicial; // 19522800 segundos
			// Calcula a diferença de dias
			$dias = (int)floor($diferenca / (60 * 60 * 24)); // 225 dias
			if(($dias>0)&&($dias<=120)){
				return "dezembro";
				$flagDoacao=true;
			}else{
				$info = "<br />Não entra na promoção de dezembro $txtDataInicialAtividadeOperacional e $promocaoDezembro (" . $dias . "). Tem que ser de até 120 da data de publicação.";
			}
			
			return $info;
	}
	
function CalcularApenasOsDiasAptidao($txtDataInicialAtividadeOperacional, $txtDataFinalAtividadeOperacional){
	//anos bissetos
	$anosBissestos = array("2000", "2004", "2008", "2012", "2016", "2020", "2024", "2028", "2032", "2036", "2040", "2044", "2048", "2052", "2056", "2060");
	
	//var_dump($anosBissestos);
	//echo "<br >";
	
	//vetores que armazenam os meses onde o mes de fevereior muda de acordo com o ano
	$mesesNaoBissetos = array(
		"01" => "31",
		"02" => "28",
		"03" => "31",
		"04" => "30",
		"05" => "31",
		"06" => "30",
		"07" => "31",
		"08" => "31",
		"09" => "30",
		"10" => "31",
		"11" => "30",
		"12" => "31",
	);
//	var_dump($mesesNaoBissetos);
//	echo "<br >";
	
	$mesesBissetos = array(
		"01" => "31",
		"02" => "29",
		"03" => "31",
		"04" => "30",
		"05" => "31",
		"06" => "30",
		"07" => "31",
		"08" => "31",
		"09" => "30",
		"10" => "31",
		"11" => "30",
		"12" => "31",
	);

	//
			$flagDoacao =false;
			$info = "";
			//pegando cada ano (inicial e final) separadamente
			$ano_inicial = substr($txtDataInicialAtividadeOperacional, 0, 4);
			$ano_final = substr($txtDataFinalAtividadeOperacional, 0, 4); 
			
			//pegando o ultimo e primeiro mes do ultimo ano na atividade operacional para ver quantos dias foi trabalhado neste mês
			$ultimo_mes_op =  substr($txtDataFinalAtividadeOperacional,5,2); 
			$primeiro_mes_op =  substr($txtDataInicialAtividadeOperacional,5,2); 
			
			//pegando a quantidade de dias no último mes na atividade operacional
			$qtd_dias_ultimo_mes = substr($txtDataFinalAtividadeOperacional,8,2); 
			$qtd_dias_primeiro_mes = substr($txtDataInicialAtividadeOperacional,8,2); 
		
			//para a promoção de abril
			$promocaoAbril = ($ano_final-1) . "-12-31";
			// Usa a função strtotime() e pega o timestamp das duas datas:
			$time_inicial = strtotime($txtDataInicialAtividadeOperacional);
			$time_final = strtotime($promocaoAbril);
			// Calcula a diferença de segundos entre as duas datas:
			$diferenca = $time_final - $time_inicial; // 19522800 segundos
			// Calcula a diferença de dias
			$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias

			if(($dias<=180)&&($dias>0)){
				return "abril";
				$flagDoacao = true;
			}else{
				$info	= "Não entra na promoção de abril $txtDataInicialAtividadeOperacional e $promocaoAbril (" . $dias . "). O prazo é de 180 dias.";
			}
			//para a promoção de agosto
			$promocaoAgosto =  $ano_final . "-04-30";
			// Usa a função strtotime() e pega o timestamp das duas datas:
			$time_inicial = strtotime($txtDataInicialAtividadeOperacional);
			$time_final = strtotime($promocaoAgosto);
			// Calcula a diferença de segundos entre as duas datas:
			$diferenca = $time_final - $time_inicial; // 19522800 segundos
			// Calcula a diferença de dias
			$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias
			 
			if(($dias<=180)&&($dias>0)){
				return "agosto";
				$flagDoacao = true;
			}else{
				$info = "Não entra na promoção de agosto $txtDataInicialAtividadeOperacional e $promocaoAgosto (" . $dias . "). O prazo é de 180 dias.";
			}

			//para a promoção de desembro
			$promocaoDezembro = $ano_final . "-08-31";
			// Usa a função strtotime() e pega o timestamp das duas datas:
			$time_inicial = strtotime($txtDataInicialAtividadeOperacional);
			$time_final = strtotime($promocaoDezembro);
			// Calcula a diferença de segundos entre as duas datas:
			$diferenca = $time_final - $time_inicial; // 19522800 segundos
			// Calcula a diferença de dias
			$dias = (int)floor($diferenca / (60 * 60 * 24)); // 225 dias

			if(($dias<=180)&&($dias>0)){
				return "dezembro";
				$flagDoacao=true;
			}else{
				$info = "<br /><br /><br /><br />Não entra na promoção de dezembro $txtDataInicialAtividadeOperacional e $promocaoDezembro (" . $dias . "). Prazo  é de 180 dias.";
			}
			
			return $info;
	}
	
/*o método abaixo faz duas coias: 1- verifica se o último dado foi cadastrado em tempo hábio; 2- veficica para qual promoção (abril, agosto ou dezembro) é a impressão*/
function CalcularPublicacaoAteDataLimite($txtDataInicialAtividadeOperacional, $dataAtual){
	
	//anos bissetos
	$anosBissestos = array("2000", "2004", "2008", "2012", "2016", "2020", "2024", "2028", "2032", "2036", "2040", "2044", "2048", "2052", "2056", "2060");
	
	//var_dump($anosBissestos);
	//echo "<br >";
	
	//vetores que armazenam os meses onde o mes de fevereior muda de acordo com o ano
	$mesesNaoBissetos = array(
		"01" => "31",
		"02" => "28",
		"03" => "31",
		"04" => "30",
		"05" => "31",
		"06" => "30",
		"07" => "31",
		"08" => "31",
		"09" => "30",
		"10" => "31",
		"11" => "30",
		"12" => "31",
	);
//	var_dump($mesesNaoBissetos);
//	echo "<br >";
	
	$mesesBissetos = array(
		"01" => "31",
		"02" => "29",
		"03" => "31",
		"04" => "30",
		"05" => "31",
		"06" => "30",
		"07" => "31",
		"08" => "31",
		"09" => "30",
		"10" => "31",
		"11" => "30",
		"12" => "31",
	);

			//
			$mes ="";
			$flagmes = false;
			//pegando cada ano (inicial e final) separadamente
			$ano_inicial = substr($txtDataInicialAtividadeOperacional, 0, 4);
			$ano_final = substr($dataAtual, 0, 4); 
			
			//pegando o ultimo e primeiro mes do ultimo ano na atividade operacional para ver quantos dias foi trabalhado neste mês
			$ultimo_mes_op =  substr($dataAtual,5,2); 
			$primeiro_mes_op =  substr($txtDataInicialAtividadeOperacional,5,2); 

			//pegando a quantidade de dias no último mes na atividade operacional
			$qtd_dias_ultimo_mes = substr($dataAtual,8,2); 
			$qtd_dias_primeiro_mes = substr($txtDataInicialAtividadeOperacional,8,2); 
			
			
		
			//para a promoção de abril
			$promocaoAbril = ($ano_final-1) . "-12-31";
			// Usa a função strtotime() e pega o timestamp das duas datas:
			$time_inicial = strtotime($txtDataInicialAtividadeOperacional);
			$time_final = strtotime($promocaoAbril);
			// Calcula a diferença de segundos entre as duas datas:
			$diferenca = $time_final - $time_inicial; // 19522800 segundos
			// Calcula a diferença de dias
			$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias
			
			//echo "<br />último mês: $ultimo_mes_op <br />";
			
			if(($dias>0)&&(($ultimo_mes_op>=1)&&($ultimo_mes_op<4))){
				$mes = "abril";
				$flagmes = true;
			}else{
					if(($ultimo_mes_op>=1)&&($ultimo_mes_op<4)){
						$mes = " <br /> &rArr; Não entra na promoção de abril (data do BG/BI: $txtDataInicialAtividadeOperacional e data limite $promocaoAbril (" . $dias . ", pois o BG da última promoção não foi computado antes de 31 de dezembro do ano anterior), conforme Decreto N 25.154/2015. Anexo I.";
						}
			}
			//para a promoção de agosto
			$promocaoAgosto =  $ano_final . "-04-30";
			// Usa a função strtotime() e pega o timestamp das duas datas:
			$time_inicial = strtotime($txtDataInicialAtividadeOperacional);
			$time_final = strtotime($promocaoAgosto);
			// Calcula a diferença de segundos entre as duas datas:
			$diferenca = $time_final - $time_inicial; // 19522800 segundos
			// Calcula a diferença de dias
			$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias
			 
			if(($dias>0)&&(($ultimo_mes_op>=4)&&($ultimo_mes_op<8))&&($flagmes==false)){
				$mes = "agosto";
				$flagmes = true;
			}else{
				if(($ultimo_mes_op>=4)&&($ultimo_mes_op<8)){
					 $mes = "<br /> &rArr; Não entra na promoção de agosto (data do BG/BI: $txtDataInicialAtividadeOperacional e data limite $promocaoAgosto (" . $dias . "), pois o BG da última promoção não foi computado antes de 30 de abril do corrente ano, conforme Decreto N 25.154/2015. Anexo I.";
				 }
			}

			//para a promoção de desembro
			$promocaoDezembro = $ano_final . "-08-31";
			// Usa a função strtotime() e pega o timestamp das duas datas:
			$time_inicial = strtotime($txtDataInicialAtividadeOperacional);
			$time_final = strtotime($promocaoDezembro);
			// Calcula a diferença de segundos entre as duas datas:
			$diferenca = $time_final - $time_inicial; // 19522800 segundos
			// Calcula a diferença de dias
			$dias = (int)floor($diferenca / (60 * 60 * 24)); // 225 dias

			if(($dias>0)&&(($ultimo_mes_op>=8)&&($ultimo_mes_op<12))&&($flagmes==false)){
				$mes="dezembro";
				$flagmes=true;
			}else{
				if(($ultimo_mes_op>=8)&&($ultimo_mes_op<12)){
					$mes= "<br />	&rArr; Não entra na promoção de dezembro $txtDataInicialAtividadeOperacional e data limite $promocaoDezembro (" . $dias . "), pois o BG da última promoção não foi computado antes de 31 de agosto do corrente ano, conforme Decreto N 25.154/2015. Anexo I.";
				}
			}

			//echo "<br />quantidade de mes do BG: " . $mes ."<br />";
	
			return $mes;
	}

}

function CalcularQntdDias($data_inicial, $data_final){

		// Usa a função strtotime() e pega o timestamp das duas datas:
		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);
		// Calcula a diferença de segundos entre as duas datas:
		$diferenca = $time_final - $time_inicial; // 19522800 segundos
		// Calcula a diferença de dias
		$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias
		
		return $dias;
	}
function teste(){

		return "chamando método teste";
	}	

?>
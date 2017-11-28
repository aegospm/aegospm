<?php
//insere classe
include_once 'ConexaoPDO.class.php';

class FachadaPersistencia
{	

function PersistirPolicial($pdo, $PosGrad,$Numero,$Quadro,$Nome,$NomeDeGuerra,$Matricula,$Qualificacao,$Situacao,$Orgao,$LocalTrab,$Funcao_,$Pelotao,$Unidade,$SubUnidade,$DataInclusao,$Comportamento,$CPF,$RGCivil,$OrgaoEmissor,$RGMilitar,$DataExpedicaoRGmilitar,$DataNascimento,$MunicipioOndeNasceu,$UFMunicipioOndeNasceu,$NomeDoPai,$NomeDaMae,$AgenciaBancaria,$ContaCorrente,$NomeDoBanco,$EstadoCivil,$CNH,$Categoria,$Validade,$Escolaridade,$Endereco,$Bairro,$CEP,$PtoReferencia,$Municipio,$UF,$Telefone,$Celular,$DDD,$TelefoneRecado,$Falar_Com,$EMail,$NumTituloEleitor,$ZonaEleitoral,$Secao,$NomeDomicilioEleitoral,$UFDomicilioEleitoral,$TipoSangueFatorRH,$Foto,$OBS,$DataDeCadastro,$PASEP,$Gorro,$Gandola,$Calca,$Coturno,$Boina,$Canicula,$CalcaFina,$Sapato,$Camiseta,$Altura,$Cor,$Olhos,$Boca,$Nariz,$Rosto,$Cabelos,$Barba,$Bigodes,$SinaisParticulares, $Procedencia, $DataDeExclusao){


//echo  $Boca."<br/>";
//echo  $Nariz."<br/>";
//echo $Rosto."<br/>";
 //$Cabelos =  "";//est? em ficha disciplinar abaixo
//echo $Barba."<br/>";
//echo $Bigodes."<br/>";
//echo $Altura."<br/>";
//echo $Cor."<br/>";
//echo $Olhos."<br/>";
//echo $Cabelos."<br/>";


$Situacao = "Pronto";

try{

	/*//echo "<br/>" . $nome .';';
	//echo "<br/>" . $email .';';
	//echo "<br/>" . $telefone .';';
	//echo "<br/>" . $instituicao .';';
	//echo "<br/>" . $mensagem .';';
	*/
		//insert 3
			//fazendo conexão com o banco
	//		$conexao = new ConexaoPDO;
//			$pdo = $conexao->ConexaoComBanco();
			
		//$pdo é a conexão com meu banco de dados que fiz em outo arquivo e o chamo lá em cima
			//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			//$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		
			$Unidade = "CIPGd - Companhia Independente de Policiamento de Guarda";
			
			$inserir = $pdo->prepare("INSERT INTO Efetivo_CIPGD_tb (PosGrad, Numero, Quadro, Nome, NomeDeGuerra, Matricula, Qualificacao, Situacao, Orgao, LocalTrab,  Funcao_, Pelotao, Unidade, SubUnidade, DataInclusao, Comportamento, CPF, RGCivil, OrgaoEmissor, RGMilitar, DataExpedicaoRGmilitar, DataNascimento, MunicipioOndeNasceu, UFMunicipioOndeNasceu, NomeDoPai, NomeDaMae, AgenciaBancaria, ContaCorrente, NomeDoBanco, EstadoCivil, CNH, Categoria, Validade, Escolaridade, Endereco, Bairro, CEP, PtoReferencia, Municipio, UF, Telefone, Celular, DDD, TelefoneRecado, Falar_Com, EMail, NumTituloEleitor, ZonaEleitoral, Secao, NomeDomicilioEleitoral, UFDomicilioEleitoral, TipoSangueFatorRH, Foto, OBS, DataDeCadastro, PASEP, Gorro, Gandola, Calca, Coturno, Boina, Canicula, CalcaFina, Sapato, Camiseta, Altura, Cor, Olhos, Boca, Nariz, Rosto, Cabelos, Barba, Bigodes, SinaisParticulares, Procedencia, DataDeExclusao) VALUES(?, ? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?, ? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?, ?, ?)");
			$inserir->bindParam(1, $PosGrad);
			$inserir->bindParam(2, $Numero);
			$inserir->bindParam(3, $Quadro);
			$inserir->bindParam(4, $Nome);
			$inserir->bindParam(5, $NomeDeGuerra);
			$inserir->bindParam(6, $Matricula);
			$inserir->bindParam(7, $Qualificacao);
			$inserir->bindParam(8, $Situacao);
			$inserir->bindParam(9, $Orgao);
			$inserir->bindParam(10, $LocalTrab);
			$inserir->bindParam(11, $Funcao_);
			$inserir->bindParam(12, $Pelotao);
			$inserir->bindParam(13, $Unidade);
			$inserir->bindParam(14, $SubUnidade);
			$inserir->bindParam(15, $DataInclusao);
			$inserir->bindParam(16, $Comportamento);
			$inserir->bindParam(17, $CPF);
			$inserir->bindParam(18, $RGCivil);
			$inserir->bindParam(19, $OrgaoEmissor);
			$inserir->bindParam(20, $RGMilitar);
			$inserir->bindParam(21, $DataExpedicaoRGmilitar);
			$inserir->bindParam(22, $DataNascimento);
			$inserir->bindParam(23, $MunicipioOndeNasceu);
			$inserir->bindParam(24, $UFMunicipioOndeNasceu);
			$inserir->bindParam(25, $NomeDoPai);
			$inserir->bindParam(26, $NomeDaMae);
			$inserir->bindParam(27, $AgenciaBancaria);
			$inserir->bindParam(28, $ContaCorrente);
			$inserir->bindParam(29, $NomeDoBanco);
			$inserir->bindParam(30, $EstadoCivil);
			$inserir->bindParam(31, $CNH);
			$inserir->bindParam(32, $Categoria);
			$inserir->bindParam(33, $Validade);
			$inserir->bindParam(34, $Escolaridade);
			$inserir->bindParam(35, $Endereco);
			$inserir->bindParam(36, $Bairro);
			$inserir->bindParam(37, $CEP);
			$inserir->bindParam(38, $PtoReferencia);
			$inserir->bindParam(39, $Municipio);
			$inserir->bindParam(40, $UF);
			$inserir->bindParam(41, $Telefone);
			$inserir->bindParam(42, $Celular);
			$inserir->bindParam(43, $DDD);
			$inserir->bindParam(44, $TelefoneRecado);
			$inserir->bindParam(45,$Falar_Com);
			$inserir->bindParam(46,$EMail);
			$inserir->bindParam(47,$NumTituloEleitor);
			$inserir->bindParam(48,$ZonaEleitoral);
			$inserir->bindParam(49,$Secao);
			$inserir->bindParam(50,$NomeDomicilioEleitoral);
			$inserir->bindParam(51,$UFDomicilioEleitoral);
			$inserir->bindParam(52,$TipoSangueFatorRH);
			$inserir->bindParam(53,$Foto);
			$inserir->bindParam(54,$OBS);
			$inserir->bindParam(55,$DataDeCadastro);
			$inserir->bindParam(56,$PASEP);
			$inserir->bindParam(57,$Gorro);
			$inserir->bindParam(58,$Gandola);
			$inserir->bindParam(59,$Calca);
			$inserir->bindParam(60,$Coturno);
			$inserir->bindParam(61,$Boina);
			$inserir->bindParam(62,$Canicula);
			$inserir->bindParam(63,$CalcaFina);
			$inserir->bindParam(64,$Sapato);
			$inserir->bindParam(65,$Camiseta);
			$inserir->bindParam(66,$Altura);
			$inserir->bindParam(67,$Cor);
			$inserir->bindParam(68,$Olhos);
			$inserir->bindParam(69,$Boca);
			$inserir->bindParam(70,$Nariz);
			$inserir->bindParam(71,$Rosto);
			$inserir->bindParam(72,$Cabelos);
			$inserir->bindParam(73,$Barba);
			$inserir->bindParam(74,$Bigodes);
			$inserir->bindParam(75,$SinaisParticulares);
			$inserir->bindParam(76,$Procedencia);
			$inserir->bindParam(77,$DataDeExclusao);
		
			/*$nome = $_POST['txtNome'];
			$email = $_POST['txtMail'];
			$telefone = $_POST['txtTelefone'];
			$instituicao = $_POST['txtQuem'];
			$mensagem = $_POST['txtComentario'];*/
			
			$inserir->execute();
			if($inserir){
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso...	.)</small></center>";
			}else{
			//	//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
								//		(Erro no banco de dados.)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "<big><big><big>Erro no m�todo PersistirPolicial: ".$ex->getMessage() . "<big><big><big>"; 
    				
			}
	}
	
	
function PersistirMovimentacao($pdo, $Codigo, $Matricula, $Movimentacao, $OPMDestino, $BG_BI_N, $Data_BG_BI){


try{

	/*//echo "<br/>" . $nome .';';
	//echo "<br/>" . $email .';';
	//echo "<br/>" . $telefone .';';
	//echo "<br/>" . $instituicao .';';
	//echo "<br/>" . $mensagem .';';
	*/
		//insert 3
			//fazendo conexão com o banco
	//		$conexao = new ConexaoPDO;
//			$pdo = $conexao->ConexaoComBanco();
			
		//$pdo é a conexão com meu banco de dados que fiz em outo arquivo e o chamo lá em cima
			//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			//$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		
		//	//echo "<br> Movimenta��o: " . $Movimentacao . "<br>";
		//	//echo "<br> Movimenta��o: $Movimentacao <br>";
			$inserir = $pdo->prepare("INSERT INTO Movimentacao_tb(Matricula, Movimentacao, OPMDestino, BG_BI_N, Data_BG_BI) VALUES('$Matricula', '$Movimentacao', '$OPMDestino', '$BG_BI_N', '$Data_BG_BI')");
/*			$inserir->bindParam(1, $Matricula);
			$inserir->bindParam(2, $Matricula);
			$inserir->bindParam(3, $Movimentacao);
			$inserir->bindParam(4, $OPMDestino);
			$inserir->bindParam(5, $BG_BI_N);
			$inserir->bindParam(6, $Data_BG_BI);
	*/		
			$inserir->execute();
			
			//echo $inserir->rowCount() . " records inserido com sucesso. <br>";
			
			$inserir = $pdo->prepare("UPDATE Efetivo_CIPGD_tb SET 
Unidade='$OPMDestino'
 WHERE Matricula LIKE '$Matricula'");
 
			$inserir->execute();
			
			if($inserir){
				////echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso...	.)</small></center>";
			}else{
			//	//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados.)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
							//			(Erro no banco de dados.)</small></center>";
			}
			
	}
	
	
function PersistirMovimentacaoInterna($pdo, $Matricula, $Movimentacao, $Destino, $BI, $Data_BI){


try{


		//insert 3
			//fazendo conexão com o banco
	//		$conexao = new ConexaoPDO;
//			$pdo = $conexao->ConexaoComBanco();
			
		//$pdo é a conexão com meu banco de dados que fiz em outo arquivo e o chamo lá em cima
			//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			//$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		
			$inserir = $pdo->prepare("INSERT INTO Movimentacao_interna_tb(Matricula, Movimentacao, Destino, BI, Data_BI) VALUES('$Matricula', '$Movimentacao', '$Destino', '$BI', '$Data_BI')");
/*			$inserir->bindParam(1, $Matricula);
			$inserir->bindParam(2, $Movimentacao);
			$inserir->bindParam(3, $Destino);
			$inserir->bindParam(4, $BI);
			$inserir->bindParam(5, $Data_BI);
*/
			
			$inserir->execute();
			


			$inserir = $pdo->prepare("UPDATE Efetivo_CIPGD_tb set Pelotao='$Destino', SubUnidade='$Destino' WHERE Matricula='$Matricula'");

	//		//echo "testando matricula: $Matricula<br>destino: $Destino<br>Subunidade:$Destino";
			
			/*$inserir->bindValue(":Destino", $Destino);

			$inserir->bindValue(":Destino", $Destino);

			$inserir->bindValue(":Matricula", $Matricula);//tem que passar a matr�cula tamb�m */
			
			$inserir->execute();
			
			if($inserir){
				////echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//					//	(Dados enviados com sucesso...	.)</small></center>";
			}else{
		//		//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
							//			(Erro no banco de dados.)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
						//				(Erro no banco de dados.)</small></center>";
			}
			
	}



	


function PersistirHistoricoDeFichaDisciplinar($pdo, $Codigo, $Matricula, $BG_N, $Data_BG, $Assunto, $Transcricao, $TipoDePunicao, $Comportamento, $Medalha){

////echo "<br>dentro do m�todo hpd. O assunto �: ". $Assunto . "<br>";  

try{

	
			$inserir = $pdo->prepare("INSERT INTO Ficha_Disciplinar_tb(Matricula, BG_N, Data_BG, Assunto, Transcricao, TipoDePunicao, Comportamento, Medalha) VALUES('$Matricula', '$BG_N', '$Data_BG', '$Assunto', '$Transcricao', '$TipoDePunicao', '$Comportamento', '$Medalha')");
/*			$inserir->bindParam(1, $Matricula);
			$inserir->bindParam(2, $Matricula);
			$inserir->bindParam(3, $BG_N);
			$inserir->bindParam(4, $Data_BG);
			$inserir->bindParam(5, $Assunto);
			$inserir->bindParam(6, $Transcricao);
			$inserir->bindParam(7, $TipoDePunicao);
			$inserir->bindParam(8, $Comportamento);
	*/		
			$inserir->execute();

			if(strcmp($Assunto, "MELHORIA DE COMPORTAMENTO")==0){
	//			//echo "comportamento em melhoria de computamento: $Comportamento";
				$inserir = $pdo->prepare("UPDATE Efetivo_CIPGD_tb SET Comportamento='$Comportamento', BGComportamento='$BG_N/$Data_BG' WHERE Matricula LIKE '$Matricula'");
				$inserir->execute();
			}else{
				if(strcmp($Assunto, "NOTA DE PUNICAO")==0){
		//			//echo "comportamento em nota de puni��o: $Comportamento";
					$inserir = $pdo->prepare("UPDATE Efetivo_CIPGD_tb SET Comportamento='$Comportamento', BGComportamento='$BG_N/$Data_BG' WHERE Matricula LIKE '$Matricula'");
					$inserir->execute();
				}
			}
			/*if((strcmp($Assunto, "MELHORIA DE COMPORTAMENTO")==0)||(strcmp($Assunto, "NOTA DE PUNI��O")==0)){//esta condicional mexe no conportamento
				
				//echo "comportamento em nota de puni��o: $Comportamento";
				$inserir = $pdo->prepare("UPDATE Efetivo_CIPGD_tb SET Comportamento='$Comportamento' WHERE Matricula LIKE '$Matricula'");
										  
	 
				$inserir->execute();
			 
			 }*/
			if($inserir){
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados.)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados.)</small></center>";
			}
			
	}
	
	
function PersistirPromocoes($pdo, $Codigo, $Matricula, $Promocao, $QualificacaoPM, $Quadro, $BG_N, $Data_BG, $A_contar){

//echo "<br /> A pomocao �: $Promocao <br />";
try{

	
			$inserir = $pdo->prepare("INSERT INTO Promocoes_militares_tb(Matricula, Promocao, QualificacaoPM, Quadro2, BG_N, Data_BG, A_contar) VALUES('$Matricula', '$Promocao', '$QualificacaoPM', '$Quadro', '$BG_N', '$Data_BG', '$A_contar')");
/*			$inserir->bindParam(1, $Matricula);
			$inserir->bindParam(2, $Matricula);
			$inserir->bindParam(3, $Promocao);
			$inserir->bindParam(4, $QualificacaoPM);
			$inserir->bindParam(5, $Quadro);
			$inserir->bindParam(6, $BG_N);
			$inserir->bindParam(7, $Data_BG);
			$inserir->bindParam(8, $A_contar);
			*/
			
			$inserir->execute();
			
			$inserir = $pdo->prepare("UPDATE Efetivo_CIPGD_tb SET 
PosGrad='$Promocao',
Quadro='$Quadro',
Qualificacao='$QualificacaoPM'
 WHERE Matricula LIKE '$Matricula'");
			
			$inserir->execute();
			
			if($inserir){
	//			//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
		//								(Dados enviados com sucesso...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados.)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados.)</small></center>";
			}
			
	}
	
	


function PersistirCursosExternos($pdo, $Codigo, $Matricula, $Curso, $DataFimDoCurso, $CargaHoraria, $Nota, $Orgao){

		if((strcmp($Curso, "")!=0)||(strcmp($Curso, " ")!=0)||(strcmp($Curso, "  ")!=0)){		

			try{
			
				
						$inserir = $pdo->prepare("INSERT INTO Cursos_Externos_tb(Matricula, Curso, DataFimDoCurso, CargaHoraria, Nota, Orgao) VALUES('$Matricula', '$Curso', '$DataFimDoCurso', '$CargaHoraria', '$Nota', '$Orgao')");
/*						$inserir->bindParam(1, $Matricula);
						$inserir->bindParam(2, $Matricula);
						$inserir->bindParam(3, $Curso);
						$inserir->bindParam(4, $DataFimDoCurso);
						$inserir->bindParam(5, $CargaHoraria);
						$inserir->bindParam(6, $Nota);
						$inserir->bindParam(7, $Orgao);
						*/
						
						$inserir->execute();
						if($inserir){
	//						//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
		//											(Dados enviados com sucesso...	.)</small></center>";
						}else{
							//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
							//						(Erro no banco de dados.)</small></center>";
						}
						}catch (PDOException $ex ){  
						
								//echo "Erro: ".$ex->getMessage(); 
								//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
								//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
								//					(Erro no banco de dados.)</small></center>";
						}
			}
			
	}
	
function PersistirCursosCaserna($pdo, $Codigo, $Matricula, $Curso, $CargaHorariaCaserna, $Nota, $Boletim_n, $Data_Boletim){

		if((strcmp($Curso, "")!=0)||(strcmp($Curso, " ")!=0)||(strcmp($Curso, "  ")!=0)){		

			try{
			
				
				//		//echo "estou no m�todo persistircursoscaserna. Novo curso: " . $Curso;
						$inserir = $pdo->prepare("INSERT INTO Cursos_na_caserna_tb(Matricula, Curso, CargaHoraria, Nota, Boletim_n, Data_Boletim) VALUES('$Matricula', '$Curso', '$CargaHorariaCaserna', '$Nota', '$Boletim_n', '$Data_Boletim')");
						//$inserir->bindParam(1, $Codigo);
						////$inserir->bindParam(2, $Matricula);
						//$inserir->bindParam(3, $Curso);
						//$inserir->bindParam(4, $Nota);
						//$inserir->bindParam(5, $Boletim_n);
						//$inserir->bindParam(6, $Data_Boletim);
						
						$inserir->execute();
						if($inserir){
			//				//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//									(Dados enviados com sucesso...	.)</small></center>";
						}else{
							//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
							//						(Erro no banco de dados.)</small></center>";
						}
						}catch (PDOException $ex ){  
						
								//echo "Erro: ".$ex->getMessage(); 
								//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
								//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
								//					(Erro no banco de dados.)</small></center>";
						}
			}
			
	}
	
function PersistirCursosDeFormacao($pdo, $Codigo, $Matricula, $CursoDeFormacao, $BG_NUM, $DataBG, $Grau, $Especialidade){

		

			try{
			
				
						$inserir = $pdo->prepare("INSERT INTO CursosDeFormacao_tb(Matricula, CursoDeFormacao, BG_NUM, DataBG, Grau, Especialidade) VALUES('$Matricula', '$CursoDeFormacao', '$BG_NUM', '$DataBG', '$Grau', '$Especialidade')");
/*						$inserir->bindParam(1, $Matricula);
						$inserir->bindParam(2, $Matricula);
						$inserir->bindParam(3, $CursoDeFormacao);
						$inserir->bindParam(4, $BG_NUM);
						$inserir->bindParam(5, $DataBG);
						$inserir->bindParam(6, $Grau);
						$inserir->bindParam(7, $Especialidade);
	*/					
						$inserir->execute();
						if($inserir){
				//			//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
					//								(Dados enviados com sucesso...	.)</small></center>";
						}else{
							//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
							//						(Erro no banco de dados.)</small></center>";
						}
						}catch (PDOException $ex ){  
						
								//echo "Erro: ".$ex->getMessage(); 
								//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
								//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
								//					(Erro no banco de dados.)</small></center>";
						}
			
			
	}
	/*function PersistirEmail($pdo, $nome, $email, $telefone, $instituicao, $mensagem){

	//echo "<br/>" . $nome .';';
	//echo "<br/>" . $email .';';
	//echo "<br/>" . $telefone .';';
	//echo "<br/>" . $instituicao .';';
	//echo "<br/>" . $mensagem .';';
		//insert 3
			//fazendo conexão com o banco
	//		$conexao = new ConexaoPDO;
//			$pdo = $conexao->ConexaoComBanco();
			
		//$pdo é a conexão com meu banco de dados que fiz em outo arquivo e o chamo lá em cima
			//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			//$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		
			$inserir = $pdo->prepare("INSERT INTO email (nome, email, telefone, instituicao, mensagem) VALUES(?, ?, ?, ?, ?)");
			$inserir->bindParam(1, $nome);
			$inserir->bindParam(2, $email);
			$inserir->bindParam(3, $telefone);
			$inserir->bindParam(4, $instituicao);
			$inserir->bindParam(5, $mensagem);
		
			$nome = $_POST['txtNome'];
			$email = $_POST['txtMail'];
			$telefone = $_POST['txtTelefone'];
			$instituicao = $_POST['txtQuem'];
			$mensagem = $_POST['txtComentario'];
			
			$inserir->execute();
			
			if($inserir){
			//echo "                                <center><small style=\"margin-left:300px;color:#0000CC\"><br />
										(Dados enviados com sucesso...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
										(Erro no banco de dados.)</small></center>";
			}
			
	}
	*/
	function PersistirNoticia($pdo, $tabela, $titulo, $noticia, $id){

		/*	$FachadaB = new FachadaBuscar;
			//echo 'valor do id antes da buscar para atualizar ' . $id,
			//echo 'valor retornado: ' . $FachadaB->ver_se_existe_id_noticias($pdo, $tabela, $id),
			
			if($FachadaB->ver_se_existe_id_noticias($pdo, $tabela, $id)){
			//echo 'entrou na condição ';
				// new date
					$title = $titulo;
					$not = $noticia;
					$idd = $id;
				// query
				$sql = "UPDATE noticias 
						SET titulo = ?, noticia = ?
						WHERE id= ?" ;
				$q = $pdo->prepare($sql);
				$q->execute(array($title, $not, $idd));

			}else{
			//echo 'ante de persistir ' . $id;
				$inserir = $pdo->prepare("INSERT INTO noticias (titulo, noticia, id) VALUES(?, ?, ?)");
				$inserir->bindParam(1, $nome);
				$inserir->bindParam(2, $noticia);
				$inserir->bindParam(3, $id);
			
				$nome = $_POST['txtTitulo'];
				$noticia = $_POST['txtNoticia'];
				$id = $_POST['selecaoID'];
				
				$inserir->execute();
				
				if($inserir){
				//echo "                                <center><small style=\"margin-left:300px;color:#0000CC\"><br />
											(Persistiu com sucesso...	.)</small></center>";
				}else{
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
											(Erro no banco de dados.)</small></center>";
				}
			}*/
			

	}
	
	
	
	
function PersistirDependentes($pdo, $Cod, $Matricula, $NomeDoDependente, $DataNascimento, $Parentesco, $DataDeCadastro){


//echo "dentro da fun��o denpendetes: " . $NomeDoDependente . "<br>";
try{
	
			$inserir = $pdo->prepare("INSERT INTO dependentes_tb(Matricula, NomeDoDependente, DataNascimento, Parentesco, DataDeCadastro) VALUES('$Matricula', '$NomeDoDependente', '$DataNascimento', '$Parentesco', '$DataDeCadastro')");
/*			$inserir->bindParam(1, $Matricula);
			$inserir->bindParam(2, $Matricula);
			$inserir->bindParam(3, $NomeDoDependente);
			$inserir->bindParam(4, $DataNascimento);
			$inserir->bindParam(5, $Parentesco);
			$inserir->bindParam(6, $DataDeCadastro);
	*/		
			$inserir->execute();
			if($inserir){
             //                    //echo "$NomeDoDependente" . "<br />";
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
			//							(Dados enviados com sucesso...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados.)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados.)</small></center>";
			}
			
	}
	
	
function PersistirInformacoes($pdo, $Cod, $Matricula, $Assunto, $BG_N, $Data_BG, $Transcricao){


try{


		
			$inserir = $pdo->prepare("INSERT INTO OutrasInformacoes_tb(Matricula, Assunto, BG_N, Data_BG, Transcricao) VALUES('$Matricula', '$Assunto', '$BG_N', '$Data_BG', '$Transcricao')");
/*			$inserir->bindParam(1, $Matricula);
			$inserir->bindParam(2, $Matricula);
			$inserir->bindParam(3, $Assunto);
			$inserir->bindParam(4, $BG_N);
			$inserir->bindParam(5, $Data_BG);
			$inserir->bindParam(6, $Transcricao);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			
	}
	
	
function PersistirAfastamento($pdo, $Matricula, $Tipo, $DataIncio, $DataFim, $BG_N, $Data_BG, $OBS, $Situacao, $DataDoAfatamento, $DataDeEntregaNaJPMS, $Dias, $Patologia, $Restricao, $NumeroDaLicencaEspecial, $FeriasReferente){



try{


		
	//		//echo "<br>Tipo: $Tipo<br>";
			$inserir = $pdo->prepare("INSERT INTO Afastamento(Matricula, Tipo, DataIncio, DataFim, BG_N, Data_BG, OBS, Situacao, DataDoAfatamento, DataDeEntregaNaJPMS, Dias, Patologia, Restricao, NumeroDaLicencaEspecial, FeriasReferente) VALUES('$Matricula', '$Tipo', '$DataIncio', '$DataFim', '$BG_N', '$Data_BG', '$OBS', '$Situacao', '$DataDoAfatamento', '$DataDeEntregaNaJPMS', '$Dias', '$Patologia', '$Restricao', '$NumeroDaLicencaEspecial', '$FeriasReferente')");

			/*$inserir->bindParam(1, $Matricula);
			$inserir->bindParam(2, $Tipo);
			$inserir->bindParam(3, $DataIncio);
			$inserir->bindParam(4, $DataFim);
			$inserir->bindParam(5, $BG_N);
			$inserir->bindParam(6, $Data_BG);
			$inserir->bindParam(7, $OBS);
			$inserir->bindParam(8, $Situacao);
			$inserir->bindParam(9, $DataDoAfatamento);
			$inserir->bindParam(10, $DataDeEntregaNaJPMS);
			$inserir->bindParam(11, $Dias);
			$inserir->bindParam(12, $Patologia);
			$inserir->bindParam(13, $Restricao);
			$inserir->bindParam(14, $NumeroDaLicencaEspecial);
			$inserir->bindParam(15, $FeriasReferente);
			*/

			$inserir->execute();
			
			$inserir = $pdo->prepare("UPDATE Efetivo_CIPGD_tb SET Situacao='$Tipo' WHERE Matricula LIKE '$Matricula'");
 
			$inserir->execute();
			
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			
	}
	
function AtualizarAfastamento($pdo, $Matricula, $Tipo, $DataIncio, $DataFim, $BG_N, $OBS){


try{


		
			$inserir = $pdo->prepare("UPDATE Afastamento SET Tipo='".valor."' WHERE Matricula='".valor."'");
			
			$inserir = $pdo->prepare("INSERT INTO Afastamento(Matricula, Tipo, DataIncio, DataFim, BG_N, OBS) VALUES(?, ? ,? ,? ,?, ?)");

			$inserir->bindParam(1, $Matricula);
			$inserir->bindParam(2, $Tipo);
			$inserir->bindParam(3, $DataIncio);
			$inserir->bindParam(4, $DataFim);
			$inserir->bindParam(5, $BG_N);
			$inserir->bindParam(6, $OBS);
			
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			
	}
	

	
function PersistirAlteracoesRecentes($pdo, $login, $matriculaAlterada, $data, $hora, $cod, $senha,  $PosGrad, $Numero, $NomeDeGuerra){


try{


		
			$inserir = $pdo->prepare("INSERT INTO AlteracoesRecentes_tb(login, matriculaAlterada, data, hora, senha,  grad_post, numero, nomedeguerra) VALUES('$login', '$matriculaAlterada', '$data', '$hora', '$senha', '$PosGrad', '$Numero', '$NomeDeGuerra')");

/*			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $matriculaAlterada);
			$inserir->bindParam(3, $data);
			$inserir->bindParam(4, $hora);
			$inserir->bindParam(5, $cod);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados em: AlteracoesRecentes_tb)</small></center>";
			}
			
	}
	
function PersistirContribuicao($pdo, $mat, $contribuicao, $nota, $bg, $databg){


try{


		
			$inserir = $pdo->prepare("INSERT INTO CPTCG(matricula, contribuicao, nota, bg, databg) VALUES('$mat', '$contribuicao', '$nota', '$bg', '$databg')");

/*			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $matriculaAlterada);
			$inserir->bindParam(3, $data);
			$inserir->bindParam(4, $hora);
			$inserir->bindParam(5, $cod);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados em: AlteracoesRecentes_tb)</small></center>";
			}
			
	}
	
function PersistirEscolaridade($pdo, $mat, $curso, $nota, $bg, $databg, $nomecursoaprimoramento){


try{


		
			$inserir = $pdo->prepare("INSERT INTO aprimoramentoacademico(matricula, curso, nota, bg, databg, nomecurso) VALUES('$mat', '$curso', '$nota', '$bg', '$databg', '$nomecursoaprimoramento')");

/*			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $matriculaAlterada);
			$inserir->bindParam(3, $data);
			$inserir->bindParam(4, $hora);
			$inserir->bindParam(5, $cod);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados em: AlteracoesRecentes_tb)</small></center>";
			}
			
	}
	
function PersistirAplicacaoCaserna($pdo, $mat, $curso, $nota, $bg, $databg, $nomecursoaplicacao){


try{


		
		//	//echo "<br /> nome do curso: " . $nomecursoaplicacao;
			
			$inserir = $pdo->prepare("INSERT INTO aplicacaocaserna(matricula, curso, nota, bg, databg, nomecursoaplicacao) VALUES('$mat', '$curso', '$nota', '$bg', '$databg', '$nomecursoaplicacao')");

/*			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $matriculaAlterada);
			$inserir->bindParam(3, $data);
			$inserir->bindParam(4, $hora);
			$inserir->bindParam(5, $cod);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
						//				(Erro no banco de dados em: OutrasInformacoes_tb)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
						//				(Erro no banco de dados em: AlteracoesRecentes_tb)</small></center>";
			}
			
	}
function PersistirTempoInstrutor($pdo, $Matricula, $datainstrutorinicial, $datainstrutorfinal, $bginstrutor, $databginstrutor, $NumeroPortaria, $DataPortaria){


try{


		
			$inserir = $pdo->prepare("INSERT INTO TempoInstrutor(Matricula, datainstrutorinicial, datainstrutorfinal, bginstrutor, databginstrutor, NumeroPortaria, DataPortaria) VALUES('$Matricula', '$datainstrutorinicial', '$datainstrutorfinal', '$bginstrutor', '$databginstrutor', '$NumeroPortaria', '$DataPortaria')");

/*			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $matriculaAlterada);
			$inserir->bindParam(3, $data);
			$inserir->bindParam(4, $hora);
			$inserir->bindParam(5, $cod);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados tabela em: Tempo Instrutor)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados tabela em: Tempo Instrutor)</small></center>";
			}
			
}	
function PersistirTempoMonitor($pdo, $Matricula, $datamonitorinicial, $datamonitorfinal, $bgmonitor, $databgmonitor, $NumeroPortariam, $DataPortariam){


try{


		
			$inserir = $pdo->prepare("INSERT INTO TempoMonitor(Matricula, datamonitorinicial, datamonitorfinal, bgmonitor, databgmonitor, NumeroPortariam, DataPortariam) VALUES('$Matricula', '$datamonitorinicial', '$datamonitorfinal', '$bgmonitor', '$databgmonitor', '$NumeroPortariam', '$DataPortariam')");

/*			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $matriculaAlterada);
			$inserir->bindParam(3, $data);
			$inserir->bindParam(4, $hora);
			$inserir->bindParam(5, $cod);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados tabela em: Tempo Monitor)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados tabela em: Tempo Monitor)</small></center>";
			}
			
}	


function PersistirEscalasDeServico($pdo, $pelotao, $data, $senhadequemanexouaescala){


try{


		
			$inserir = $pdo->prepare("INSERT INTO EscalasDeServico(pelotao, data, senhadequemanexouaescala) VALUES('$pelotao', '$data', '$senhadequemanexouaescala')");

/*			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $matriculaAlterada);
			$inserir->bindParam(3, $data);
			$inserir->bindParam(4, $hora);
			$inserir->bindParam(5, $cod);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados tabela em: Tempo Monitor)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados tabela em: Tempo Monitor)</small></center>";
			}
			
}	

function PersistirDoacaoSangue($pdo, $Matricula, $bgdoacaosangue, $dtbgdoacaosangue){
//	//echo "<br />bg sangue: ". $bgdoacaosangue. "<br />td sangue: " . $dtbgdoacaosangue;
	
try{
			$inserir = $pdo->prepare("INSERT INTO doacaosangue(Matricula, n_bg, td_bg) VALUES('$Matricula', '$bgdoacaosangue', '$dtbgdoacaosangue')");

/*			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $matriculaAlterada);
			$inserir->bindParam(3, $data);
			$inserir->bindParam(4, $hora);
			$inserir->bindParam(5, $cod);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados tabela em: Doa��o de Sangue)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
				//						(Erro no banco de dados tabela em: Doa��o de Sangue)</small></center>";
			}
			
}	

function PersistirAptidao($pdo, $Matricula, $radio, $bg, $n_bg){
//	//echo "<br />bg radio: ". $radio. "<br />td bg: " . $bg;
	
try{
			$inserir = $pdo->prepare("INSERT INTO aptidao(Matricula, aptidao, bg, n_bg) VALUES('$Matricula', '$radio', '$bg', '$n_bg')");

/*			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $matriculaAlterada);
			$inserir->bindParam(3, $data);
			$inserir->bindParam(4, $hora);
			$inserir->bindParam(5, $cod);
	*/		
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados tabela em: Aptid�o)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados tabela em: Aptid�o)</small></center>";
			}
			
}

function PersistirFoto($pdo, $id, $foto){




try{


			$inserir = $pdo->prepare("INSERT INTO upload (id, foto) VALUES(?, ?)");
			$inserir->bindParam(1, $id);
			$inserir->bindParam(2, $foto);

			
			$inserir->execute();
			
			if($inserir){
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados.)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "<big><big><big>Erro: ".$ex->getMessage() . "<big><big><big>"; 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
						//				(Erro no banco de dados.)</small></center>";
			}
	}
	
function PersistirUpdate($pdo, $id, $foto){

	try{


			$inserir = $pdo->prepare("UPDATE upload SET foto = '$foto' WHERE foto = '$foto'");


			
			$inserir->execute();
			
			if($inserir){
	//			//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
		//								(Dados enviados com sucesso...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
							//		(Erro no banco de dados.)</small></center>";
			}
		}catch (PDOException $ex ){  
			
					//echo "<big><big><big>Erro: ".$ex->getMessage() . "<big><big><big>"; 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
							//			(Erro no banco de dados.)</small></center>";
		}
	}
	
function PersistirNewUser($pdo, $mat, $login, $senha, $privilegio){

		try{
		
			$inserir = $pdo->prepare("INSERT INTO login(login, senha, mat, tipo) VALUES(?, ?, ?, ?)");

			$inserir->bindParam(1, $login);
			$inserir->bindParam(2, $senha);
			$inserir->bindParam(3, $mat);
			$inserir->bindParam(4, $privilegio);

			
			$inserir->execute();
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
									//	(Erro no banco de dados em: login)</small></center>";
			}
		}catch (PDOException $ex ){  
			
				//echo "Erro: ".$ex->getMessage(); 
    			//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
					//					(Erro no banco de dados em: login)</small></center>";
		}

			
			
	}
	
function PersistirFichaSgt($pdo, $pontosoperacionais, $pontosadm, $pontosoutrosorgaos, $pontosafastado, $notadoultimocurso, $comportamento, $medalha30, $medalha20, $medalha10, $medalha10, $doacoessangue, $tempomonitor, $tempoinstrutor, $aprimoramentoacademico, $ch30, $ch60, $ch100, $tccgraduacao, $tcespecializacao, $tccmestrado, $tccdoutorado, $livrospublicados, $artigospublicados, $repreensao, $detencao, $prisao, $Mat){


////echo "$pontosoperacionais, $pontosadm, $pontosoutrosorgaos, $pontosafastado, $notadoultimocurso, $comportamento, $medalha30, $medalha20, $medalha10, $medalha10, $doacoessangue, $tempomonitor, $tempoinstrutor, $aprimoramentoacademico, $ch30, $ch60, $ch100, $tccgraduacao, $tcespecializacao, $tccmestrado, $tccdoutorado, $livrospublicados, $artigospublicados, $repreensao, $detencao, $prisao, $Mat";
try{


		
			$inserir = $pdo->prepare("INSERT INTO fichadossargentos(pontosoperacionais, pontosadm, pontosoutrosorgaos, pontosafastado, notadoultimocurso, comportamento, medalha30, medalha20, medalha10, medalhameritoria, doacoessangue, tempomonitor, tempoinstrutor, aprimoramentoacademico, ch30, ch60, ch100, tccgraduacao, tcespecializacao, tccmestrado, tccdoutorado, livrospublicados, artigospublicados, repreensao, detencao, prisao, matricula) VALUES('$pontosoperacionais', '$pontosadm', '$pontosoutrosorgaos', '$pontosafastado', '$notadoultimocurso', '$comportamento', '$medalha30', '$medalha20', '$medalha10', '$medalhameritoria', '$doacoessangue', '$tempomonitor', '$tempoinstrutor', '$aprimoramentoacademico', '$ch30', '$ch60', '$ch100', '$tccgraduacao', '$tcespecializacao', '$tccmestrado', '$tccdoutorado', '$livrospublicados', '$artigospublicados', '$repreensao', '$detencao', '$prisao', '$matricula')");
	
			$inserir->execute();
			
			if($inserir){
                               
			//	//echo "<center><small style=\"margin-left:300px;color:#0000CC\"><br />
				//						(Dados enviados com sucesso para a tb OutrasInformacoes_tb...	.)</small></center>";
			}else{
				//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
									//	(Erro no banco de dados em: persistir ficha sargentos)</small></center>";
			}
			}catch (PDOException $ex ){  
			
					//echo "Erro: ".$ex->getMessage(); 
    				//echo 'Exceção capturada: ',  $ex->getMessage(), "\n";
					//echo "<center><small style=\"margin-left:300px;color:#cc0000\"><br />
								//		(Erro no banco de dados em: persistir ficha sargentos)</small></center>";
			}
			
	}
	
	
}




?>
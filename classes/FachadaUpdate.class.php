	
<?php
//insere classe
include_once 'ConexaoPDO.class.php';
			
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";

	
class FachadaUpdate
{	

	
	function UpdatePolicial($pdo, $PosGrad,$Numero,$Quadro,$Nome,$NomeDeGuerra,$Matricula,$Qualificacao,$Situacao,$Orgao,$LocalTrab,$Funcao_,$Pelotao,$Unidade,$SubUnidade,$DataInclusao,$Comportamento,$CPF,$RGCivil,$OrgaoEmissor,$RGMilitar,$DataExpedicaoRGmilitar,$DataNascimento,$MunicipioOndeNasceu,$UFMunicipioOndeNasceu,$NomeDoPai,$NomeDaMae,$AgenciaBancaria,$ContaCorrente,$NomeDoBanco,$EstadoCivil,$CNH,$Categoria,$Validade,$Escolaridade, $quandidade_escolaridade,$Endereco,$Bairro,$CEP,$PtoReferencia,$Municipio,$UF,$Telefone,$Celular,$DDD,$TelefoneRecado,$Falar_Com,$EMail,$NumTituloEleitor,$ZonaEleitoral,$Secao,$NomeDomicilioEleitoral,$UFDomicilioEleitoral,$TipoSangueFatorRH,$Foto,$OBS,$DataDeCadastro,$PASEP,$Gorro,$Gandola,$Calca,$Coturno,$Boina,$Canicula,$CalcaFina,$Sapato,$Camiseta,$Altura,$Cor,$Olhos,$Boca,$Nariz,$Rosto,$Cabelos,$Barba,$Bigodes,$SinaisParticulares, $Procedencia, $DataDeExclusao, $Reservista_N){
		////echo "<br /><br /><br /><br /><br />quantidade da maior escolaridade: $quandidade_escolaridade<br /><br /><br /><br />";

/*	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "UPDATE Efetivo_CIPGD_tb SET 
Numero='$Numero', 
Nome='$Nome',
NomeDeGuerra='$NomeDeGuerra',
Orgao='$Orgao',
LocalTrab='$LocalTrab',
Funcao_='$Funcao_',
DataInclusao='$DataInclusao',
CPF='$CPF',
RGCivil='$RGCivil',
OrgaoEmissor='$OrgaoEmissor',
RGMilitar='$RGMilitar',
DataExpedicaoRGmilitar='$DataExpedicaoRGmilitar',
DataNascimento='$DataNascimento',
MunicipioOndeNasceu='$MunicipioOndeNasceu',
UFMunicipioOndeNasceu='$UFMunicipioOndeNasceu',
NomeDoPai='$NomeDoPai',
NomeDaMae='$NomeDaMae',
AgenciaBancaria='$AgenciaBancaria',
ContaCorrente='$ContaCorrente',
NomeDoBanco='$NomeDoBanco',
EstadoCivil='$EstadoCivil',
CNH='$CNH',
Categoria='$Categoria',
Validade='$Validade',
Escolaridade='$Escolaridade',
Endereco='$Endereco',
Bairro='$Bairro',
CEP='$CEP',
PtoReferencia='$PtoReferencia',
Municipio='$Municipio',
UF='$UF',
Telefone='$Telefone',
Celular='$Celular',
DDD='$DDD',
TelefoneRecado='$TelefoneRecado',
Falar_Com='$Falar_Com',
EMail='$EMail',
NumTituloEleitor='$NumTituloEleitor',
ZonaEleitoral='$ZonaEleitoral',
Secao='$Secao',
NomeDomicilioEleitoral='$NomeDomicilioEleitoral',
UFDomicilioEleitoral='$UFDomicilioEleitoral',
TipoSangueFatorRH='$TipoSangueFatorRH',
Foto='$Foto',
OBS='$OBS',
DataDeCadastro='$DataDeCadastro',
PASEP='$PASEP',
Gorro='$Gorro',
Gandola='$Gandola',
Calca='$Calca',
Coturno='$Coturno',
Boina='$Boina',
Canicula='$Canicula',
CalcaFina='$CalcaFina',
Sapato='$Sapato',
Camiseta='$Camiseta',
Altura='$Altura',
Cor='$Cor',
Olhos='$Olhos',
Boca='$Boca',
Nariz='$Nariz',
Rosto='$Rosto',
Cabelos='$Cabelos',
Barba='$Barba',
Bigodes='$Bigodes',
SinaisParticulares='$SinaisParticulares', 
Procedencia='$Procedencia', 
DataDeExclusao='$DataDeExclusao',
Reservista_N='$Reservista_N'
 WHERE Matricula LIKE '$Matricula'";
	
	if ($conn->query($sql) === TRUE) {
		//echo "Record updated successfully";
	} else {
		//echo "Error updating record: " . $conn->error;
	}
	
	$conn->close();
*/
try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE Efetivo_CIPGD_tb SET 
Numero='$Numero', 
Nome='$Nome',
NomeDeGuerra='$NomeDeGuerra',
Orgao='$Orgao',
LocalTrab='$LocalTrab',
Funcao_='$Funcao_',
DataInclusao='$DataInclusao',
CPF='$CPF',
RGCivil='$RGCivil',
OrgaoEmissor='$OrgaoEmissor',
RGMilitar='$RGMilitar',
DataExpedicaoRGmilitar='$DataExpedicaoRGmilitar',
DataNascimento='$DataNascimento',
MunicipioOndeNasceu='$MunicipioOndeNasceu',
UFMunicipioOndeNasceu='$UFMunicipioOndeNasceu',
NomeDoPai='$NomeDoPai',
NomeDaMae='$NomeDaMae',
AgenciaBancaria='$AgenciaBancaria',
ContaCorrente='$ContaCorrente',
NomeDoBanco='$NomeDoBanco',
EstadoCivil='$EstadoCivil',
CNH='$CNH',
Categoria='$Categoria',
Validade='$Validade',
Escolaridade='$Escolaridade',
Qtd_maior_escolaridade='$quandidade_escolaridade',
Endereco='$Endereco',
Bairro='$Bairro',
CEP='$CEP',
PtoReferencia='$PtoReferencia',
Municipio='$Municipio',
UF='$UF',
Telefone='$Telefone',
Celular='$Celular',
DDD='$DDD',
TelefoneRecado='$TelefoneRecado',
Falar_Com='$Falar_Com',
EMail='$EMail',
NumTituloEleitor='$NumTituloEleitor',
ZonaEleitoral='$ZonaEleitoral',
Secao='$Secao',
NomeDomicilioEleitoral='$NomeDomicilioEleitoral',
UFDomicilioEleitoral='$UFDomicilioEleitoral',
TipoSangueFatorRH='$TipoSangueFatorRH',
Foto='$Foto',
OBS='$OBS',
DataDeCadastro='$DataDeCadastro',
PASEP='$PASEP',
Gorro='$Gorro',
Gandola='$Gandola',
Calca='$Calca',
Coturno='$Coturno',
Boina='$Boina',
Canicula='$Canicula',
CalcaFina='$CalcaFina',
Sapato='$Sapato',
Camiseta='$Camiseta',
Altura='$Altura',
Cor='$Cor',
Olhos='$Olhos',
Boca='$Boca',
Nariz='$Nariz',
Rosto='$Rosto',
Cabelos='$Cabelos',
Barba='$Barba',
Bigodes='$Bigodes',
SinaisParticulares='$SinaisParticulares', 
Procedencia='$Procedencia', 
DataDeExclusao='$DataDeExclusao',
Reservista_N='$Reservista_N'
 WHERE Matricula LIKE '$Matricula'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // //echo a message to say the UPDATE succeeded
   // //echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    //echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
	}

function UpdateDependentes($pdo, $Cod, $Matricula, $NomeDoDependente, $DataNascimento, $Parentesco, $DataDeCadastro){


//	//echo "dentro da UpdateDependentes-> Cod -----: " . $Cod . "<BR>";

	
	try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE dependentes_tb set 
NomeDoDependente='$NomeDoDependente', 
DataNascimento='$DataNascimento', 
Parentesco='$Parentesco', 
DataDeCadastro='$DataDeCadastro' WHERE Cod = $Cod";


	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
		////echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;



	}
	
	
function UpdateSenha($pdo, $login, $senha, $mat, $tipo){


//	//echo "dentro da login-> amtricuoua login -----: " . $amt. "<BR>";

	
	try {
	
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE login set senha='$senha' WHERE mat like '$mat'";


	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;



	}
	
function UpdateCursosCaserna($pdo, $Codigo, $Matricula, $Curso, $CargaHorariaCaserna, $Nota, $Boletim_n, $Data_Boletim){



//	//echo "Cod -----: " . $Cod . "<BR>";

	
	try {
	
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE Cursos_na_caserna_tb set 
Curso='$Curso',
CargaHoraria='$CargaHorariaCaserna',
Nota='$Nota', 
Boletim_n='$Boletim_n', 
Data_Boletim='$Data_Boletim'
 WHERE Cod LIKE '$Codigo'";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;


}

function UpdateCursosExternos($pdo, $Codigo, $Matricula, $Curso, $DataFimDoCurso, $CargaHoraria, $Nota, $Orgao){

	try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE Cursos_Externos_tb set 
Curso='$Curso',
DataFimDoCurso='$DataFimDoCurso', 
CargaHoraria='$CargaHoraria', 
Nota='$Nota', 
Orgao='$Orgao' 
 WHERE Cod LIKE '$Codigo'";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
//		//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;

}
function PersistirCursosDeFormacao($pdo, $Codigo, $Matricula, $CursoDeFormacao, $BG_NUM, $DataBG, $Grau, $Especialidade){

	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";


//	//echo "curso Formação-----: " . $Curso . "<BR>";

	
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE CursosDeFormacao_tb set 
Matricula='$Matricula', 
CursoDeFormacao='$CursoDeFormacao', 
BG_NUM 	='$BG_NUM', 
DataBG='$DataBG',
Grau='$Grau',
Especialidade='$Especialidade'
 WHERE Cod LIKE '$Codigo'";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;
	}
	
	function UpdatePromocoes($pdo, $Codigo, $Matricula, $Promocao, $QualificacaoPM, $Quadro2, $BG_N, $Data_BG, $A_contar){
		
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";

//	//echo "<br><br>Dentro do método update promoções: <br><br><ul><li>Codigo: $Codigo;</li><br><li>Matricula: $Matricula;</li><br><li>Promocao: $Promocao;</li><br><li><big><big><big><big>Quadro: $Quadro2; </big></big></big></big></li><br><li>BG_N: $BG_N;</li><li>A_contar: $A_contar;</li></ul>";
	
	
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE Promocoes_militares_tb set 
Matricula='$Matricula',
Promocao='$Promocao', 
QualificacaoPM='$QualificacaoPM', 
Quadro2='$Quadro2', 
BG_N='$BG_N',
Data_BG='$Data_BG',
A_contar='$A_contar' 
 WHERE Cod LIKE '$Codigo'";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";

		
    $sql = "UPDATE Efetivo_CIPGD_tb SET 
PosGrad='$Promocao',
Quadro='$Quadro2',
Qualificacao='$QualificacaoPM'
 WHERE Matricula LIKE '$Matricula'";
 
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
//		//echo $stmt->rowCount() . " records UPDATED successfully";
 
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;		
	}


	function PersistirInformacoes($pdo, $Codigo, $Matricula, $Assunto, $BG_N, $Data_BG, $Transcricao){

	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
	//	//echo "Info -----: " . $Assunto. "<BR>";
	
		
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			$sql = "UPDATE OutrasInformacoes_tb set 
	Matricula='$Matricula', 
	Assunto='$Assunto', 
	BG_N='$BG_N', 
	Data_BG='$Data_BG',
	Transcricao='$Transcricao'
	 WHERE Cod LIKE '$Codigo'";
		
			// Prepare statement
			$stmt = $conn->prepare($sql);
		
			// execute the query
			$stmt->execute();
		
			// //echo a message to say the UPDATE succeeded
//			//echo $stmt->rowCount() . " records UPDATED successfully";
			}
		catch(PDOException $e)
			{
			//echo $sql . "<br>" . $e->getMessage();
			}
		
		$conn = null;		
			
	}
	
function UpdateHistoricoDeFichaDisciplinar($pdo, $Codigo, $Matricula, $BG_N, $Data_BG, $Assunto, $Transcricao, $TipoDePunicao, $Comportamento, $Medalha){

	//	//echo "<br /> Matrícula: " . $Matricula;
	//	//echo "<br /> BG: " . $BG_N;
//		//echo "<br /> Data_BG: " . $Data_BG;
//		//echo "<br /> Assunto: " . $Assunto;//
//		//echo "<br /> Transcricao: " . $Transcricao;
//		//echo "<br /> TipoDePunicao: " . $TipoDePunicao;
	//	//echo "<br /> Comportamento: " . $Comportamento;
	//	//echo "<br /> Medalha: " . $Medalha;

		

	

	
		
		try {
				
			$servername = "mysql.hostinger.com.br";
			$username = "u901689881_cipgd";
			$password = "jo@_316";
			$dbname = "u901689881_cipgd";
	
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if((strcmp($Assunto, "MELHORIA DE COMPORTAMENTO")==0)||(strcmp($Assunto, "NOTA DE PUNICAO")==0)){//esta condicional mexe no conportamento

				$sql = "UPDATE Ficha_Disciplinar_tb set 
		Matricula='$Matricula', 
		BG_N='$BG_N', 
		Data_BG='$Data_BG', 
		Assunto='$Assunto',
		Transcricao='$Transcricao',
		TipoDePunicao='$TipoDePunicao',
		Comportamento='$Comportamento',
		Medalha='$Medalha'
		 WHERE Cod LIKE '$Codigo'";
			
				// Prepare statement
				$stmt = $conn->prepare($sql);
			
				// execute the query
				$stmt->execute();
			
				// //echo a message to say the UPDATE succeeded
//				//echo $stmt->rowCount() . " records UPDATED successfully";
				
				$sql = "UPDATE Efetivo_CIPGD_tb SET Comportamento='$Comportamento' WHERE Matricula LIKE '$Matricula'";
					
				// Prepare statement
				$stmt = $conn->prepare($sql);
					
				// execute the query
				$stmt->execute();
					
				// //echo a message to say the UPDATE succeeded
	//			//echo $stmt->rowCount() . " records UPDATED successfully";
			}else{
				$sql = "UPDATE Ficha_Disciplinar_tb set 
		Matricula='$Matricula', 
		BG_N='$BG_N', 
		Data_BG='$Data_BG', 
		Assunto='$Assunto',
		Transcricao='$Transcricao',
		Medalha='$Medalha'	
		 WHERE Cod LIKE '$Codigo'";
			
				// Prepare statement
				$stmt = $conn->prepare($sql);
			
				// execute the query
				$stmt->execute();
			
				// //echo a message to say the UPDATE succeeded
	//			//echo $stmt->rowCount() . " records UPDATED successfully";
				
				//aqui não estou atualizando o campo comportamento da tabela efetivo porque o assunto não mexe no comportamento
			}

			

			
			
			}
		catch(PDOException $e)
			{
			//echo $sql . "<br>" . $e->getMessage();
			}
		
		$conn = null;		
			
	}
	
	function UpdateMovimentacao($pdo, $Codigo, $Matricula, $Movimentacao, $OPMDestino, $BG_BI_N, $Data_BG_BI){

	//	//echo "Info -----: " . $Assunto. "<BR>";
	
					
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	//	//echo "Codigo: $Codigo<br> Matricula: $Matricula<br>Movimentacao: $Movimentacao<br>";
			$sql = "UPDATE Movimentacao_tb set 
	Matricula='$Matricula', 
	Movimentacao='$Movimentacao', 
	OPMDestino='$OPMDestino', 
	BG_BI_N='$BG_BI_N',
	Data_BG_BI='$Data_BG_BI'
	 WHERE Cod LIKE '$Codigo'";
		
			// Prepare statement
			$stmt = $conn->prepare($sql);
		
			// execute the query
			$stmt->execute();
		
			// //echo a message to say the UPDATE succeeded
	//		//echo $stmt->rowCount() . " records UPDATED successfully";
			
    $sql = "UPDATE Efetivo_CIPGD_tb SET 
Unidade='$OPMDestino'
 WHERE Matricula LIKE '$Matricula'";
 
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
 
			}
		catch(PDOException $e)
			{
			//echo $sql . "<br>" . $e->getMessage();
			}
		
		$conn = null;		
			
	}
	
	function UpdateMovimentacaoInterna($pdo, $Codigo, $Matricula, $Movimentacao, $Destino, $BI, $Data_BI){

	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";

			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				// set the PDO error mode to exception
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			//	//echo "matrícula: $Matricula<br>";
//				//echo "Movimentacao: $Movimentacao<br>";
	//			//echo "Destino: $Destino<br>";
		//		//echo "BI: $BI<br>";
			//	//echo "Data_BI: $Data_BI<br>";
				////echo "Codigo: $Codigo<br>";				
							
				$sql = "UPDATE Movimentacao_interna_tb set 
		Matricula='$Matricula', 
		Movimentacao='$Movimentacao', 
		Destino='$Destino', 
		BI='$BI',
		Data_BI='$Data_BI'
		 WHERE Cod LIKE '$Codigo'";
			
				// Prepare statement
				$stmt = $conn->prepare($sql);
			
				// execute the query
				$stmt->execute();
			
				// //echo a message to say the UPDATE succeeded
//				//echo $stmt->rowCount() . " records UPDATED successfully";
				
    $sql = "UPDATE Efetivo_CIPGD_tb SET 
Pelotao='$Destino', 
SubUnidade='$Destino'
 WHERE Matricula LIKE '$Matricula'";
 
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
				}
			catch(PDOException $e)
				{
				//echo $sql . "<br>" . $e->getMessage();
				}
			
			$conn = null;		
		
	}
	
	function UpdateAfastamento($pdo, $Codigo, $Matricula, $Tipo, $DataIncio, $DataFim, $BG_N, $Data_BG, $OBS, $Situacao, $DataDoAfatamento, $DataDeEntregaNaJPMS, $Dias, $Patologia, $Restricao, $NumeroDaLicencaEspecial, $FeriasReferente){

			
			//	//echo "<br /><br />CODIGO: $Codigo, $Matricula, $Tipo, $DataIncio, $DataFim, $BG_N, $Data_BG, $OBS, $Situacao, $DataDoAfatamento, $DataDeEntregaNaJPMS, $Dias, $Patologia, $Restricao, $NumeroDaLicencaEspecial, $FeriasReferente<br /><br />";
			
				
				try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
				
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// set the PDO error mode to exception
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
			
								
					$sql = "UPDATE Afastamento set 
			Matricula='$Matricula', 
			Tipo='$Tipo',
			DataIncio='$DataIncio',
			DataFim='$DataFim',
			BG_N='$BG_N',
			Data_BG='$Data_BG',
			OBS='$OBS',
			Situacao='$Situacao',
			DataDoAfatamento='$DataDoAfatamento',
			DataDeEntregaNaJPMS='$DataDeEntregaNaJPMS',
			Dias='$Dias',
			Patologia='$Patologia',
			Restricao='$Restricao',
			NumeroDaLicencaEspecial='$NumeroDaLicencaEspecial',
			FeriasReferente='$FeriasReferente' WHERE Cod LIKE '$Codigo'";
				
					// Prepare statement
					$stmt = $conn->prepare($sql);
				
					// execute the query
					$stmt->execute();
				
					// //echo a message to say the UPDATE succeeded
//					//echo $stmt->rowCount() . " records UPDATED successfully";
					}
				catch(PDOException $e)
					{
					//echo $sql . "<br>" . $e->getMessage();
					}
				
				$conn = null;
	}
	
function UpdateContribuicao($pdo, $Codigo, $Matricula, $contribuicao, $nota, $bg, $databg){

		
			


//	//echo "<BR>codigo: $Codigo<BR>matricula: $Matricula<BR>contribuição: $contribuicao<BR>nota: $nota<BR>bg: $bg<BR>databg: $databg><BR> ";

	
	try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE CPTCG set 
matricula='$Matricula', 
contribuicao='$contribuicao', 
nota ='$nota', 
bg='$bg',
databg='$databg' WHERE cod = $Codigo";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
//		//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;		
			
	}
	
function updateaprimoramentoacademico($pdo, $Codigo, $Matricula, $curso, $nota, $bg, $databg, $nomecursoaprimoramento){


	try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE aprimoramentoacademico set 
matricula='$Matricula', 
curso='$curso', 
nota ='$nota', 
bg='$bg',
databg='$databg',
nomecurso='$nomecursoaprimoramento' 
WHERE cod = $Codigo";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;		
			
	}
function updateaplicacaocaserna($pdo, $Codigo, $Matricula, $curso, $nota, $bg, $databg, $nomecursoaplicacao){


	////echo "<BR>codigo aplicação à caserna: $Codigo<BR>matricula: $Matricula<BR>contribuição: $contribuicao<BR>nota: $nota<BR>bg: $bg<BR>databg: $databg><BR> ";

	
	try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE aplicacaocaserna set 
matricula='$Matricula', 
curso='$curso', 
nota ='$nota', 
bg='$bg',
databg='$databg',
nomecursoaplicacao = '$nomecursoaplicacao' WHERE cod = $Codigo";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;		
			
	}
	
function UpdateTempoInstrutor($pdo, $Codigo, $Matricula, $datainstrutorinicial, $datainstrutorfinal, $bginstrutor, $databginstrutor, $NumeroPortaria, $DataPortaria){



	////echo "<BR>Instrutor: $Codigo<BR>matricula: $Matricula<BR>datainstrutorinicial: $datainstrutorinicial<BR>datainstrutorfinal: $datainstrutorfinal<BR>bginstrutor: $bginstrutor<BR>databginstrutor: $databginstrutor><BR> ";

	
	try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE TempoInstrutor set 
Matricula='$Matricula', 
datainstrutorinicial='$datainstrutorinicial', 
datainstrutorfinal ='$datainstrutorfinal', 
bginstrutor='$bginstrutor',
NumeroPortaria ='$NumeroPortaria', 
DataPortaria='$DataPortaria',
databginstrutor='$databginstrutor' WHERE cod = $Codigo";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;		
			
	}
function UpdateTempoMonitor($pdo, $Codigo, $Matricula, $datamonitorinicial, $datamonitorfinal, $bgmonitor, $databgmonitor, $NumeroPortariam, $DataPortariam){


echo "<BR>monitor: $Codigo<BR>matricula: $Matricula<BR>datamonitorinicial: $datamonitorinicial<BR>datamonitorfinal: $datamonitorfinal<BR>bgmonitor: $bgmonitor<BR>databgmonitor: $databgmonitor><BR> ";

	
	try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE TempoMonitor set 
Matricula='$Matricula', 
datamonitorinicial='$datamonitorinicial', 
datamonitorfinal ='$datamonitorfinal', 
bgmonitor='$bgmonitor',
NumeroPortariam ='$NumeroPortariam', 
DataPortariam='$DataPortariam',
databgmonitor='$databgmonitor' WHERE cod = $Codigo";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;		
			
	}
	
function UpdateDoacaoSangue($pdo, $Codigo, $Matricula, $bgdoacaosanghe, $dtbgdoacaosangue){


	try {
	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE doacaosangue set 
Matricula='$Matricula', 
n_bg='$bgdoacaosanghe', 
td_bg ='$dtbgdoacaosangue'
WHERE cod = $Codigo";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;		
			
	}
	
function UpdateAptidao($pdo, $Codigo, $Matricula, $radio, $bgaptidaofisica, $tdbgaptidaofisica){

//		//echo "Código: " . $Codigo . "<br />Matrícula: " . $Matricula . "<br />Select: " . $radio . "<br />bg: " . $bgaptidaofisica . "<br />td bg: " . $tdbgaptidaofisica;

	try {

	$servername = "mysql.hostinger.com.br";
	$username = "u901689881_cipgd";
	$password = "jo@_316";
	$dbname = "u901689881_cipgd";
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "UPDATE aptidao set Matricula='$Matricula', aptidao ='$radio', bg='$bgaptidaofisica', n_bg='$tdbgaptidaofisica' WHERE cod = $Codigo";
	
		// Prepare statement
		$stmt = $conn->prepare($sql);
	
		// execute the query
		$stmt->execute();
	
		// //echo a message to say the UPDATE succeeded
	//	//echo $stmt->rowCount() . " records UPDATED successfully";
		}
	catch(PDOException $e)
		{
		//echo $sql . "<br>" . $e->getMessage();
		}
	
	$conn = null;		
			
	}
}
?>